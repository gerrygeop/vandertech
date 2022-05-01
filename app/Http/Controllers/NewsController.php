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
        return view('dapur.news.index', compact('news'));
    }

    public function create()
    {
        return view('dapur.news.create');
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
            $request->file('news_photo_path')->storeAs('news-cover', $new_name);
        }

        $is_event = 0;
        if ($request->is_event) {
            $is_event = 1;
        }

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'news_photo_path' => $new_name,
            'is_event' => $is_event,
            'contact' => $request->contact,
        ]);

        return redirect()->route('d.news.index')->with('success', 'Berhasil Menambahkan News');
    }

    public function show(News $news)
    {
        return view('dapur.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('dapur.news.edit', compact('news'));
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
            if (Storage::exists('news-cover/'.$news->news_photo_path)) {
                Storage::delete('news-cover/'.$news->news_photo_path);
            }

            $new_name = Str::random(11).time().'.'.$request->news_photo_path->getClientOriginalExtension();
            $request->file('news_photo_path')->storeAs('news-cover', $new_name);

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
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'is_event' => $is_event,
            'contact' => $request->contact,
            'status' => $status,
        ]);

        return redirect()->route('d.news.index')->with('success', 'Berhasil Mengupdate News');
    }

    public function destroy(News $news)
    {
        if (Storage::exists('news-cover/'.$news->news_photo_path)) {
            Storage::delete('news-cover/'.$news->news_photo_path);
        }

        $news->delete();
        return redirect()->back();
    }

    public function attachments()
    {
        request()->validate([
            'attachment' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $path = request()->file('attachment')->store('trix-attachments', 'public');

        return [
            'image_url' => Storage::disk('public')->url($path),
        ];
    }

}
