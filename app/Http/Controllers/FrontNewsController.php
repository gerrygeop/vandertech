<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class FrontNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('newsevent-page', compact('news'));
    }

    public function show(News $news)
    {
        return view('newsevent-detail', compact('news'));
    }
}
