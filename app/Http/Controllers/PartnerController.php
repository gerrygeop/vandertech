<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Partner;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('dapur.partners.index', compact('partners'));
    }

    public function show(Partner $partner)
    {
        return view('dapur.partners.show', compact('partner'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dapur.partners.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'logo_path' => 'required|image|mimes:jpg,jpeg,png',
            'categories' => 'exists:categories,id'
        ]);

        if ($request->hasFile('logo_path')) {
            $logo = $request->logo_path;
            $logo_name = Str::random(10).time().'.'.$logo->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('logo-mitra', $logo_name);
            $validate['logo_path'] = $logo_name;
        }

        $partner = Partner::create([
            'name' => $validate['name'],
            'logo_path' => $validate['logo_path'],
        ]);

        $partner->syncCategories($request->except(['_token', 'name', 'logo_path']));
        return redirect()->route('d.partner.index')->with('success', 'Berhasil menambah mitra');
    }

    public function edit(Partner $partner)
    {
        $partner->load('categories');
        $categories = Category::all();

        return view('dapur.partners.edit', compact('partner', 'categories'));
    }

    public function update(Request $request, Partner $partner)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'logo_path' => 'image|mimes:jpg,jpeg,png',
            'categories' => 'exists:categories,id',
        ]);

        if ($request->hasFile('logo_path')) {
            if (Storage::exists('logo-mitra/'.$partner->logo_path)) {
                Storage::delete('logo-mitra/'.$partner->logo_path);
            }

            $logo_name = Str::random(10).time().'.'.$request->logo_path->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('logo-mitra', $logo_name);

            $partner->update([
                'logo_path' => $logo_name,
            ]);
        }

        $partner->update([
            'name' => $validate['name'],
        ]);

        $partner->syncCategories($request->except(['_token', '_method', 'name', 'logo_path']));
        return redirect()->route('d.partner.index')->with('success', 'Berhasil mengubah mitra');
    }

    public function destroy(Partner $partner)
    {
        if (Storage::exists('logo-mitra/'.$partner->logo_path)) {
            Storage::delete('logo-mitra/'.$partner->logo_path);
        }

        $partner->delete();
        return redirect()->route('d.partner.index')->with('success', 'Berhasil menghapus mitra');
    }
}
