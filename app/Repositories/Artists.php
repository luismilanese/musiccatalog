<?php

namespace App\Repositories;
use App\Artist;

class Artists
{
    public function all()
    {
        return Artist::with(['albums' => function($query) {
            $query->orderBy('name', 'asc');
        }])
            ->orderBy('name', 'asc')
            ->get();
    }
}