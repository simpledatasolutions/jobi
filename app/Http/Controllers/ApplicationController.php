<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;

class ApplicationController extends Controller
{
    public function submit(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $phone = $request->phone;
        $country = $request->origin;

        $count = Apply::where('email', $email)->count();

        if (!$count) {
            if (Apply::create(['name' => $name, 'email' => $email, 'phone' => $phone, 'country' => $country]))
                return 1;
        } else {
            return Apply::where('email', $email)->update(['name' => $name, 'phone' => $phone, 'country' => $country]);
        }
    }
}
