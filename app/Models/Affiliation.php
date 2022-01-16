<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Affiliation extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = [
        'hidden' => 'bool'
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'resource');
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'featured_image_id');
    }

    public function getLogo()
    {
        $logo = $this->logo_path;
        if ($this->logo_path && Storage::disk('public')->exists('logo-afiliasi/'.$logo)) {
            return asset('storage/logo-afiliasi/' . $this->logo_path);
        }

        return $this->defaultLogo();
    }

    protected function defaultLogo()
    {
        return 'https://i.ibb.co/ZxFKchm/logo-wana.png';
    }
}
