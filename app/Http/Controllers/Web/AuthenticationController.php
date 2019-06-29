<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    try {
        return Socialite::with($account)->redirect();
    } catch (\InvalidArgumentException $e) {
        return redirect('/login');
    }
}