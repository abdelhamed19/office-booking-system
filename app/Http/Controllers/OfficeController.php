<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfficeResoucre;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {

        $offices = Office::query()->latest('id')->get();
        return OfficeResoucre::collection($offices);
    }
}
