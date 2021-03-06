<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["firstname", "lastname", "mail", "password", "role_id"];

    public function post()
    {
        return $this->hasMany (Post::class);
    }
}
