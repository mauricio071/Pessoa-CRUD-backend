<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pessoas;
use App\Models\Residencia;
use App\Models\Cnh;

class PessoasController extends Controller
{
    public static function index()
    {
        $pessoas = Pessoas::all();
        return $pessoas;
    }

    public function novo()
    {
        return view('pessoas.novo');
    }

    public function store(Request $request)
    {   
        $pessoas = new Pessoas;
        $pessoas->nome = $request['nome'];
        $pessoas->data = $request['data'];
        $pessoas->peso = $request['peso'];
        $pessoas->sexo = $request['sexo'];
        $pessoas->cpf = $request['cpf'];
        $pessoas->save();
        return $pessoas;
    }

    public function editar($id)
    {
        $pessoas = Pessoas::find($id);
        return $pessoas;
    }

    public function edit(Request $request, $id)
    {
        //$data = date('Y-m-d', strtotime($request['data']));
        $pessoas = Pessoas::find($id);
        $pessoas->nome = $request['nome'];
        $pessoas->data = $request['data'];
        $pessoas->peso = $request['peso'];
        $pessoas->sexo = $request['sexo'];
        $pessoas->cpf = $request['cpf'];
        $pessoas->save();
        return $pessoas;
    }

    public function excluir($id)
    {   
        $residencia = Residencia::where('pessoa_id', $id)->first();
        if($residencia)
            $residencia->delete();

        $cnh = Cnh::where('pessoa_id', $id)->first();
        if($cnh)
            $cnh->delete();
            
        $pessoas = Pessoas::find($id);
        $pessoas->delete();
        return;
    }
}
