<?php

namespace App\Http\Controllers\Site;

use App\Models\Program;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\ProgramBooking;
use App\Http\Controllers\Controller;

class CategoryDetailsController extends Controller
{
    public function index($slug)
    {
        $program = Program::where('slug',$slug)->first();
        $settings = Settings::first();

        return view('site.category_details.index',compact('program','settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            "Phone" => "required",
            'program_id' => "required"
        ]);

        $program = Program::find($request->program_id);

        if(!$program)
        {
            return back()->with('error','Program not found');
        }

        ProgramBooking::create([
            'name' => $request->name,
            'phone' => $request->Phone,
            'program_id' => $request->program_id,
        ]);

        return redirect()->route('home');
    }
}
