<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        $tipos = TipoDocumento::all();

        return view('documentos.tipo-documento', compact('tipos'));
    }
}
