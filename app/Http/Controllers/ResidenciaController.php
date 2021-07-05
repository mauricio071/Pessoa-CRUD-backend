<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Residencia;

class ResidenciaController extends Controller
{

    public function novo()
    {
        return view('residencia.nova');
    }

    public function store(Request $request)
    {   
        $residencia = new Residencia;
        $residencia->cep = $request['cep'];
        $residencia->logradouro = $request['logradouro'];
        $residencia->complemento = $request['complemento'];
        $residencia->bairro = $request['bairro'];
        $residencia->numero = $request['numero'];
        $residencia->cidade = $request['cidade'];
        $residencia->estado = $request['estado'];
        $residencia->pessoa_id = $request['pessoa_id'];
        $residencia->save();
        return $residencia;
        
    }

    public function editar($id)
    {
        $residencia = Residencia::where('pessoa_id', $id)->first();
        return $residencia;
    }

    public function edit(Request $request, $id)
    {
        $residencia = Residencia::where('pessoa_id', $id)->first();
        $residencia->cep = $request['cep'];
        $residencia->logradouro = $request['logradouro'];
        $residencia->complemento = $request['complemento'];
        $residencia->bairro = $request['bairro'];
        $residencia->numero = $request['numero'];
        $residencia->cidade = $request['cidade'];
        $residencia->estado = $request['estado'];
        $residencia->pessoa_id = $request['pessoa_id'];
        $residencia->save();
        return $residencia;
    }

    public function excluir($id)
    {
        $residencia = Residencia::where('pessoa_id', $id)->first();
        if($residencia)
            $residencia->delete();
        return;
    }
}
