<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class CustomerLoginController extends Controller
{
     public function __construct()
    {
    
      $this->middleware('guest:customer')->except('logout','showRegisterForm','showLoginForm');
    }
    
    public function showRegisterForm()
    {
      return view('auth.customer_register');
    }
    
    public function showLoginForm()
    {
      return view('auth.customer_login');
    }
    
    public function login(Request $request)
    {

      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
      ]);
      

      if (Auth::guard('customer')
          ->attempt(['email' => $request->email, 'password' => $request->password,'ban' => 0])) {
       
        return redirect('/');
          
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back();
    }
    
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }
}
