<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Affiliation;
use App\Models\Photo;

class AffiliationPhotoController extends Controller
{
    public function create(Affiliation $affiliation)
    {
        $affiliation->load('photos');
        return view('dapur.photos.create', compact('affiliation'));
    }

    public function store(Request $request, Affiliation $affiliation)
    {
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'image|max:5000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $name = Str::random(10).time().'.'.$photo->getClientOriginalExtension();
                $photo->storeAs('photo-afiliasi', $name);

                $affiliation->photos()->create([
                    'path' => $name,
                    'affiliation_id' => $affiliation->id,
                ]);
            }
        }

        return back()->with('success', 'Berhasil menambahkan foto');
    }

    public function destroy(Affiliation $affiliation, Photo $photo)
    {
        throw_if ($photo->affiliation_id != $affiliation->id,
            ValidationException::withMessages(['photo' => 'Cannot delete this image.'])
        );
        throw_if ($affiliation->photos()->count() == 1,
            ValidationException::withMessages(['photo' => 'Cannot delete the only image.'])
        );

        if (Storage::exists('photo-afiliasi/'.$photo->path)) {
            Storage::delete('photo-afiliasi/'.$photo->path);
        }
        $photo->delete();

        return back()->with('success', 'Berhasil menghapus foto');
    }

}
