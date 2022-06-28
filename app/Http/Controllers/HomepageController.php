<?php

namespace App\Http\Controllers;


use App\Movie;
use Illuminate\Http\Request;


class HomepageController extends Controller{
    public function movies(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}








?>