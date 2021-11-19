<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController
{
    public function index()
    {
        return response()->json(Movies::all(), 200);
    }

    public function store(Request $request)
    {

        if (!$request->name || !$request->director || !$request->duration) {
            return response()->json('Faltando Informação', 400); //400 - Bad Request
        }

        return response()
            ->json(
                Movies::create(['name' => $request->name, 'director' => $request->director, 'duration' => $request->duration]),
                201
            ); //201 - Criação de Conteúdo

    }

    public function show(int $id)
    {
        $resposta = Movies::find($id);
        if (is_null($resposta)) {
            return response()
                ->json('Nenhum item encontrado', 204); //204 - Sem conteúdo
        } else {
            return response()
                ->json($resposta, 200); //200 - OK
        }
    }

    public function update(int $id, Request $request)
    {
        $resposta = Movies::find($id);
        if (is_null($resposta)) {
            return response()->json('Não encontrado', 404);
        }
        if (is_null($request)) {
            return response()->json('Sem itens para atualizar', 404); // 404 - Erro de item inexistente
        }
        if ($request->name == $resposta->name && $request->director == $resposta->diretor && $request->duration == $resposta->duration) {
            return response()->json('Sem atualização', 208); //208 - Já reportado
        } else {
            $resposta->fill($request->all());
            $resposta->save();
            return response()->json('Atualizado', 200); //200- Ok
        }
    }

    public function delete(int $id)
    {
        $removidos = Movies::destroy($id);

        if (is_null($removidos)) {
            return response()->json('Não encontrado', 404);
        }
        return response()->json('Removido', 202); // 202 - Argumento aceito
    }
}
