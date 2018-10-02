@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col s12 red-text text-darken-1">
            <br><br>
            <h4 class="center">Cadastrar Tipo</h4>
        </div>
    </div>

    <form class="col s10 offset-s1" method="POST" action="/tipo-documento">
        <div class="row">
            <div class="input-field col s9">
                <input id="descricao" type="text">
                <label for="descricao">Tipo</label>
            </div>

            <br>
            <div class="col s3">
                <button class="btn waves-effect red right" type="button">Cadastrar
                    <i class="material-icons right">add</i>
                </button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col s12">
            <br>
            <h4 class="center red-text text-darken-1">Tipos de Documento</h4>
        </div>

        <div class="col s12">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th class="center-align">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tipos as $tipo)
                        <tr id="{{ $tipo->id }}">
                            <td>{{ $tipo->descricao }}</td>
                            <td>
                                <i class="material-icons right red-text acoes">clear</i>
                                <i class="material-icons right blue-text acoes">create</i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection