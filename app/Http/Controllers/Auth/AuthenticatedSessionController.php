<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use function Symfony\Component\Routing\Matcher\Dumper\indent;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('frontend.pages.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (Auth::check() && Auth::user()->type == 'admin'){
            return redirect()->route('admin.dashboard');
        }elseif (Auth::check() && Auth::user()->type == 'user'){
            //return redirect()->intended('/user/dashboard');
//            return indent('/user/dashboard');
            return  redirect()->route('user.dashboard');
        }else{
            toast('Access Denied','error');
            return back();
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toast('Logout Successfully','success');
        return redirect('/login');
    }
}
