<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Tag()
    {
        return $this->hasMany(Tag::class);
    }
    public function session()
    {
        return $this->hasMany(session::class);
    }
}
