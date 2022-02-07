<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Affiliation;
use App\Models\Vanderteck;
use App\Models\Slide;

class FrontController extends Controller
{
    public function home()
    {
        $affiliations = Affiliation::where('hidden', 0)->get();
        $slides = Slide::all();
        return view('welcome', compact('affiliations', 'slides'));
    }

    public function profileVanderteck()
    {
        $vanderteck = Vanderteck::select('about', 'image_path')->first();
        return view('detail-vanderteck', compact('vanderteck'));
    }

    public function detailAffiliation(Affiliation $affiliation)
    {
        $affiliation->load('photos');
        return view('afiliasi.detail-afiliasi', compact('affiliation'));
    }

    public function listNewsAndEvent()
    {
        $news = News::where('status', 'aktif')->get();
        return view('newsevent-page', compact('news'));
    }

    public function detailNewsAndEvent(News $news)
    {
        if ($news->status != 'aktif') {
            return back()->with(['error' => 'Halaman tidak bisa diakses.']);
        }

        return view('newsevent-detail', compact('news'));
    }
}
