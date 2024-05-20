<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">

                <div class="col-md-3 mb-2 mb-md-0">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo_azulescuro.png') }}" width="30" height="30" alt=" Impacta">
                    </a>
                </div>



                {{-- Menu para desktop --}}



                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="{{ route('servicos') }}" class="nav-link px-2">Serviços</a></li>
                    <li><a href="{{ route('sobre') }}" class="nav-link px-2">Sobre</a></li>
                    <li><a href="{{ route('contato') }}" class="nav-link px-2">Contato</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    @if (Route::has('login'))
                                <nav>
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Seus Chamados
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="btn btn-outline-primary me-2"
                                        >
                                            Entrar
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="btn btn-primary"
                                            >
                                                Registrar
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                </div>
            </div>











</nav>
