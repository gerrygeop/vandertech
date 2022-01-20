<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

use App\Models\Affiliation;
use App\Models\Photo;

class AffiliationPhotoController extends Controller
{
    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request, Affiliation $affiliation)
    {
        $request->validate([
            'photo' => 'image|max:5000|mimes:jpg,jpeg,png',
        ]);

        $path = $request->file('photo')->storePublicly('/');

        $photo = $affiliation->photos()->create([
            'path' => $path,
        ]);

        dd($photo);
    }

    public function destroy(Affiliation $affiliation, Photo $photo)
    {
        throw_if ($photo->resource_type() != 'affiliation' || $photo->resource_id != $affiliation->id,
            ValidationException::withMessages(['image' => 'Cannot delete this image.'])
        );
        throw_if ($affiliation->images()->count() == 1,
            ValidationException::withMessages(['image' => 'Cannot delete the only image.'])
        );

        Storage::delete($photo->path);
        $photo->delete();

        return redirect()->route('d.affiliation.index')->with('success', 'Berhasil');
    }

    public function index()
    {
        //
    }

}
