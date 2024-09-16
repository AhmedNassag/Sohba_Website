<?php

namespace App\Http\Controllers\Site;

use App\Models\AboutUs;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\AboutUsDetails;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $settings = Settings::first();
        $aboutUs = AboutUs::first();
        $details = AboutUsDetails::get();
        // dd($settings->facebook_link);
        return view('site.home.index', compact('settings','aboutUs','details'));
    }
}
