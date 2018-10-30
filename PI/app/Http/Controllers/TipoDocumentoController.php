<?php

namespace App\Http\Controllers;

use App\TipoDocumento;

class TipoDocumentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $tipos = TipoDocumento::all();

        return view('documentos.tipo-documento', compact('tipos'));
    }

    public function store(TipoDocumento $tipoDocumento)
    {
        $this->validate(request(), ['descricao' => 'required']);

        $tipoDocumento->create(['descricao' => request('descricao')]);

        return back();
    }

    public function destroy(TipoDocumento $tipoDocumento)
    {
        try {
            $tipoDocumento->delete();
        } catch (\Exception $e){
            return view('layouts.error');
        }

        return back();
    }
    
    public function update(TipoDocumento $tipoDocumento)
    {
        $this->validate(request(), ['descricao' => 'required']);

        $tipoDocumento->update(['descricao' => request('descricao')]);

        return back();
    }
}
