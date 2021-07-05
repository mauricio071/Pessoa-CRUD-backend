<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cnh;

class CnhController extends Controller
{

    public function novo() 
    {
        return view('cnh.nova');
    }
   
    public function store(Request $request)
    {
        $cnh = new Cnh;
        $cnh->numero = $request['numero'];
        $cnh->tipo = $request['tipo'];
        $cnh->data = $request['data'];
        $cnh->pessoa_id = $request['pessoa_id'];
        $cnh->save();
        return $cnh;
    }

    public function editar($id) 
    {
        $cnh = Cnh::where('pessoa_id', $id)->first();
        return $cnh;
    }

    public function edit(Request $request, $id) 
    {
        $cnh = Cnh::where('pessoa_id', $id)->first();
        $cnh->numero = $request['numero'];
        $cnh->tipo = $request['tipo'];
        $cnh->data = $request['data'];
        $cnh->pessoa_id = $request['pessoa_id'];
        $cnh->save();
        return $cnh;
    }

    public function excluir($id) 
    {
        $cnh = Cnh::where('pessoa_id', $id)->first();
        $cnh->delete();
        return;
    }


}
