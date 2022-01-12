<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'body' => 'required',
            'news_photo_path' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('news_photo_path')) {
            $image = $request->news_photo_path;
            $new_name = Str::random(11).time().'.'.$image->getClientOriginalExtension();
            $request->file('news_photo_path')->storeAs('public/news-cover', $new_name);
        }

        News::create([
            'title' => $request['judul'],
            'body' => $request['body'],
            'news_photo_path' => $new_name,
            'is_event' => 1,
        ]);

        return redirect()->route('news.index')->with('success', 'Berhasil Menambahkan News');
    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        //
    }

    public function update(Request $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
