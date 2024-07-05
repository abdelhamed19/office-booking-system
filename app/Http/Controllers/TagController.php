<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResoucre;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke ()
    {
        return TagResoucre::collection(Tag::all());
    }
}
