<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class FrontNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news-event', compact('news'));
    }

    public function show(News $new)
    {
        return view('news-event-detail', compact('new'));
    }
}
