<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }

    public function getAffiliationPhoto()
    {
        if ($this->path && Storage::exists('photo-afiliasi/'.$this->path)) {
            return asset('storage/photo-afiliasi/' . $this->path);
        }

        return $this->defaultImage();
    }

    protected function defaultImage()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
