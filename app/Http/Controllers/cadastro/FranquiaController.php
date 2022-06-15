<?php

namespace App\Http\Controllers\cadastro;

use App\Http\Controllers\Controller;
use App\Models\cadastro\Franquia;
use Illuminate\Http\Request;

class FranquiaController extends Controller
{

//    public function validate(Request $request)
//    {
//        $validar = $request->validate([
//            'nome' => 'required|unique:franquias',
//            'uf' => 'required',
//        ]);
//    }

    public function store(Request $request)
    {
//        self::validate($request);
        Franquia::create($request->all());
    }

    public function show(Request $request)
    {
        $query = Franquia::query()
            ->select(
                'id',
                'nome',
                'uf'
            )
            ->orderBy('franquias.nome');

        if (!empty($request->nome))
            $query->where('nome', 'like', "{$request->nome}%");

        if (!empty($request->uf))
            $query->where('uf', $request->uf);

        $registros = $query->paginate(3);
        return response(compact('registros'));
    }

    public function edit($id)
    {
        $registros = Franquia::find($id);
        return response()->json(compact('registros'));
    }

    public function update(Request $request, $id)
    {
//        self::validate($request);
        Franquia::find($id)->update($request->toArray());
        return response()->json([], 201);
    }

    public function destroy($id)
    {
        Franquia::find($id)->delete();
    }
}
