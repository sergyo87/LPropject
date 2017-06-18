<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function store(Request $request){
        $cat = new Category;
        $cat->name = $request->name;
        $cat->save();        
    }
}
