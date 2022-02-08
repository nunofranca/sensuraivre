<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
