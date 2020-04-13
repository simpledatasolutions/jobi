<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function submit(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $phone = $request->phone;

        $count = Subscribe::where('email', $email)->count();

        if (!$count) {
            if (Subscribe::create(['name' => $name, 'email' => $email, 'phone' => $phone]))
                return 1;
        } else {
            return Subscribe::where('email', $email)->update(['name' => $name, 'phone' => $phone]);
        }
    }
}
