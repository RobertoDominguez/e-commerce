<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Auth;

class AdministradorController extends Controller
{


    public function __construct(){
        $this->middleware('guest')->except('logout'); 
    }

    public function getLogin(){
        
        return view('admin.login');
    }

    public function login(){
        $credentials=$this->validate(request(),
        ['email'=>'email|required|string',
        'password'=>'required|string']);

        if (Auth::guard('administrador')->attempt($credentials)){ 
            return redirect()->intended('/admin/menu');
        }
        return back()
        ->withErrors(['email'=>'Estas credenciales no concuerdan con nuestros registros.'])
        ->withInput(request(['email']));
    }



    public function logout(){
        Auth::guard('administrador')->logout();
        return redirect('/admin/login');
    }


}