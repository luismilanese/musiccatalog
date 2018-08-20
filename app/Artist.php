<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name'];

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    public function addAlbum(string $name)
    {
        $this->albums()->create(compact('name'));
    }
}
