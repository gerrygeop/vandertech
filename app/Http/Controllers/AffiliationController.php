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
        $affiliations = Affiliation::latest()
            ->with('images')
            ->get();

        return view('dapur.afiliasi.index', compact('affiliations'));
    }

    public function show(Affiliation $affiliation)
    {
        $affiliation->load('images');
        return view('dapur.afiliasi.show', compact('affiliation'));
    }

    public function create()
    {
        return view('dapur.afiliasi.create');
    }

    public function store(AffiliationRequest $request)
    {
        $validator = $request->validated();

        if ($request->hasFile('logo_path')) {
            $logo = $request->logo_path;
            $logo_name = Str::random(10).time().'.'.$logo->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('public/logo-afiliasi', $logo_name);
            $validator['logo_path'] = $logo_name;
        }

        Affiliation::create($validator);

        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil menambahkan perusahaan afiliasi');
    }

    public function edit(Affiliation $affiliation)
    {
        return view('dapur.afiliasi.edit', compact('affiliation'));
    }

    public function update(AffiliationRequest $request, Affiliation $affiliation)
    {
        if (!$request->hasFile('logo_path')) {
            $request['logo_path'] = $affiliation['logo_path'];
        }

        $validator = $request->validated();

        if ($request->hasFile('logo_path')) {
            $old_logo = $affiliation->logo_path;

            if (Storage::disk('public')->exists('logo-afiliasi/'.$old_logo)) {
                Storage::disk('public')->delete('logo-afiliasi/'.$old_logo);
            }

            $new_logo = $request->logo_path;
            $logo_name = Str::random(10).time().'.'.$new_logo->getClientOriginalExtension();
            $request->file('logo_path')->storeAs('public/logo-afiliasi', $logo_name);

            $validator['logo_path'] = $logo_name;
        }

        DB::transaction(function() use ($affiliation, $validator) {
            $affiliation->update($validator);
        });

        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil mengubah perusahaan afiliasi');
    }

    public function destroy(Affiliation $affiliation)
    {
        $affiliation->delete();
        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil menghapus perusahaan afiliasi');
    }
}
