<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Partner;
use App\Models\Category;

class TablePartners extends Component
{
    public $kategori = null;
    public $search = '';

    public function render()
    {
        $partners = Partner::where('name', 'LIKE', '%'.$this->search.'%')
            ->when($this->kategori, function($query, $kategori) {
                return $query->whereRelation('categories', 'id', $kategori);
            })
            ->with('categories')
            ->get();

        $categories = Category::all();

        return view('livewire.table-partners', [
            'partners' => $partners,
            'categories' => $categories,
        ]);
    }
}
