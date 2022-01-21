<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Category;

class Mitra extends Component
{
    public function render()
    {
        $categories = Category::with('partners')->get();
        return view('partials.mitra', compact('categories'));
    }
}
