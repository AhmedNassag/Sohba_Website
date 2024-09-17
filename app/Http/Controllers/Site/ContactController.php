<?php

namespace App\Http\Controllers\Site;

use App\Models\Settings;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        return view('site.contact.index',compact('settings'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required|string|max:255',
            'email' =>'required|email|max:255',
            'phone' =>'required',
            'message' =>'required|string|max:1000',
        ]);
        if ($validator->fails()) {
            session()->flash('error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->route('home')->with('success', 'Your message has been sent successfully.');
    }
}
