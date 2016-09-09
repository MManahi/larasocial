<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function index()
    {   $user = Auth::user();
        if ($user) {
            return view('profile.index');
        } else return redirect('/home');
    }
}
