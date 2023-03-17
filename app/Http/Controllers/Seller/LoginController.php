<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    public function sellerLogin() {
        return view('seller.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->get('_role') == 'seller') {
            if(auth()->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
                if (Auth::user()->role->id == 2) {
                    return redirect()->route('seller.dashboard');
                }
            }
        }
        return redirect('seller')->with('error','Seller credentials incorrect');
    }
}
