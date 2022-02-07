<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;
use Illuminate\Http\Request;
use App\Http\Requests\AffiliationRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AffiliationController extends Controller
{
    public function index()
    {
        $affiliations = Affiliation::all();
        return view('dapur.afiliasi.index', compact('affiliations'));
    }

    public function show(Affiliation $affiliation)
    {
        $affiliation->load('photos');
        return view('dapur.afiliasi.show', compact('affiliation'));
    }

    public function create()
    {
        $affiliation = new Affiliation;
        return view('dapur.afiliasi.create', compact('affiliation'));
    }

    public function store(AffiliationRequest $request)
    {
        $request->validate([
            'logo_path' => 'required',
        ]);
        $validator = $request->validated();

        if ($request->hasFile('logo_path')) {
            $logo = $request->logo_path;
            $logo_name = Str::random(10).time().'.'.$logo->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('logo-afiliasi', $logo_name);
            $validator['logo_path'] = $logo_name;
        }

        $validator['slug'] = Str::slug($validator['name']);
        Affiliation::create($validator);

        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil menambahkan perusahaan afiliasi');
    }

    public function edit(Affiliation $affiliation)
    {
        return view('dapur.afiliasi.edit', compact('affiliation'));
    }

    public function update(AffiliationRequest $request, Affiliation $affiliation)
    {
        $validator = $request->validated();
        
        if ($request->hasFile('logo_path')) {
            if (Storage::exists('logo-afiliasi/'.$affiliation->logo_path)) {
                Storage::delete('logo-afiliasi/'.$affiliation->logo_path);
            }

            $logo_name = Str::random(10).time().'.'.$request->logo_path->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('logo-afiliasi', $logo_name);

            $validator['logo_path'] = $logo_name;
        }

        if (!$request->hidden == 1) {
            $validator['hidden'] = 0;
        }

        $validator['slug'] = Str::slug($validator['name']);

        $affiliation->update($validator);

        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil mengubah perusahaan afiliasi');
    }

    public function destroy(Affiliation $affiliation)
    {
        $affiliation->photos()->each(function($photo) {
            if (Storage::exists('photo-slideshow/'.$photo->path)) {
                Storage::delete('photo-slideshow/', $photo->path);
            }
            $photo->delete();
        });

        if (Storage::exists('logo-afiliasi/'.$affiliation->logo_path)) {
            Storage::delete('logo-afiliasi/'.$affiliation->logo_path);
        }

        $affiliation->delete();
        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil menghapus perusahaan afiliasi');
    }
}
