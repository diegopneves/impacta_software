@extends('layouts.admin')


@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Visualizar detalhes do chamado</span>
            <span>
                <a href="{{ route('chamado.index') }}" class="btn btn-primary btn-sm">Voltar</a>

                <a href="{{ route('chamado.edit', ['chamado' => $chamado->id]) }}" class="btn btn-warning btn-sm">Editar</a>

            </span>
        </div>

        {{-- Verificar se existe a sessao success e imprimir o valor --}}
        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                 {{ session('success') }}
            </div>

        @endif

        <div class="card-body">

            <dl class="row">
                <dt class="col-sm-3">ID do chamado:</dt>
                <dd class="col-sm-9">{{ $chamado->id }}</dd>

                <dt class="col-sm-3">Nome para contato:</dt>
                <dd class="col-sm-9">{{ $chamado->nome }}</dd>

                <dt class="col-sm-3">Telefone do contato</dt>
                <dd class="col-sm-9">{{ $chamado->telefone }}</dd>

                <dt class="col-sm-3">Data para atendimento:</dt>
                <dd class="col-sm-9">{{ $chamado->motificado_em }}</dd>

                <dt class="col-sm-3">Endereço:</dt>
                <dd class="col-sm-9">{{ $chamado->logradouro }}</dd>

                <dt class="col-sm-3">Descriçao do problema:</dt>
                <dd class="col-sm-9">{{ $chamado->descrição }}</dd>
            </dl>

        </div>



    </div>








@endsection
