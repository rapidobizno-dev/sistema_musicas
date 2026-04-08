@extends('layouts._site.main')
@section('title', 'Radar Econômico')
@section('content')

    {{-- Newsletter --}}
    @include('components.newsletterModal')

    {{-- reforçando o estilos das imagens e paginação --}}
    <link rel="stylesheet" href="{{ url('site/assets/css/style.css') }}">

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap overflow-hidden-x">

        <!-- Section start -->
        <div class="slider-panel panel swiper-parent">
            <div class="container-full">
                <div class="panel">
                    <div class="row g-0">
                        {{-- carocell --}}
                        @include('components.carocel')
                        {{-- end carocel --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Section end -->
        <!-- Section conversor start -->
        <div class="section panel overflow-hidden-x">
            <div class="section-outer panel pt-4 md:pt-6 lg:pt-8 xl:pt-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner panel vstack gap-0 sm:gap-2 xl:gap-3">
                        <div class="sticky-col-1 panel">
                            {{-- conversor --}}
                            @include('components.conversor')
                            {{-- fim conversor --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section conversor end -->
        <!-- Section start -->
        <div class="section panel overflow-hidden-x">
            <div class="section-outer panel pt-4 md:pt-6 lg:pt-8 xl:pt-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner panel vstack gap-0 sm:gap-2 xl:gap-3">
                        <div class="sticky-col-1 panel">
                            <div class="row child-cols-12 lg:child-cols g-3 col-match" data-uc-grid>
                                <div>
                                    <div class="row child-cols-12 lg:child-cols g-0 sm:g-2 xl:g-3 col-macth">
                                        <div>
                                            @forelse ($recentNationalDetach as $data)
                                                <article
                                                    class="post type-post panel vstack overflow-hidden h-100 text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div class="post-media panel overflow-hidden">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-16x9 bg-gray-50 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ asset('img/news/' . $data->image) }}"
                                                                data-src="{{ asset('img/news/' . $data->image) }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div class="post-header panel vstack justify-between gap-3 p-2 sm:p-3">
                                                        <div
                                                            class="post-top panel vstack items-start gap-1 xl:gap-2 mb-1 sm:mb-0">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="{{ route('site.national') }}">{{ $data->category->name }}</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h4 xl:h3 m-0 text-truncate-2">
                                                                <a class="text-none"
                                                                    href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                            </h3>
                                                            <p class="fs-6 sm:fs-5 ft-tertiary text-truncate-3">
                                                                {{ $data->subtitle }}</p>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack justify-between gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60 d-none sm:d-flex">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"></i>

                                                                    <span
                                                                        class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                class="link fs-6 fw-bolder text-none duration-250">
                                                                <span>Mais</span>
                                                                <i class="icon-1 unicon-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            @empty
                                                <div class="alert bg-danger text-light text-center m-auto">
                                                    nenhuma notícias Registrada
                                                </div>
                                            @endforelse
                                        </div>
                                        <div class="lg:col-4">
                                            <div class="panel">
                                                <div
                                                    class="row child-cols-12 sm:child-cols-6 lg:child-cols-12 g-0 sm:g-2 xl:g-3">
                                                    @forelse($recentNationalNews as $data)
                                                        <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ asset('img/news/' . $data->image) }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                            class="position-cover" data-caption="image"></a>
                                                                    </figure>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                    <div class="post-top panel vstack items-start gap-2">
                                                                        <div
                                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                            <div
                                                                                class="post-category hstack gap-narrow fw-semibold">
                                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                    href="{{ route('site.national') }}">{{ $data->category->name }}</a>
                                                                            </div>
                                                                        </div>
                                                                        <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                            <a class="text-none"
                                                                                href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                        </h3>
                                                                    </div>
                                                                    <div
                                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>

                                                                                <span
                                                                                    class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#newspost_comment"
                                                                                class="post-comments text-none hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-chat"></i>Comentários
                                                                                <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <div class="alert bg-danger text-light text-center m-auto">
                                                            nenhuma notícias Registrada
                                                        </div>
                                                    @endforelse
                                                    {{-- <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ asset('img/news/' . $data->image) }}"
                                                                            data-src="{{ asset('img/news/' . $data->image)}}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="#news" class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                    <div class="post-top panel vstack items-start gap-2">
                                                                        <div
                                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                            <div
                                                                                class="post-category hstack gap-narrow fw-semibold">
                                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                    href="blog-category.html">Tech</a>
                                                                            </div>
                                                                        </div>
                                                                        <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                            <a class="text-none" href="#news">{{ $data->title}}</a>
                                                                        </h3>
                                                                    </div>
                                                                    <div
                                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"
                                                                                    data-uc-tooltip="Jan 8, <script>
                                                                                        document.write(
                                                                                            new Date().getFullYear()
                                                                                        )
                                                                                    </script>"></i>
                                                                                <span>2mo ago</span>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#newspost_comment"
                                                                                class="post-comments text-none hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-chat"></i>
                                                                                <span>2</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-none xl:d-block">
                                    <div class="sidebar-wrap panel"
                                        data-uc-sticky="end: .sticky-col-1; offset: 85; media: @m;">
                                        <a class="mx-auto text-none"
                                            href="javacript:void(0);" 
                                            rel="nofollow">
                                            <img class="d-block dark:d-none"
                                                src="{{ url('site/assets/images/common/50anos2.jpg') }}" height="800" alt="Ad slot">
                                            <img class="d-none dark:d-block"
                                                src="{{ url('site/assets/images/common/50anos2.jpg') }}" height="800"
                                                alt="Ad slot">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 g-0 sm:g-2 xl:g-3 col-match"
                                data-uc-grid>
                                <div class="order-2 sm:order-1">
                                    <div class="list-layout panel p-2 pb-3 sm:p-2 mt-2 sm:mt-0 bg-white dark:bg-gray-900">
                                        <div class="list-header panel mb-2 hstack justify-between ga-2">
                                            <h2 class="list-title h5 m-0 hstack gap-1">
                                                <i class="icon icon-narrow unicon-flash-filled text-primary"></i>
                                                <span>Tendências <span class="text-primary">agora</span></span>
                                            </h2>
                                            <a href="#news"
                                                class="link fs-6 fw-bold text-uppercase text-none gap-1 mt-narrow sm:mt-1 hover:text-gray-900 dark:hover:text-white duration-200 sm:d-none">
                                                <span>See All</span>
                                            </a>
                                        </div>
                                        <div
                                            class="list-content panel overflow-auto h-400px sm:h-700px lg:h-600px xl:h-550px">
                                            <div class="row sep-x gy-2 gx-4 me-1" data-uc-grid>
                                                @forelse ($nationalNews as $data)
                                                    <div>
                                                        <article
                                                            class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                            <div>
                                                                <span
                                                                    class="time fs-7 opacity-60">{{ \Carbon\Carbon::parse($data->updated_at)->format(' g:i a') }}</span>
                                                            </div>
                                                            <h6 class="fs-5 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                            </h6>
                                                        </article>
                                                    </div>
                                                @empty
                                                    <div>
                                                        <article
                                                            class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                            <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                        </article>
                                                    </div>
                                                @endforelse
                                                {{-- <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">09:30</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Inovações tecnológicas remodelando o cenário
                                                                do varejo: pagamentos por IA</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">09:10</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Equilibrando Trabalho e Bem-Estar: Soluções
                                                                Tecnológicas para uma Vida Saudável</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">08:00</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">A Importância do Sono: Dicas para Melhor
                                                                Descanso e Recuperação</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">22:00</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">O Futuro da Vida Sustentável: Impulsionando
                                                                Estilos de Vida Ecologicamente Corretos</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">14:15</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Agilidade empresarial na era digital:
                                                                aproveitando a IA e a automação</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">16:30</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">A Arte da Panificação: Do Pão Clássico à
                                                                Pastelaria Artesanal</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">20:00</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">IA e Marketing: Revelando Insights dos
                                                                Clientes</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">12:00</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Tesouros Escondidos: Destinos de Viagem
                                                                Subestimados pelo Mundo</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">12:15</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Eco-Tourism: Traveling Responsibly and
                                                                Sustainably</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">12:30</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Viagem Solo: Algumas Dicas e Destinos para o
                                                                Explorador Aventureiro</a>
                                                        </h6>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                        <div>
                                                            <span class="time fs-7 opacity-60">23:00</span>
                                                        </div>
                                                        <h6 class="fs-5 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150"
                                                                href="#news">Planejamento financeiro com tecnologia de
                                                                IA: como os algoritmos estão revolucionando</a>
                                                        </h6>
                                                    </article>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="list-footer panel mt-3 text-center d-none sm:d-block">
                                            <a href="{{ route('site.national') }}"
                                                class="link fs-6 fw-bold text-uppercase text-none gap-1 mt-1 hover:text-gray-900 dark:hover:text-white duration-200">
                                                <span>Ver todas as Notícias</span>
                                                <i class="icon-1 unicon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 sm:order-1">
                                    <div class="panel">
                                        <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                            @forelse ($nationalNews1 as $data)
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <figure
                                                                class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                    src="{{ asset('img/news/' . $data->image) }}"
                                                                    data-src="{{ asset('img/news/' . $data->image) }}"
                                                                    alt="image" data-uc-img="loading: lazy">
                                                                <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                    class="position-cover" data-caption="image"></a>
                                                            </figure>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="{{ route('site.national') }}">{{ $data->category->name }}</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none"
                                                                        href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"></i>

                                                                        <span
                                                                            class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#newspost_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>Comentários
                                                                        <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            @empty
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    </article>
                                                </div>
                                            @endforelse
                                            {{-- <div>
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">Startups</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">Inovações tecnológicas
                                                                    remodelando o cenário do varejo: pagamentos por IA</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Mar 8, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>55min ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>100</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none lg:d-block xl:d-none sm:order-1">
                                    <div class="sidebar-wrap panel"
                                        data-uc-sticky="end: .block-bottom; offset: 100; media: @m;">
                                        <a class="mx-auto text-none"
                                            href="javacript:void(0);" 
                                            rel="nofollow">
                                            <img class="d-block dark:d-none"
                                                src="{{ url('site/assets/images/common/50anos2.jpg') }}"
                                                alt="Ad slot">
                                            <img class="d-none dark:d-block"
                                                src="{{ url('site/assets/images/common/50anos2.jpg') }}"
                                                alt="Ad slot">
                                        </a>
                                    </div>
                                </div>
                                <div class="order-1 sm:order-1">
                                    <div class="panel">
                                        <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                            @forelse ($nationalNews2 as $data)
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <figure
                                                                class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                    src="{{ asset('img/news/' . $data->image) }}"
                                                                    data-src="{{ asset('img/news/' . $data->image) }}"
                                                                    alt="image" data-uc-img="loading: lazy">
                                                                <a href="{{ route('site.details', ['news' => $data->slug]) }}"href="#news"
                                                                    class="position-cover" data-caption="image"></a>
                                                            </figure>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="{{ route('site.national') }}">{{ $data->category->name }}</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none"
                                                                        href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"></i>

                                                                        <span
                                                                            class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#newspost_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>Comentários
                                                                        <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                {{-- <div>
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">AI Powered</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">A importância do sono:
                                                                    dicas para um melhor descanso e recuperação</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Mar 8, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>2h ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>0</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div> --}}
                                            @empty
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    </article>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 sm:order-1">
                                    <div class="panel overflow-hidden">
                                        <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                            @forelse ($nationalNews3 as $data)
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <figure
                                                                class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                    src="{{ asset('img/news/' . $data->image) }}"
                                                                    data-src="{{ asset('img/news/' . $data->image) }}"
                                                                    alt="image" data-uc-img="loading: lazy">
                                                                <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                    class="position-cover" data-caption="image"></a>
                                                            </figure>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="{{ route('site.national') }}">{{ $data->category->name }}</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none"
                                                                        href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"></i>

                                                                        <span
                                                                            class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#newspost_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>Comentários
                                                                        <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                {{-- <div> 
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">Tech</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">Agilidade empresarial
                                                                    na era digital: aproveitando a IA e a automação</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Mar 1, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>7d ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>23</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div> --}}
                                            @empty
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    </article>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section graphic start -->
        <div class="section panel overflow-hidden-x">
            <div class="section-outer panel pt-4 md:pt-6 lg:pt-8 xl:pt-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner panel vstack gap-0 sm:gap-2 xl:gap-3">
                        <div class="sticky-col-1 panel">
                            {{-- financial market resume  --}}
                            <h2 class="h4 md:h3 m-4">
                                <i class="icon"></i>
                                <span>Estatísticas dos Mercados</span>
                            </h2>
                            {{-- end financial market resume --}}
                            <iframe src="{{ route('site.dashboard') }}"
                                style="width:100%; height:630px; background:white;" class="m-4">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section graphic end -->

        <!-- Section start -->
        <div class="section panel overflow-hidden uc-dark">
            <div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9 bg-gray-25 dark:bg-gray-900">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel overflow-hidden">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <i class="icon unicon-play text-primary"></i>
                                    <span>Assista agora</span>
                                </h2>
                            </div>
                            <div class="block-content overflow-hidden">
                                <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                    <div>
                                        @forelse ($opinionDetach as $data)
                                            <div>
                                                <article
                                                    class="post type-post panel overflow-hidden bg-white dark:bg-gray-900">
                                                    <div class="row child-cols-12 xl:child-cols-6 col-match g-0"
                                                        data-uc-grid>
                                                        <div>
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 h-100">
                                                                    @php
                                                                        // Extrair o ID do vídeo da URL
                                                                        preg_match(
                                                                            '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                                                            $data->url,
                                                                            $matches,
                                                                        );
                                                                        $video_id = $matches[1] ?? null;
                                                                    @endphp
                                                                    <iframe width="100%" height="220"
                                                                        src="https://www.youtube.com/embed/{{ $video_id }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                                {{-- <a href="#news" class="position-cover"></a> --}}
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="post-header panel vstack justify-between gap-4 xl:gap-8 p-2 sm:p-3 lg:py-3 lg:px-4 xl:p-4 text-gray-900 dark:text-white">
                                                                <div
                                                                    class="post-top panel vstack items-start gap-1 xl:gap-2 mb-1 sm:mb-0">
                                                                    <div
                                                                        class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                href="{{ route('site.opinion') }}">Opinioes
                                                                                & Análises</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h4 sm:h3 m-0 text-truncate-2">
                                                                        <a class="text-none" href="{{ $data->url }}"
                                                                            target="_blank">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <p class="fs-6 sm:fs-5 ft-tertiary text-truncate-3">
                                                                        {{ $data->description }}</p>
                                                                </div>
                                                                <div
                                                                    class="post-bottom panel hstack justify-between gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60 d-none sm:d-flex">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time"></i>

                                                                            <span
                                                                                class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('site.opinion') }}"
                                                                        class="link fs-6 fw-bolder text-none duration-250">
                                                                        <span>Ver Mais</span>
                                                                        <i class="icon-1 unicon-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        @empty
                                            <div>
                                                <article
                                                    class="post type-post panel overflow-hidden bg-white dark:bg-gray-900">
                                                    <div class="row child-cols-12 xl:child-cols-6 col-match g-0"
                                                        data-uc-grid>
                                                        <div>
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 h-100">
                                                                    <p class="m-auto text-center text-light">Nenhum artigo encontrado.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </article>
                                            </div>
                                        @endforelse
                                    </div>
                                    <div>
                                        <div class="panel">
                                            <div
                                                class="row child-cols-12 sm:child-cols-6 xl:child-cols-3 g-0 sm:g-2 xl:g-3 col-match">
                                                @forelse ($opinion as $data)
                                                    <div>
                                                        <article
                                                            class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div
                                                                class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2 sm:ratio-16x9">
                                                                    @php
                                                                        // Extrair o ID do vídeo da URL
                                                                        preg_match(
                                                                            '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                                                            $data->url,
                                                                            $matches,
                                                                        );
                                                                        $video_id = $matches[1] ?? null;
                                                                    @endphp
                                                                    <iframe width="100%" height="220"
                                                                        src="https://www.youtube.com/embed/{{ $video_id }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                                {{-- <a href="#news" class="position-cover"></a> --}}
                                                            </div>
                                                            <div
                                                                class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                <div class="post-top panel vstack items-start gap-2">
                                                                    <div
                                                                        class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                href="{{ route('site.opinion') }}">Opiniões
                                                                                & Análises</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                        <a class="text-none" href="{{ $data->url }}"
                                                                            target="_blank">{{ $data->title }}</a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time"></i>

                                                                            <span
                                                                                class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                @empty
                                                    <div>
                                                        <article
                                                            class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div
                                                                class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2 sm:ratio-16x9">
                                                                    <p class="m-auto text-center">Nenhum artigo encontrado.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                @endforelse
                                                {{-- <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2 sm:ratio-16x9">
                                                                <img class="media-cover img image"
                                                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                    data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                                    alt="Agilidade empresarial na era digital: aproveitando a IA e a automação"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="#news" class="position-cover"></a>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="blog-category.html">Tech</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none" href="#news">Agilidade
                                                                        empresarial na era digital: aproveitando a IA e a
                                                                        automação</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"
                                                                            data-uc-tooltip="Mar 1, <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>"></i>
                                                                        <span>7d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2 sm:ratio-16x9">
                                                                <img class="media-cover img image"
                                                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                    data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                                    alt="A Arte da Panificação: Do ​​Pão Clássico aos Doces Artesanais"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="#news" class="position-cover"></a>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="blog-category.html">Network</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none" href="#news">A Arte da
                                                                        Panificação: Do ​​Pão Clássico aos Doces
                                                                        Artesanais</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"
                                                                            data-uc-tooltip="Feb 28, <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>"></i>
                                                                        <span>9d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2 sm:ratio-16x9">
                                                                <img class="media-cover img image"
                                                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                    data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                                    alt="IA e Marketing: Desbloqueando Insights do Cliente"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="#news" class="position-cover"></a>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="blog-category.html">Virtual Reality</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none" href="#news">IA e Marketing:
                                                                        Desbloqueando Insights do Cliente</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"
                                                                            data-uc-tooltip="Feb 22, <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>"></i>
                                                                        <span>15d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="{{ route('site.opinion') }}"
                                    class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden swiper-parent">
            <div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <span>Mundo</span>
                                </h2>
                            </div>
                            <div class="block-content panel">
                                <div class="swiper swiper-match overflow-hidden"
                                    data-uc-swiper="items: 1.15; gap: 8; next: .nav-next; prev: .nav-prev; center: true; center-bounds: true; disable-class: d-none;"
                                    data-uc-swiper-s="items: 2; gap: 16; center: false; center-bounds: false;"
                                    data-uc-swiper-m="items: 3; gap: 16; center: false; center-bounds: false;"
                                    data-uc-swiper-l="items: 4; gap: 24; center: false; center-bounds: false;">
                                    <div class="swiper-wrapper swiper-match">
                                        @forelse($internationalNews as $data)
                                            <div class="swiper-slide">
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ asset('img/news/' . $data->image) }}"
                                                                data-src="{{ asset('img/news/' . $data->image) }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                class="position-cover" data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="{{ route('site.international') }}">{{ $data->category->name }}</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                                <a class="text-none"
                                                                    href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"></i>

                                                                    <span
                                                                        class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>Comentários
                                                                    <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        @empty
                                            <div class="swiper-slide">
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                </article>
                                            </div>
                                        @endforelse
                                        {{-- <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Um guia sobre a ascensão
                                                                da comida gourmet de rua: tendências e principais
                                                                escolhas</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Sep 8, 2023"></i>
                                                                <span>6mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>2</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Virtual Reality</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Gaming in the Age of AI:
                                                                Strategies for Startups</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jun 8, 2023"></i>
                                                                <span>9mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>19</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Media</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Top Independent
                                                                Contractors to Invest in Best of Startups</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Mar 8, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Potential of Immersive
                                                                Technologies help your Business Grow</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 28, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>45</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Virtual Reality and Mental
                                                                Health: Exploring the Therapeutic</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>290</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">O Futuro da Vida
                                                                Sustentável: Impulsionando Estilos de Vida Ecologicamente
                                                                Corretos</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>1</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Smart Homes, Smarter
                                                                Living: Exploring IoT and AI</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 14, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>23d ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>15</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div> --}}
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="d-none sm:d-block">
                                    <div
                                        class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-n2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="{{ route('site.international') }}"
                                    class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden-x">
            <div class="section-outer panel pb-4 md:pb-6 lg:pb-8 xl:pb-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <i class="icon unicon-quotes text-primary"></i>
                                    <span>Tópicos Internacionais</span>
                                </h2>
                            </div>
                            <div class="block-content">
                                <div class="post-layout panel vstack gap-0 sm:gap-2 xl:gap-3">
                                    <div class="panel sticky-col-2">
                                        <div class="row child-cols-12 lg:child-cols g-3" data-uc-grid>
                                            <div>
                                                <div class="row child-cols-12 lg:child-cols g-0 sm:g-2 xl:g-3 col-macth">
                                                    <div>
                                                        @forelse ($recentInternationalDetach as $data)
                                                            <article
                                                                class="post type-post panel vstack overflow-hidden h-100 text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                                <div class="post-media panel overflow-hidden">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-16x9 bg-gray-50 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ asset('img/news/' . $data->image) }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-3 p-2 sm:p-3">
                                                                    <div
                                                                        class="post-top panel vstack items-start gap-1 xl:gap-2 mb-1 sm:mb-0">
                                                                        <div
                                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                            <div
                                                                                class="post-category hstack gap-narrow fw-semibold">
                                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                    href="{{ route('site.international') }}">{{ $data->category->name }}</a>
                                                                            </div>
                                                                        </div>
                                                                        <h3
                                                                            class="post-title h4 xl:h3 m-0 text-truncate-2">
                                                                            <a class="text-none"
                                                                                href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                        </h3>
                                                                        <p
                                                                            class="fs-6 sm:fs-5 ft-tertiary text-truncate-3">
                                                                            {{ $data->subtitle }}</p>
                                                                    </div>
                                                                    <div
                                                                        class="post-bottom panel hstack justify-between gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60 d-none sm:d-flex">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>

                                                                                <span
                                                                                    class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                            class="link fs-6 fw-bolder text-none duration-250">
                                                                            <span>Ver Mais</span>
                                                                            <i class="icon-1 unicon-chevron-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        @empty
                                                            <div class="alert bg-danger text-light text-center m-auto">
                                                                nenhuma notícias Registrada
                                                            </div>
                                                        @endforelse

                                                    </div>
                                                    <div class="lg:col-4">
                                                        <div class="panel">
                                                            <div
                                                                class="row child-cols-12 sm:child-cols-6 lg:child-cols-12 g-0 sm:g-2 xl:g-3">
                                                                @forelse ($recentInternationalNews as $data)
                                                                    <div>
                                                                        <article
                                                                            class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                                            <div
                                                                                class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                                <figure
                                                                                    class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                                        src="{{ asset('img/news/' . $data->image) }}"
                                                                                        data-src="{{ asset('img/news/' . $data->image) }}"
                                                                                        alt="image"
                                                                                        data-uc-img="loading: lazy">
                                                                                    <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                                        class="position-cover"
                                                                                        data-caption="image"></a>
                                                                                </figure>
                                                                            </div>
                                                                            <div
                                                                                class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                                <div
                                                                                    class="post-top panel vstack items-start gap-2">
                                                                                    <div
                                                                                        class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                                        <div
                                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                                href="{{ route('site.international') }}">{{ $data->category->name }}</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h3
                                                                                        class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                                        <a class="text-none"
                                                                                            href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div
                                                                                    class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                                    <div>
                                                                                        <div
                                                                                            class="post-date hstack gap-narrow">
                                                                                            <i
                                                                                                class="icon-narrow unicon-time"></i>

                                                                                            <span
                                                                                                class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#newspost_comment"
                                                                                            class="post-comments text-none hstack gap-narrow">
                                                                                            <i
                                                                                                class="icon-narrow unicon-chat"></i>Comentários
                                                                                            <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>
                                                                @empty
                                                                    <div
                                                                        class="alert bg-danger text-light text-center m-auto">
                                                                        nenhuma notícias Registrada
                                                                    </div>
                                                                @endforelse
                                                                {{-- <div>
                                                                    <article
                                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                                        <div
                                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                            <figure
                                                                                class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                                    data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                                                    alt="image"
                                                                                    data-uc-img="loading: lazy">
                                                                                <a href="#news" class="position-cover"
                                                                                    data-caption="image"></a>
                                                                            </figure>
                                                                        </div>
                                                                        <div
                                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                            <div
                                                                                class="post-top panel vstack items-start gap-2">
                                                                                <div
                                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                                    <div
                                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                                            href="blog-category.html">AI
                                                                                            Powered</a>
                                                                                    </div>
                                                                                </div>
                                                                                <h3
                                                                                    class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                                    <a class="text-none"
                                                                                        href="#news">Joias escondidas:
                                                                                        destinos de viagem subestimados ao
                                                                                        redor do mundo</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div
                                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                                <div>
                                                                                    <div
                                                                                        class="post-date hstack gap-narrow">
                                                                                        <i class="icon-narrow unicon-time"
                                                                                            data-uc-tooltip="Feb 14, <script>
                                                                                                document.write(
                                                                                                    new Date().getFullYear()
                                                                                                )
                                                                                            </script>"></i>
                                                                                        <span>23d ago</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <a href="#newspost_comment"
                                                                                        class="post-comments text-none hstack gap-narrow">
                                                                                        <i
                                                                                            class="icon-narrow unicon-chat"></i>
                                                                                        <span>15</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 d-none xl:d-block">
                                                <div class="sidebar-wrap panel text-center"
                                                    data-uc-sticky="end: .sticky-col-2; offset: 85; media: @m;">
                                                    <a class="mx-auto text-none"
                                                        href="javacript:void(0);"
                                                         rel="nofollow">
                                                        <img class="d-block dark:d-none"
                                                            src="{{ url('site/assets/images/common/50anos2.jpg') }}"
                                                            alt="Ad slot">
                                                        <img class="d-none dark:d-block"
                                                            src="{{ url('site/assets/images/common/50anos2.jpg') }}"
                                                            alt="Ad slot">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 g-0 sm:g-2 xl:g-3 col-match"
                                            data-uc-grid>
                                            @forelse ($internationalNews2 as $data)
                                                <div>
                                                    <article
                                                        class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                        <div
                                                            class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                            <figure
                                                                class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                    src="{{ asset('img/news/' . $data->image) }}"
                                                                    data-src="{{ asset('img/news/' . $data->image) }}"
                                                                    alt="image" data-uc-img="loading: lazy">
                                                                <a href="{{ route('site.international') }}"
                                                                    class="position-cover" data-caption="image"></a>
                                                            </figure>
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                            <div class="post-top panel vstack items-start gap-2">
                                                                <div
                                                                    class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                            href="{{ route('site.international') }}">{{ $data->category->name }}</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                    <a class="text-none"
                                                                        href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                                </h3>
                                                            </div>
                                                            <div
                                                                class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-time"></i>

                                                                        <span
                                                                            class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#newspost_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>Comentários
                                                                        <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            @empty
                                                <div class="alert bg-danger text-light text-center m-auto">
                                                    nenhuma notícias Registrada
                                                </div>
                                            @endforelse
                                            {{-- <div>
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">Tech</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">Agilidade
                                                                    empresarial na era digital: aproveitando a IA e a
                                                                    automação</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Mar 1, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>7d ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>23</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">Network</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">A Arte da
                                                                    Panificação: Do ​​Pão Clássico aos Doces Artesanais</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Feb 28, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>9d ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>112</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="d-none sm:d-block lg:d-none xl:d-block">
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/posts/post3.jpeg') }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="#news" class="position-cover"
                                                                data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="blog-category.html">Virtual Reality</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" href="#news">IA e Marketing:
                                                                    Desbloqueando Insights do Cliente</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"
                                                                        data-uc-tooltip="Feb 22, <script>
                                                                            document.write(
                                                                                new Date().getFullYear()
                                                                            )
                                                                        </script>"></i>
                                                                    <span>15d ago</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>2</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="#news" class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden swiper-parent">
            <div class="section-outer panel pb-4 md:pb-6 lg:pb-8 xl:pb-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <span>Negocios</span>
                                </h2>
                            </div>
                            <div class="block-content panel">
                                <div class="swiper swiper-match overflow-hidden"
                                    data-uc-swiper="items: 1.15; gap: 8; next: .nav-next; prev: .nav-prev; center: true; center-bounds: true; disable-class: d-none;"
                                    data-uc-swiper-s="items: 2; gap: 16; center: false;"
                                    data-uc-swiper-m="items: 3; gap: 16;" data-uc-swiper-l="items: 4; gap: 24;">
                                    <div class="swiper-wrapper swiper-match">
                                        @forelse ($business as $data)
                                            <div class="swiper-slide">
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ asset('img/news/' . $data->image) }}"
                                                                data-src="{{ asset('img/news/' . $data->image) }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                class="position-cover" data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="{{ route('site.business') }}">{{ $data->category->name }}</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                                <a class="text-none"
                                                                    href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"></i>

                                                                    <span
                                                                        class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>Comentários
                                                                    <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        @empty
                                            <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                        @endforelse
                                        {{--  <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Joias escondidas:
                                                                destinos de viagem subestimados ao redor do mundo</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 14, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>23d ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>15</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Trips</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Eco-Tourism: Traveling
                                                                Responsibly and Sustainably</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 8, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>29d ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>20</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Travel</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Viagem Solo: Algumas
                                                                Dicas e Destinos para o Explorador Aventureiro</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 8, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>5</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div> --}}
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="d-none sm:d-block">
                                    <div
                                        class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-n2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="{{ route('site.business') }}"
                                    class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->
        <!-- Section start -->
        {{--  <div class="section panel overflow-hidden swiper-parent">
            <div class="section-outer panel pb-4 md:pb-6 lg:pb-8 xl:pb-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <span>Tecnologias & Inovações</span>
                                </h2>
                            </div>
                            <div class="block-content panel">
                                <div class="swiper swiper-match overflow-hidden"
                                    data-uc-swiper="items: 1.15; gap: 8; next: .nav-next; prev: .nav-prev; center: true; center-bounds: true; disable-class: d-none;"
                                    data-uc-swiper-s="items: 2; gap: 16; center: false;"
                                    data-uc-swiper-m="items: 3; gap: 16;" data-uc-swiper-l="items: 4; gap: 24;">
                                    <div class="swiper-wrapper swiper-match">
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Travel</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Viagem Solo: Algumas Dicas
                                                                e Destinos para o Explorador Aventureiro</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 8, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>5</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Planejamento financeiro
                                                                com tecnologia de IA: como os algoritmos estão
                                                                revolucionando</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 8, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>2</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Startups</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Ferramentas tecnológicas
                                                                para sua gestão de tempo: aumentando a produtividade</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Dec 8, 2023"></i>
                                                                <span>3mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>19</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Um guia sobre a ascensão
                                                                da comida gourmet de rua: tendências e principais
                                                                escolhas</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Sep 8, 2023"></i>
                                                                <span>6mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>2</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="d-none sm:d-block">
                                    <div
                                        class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-n2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="#news" class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <a class="text-none" href="javacript:void(0);" 
                            rel="nofollow">
                            <img class="d-none md:d-block" src="{{ url('site/assets/images/common/50anos3.png') }}"
                                alt="Ad slot">
                            <img class="d-block md:d-none"
                                src="{{ url('site/assets/images/common/ad-slot-mobile-2.jpg') }}" alt="Ad slot">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->

        <!-- Section start -->
        {{--     <div class="section panel overflow-hidden">
                <div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9">
                    <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                        <div class="section-inner">
                            <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel overflow-hidden">
                                <div class="block-header px-2 lg:px-0">
                                    <h2 class="h4 md:h3 m-0">
                                        <span>AI Powered</span>
                                    </h2>
                                </div>
                                <div class="block-content overflow-hidden">
                                    <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                        <div>
                                            <div>
                                                <article class="post type-post panel overflow-hidden bg-white dark:bg-gray-900">
                                                    <div class="row child-cols-12 xl:child-cols-6 col-match g-0" data-uc-grid>
                                                        <div>
                                                            <div class="post-media panel overflow-hidden">
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 h-100">
                                                                    <img class="media-cover img image" src="{{ url('site/assets/images/common/img-fallback.png')}}" data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg')}}" alt="Ferramentas tecnológicas para sua gestão de tempo: aumentando a produtividade" data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="#news" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-4 xl:gap-8 p-2 sm:p-3 lg:py-3 lg:px-4 xl:p-4 text-gray-900 dark:text-white">
                                                                <div class="post-top panel vstack items-start gap-1 xl:gap-2 mb-1 sm:mb-0">
                                                                    <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary" href="blog-category.html">Startups</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h4 sm:h3 m-0 text-truncate-2">
                                                                        <a class="text-none" href="#news">Ferramentas tecnológicas para sua gestão de tempo: aumentando a produtividade</a>
                                                                    </h3>
                                                                    <p class="fs-6 sm:fs-5 ft-tertiary text-truncate-3">Para divulgar a ideia, a empresa embarcou em uma campanha de marketing em massa. Campanhas de TV foram lançadas nos principais mercados da plataforma. Nisi dignissim tortor sed quam sed ipsum ut. Dolor sit amet, consectetur adipiscing elit.</p>
                                                                </div>
                                                                <div class="post-bottom panel hstack justify-between gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60 d-none sm:d-flex">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time" data-uc-tooltip="Dec 8, 2023"></i>
                                                                            <span>3mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#news" class="link fs-6 fw-bolder text-none duration-250">
                                                                        <span>Ver Mais</span>
                                                                        <i class="icon-1 unicon-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel">
                                                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 g-0 sm:g-2 xl:g-3 col-match">
                                                    <div>
                                                        <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque" src="{{ url('site/assets/images/common/img-fallback.png')}}" data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg')}}" alt="image" data-uc-img="loading: lazy">
                                                                    <a href="#news" class="position-cover" data-caption="image"></a>
                                                                </figure>
                                                            </div>
                                                            <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                <div class="post-top panel vstack items-start gap-2">
                                                                    <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary" href="blog-category.html">Gadgets</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                        <a class="text-none" href="#news">A ascensão dos assistentes pessoais com tecnologia de IA: como eles gerenciam</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time" data-uc-tooltip="Mar 8, <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>"></i>
                                                                            <span>1min ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#newspost_comment" class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>2</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque" src="{{ url('site/assets/images/common/img-fallback.png')}}" data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg')}}" alt="image" data-uc-img="loading: lazy">
                                                                    <a href="#news" class="position-cover" data-caption="image"></a>
                                                                </figure>
                                                            </div>
                                                            <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                <div class="post-top panel vstack items-start gap-2">
                                                                    <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary" href="blog-category.html">Startups</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                        <a class="text-none" href="#news">Inovações tecnológicas remodelando o cenário do varejo: pagamentos por IA</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time" data-uc-tooltip="Mar 8, <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>"></i>
                                                                            <span>55min ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#newspost_comment" class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>100</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque" src="{{ url('site/assets/images/common/img-fallback.png')}}" data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg')}}" alt="image" data-uc-img="loading: lazy">
                                                                    <a href="#news" class="position-cover" data-caption="image"></a>
                                                                </figure>
                                                            </div>
                                                            <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                <div class="post-top panel vstack items-start gap-2">
                                                                    <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary" href="blog-category.html">Gadgets</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                        <a class="text-none" href="#news">Equilibrando Trabalho e Bem-Estar: Soluções Tecnológicas para uma Vida Saudável</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time" data-uc-tooltip="Mar 8, <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>"></i>
                                                                            <span>1h ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#newspost_comment" class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>0</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="d-none sm:d-block lg:d-none xl:d-block">
                                                        <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                            <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque" src="{{ url('site/assets/images/common/img-fallback.png')}}" data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg')}}" alt="image" data-uc-img="loading: lazy">
                                                                    <a href="#news" class="position-cover" data-caption="image"></a>
                                                                </figure>
                                                            </div>
                                                            <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                                <div class="post-top panel vstack items-start gap-2">
                                                                    <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary" href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                        <a class="text-none" href="#news">A importância do sono: dicas para um melhor descanso e recuperação</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-time" data-uc-tooltip="Mar 8, <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>"></i>
                                                                            <span>2h ago</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#newspost_comment" class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>0</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-footer cstack items-center lg:mt-2">
                                    <a href="#news" class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                        <span>Ver Mais</span>
                                        <i class="icon icon-2 unicon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden swiper-parent">
            <div class="section-outer panel pb-4 md:pb-6 lg:pb-8 xl:pb-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 mt-4">
                                    <span>Tecnologias & Inovações</span>
                                </h2>
                            </div>
                            <div class="block-content panel">
                                <div class="swiper swiper-match overflow-hidden"
                                    data-uc-swiper="items: 1.15; gap: 8; next: .nav-next; prev: .nav-prev; center: true; center-bounds: true; disable-class: d-none;"
                                    data-uc-swiper-s="items: 2; gap: 16; center: false; center-bounds: false;"
                                    data-uc-swiper-m="items: 3; gap: 16; center: false; center-bounds: false;"
                                    data-uc-swiper-l="items: 4; gap: 24; center: false; center-bounds: false;">
                                    <div class="swiper-wrapper swiper-match">
                                        @forelse ($technologyinnovation as $data)
                                            <div class="swiper-slide">
                                                <article
                                                    class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div
                                                        class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ asset('img/news/' . $data->image) }}"
                                                                data-src="{{ asset('img/news/' . $data->image) }}"
                                                                alt="image" data-uc-img="loading: lazy">
                                                            <a href="{{ route('site.details', ['news' => $data->slug]) }}"
                                                                class="position-cover" data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div
                                                                class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                        href="{{ route('site.technologyinnovation') }}">{{ $data->category->name }}</a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                                <a class="text-none"
                                                                    href="{{ route('site.details', ['news' => $data->slug]) }}">{{ $data->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"></i>

                                                                    <span
                                                                        class="c_date id-color">{{ $data->updated_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#newspost_comment"
                                                                    class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>Comentários
                                                                    <span>{{ $newsCommentsQty->where('news_id', $data->id)->count() }}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        @empty
                                            <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                        @endforelse
                                        {{-- <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Um guia sobre a ascensão
                                                                da comida gourmet de rua: tendências e principais
                                                                escolhas</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Sep 8, 2023"></i>
                                                                <span>6mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>2</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Virtual Reality</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Gaming in the Age of AI:
                                                                Strategies for Startups</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jun 8, 2023"></i>
                                                                <span>9mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>19</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Media</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Top Independent
                                                                Contractors to Invest in Best of Startups</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Mar 8, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Potential of Immersive
                                                                Technologies help your Business Grow</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 28, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>45</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Virtual Reality and
                                                                Mental Health: Exploring the Therapeutic</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>290</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">O Futuro da Vida
                                                                Sustentável: Impulsionando Estilos de Vida Ecologicamente
                                                                Corretos</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>1</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Smart Homes, Smarter
                                                                Living: Exploring IoT and AI</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 14, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>23d ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>15</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div> --}}
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="d-none sm:d-block">
                                    <div
                                        class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-n2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="{{ route('site.technologyinnovation') }}"
                                    class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->

        <!-- Section start -->
        {{-- <div class="section panel overflow-hidden swiper-parent">
            <div class="section-outer panel pb-4 md:pb-6 lg:pb-8 xl:pb-9">
                <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header px-2 lg:px-0">
                                <h2 class="h4 md:h3 m-0">
                                    <span>Sociedade</span>
                                </h2>
                            </div>
                            <div class="block-content panel">
                                <div class="swiper swiper-match overflow-hidden"
                                    data-uc-swiper="items: 1.15; gap: 8; next: .nav-next; prev: .nav-prev; center: true; center-bounds: true; disable-class: d-none;"
                                    data-uc-swiper-s="items: 2; gap: 16; center: false;"
                                    data-uc-swiper-m="items: 3; gap: 16;" data-uc-swiper-l="items: 4; gap: 24;">
                                    <div class="swiper-wrapper swiper-match">
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Media</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Top Independent
                                                                Contractors to Invest in Best of Startups</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Mar 8, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-1.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Potential of Immersive
                                                                Technologies help your Business Grow</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Feb 28, 2023"></i>
                                                                <span>1yr ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>45</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-2.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">Virtual Reality and
                                                                Mental Health: Exploring the Therapeutic</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>290</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article
                                                class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div
                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                                            alt="image" data-uc-img="loading: lazy">
                                                        <a href="#news" class="position-cover"
                                                            data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div
                                                            class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary dark:text-primary"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 md:h5 m-0 text-truncate-2">
                                                            <a class="text-none" href="#news">O Futuro da Vida
                                                                Sustentável: Impulsionando Estilos de Vida Ecologicamente
                                                                Corretos</a>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"
                                                                    data-uc-tooltip="Jan 12, <script>
                                                                        document.write(
                                                                            new Date().getFullYear()
                                                                        )
                                                                    </script>"></i>
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#newspost_comment"
                                                                class="post-comments text-none hstack gap-narrow">
                                                                <i class="icon-narrow unicon-chat"></i>
                                                                <span>1</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="d-none sm:d-block">
                                    <div
                                        class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-40px h-40px ms-n2 lg:m-0 z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-footer cstack items-center lg:mt-2">
                                <a href="#news"
                                    class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                    <span>Ver Mais</span>
                                    <i class="icon icon-2 unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Section start -->

        <!-- Section start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9 bg-white dark:bg-gray-900">
                <div class="container max-w-2xl px-2 lg:px-4 xl:px-0">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                            <div class="block-header">
                                <h2 class="h4 md:h3 m-0">
                                    <span>Mais lido</span>
                                </h2>
                            </div>
                            <div class="block-content panel overflow-hidden">
                                <div class="row child-cols-12 sm:child-cols-6 xl:child-cols-3 g-4 xl:g-6 sep">
                                    @foreach ($newsRanking as $data)
                                        <div>
                                            <article
                                                class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                                <div class="min-w-40px text-center">
                                                    <h3 class="h3 lg:h2 m-0 text-primary">{{ $loop->index + 1 }}</h3>
                                                </div>
                                                <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                    <a class="text-none"
                                                        href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                </h6>
                                            </article>
                                        </div>
                                    @endforeach
                                    {{-- <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">2</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">Inovações tecnológicas remodelando o
                                                    cenário do varejo: pagamentos por IA</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">3</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">Equilibrando Trabalho e Bem-Estar:
                                                    Soluções Tecnológicas para uma Vida Saudável</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">4</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">A importância do sono: dicas para um
                                                    melhor descanso e recuperação</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">5</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">O Futuro da Vida Sustentável:
                                                    Impulsionando Estilos de Vida Ecologicamente Corretos</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">6</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">Agilidade empresarial na era
                                                    digital: aproveitando a IA e a automação</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">7</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">A Arte da Panificação: Do ​​Pão
                                                    Clássico aos Doces Artesanais</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div>
                                        <article
                                            class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                            <div class="min-w-40px text-center">
                                                <h3 class="h3 lg:h2 m-0 text-primary">8</h3>
                                            </div>
                                            <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                <a class="text-none" href="#news">IA e Marketing: Desbloqueando
                                                    Insights do Cliente</a>
                                            </h6>
                                        </article>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section start -->
    </div>

    <!-- Wrapper end -->

@endsection
