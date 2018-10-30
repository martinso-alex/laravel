<?php

namespace App\Http\Controllers;

use App\TipoProcesso;

class TipoProcessoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $tipos = TipoProcesso::all();

        return view('processos.tipo-processo', compact('tipos'));
    }

    public function store(TipoProcesso $tipoProcesso)
    {
        $this->validate(request(), ['descricao' => 'required']);

        $tipoProcesso->create(['descricao' => request('descricao')]);

        return back();
    }

    public function destroy(TipoProcesso $tipoProcesso)
    {
        try {
            $tipoProcesso->delete();
        } catch (\Exception $e){
            return view('layouts.error');
        }

        return back();
    }
    
    public function update(TipoProcesso $tipoProcesso)
    {
        $this->validate(request(), ['descricao' => 'required']);

        $tipoProcesso->update(['descricao' => request('descricao')]);

        return back();
    }
}
