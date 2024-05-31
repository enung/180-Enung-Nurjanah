<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class HomeController extends Controller
{
   public function index()
    {
        return view('dashboard', compact($pdf));
    }
    public function homepage()
    {
        return view('homepage');
    }
}
