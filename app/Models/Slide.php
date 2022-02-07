<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Slide extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getPhotoSlide()
    {
        if ($this->path && Storage::exists('photo-slideshow/'.$this->path)) {
            return asset('storage/photo-slideshow/' . $this->path);
        }

        return $this->defaultImage();
    }

    protected function defaultImage()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
