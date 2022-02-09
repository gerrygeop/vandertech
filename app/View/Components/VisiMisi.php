<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Vanderteck;

class VisiMisi extends Component
{
    public function render()
    {
        $vanderteck = Vanderteck::select('visi', 'misi')->first();

        if (!$vanderteck) {
            return view('partials._visi-misi-section');
        }

        return view('partials.visi-misi', compact('vanderteck'));
    }
}
