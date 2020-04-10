<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $phone = $request->phone;

        $count = Register::where('email', $email)->count();

        if (!$count) {
            if (Register::create(['name' => $name, 'email' => $email, 'phone' => $phone]))
                return 1;
        } else {
            return Register::where('email', $email)->update(['name' => $name, 'phone' => $phone]);
        }
    }
}
