<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function create()
    {
        return view('login.create');
    }


    public function store(StoreLoginRequest $request)
    {
        $validated = $request->validated();

        if (!auth()->attempt($validated)) {
            return back()->withErrors([
                'email' => trans('validation.email'),
            ]);
        }
        session()->regenerate();

        return redirect('admin/dashboard/create-quote');
    }
    

    public function logout()
    {
        auth()->logout();
        return redirect('/admin/login');
    }
}