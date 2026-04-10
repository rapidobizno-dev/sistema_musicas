<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <h3 class="logo logo-lg">Radar Econômico</h3>
                {{-- <img src="{{ url('assets/radar-img/radar-logo.png') }}" alt="SOS" width="100" height="100" class="logo logo-lg"> --}}
                <img src="{{ url('assets/radar-img/favicon.png') }}" alt="" class="logo logo-sm">
                {{-- <h3>Radar Econômico</h3> --}}
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Menu</label>
                </li>

                {{-- Menu Dashboard --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Visão geral</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.dashboard') }}">Gestão de
                                contatos</a></li>
                        {{-- <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li> --}}
                    </ul>
                </li>

                {{-- Inicio Menu Gender --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-list"></i></span>
                        <span class="nxl-mtext">Gênero</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('admin.gender.list') }}">Lista</a></li>
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('admin.gender.create') }}">Adicionar Novo</a></li>
                    </ul>
                </li>
                {{-- Fim Menu Gender --}}

                {{-- Menu Category --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.categories.index') }}">Lista de
                                Categoria</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Nova
                                Categoria</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu News --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Notícias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.index') }}">Lista de
                                Notícias</a></li>
                </li>
                <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.create') }}">Nova Notícia</a>
                </li>
            </ul>
            </li>

            {{-- Menu Comments --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-edit"></i></span>
                    <span class="nxl-mtext">Comentários</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comments.index') }}">Comentários</a>
                    </li>
                    {{-- <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comment.create') }}">Criar Comentário</a></li> --}}
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu videos --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-video"></i></span>
                    <span class="nxl-mtext">Videos</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.index') }}">Videos</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.create') }}">Criar Vídeo</a>
                    </li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                    <span class="nxl-mtext">Taxa de Conversão</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link"
                            href="{{ route('admin.rate.edit', ['rate' => 1]) }}">Editar Taxa</a>
                    </li>
                </ul>
            </li>

            <li class="nxl-item nxl-caption">
                <label>Outras Configurações</label>
            </li>

            {{-- Menu users --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-user"></i></span>
                    <span class="nxl-mtext">Utilizador</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.index') }}">Listan de
                            Utilizadores</a></li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.create') }}">Novo
                            Utilizador</a>
                    </li>
                </ul>
            </li>

            </ul>
        </div>
    </div>
    </div>
</nav>
