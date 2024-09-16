<?php

namespace App\Http\Controllers\Site;

use App\Models\Team;
use App\Models\AboutUs;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\AboutUsDetails;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::first();
        $details = AboutUsDetails::get();
        $teams = Team::get();
        $settings = Settings::first();
        if(!$aboutUs)
        {
            return redirect()->back();
        }
        
        return view('site.about.index',compact('aboutUs','details','teams','settings'));
    }
}
