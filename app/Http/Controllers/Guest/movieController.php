<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function index(){
        $movies = movie::all();
        return view('welcome', compact('movies'));
    }
};
