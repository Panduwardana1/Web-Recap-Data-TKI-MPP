<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\directoryExists;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role !== 'admin') {
                Auth::logout();
                return back()->withErrors(['email' => 'Can access only admin']);
            } else {
                // return redirect('admin/dashboard');
                $request->session()->regenerate();
                return redirect('admin/dashboard')->with('success', 'You login');
            }
        }
        //! Alert error
        return back()->withErrors(
            ['email' => 'email or password not corrected']
        );
    }

    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('sireda/landingpage');
    }
}
