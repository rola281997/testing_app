<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    function index(Request $request)
    {
        if (auth()->check()) {
            return redirect()->route('posts.create');
        } else {
            return view('users.login');
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('posts.index');
    }

    function authenticate(UserLoginRequest $request)
    {
        if (auth()->attempt(
            [
                'login' => $request->login,
                'password' => $request->password
            ],

        )) {
            $request->session()->regenerate();
            return redirect()->route('posts.create');
        }
        return redirect()->back()->withErrors(['error' => 'wrong email or password']);
    }
}
