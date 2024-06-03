<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    public function index(){
        return view('login');
    }

    public function check(Request $request){

        $user = $request->user;
        $pass = $request->password;
        


 
        if($user == 'admin' and $pass == '1234') {


            $user = new \App\Models\User([
                'id' => '144795',
                'name' => 'Administrador',
                'email' => 'admin@fcursos.com.br',
                'password' => $pass
                // Adicione outros campos necessários aqui
            ]);

            // Inicializar o Auth manualmente
            Auth::login($user, $remember = true);

            $name = 'Administrador';
            $unidade = 'Matriz';
            $funcao = 'Dev';
            $codigo = '10050';

            Session::put('nome', $name);
            Session::put('unidade', $unidade);
            Session::put('funcao', $funcao);
            Session::put('codigo', $codigo);


            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('error', 'Usuário ou senha inválido!');
        }

    
    }

    public function logout(){
        Session::forget('user');
        Session::forget('unidade');
        Session::forget('funcao');
        Session::forget('codigo');

        Auth::logout();
        return redirect('/login');
    }

}
