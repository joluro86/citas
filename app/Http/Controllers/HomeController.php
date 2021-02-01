<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function __invoke(){
       if( $user = Auth::user()){
            if($user->rolusuario == 'Administrador'){

                return view('admin.index');

            }else if($user->rolusuario == 'Usuario'){

                return view('usuario.index');

            }
        }else{
            return view('auth.login');
        }
    }
}
