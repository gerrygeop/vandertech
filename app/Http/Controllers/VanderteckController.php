<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vanderteck;
use App\Models\Photo;
use App\Models\Slide;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VanderteckController extends Controller
{
    protected function getVanderteckData()
    {
        $vanderteck = Vanderteck::first();
        if (is_null($vanderteck)) {
            $vanderteck = new Vanderteck;
        }
        return $vanderteck;
    }

    public function dashboard()
    {
        $vanderteck = $this->getVanderteckData();
        $slides = Slide::all();
        return view('dashboard', compact('vanderteck', 'slides'));
    }

    public function editProfile()
    {
        $vanderteck = $this->getVanderteckData();
        return view('dapur.dashboard.edit-profil', compact('vanderteck'));
    }

    protected function storeAsImageBagan($request)
    {
        $image_name = Str::random(10).time().'.'.$request->image_path->getClientOriginalExtension();
        $request->file('image_path')->storeAs('image-vanderteck', $image_name);
        return $image_name;
    }

    public function updateProfile(Request $request)
    {
        $validate = $request->validate([
            'about' => 'required',
            'image_path' => 'image|mimes:jpg,jpeg,png',
        ]);

        $vanderteck = Vanderteck::first();

        if (is_null($vanderteck)) {
            if ($request->hasFile('image_path')) {
                $validate['image_path'] = $this->storeAsImageBagan($request);
            }

            Vanderteck::create([
                'about' => $validate['about'],
                'image_path' => $validate['image_path']
            ]);

        } else {
            if ($request->hasFile('image_path')) {
                if (Storage::exists('image-vanderteck/'.$affiliation->logo_path)) {
                    Storage::delete('image-vanderteck/'.$affiliation->logo_path);
                }
    
                $validate['image_path'] = $this->storeAsImageBagan($request);
            }

            $vanderteck->update($validate);
        }

        return redirect()->route('d.dashboard.main')->with('success', 'Berhasil mengubah profile Vanderteck');
    }

    public function editVisiMisi()
    {
        $vanderteck = $this->getVanderteckData();
        return view('dapur.dashboard.edit-visi-misi', compact('vanderteck'));
    }
    
    public function updateVisiMisi(Request $request, Vanderteck $vanderteck)
    {
        $validate = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $vanderteck = Vanderteck::first();

        if (is_null($vanderteck)) {
            Vanderteck::create([
                'visi' => $validate['visi'],
                'misi' => $validate['misi']
            ]);

        } else {
            $vanderteck->update($validate);
        }

        return redirect()->route('d.dashboard.main')->with('success', 'Berhasil mengubah visi misi Vanderteck');
    }

    public function uploadFotoSlide(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'image|max:5000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $name = Str::random(10).time().'.'.$photo->getClientOriginalExtension();
                $photo->storeAs('photo-slideshow', $name);

                Slide::create([
                    'path' => $name,
                ]);
            }
        }

        return back()->with('success', 'Berhasil menambahkan foto');
    }

    public function destroyFotoSlide(Slide $slide)
    {
        if (Storage::exists('photo-slideshow/'.$slide->path)) {
            Storage::delete('photo-slideshow/'.$slide->path);
        }

        $slide->delete();
        return back()->with('success', 'Berhasil menghapus foto');
    }
}
