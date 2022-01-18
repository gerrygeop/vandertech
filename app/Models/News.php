<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPhoto()
    {
        $photo = $this->news_photo_path;
        if ($this->news_photo_path && Storage::exists('news-cover/'.$photo)) {
            return asset('storage/news-cover/' . $this->news_photo_path);
        }

        return $this->defaultProfilePhotoUrl();
    }

    protected function defaultProfilePhotoUrl()
    {
        return 'https://dummyimage.com/720x400';
    }
}
