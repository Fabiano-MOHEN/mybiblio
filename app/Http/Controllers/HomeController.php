<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
        public function index() {
            // load caterories
            $categories = Category::all();
            return view('welcome', compact('categories'));
        }
}

