<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user(Request $request)
    {
        return response()->json(['user' => $request->user()]);
    }
}
