<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function submit(Request $request)
    {
        return [1, 2, 3];

    }
}
