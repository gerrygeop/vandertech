<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Affiliation;

class FrontController extends Controller
{
    public function home()
    {
        $affiliations = Affiliation::where('hidden', 0)->get();
        return view('welcome', compact('affiliations'));
    }

    public function detailAffiliation(Affiliation $affiliation)
    {
        $affiliation->load('photos');
        return view('afiliasi.detail-afiliasi', compact('affiliation'));
    }

    public function listNewsAndEvent()
    {
        $news = News::all();
        return view('newsevent-page', compact('news'));
    }

    public function detailNewsAndEvent(News $news)
    {
        return view('newsevent-detail', compact('news'));
    }
}
