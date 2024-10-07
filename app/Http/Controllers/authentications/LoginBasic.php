<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{

  protected $redirectTo = RouteServiceProvider::HOME;

  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }

  public function login(UserRequest $request)
  {
    dd($request->all());
    $data = $request->validated();

    if (Auth::attempt($data)) {
      $request->session()->regenerate();
      return redirect()->intended($this->redirectTo)->with('success', 'Successfully Login');
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.'
    ]);
  }
}
