<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class Post extends Model
{
    protected $fillable = ['title', 'content','image','user_id',];

    public function user()
    {
        return $this->belongsTo (User::class);
    }
}
