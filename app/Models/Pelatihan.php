<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'training_success';
    protected $guarded = ['id'];

    public function affiliations()
    {
        return $this->belongsTo(Affiliation::class);
    }
    public function partner()
    {
        return $this->belongsTo(Partner::class, 'id_partner');
    }
}
