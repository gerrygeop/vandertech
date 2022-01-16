<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

use App\Models\Affiliation;
use App\Models\Image;

class AffiliationImageController extends Controller
{
    public function create()
    {
        return view('dapur.images.create');
    }

    public function store(Request $request, Affiliation $affiliation)
    {
        $request->validate([
            'image' => 'image|max:5000|mimes:jpg,jpeg,png',
        ]);

        $path = $request->file('image')->storePublicly('/', ['disk' => 'public']);

        $image = $affiliation->images()->create([
            'path' => $path,
        ]);

        dd($image);
    }

    public function destroy(Affiliation $affiliation, Image $image)
    {
        throw_if ($affiliation->images()->count() == 1,
            ValidationException::withMessages(['image' => 'Cannot delete the only image.'])
        );

        Storage::disk('public')->delete($image->path);
        $image->delete();
    }

    public function index()
    {
        //
    }

}
