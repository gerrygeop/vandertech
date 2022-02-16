<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;
use App\Models\Partner;
use App\Models\Pelatihan;

use App\Http\Requests\AffiliationRequest;
use Illuminate\Http\Request;

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

    public function tableTraining(Affiliation $affiliation)
    {
        $pelatihan = Pelatihan::where('id_affiliation', $affiliation->id)->with('partner')->get();
        return view('dapur.training.index', compact('pelatihan', 'affiliation'));
    }

    public function createtraining(Affiliation $affiliation)
    {
        $partners = Partner::all();
        $pelatihan = new Pelatihan;
        return view('dapur.training.create', compact('affiliation', 'partners', 'pelatihan'));
    }

    public function editTraining(Affiliation $affiliation, Pelatihan $pelatihan)
    {
        $partners = Partner::all();
        return view('dapur.training.edit', compact('affiliation', 'partners', 'pelatihan'));
    }

    public function storeTraining(Request $request, Affiliation $affiliation)
    {
        $request->validate([
            'id_partner' => 'required',
            'tahun' => 'required',
            'layanan_jasa' => 'required',
        ]);

        Pelatihan::create([
            'id_partner' => $request->id_partner,
            'tahun' => $request->tahun,
            'layanan_jasa' => $request->layanan_jasa,
            'id_affiliation' => $affiliation->id,
        ]);

        return redirect()->route('d.affiliation.training.index', $affiliation)->with('success', 'Berhasil Menambahkan Pelatihan yang telah dilaksanakan');
    }

    public function updateTraining(Request $request, Affiliation $affiliation, Pelatihan $pelatihan)
    {
        $request->validate([
            'id_partner' => 'required',
            'tahun' => 'required',
            'layanan_jasa' => 'required',
        ]);

        $pelatihan->update([
            'id_partner' => $request->id_partner,
            'tahun' => $request->tahun,
            'layanan_jasa' => $request->layanan_jasa,
        ]);

        return redirect()->route('d.affiliation.training.index', $affiliation)->with('success', 'Berhasil Mengupdate Pelatihan yang telah dilaksanakan');
    }

    public function destroyTraining(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return back()->with('success', 'Berhasil Menghapus Pelatihan yang telah dilaksanakan');
    }
}
