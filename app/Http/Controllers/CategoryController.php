<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dapur.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dapur.category.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
        ]);

        Category::create($validate);
        return redirect()->route('d.category.index')->with('success', 'Berhasil menambah kategori');
    }

    public function edit(Category $category)
    {
        return view('dapur.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'name' => 'required|string',
        ]);

        $category->update($validate);
        return redirect()->route('d.category.index')->with('success', 'Berhasil mengubah kategori');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Berhasil menghapus kategori');
    }
}
