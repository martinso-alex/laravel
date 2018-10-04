@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col s12 red-text text-darken-1">
            <br><br>
            <h4 class="center">Cadastrar Tipo</h4>
        </div>
    </div>

    <form id="create" class="col s10 offset-s1" method="POST" action="/tipo-documento">
        {{ csrf_field() }}

        <div class="row">
            <div class="input-field col s9">
                <input id="descricao" type="text" name="descricao" required>
                <label for="descricao">Tipo</label>
            </div>

            <br>
            <div class="col s3">
                <button class="btn waves-effect red right" data-target="modal-cadastrar">Cadastrar
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
                        <tr>
                            <td>{{ $tipo->descricao }}</td>

                            <td id="{{ $tipo->id }}">
                                <i class="material-icons right red-text acoes delete" data-target="modal-deletar">
                                    clear
                                </i>

                                <form id="delete-{{ $tipo->id }}" action="/tipo-documento/{{ $tipo->id }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>

                                <i class="material-icons right blue-text acoes update">create</i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="modal-cadastrar" class="modal">
        <div class="modal-content">
            <h4>Deseja cadastrar este tipo de documento?</h4>
        </div>

        <div class="modal-footer">
            <a id="create-button" class="modal-action modal-close waves-effect waves-red btn-flat">Sim</a>
            <a class="modal-action modal-close waves-effect waves-red btn-flat">Não</a>
        </div>
    </div>

    <div id="modal-deletar" class="modal">
        <div class="modal-content">
            <h4>Deseja excluir este tipo de documento?</h4>
        </div>

        <div class="modal-footer">
            <a id="delete-button" class="modal-action modal-close waves-effect waves-red btn-flat">Sim</a>
            <a class="modal-action modal-close waves-effect waves-red btn-flat">Não</a>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#create-button').on('click', function () {
                $('#create').submit();
            });

            $('.delete').on('click', function () {
                $('#delete-button').parent().attr(
                    'id',
                    $(this).parent().attr('id')
                );
            });

            $('#delete-button').on('click', function () {
                var del =  $(this).parent().attr('id');
                $('#delete-' + del).submit();
            });
        });
    </script>
@endpush