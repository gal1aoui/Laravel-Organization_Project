<?php

namespace App\Http\Controllers;

use App\Models\Liker;
use Illuminate\Http\Request;

class LikerController extends Controller
{
    public function index()
    {
        return response()->json([
            "dt" => Liker::all(),
        ]);
    }
}
