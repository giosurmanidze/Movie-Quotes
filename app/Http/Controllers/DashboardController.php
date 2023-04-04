<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create()
    {
        $adminName = Auth::user()->name;

        return view('login.dashboard', ['adminName' => $adminName]);
    }
}