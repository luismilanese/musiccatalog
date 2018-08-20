<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name'];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
