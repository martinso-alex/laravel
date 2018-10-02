@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col s12 red-text text-darken-1">
            <br><br>
            <h4 class="center">Bem-vindo!</h4>
            <p>
                Seja bem-vindo ao sistema de gerenciamento de processos e documentação do <b>IESB</b>. No menu
                ao lado, você encontrará as funcionalidades responsáveis, respectivamente, por: gerenciar os tipos de
                documento, gerenciar os tipos de processo, gerenciar os cursos e gerenciar os processos.
            </p>
            <p>
                Na funcionalidade de gerenciamento de processos, temos também o trâmite de processos (aberto, aprovado,
                arquivado ou excluido) e gerenciamento dos arquivos vinculados a cada processo. Para obter instruções de
                uso com imagens, baixe o <b>manual do sistema</b> disponivel no menu!
            </p>
        </div>
    </div>
@endsection
