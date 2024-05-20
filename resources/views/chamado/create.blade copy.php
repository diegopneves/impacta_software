@extends('layouts.admin')

@section('content')


    <a href="{{ route('chamado.index') }}">
        <button type="button">Voltar</button>
    </a>
    <h2>Abrir novo chamado</h2>

    @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                 {{ session('success') }}
            </div>

        @endif

    @if($errors->any())
        <span style="color: #f00;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>

            @endforeach

        </span>

    @endif


    <form action="{{ route('chamado.store') }}" method="POST">
        @csrf


        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do contato" value="{{ old('nome') }}"><br><br>

        <label>Telefone: </label>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone do contato" value="{{ old('telefone') }}"><br><br>

        <label>Endereço: </label>
        <input type="text" name="logradouro" id="logradouro" placeholder="Endereço completo" value="{{ old('logradouro') }}"><br><br>

        <label>Data do chamado: </label>
        <input type="date" name="motificado_em" id="motificado_em" value="{{ old('motificado_em') }}"><br><br>

        <label>Descrição do problema: </label>
        <input type="text" name="descrição" id="descrição" placeholder="descrição do problema" value="{{ old('descrição') }}"><br><br>

        <button type="submit">Cadastrar</button>


    </form>

@endsection
