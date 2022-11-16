<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastrarUsuario(Request $request)
    {
        $novoUsuario = new UsuarioModel();
        $novoUsuario->fill($request->toArray());

        $string = "oLA MUNDO";

        return response()->json($novoUsuario, 201);
    }
}
