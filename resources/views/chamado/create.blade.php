@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Abrir novo chamado</span>
            <span>
                <a href="{{ route('chamado.index') }}" class="btn btn-primary btn-sm">Voltar</a>


            </span>
        </div>

        {{-- Verificar se existe a sessao success e imprimir o valor --}}
        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                 {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger m-3" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <div class="card-body">

            <form action="{{ route('chamado.store') }}" method="POST">
                @csrf


                <div class="col-12">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do contato" value="{{ old('nome') }}">
                </div>

                <div class="col-12">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone do contato" value="{{ old('telefone') }}">
                </div>

                <div class="col-12">
                    <label for="logradouro" class="form-label">Endereço:</label>
                    <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Endereço completo" value="{{ old('logradouro') }}">
                </div>

                <div class="col-12">
                    <label for="motificado_em" class="form-label">Data para o atendimento: </label>
                    <input type="date" name="motificado_em" class="form-control" id="motificado_em" placeholder="Data para o atendimento do chamado" value="{{ old('motificado_em') }}">
                </div>

                <div class="col-12">
                    <label for="descrição" class="form-label">Descrição do problema:</label>
                    <input type="text" name="descrição" class="form-control" id="descrição" placeholder="descrição do problema" value="{{ old('descrição') }}">
                </div><br>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>



            </form>

        </div>



    </div>








@endsection
