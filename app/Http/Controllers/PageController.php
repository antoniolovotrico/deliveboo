<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $categories = Category::all();
        return view('guest.home', compact('categories'));
    }
}