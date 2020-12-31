<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ["pictures"];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
