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
        $news = News::latest()->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'news_photo_path' => 'required|image|mimes:jpg,jpeg,png',
            'is_event' => 'boolean',
            'contact' => 'nullable|numeric|digits_between:12,14',
        ]);

        if ($request->hasFile('news_photo_path')) {
            $cover = $request->news_photo_path;
            $new_name = Str::random(11).time().'.'.$cover->getClientOriginalExtension();
            $request->file('news_photo_path')->storeAs('public/news-cover', $new_name);
        }

        $is_event = 0;
        if ($request->is_event) {
            $is_event = 1;
        }

        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'news_photo_path' => $new_name,
            'is_event' => $is_event,
            'contact' => $request->contact,
        ]);

        return redirect()->route('news.index')->with('success', 'Berhasil Menambahkan News');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'news_photo_path' => 'image|mimes:jpg,jpeg,png',
            'is_event' => 'boolean',
            'contact' => 'nullable|numeric|digits_between:12,14',
            'status' => 'nullable|string',
        ]);

        if ($request->hasFile('news_photo_path')) {
            $old_cover = $news->news_photo_path;

            if (Storage::disk('public')->exists('news-cover/'.$old_cover)) {
                Storage::disk('public')->delete('news-cover/'.$old_cover);
            }

            $cover = $request->news_photo_path;
            $new_name = Str::random(11).time().'.'.$cover->getClientOriginalExtension();
            $request->file('news_photo_path')->storeAs('public/news-cover', $new_name);

            $news->update([
                'news_photo_path' => $new_name,
            ]);
        }

        $is_event = 0;
        if ($request->is_event) {
            $is_event = 1;
        }

        $status = 'aktif';
        if (!$request->status) {
            $status = 'tidak aktif';
        }

        $news->update([
            'title' => $request->title,
            'body' => $request->body,
            'is_event' => $is_event,
            'contact' => $request->contact,
            'status' => $status,
        ]);

        return redirect()->route('news.index')->with('success', 'Berhasil Mengupdate News');
    }

    public function destroy(News $news)
    {
        $old_cover = Str::after($news->news_photo_path, 'public/');
        if (Storage::disk('public')->exists($old_cover)) {
            Storage::disk('public')->delete($old_cover);
        }

        $news->delete();
        return redirect()->back();
    }
}
