<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function syncCategories($categoriesId)
    {
    	return $this->categories()->sync($categoriesId);
    }

    public function getLogoPartner()
    {
        if ($this->logo_path && Storage::exists('logo-mitra/'.$this->logo_path)) {
            return asset('storage/logo-mitra/' . $this->logo_path);
        }

        return $this->defaultLogo();
    }

    protected function defaultLogo()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
