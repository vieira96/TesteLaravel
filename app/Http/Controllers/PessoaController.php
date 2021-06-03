<?php

namespace App\Http\Controllers;

use App\Http\Resources\PessoaResource;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = PessoaResource::collection(Pessoa::all());
        return response()->json([
            'data' => $pessoas
        ]);
    }

    public function show(Pessoa $pessoa)
    {
        $pessoa = new PessoaResource($pessoa);
        return response()->json([
            'data' => $pessoa
        ]);
    }
}
