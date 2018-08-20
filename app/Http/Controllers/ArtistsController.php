<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Artists;

class ArtistsController extends Controller
{
    public function index(Artists $artist)
    {
        $artists = $artist->all();

        return view('artists', compact('artists'));
    }
}
