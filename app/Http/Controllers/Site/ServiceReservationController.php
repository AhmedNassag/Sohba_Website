<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceReservationRequest;
use App\Models\ServiceReservation;
use App\Models\Settings;
use Illuminate\Http\Request;

class ServiceReservationController extends Controller
{
    public function store(StoreServiceReservationRequest $request)
    {
        ServiceReservation::create($request->validated());
        return redirect()->back()->with('success', 'تم الحجز بنجاح');
    }
}
