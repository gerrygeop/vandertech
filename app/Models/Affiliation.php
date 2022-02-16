<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Affiliation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'hidden' => 'bool'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function training()
    {
        return $this->hasMany(Pelatihan::class);
    }

    public function getLogoAffiliation()
    {
        if ($this->logo_path && Storage::exists('logo-afiliasi/'.$this->logo_path)) {
            return asset('storage/logo-afiliasi/' . $this->logo_path);
        }

        return $this->defaultImage();
    }

    protected function defaultImage()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
