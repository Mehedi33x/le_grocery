<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
      return view('backend.pages.category.category');
    }

    public function add_category()
    {
        return view('backend.pages.category.add_category');
    }
}
