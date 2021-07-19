<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;

class Usuario extends Controller
{
    //
    public function salvar(Request $request){
        if(UsuarioModel::cadastrar($request)){
            return response("salvo", 201);
        }else{
            return response("erro", 409);
        }
        dd($request->all());
    }
}
