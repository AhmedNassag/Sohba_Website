<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Settings;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $settings = Settings::first();
        $services = Service::all();
        // dd($services);
        return view('site.service.index', compact('services', 'settings'));
    }
}
