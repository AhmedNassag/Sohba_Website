<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Set to true if all users can make reservations, or adjust according to permissions.
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            // 'email' => 'nullable|email|max:255',
            'service_id' => 'required|exists:services,id',
            // 'status' => 'required|string|in:pending,confirmed,cancelled', // Adjust according to your needs
            'mobile' => [
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10',    // minimum length of the mobile number
                'max:20',    // maximum length of the mobile number
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'service_id.required' => 'الخدمة مطلوبة.',
            'mobile.required' => 'رقم الجوال مطلوب.',
            'mobile.regex' => 'صيغة رقم الجوال غير صالحة.',
            'mobile.min' => 'يجب أن يحتوي رقم الجوال على 10 أرقام على الأقل.',
            'mobile.max' => 'يجب ألا يتجاوز رقم الجوال 20 رقماً.',
        ];
    }
}
