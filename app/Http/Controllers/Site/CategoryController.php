<?php

namespace App\Http\Controllers\Site;

use App\Models\Program;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $progrmes = Program::where('category_id', $category->id)->get();
        $settings = Settings::first();

        return view('site.category.index',compact('category','progrmes','settings'));
    }
}
