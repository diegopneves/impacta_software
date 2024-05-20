@extends('layouts.admin')


@section('content')

    <div class="card mt-3 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Pesquisar</span>
        </div>

        <div class="card-body">
            <form action="{{ route('chamado.index') }}">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}" placeholder="Nome do contato" />
                    </div>

                    <div class="col-md-6 col-sm-12 mt-3 pt-3">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
                        <a href="{{ route('chamado.index') }}" class="btn btn-outline-warning btn-sm">Limpar</a>
                    </div>
                </div>
            </form>
        </div>


    </div>

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Meus chamados</span>
            <span>
                <a href="{{ route('dashboard') }}">
                    <button type="button" class="btn btn-primary btn-sm">Voltar</button>
                </a>

            </span>
        </div>

        {{-- Verificar se existe a sessao success e imprimir o valor --}}
        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                 {{ session('success') }}
            </div>

        @endif

        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descriçao</th>
                    <th scope="col" class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($chamados as $chamado)
                  <tr>
                    <th>{{ $chamado->id }}</th>
                    <td>{{ $chamado->nome }}</td>
                    <td>{{ $chamado->descrição }}</td>


                    <td class="d-md-flex justify-content-center">
                        <div class="btn-group">
                            <a href="{{ route('chamado.show', ['chamado' => $chamado->id]) }}">
                                <button type="button" class="btn btn-outline-primary me-1">
                                    <svg width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                    <span class="visually-hidden">Button</span>
                                </button>
                            </a>

                            <a href="{{ route('chamado.edit', ['chamado' => $chamado->id]) }}">
                                <button type="button" class="btn btn-outline-secondary me-1">
                                    <svg width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                    </svg>
                                <span class="visually-hidden">Button</span>
                                </button>
                            </a>

                            <form action="{{ route('chamado.destroy', [ 'chamado' => $chamado->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja apagar esse chamado?')">
                                    <svg width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                    <span class="visually-hidden">Button</span>
                                </button>
                            </form>
                            </div>
                        </div>

                    </td>

                  </tr>
                    @empty
                        <span style="color: #f00;">Nenhum chamado encontrado</span>
                    @endforelse
                </tbody>

            </table>

            {{ $chamados->onEachSide(0)->links() }}
        </div>



    </div>








@endsection
