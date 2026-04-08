@extends('layouts._site.main')
@section('title', 'Pesquisa - Radar Economico')
@section('content')

    <div id="wrapper" class="wrap overflow-hidden-x">
        <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
            <div class="container max-w-xl">
                <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                    <li><a href="{{ route('site.home') }}">Inicio</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><a href="#">Categoria</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><span class="opacity-50">Todas as Notícias</span></li>
                </ul>
            </div>
        </div>

        <!-- Section start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-9">
                <div class="container max-w-lg">
                    <div class="section-inner panel vstack gap-3 sm:gap-6 lg:gap-9">
                        <header
                            class="page-header vstack justify-center items-center gap-2 md:gap-4 text-center max-w-650px mx-auto">
                            <h1 class="h3 md:h2 m-0">Resultado da Pesquisa</h1>
                        </header>
                        <div class="row child-cols-12 sm:child-cols-4 col-match gy-4 gx-2 xl:gx-4">
                            @forelse($news as $data)
                                <div class="col-12">
                                    <article
                                        class="post type-post panel rounded p-2 md:p-4 bg-gray-25 dark:bg-gray-300 dark:bg-opacity-10">
                                        <div class="panel row child-cols-12 sm:child-cols items-center g-3 md:g-4">
                                            <div class="sm:col-4 md:col-6 lg:col-4">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="../assets/images/common/img-fallback.png"
                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                            alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                            data-uc-img="loading: lazy">
                                                        <a href="{{ route('site.details', ['news' => $data])}}" class="position-cover"
                                                            data-caption="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"></a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="vstack items-start gap-2 md:gap-3">
                                                    <h3 class="h4 sm:h5 md:h4 lg:h3 m-0 m-0">
                                                        <a class="text-none" href="{{ route('site.details', ['news' => $data])}}">{{ $data->title }}</a>
                                                    </h3>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    {{-- <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Anna Luis"><img
                                                                                src="../assets/images/avatars/04.png"
                                                                                alt="Anna Luis"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Anna
                                                                            Luis</a>
                                                                    </div> --}}
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>{{ date('M d, Y', strtotime($data->updated_at)) }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>Comentários
                                                                        <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1">
                                                                {{-- <div class="cstack w-16px h-16px">
                                                                    <a href="#"
                                                                        class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                        data-uc-tooltip="Add to bookmark"><i
                                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="fs-6 md:fs-5 d-none md:d-block">{{ $data->subtitle }}</p>
                                                    <a class="btn btn-text text-primary border-bottom d-inline-flex fs-7 md:fs-6 my-1 md:my-2 d-none md:d-block"
                                                         href="{{ route('site.details', ['news' => $data->slug]) }}">Continuar a leitura</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @empty
                                <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                            @endforelse
                        </div>
                        <div class="nav-pagination fw-medium">
                            <ul class="nav-x uc-pagination hstack gap-1 justify-center ft-secondary" data-uc-margin="">
                                {{ $news->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Newsletter -->
    </div>

@endsection
