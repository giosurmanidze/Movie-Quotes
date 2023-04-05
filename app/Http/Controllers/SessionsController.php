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
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();

        return redirect('/admin/dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/admin/login');
    }
}
