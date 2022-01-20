<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Support\Str;
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

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function getLogoAffiliation()
    {
        $logo = $this->logo_path;
        if ($this->logo_path && Storage::exists('logo-afiliasi/'.$logo)) {
            return asset('storage/logo-afiliasi/' . $this->logo_path);
        }

        return $this->defaultLogo();
    }

    protected function defaultLogo()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
