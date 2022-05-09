<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index() {
        $comic = Comic::all();
        dd($comic);
        return view('home');
    }
}
