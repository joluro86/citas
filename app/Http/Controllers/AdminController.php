<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');

    }

    public function listaUsuarios(){

        $users= User::paginate();
        return view('admin.listaUsuarios', compact('users'));

    }

    public function create(){
        return view('admin.create');


    }

    public function update(Request $request, User $user){

        $user->name= $request->name;
        $user->email= $request->email;
        $user->rolusuario= $request->rolusuario;
        $user->password= $request->password;
        $user->update();
        return redirect()->route('admin.index');
    }

    public function show($id){
        $user= User::find($id);
        return view('admin.show',compact('user'));
    }

    public function edit($id){
        $user= User::find($id);
        return view('admin.edit',compact('user'));
    }

    public function nuevocliente(){

        return view('admin.nuevocliente');
    }


}
