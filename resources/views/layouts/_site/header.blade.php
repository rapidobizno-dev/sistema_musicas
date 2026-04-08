<!-- Header start -->
<header class="uc-header header-three uc-navbar-sticky-wrap z-999"
    data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
    <nav class="uc-navbar-container fs-6 z-1">
        <div class="uc-center-navbar panel z-2 border-4 border-top border-primary bg-black uc-dark">
            <div class="container max-w-2xl px-2 lg:px-4 xl:px-0">
                <div class="uc-navbar items-center text-gray-900 dark:text-white"
                    data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;" style="height: 60px">
                    <div class="uc-navbar-left gap-2 lg:gap-4">
                        <div>
                            <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                        <div class="uc-logo text-white">
                            <a href="/">
                                <img class="w-100px text-dark dark:text-white"
                                    src="{{ url('site/assets/images/demo-eight/radar-img/radar-logo.png') }}"
                                    alt="News5" data-uc-svg>
                            </a>
                        </div>
                        <ul class="uc-navbar-nav gap-3 fs-5 fw-bolder ms-2 d-none lg:d-flex"
                            style="--uc-nav-height: 60px">
                            {{-- <li><a href="/">Inicio</a></li> --}}
                            <li><a href="{{ route('site.national') }}">Nacional</a></li>
                            <li><a href="{{ route('site.international') }}">Internacional</a></li>
                            <li><a href="{{ route('site.financialmarket') }}">Mercado Financeiro</a></li>
                            {{-- <li>
                                <a href="{{ route('site.business')}}">Economia<span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                            <li><a href="shop.html">Economia Azul</a></li>
                                            <li><a href="shop-3.html">Economia Verde</a></li>
                                            <li><a href="shop-2.html">Economia Recursos Minerais</a></li>
                                            <li><a href="shop-product-detail.html">Setor Bancário</a></li>
                                            <li><a href="shop-product-detail-2.html">Agronegócio</a></li>
                                        </ul>
                                        <div class="col-3">
                                            <div class="panel w-100 overflow-hidden">
                                                <div class="ratio ratio-3x4 overflow-hidden rounded">
                                                    <img src="{{ url('site/assets/images/common/menu-banner.jpg') }}"
                                                        alt="Let's build anything with News5!">
                                                    <a class="position-cover"
                                                        href="https://themeforest.net/user/reacthemes/portfolio"
                                                        target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li> --}}
                            <li>
                                <a href="#">Economia <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols col-match g-3">
                                        <div class="col-2">
                                            <div class="uc-navbar-switcher-nav p-1 rounded bg-gray-25 dark:bg-gray-800">
                                                <ul class="uc-tab-left fs-5 text-end"
                                                    data-uc-tab="connect: #uc-navbar-switcher-tending; animation: uc-animation-slide-right-small, uc-animation-slide-left-small">
                                                    <li><a href="#">Economia Azul</a></li>
                                                    <li><a href="#">Economia Verde</a></li>
                                                    <li><a href="#">Recursos Minerais</a></li>
                                                    <li><a href="#">Sector Bancário</a></li>
                                                    <li><a href="#">Agronegócio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div id="uc-navbar-switcher-tending" class="uc-navbar-switcher uc-switcher">
                                                <div class="row child-cols col-match g-2">
                                                    @forelse ($blueEconomy as $data)
                                                        <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 overflow-hidden">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data])}}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                    <div
                                                                        class="post-meta-catgory position-absolute top-0 start-0 m-1 fs-7 px-narrow bg-primary d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none text-white"
                                                                                href="{{ route('site.economy', ['id' => $data->category->id]) }}">{{ $data->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 w-100">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none"
                                                                            href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="post-meta panel hstack gap-2 fs-7 fw-normal text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>
                                                                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
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
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    @endforelse
                                                    <div class="col-12">
                                                        @if($blueEconomyId)
                                                        <a href="{{ route('site.economy',  $blueEconomyId->id) }}"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @else 
                                                        <a href="javascript:void(0);"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="row child-cols col-match g-2">
                                                    @forelse ($greenEconomy as $data)
                                                         <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 overflow-hidden">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data])}}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                    <div
                                                                        class="post-meta-catgory position-absolute top-0 start-0 m-1 fs-7 px-narrow bg-primary d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none text-white"
                                                                                href="{{ route('site.economy', ['id' => $data->category->id]) }}">{{ $data->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 w-100">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none"
                                                                            href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="post-meta panel hstack gap-2 fs-7 fw-normal text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>
                                                                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
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
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    @endforelse
                                                    <div class="col-12 item-center">
                                                         @if($greenEconomyId)
                                                        <a href="{{ route('site.economy',  $greenEconomyId->id) }}"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @else 
                                                        <a href="javascript:void(0);"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row child-cols col-match g-2">
                                                    @forelse ($mineralResource as $data)
                                                        <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 overflow-hidden">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data])}}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                    <div
                                                                        class="post-meta-catgory position-absolute top-0 start-0 m-1 fs-7 px-narrow bg-primary d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none text-white"
                                                                                href="{{ route('site.economy', ['id' => $data->category->id]) }}">{{ $data->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 w-100">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none"
                                                                            href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="post-meta panel hstack gap-2 fs-7 fw-normal text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>
                                                                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
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
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    @endforelse
                                                    <div class="col-12">
                                                        @if($mineralResourceId)
                                                        <a href="{{ route('site.economy', ['id' => $mineralResourceId->id]) }}"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @else
                                                        <a href="javascript:void(0);"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row child-cols col-match g-2">
                                                    @forelse ($bankingSector as $data)
                                                         <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 overflow-hidden">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data])}}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                    <div
                                                                        class="post-meta-catgory position-absolute top-0 start-0 m-1 fs-7 px-narrow bg-primary d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none text-white"
                                                                                href="{{ route('site.economy', ['id' => $data->category->id]) }}">{{ $data->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 w-100">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none"
                                                                            href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="post-meta panel hstack gap-2 fs-7 fw-normal text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>
                                                                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
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
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    @endforelse
                                                    <div class="col-12">
                                                        @if($bankingSectorId)
                                                        <a href="{{ route('site.economy', ['id' => $bankingSectorId->id]) }}"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @else
                                                        <a href="javascript:void(0);"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row child-cols col-match g-2">
                                                    @forelse ($agribusiness as $data)
                                                         <div>
                                                            <article
                                                                class="post type-post panel hstack sm:vstack items-start gap-2 overflow-hidden">
                                                                <div
                                                                    class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                                    <figure
                                                                        class="featured-image m-0 ratio ratio-3x2 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                            data-src="{{ asset('img/news/' . $data->image) }}"
                                                                            alt="image" data-uc-img="loading: lazy">
                                                                        <a href="{{ route('site.details', ['news' => $data])}}"
                                                                            class="position-cover"
                                                                            data-caption="image"></a>
                                                                    </figure>
                                                                    <div
                                                                        class="post-meta-catgory position-absolute top-0 start-0 m-1 fs-7 px-narrow bg-primary d-none sm:d-block">
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="text-none text-white"
                                                                                href="{{ route('site.economy', ['id' => $data->category->id]) }}">{{ $data->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="post-header panel vstack justify-between gap-1 w-100">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none"
                                                                            href="{{ route('site.details', ['news' => $data]) }}">{{ $data->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="post-meta panel hstack gap-2 fs-7 fw-normal text-black dark:text-white text-opacity-60">
                                                                        <div>
                                                                            <div class="post-date hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-time"></i>
                                                                                <span>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
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
                                                            </article>
                                                        </div>
                                                    @empty
                                                        <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                                    @endforelse
                                                    <div class="col-12">
                                                        @if($agribusinessId)
                                                        <a href="{{ route('site.economy', ['id' => $agribusinessId->id]) }}"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @else
                                                        <a href="javascript:void(0);"
                                                            class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                            <span>Ver Mais</span>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <a href="{{ route('site.economy', [$categoryId->id]) }}"
                                                class=" gap-0 btn-sm btn text-light lg:btn-md  px-3 lg:px-6">
                                                <span>Ver Mais</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('site.technologyinnovation') }}">Tecnologia & Inovações</a></li>
                            <li>
                                <a href="{{ route('site.opinion') }}">Opiniões & Análises{{-- <span data-uc-navbar-parent-icon></span> --}}</a>
                                {{-- <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                            <li><a href="#">Videos</a></li>
                                            <li><a href="#">Podcast</a></li>
                                            <li><a href="#ml">Galeria de Fotografias</a></li>
                                        </ul>
                                        <div class="col-3">
                                            <div class="panel w-100 overflow-hidden">
                                                <div class="ratio ratio-3x4 overflow-hidden rounded">
                                                    <img src="{{ url('site/assets/images/common/menu-banner.jpg') }}"
                                                        alt="Let's build anything with News5!">
                                                    <a class="position-cover"
                                                        href="https://themeforest.net/user/reacthemes/portfolio"
                                                        target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </li>
                            {{-- <li>
                                <a href="#">Sobre Nós<span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                            <li class="#">Internacional</li>
                                            <li><a href="#">África</a></li>
                                            <li><a href="#">PALOP</a></li>
                                            <li><a href="#">Mundo</a></li>
                                        </ul>
                                        <div class="col-3">
                                            <div class="panel w-100 overflow-hidden">
                                                <div class="ratio ratio-3x4 overflow-hidden rounded">
                                                    <img src="{{ url('site/assets/images/common/menu-banner.jpg') }}"
                                                        alt="Let's build anything with News5!">
                                                    <a class="position-cover"
                                                        href="https://themeforest.net/user/reacthemes/portfolio"
                                                        target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li> --}}
                            {{-- <li><a href="#">Sociedade</a></li> --}}
                            {{-- <li><a href="blog-category.html">Multimédia</a></li>
                            <li><a href="blog-category.html">Internacional</a></li> --}}
                            {{--  <li>
                                <a href="#">Outros <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <div>
                                            <div class="row child-cols g-4">
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Multimédia</li>
                                                        <li><a href="#">Videos</a></li>
                                                        <li><a href="#">Podcast</a></li>
                                                        <li><a href="#ml">Galeria de Fotografias</a></li>
                                                        <li><a href="#l">Classic Blog</a></li>
                                                        <li><a href="#l">Gaming</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#ml">Newspaper</a></li>
                                                        <li><a href="#ml">Magazine</a></li>
                                                        <li><a href="#l">Travel</a></li>
                                                        <li><a href="#">Food</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="#">Internacional</li>
                                                        <li><a href="#">África</a></li>
                                                        <li><a href="#">PALOP</a></li>
                                                        <li><a href="#">Mundo</a></li>
                                                        <li><a href="blog-3cols.html">Grid 3 cols</a></li>
                                                        <li><a href="blog-4cols.html">Grid 4 cols</a></li>
                                                        <li><a href="blog-category.html">Category</a></li>
                                                        <li><a href="blog-author.html">Author</a></li>
                                                        <li><a href="blog-details.html">Blog single</a></li>
                                                        <li><a href="blog-details-2.html">Blog single v2</a></li>
                                                        <li><a href="blog-details-3.html">Blog single v3</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Sociedade</li>
                                                        <li><a href="shop.html">Educação</a></li>
                                                        <li><a href="shop-3.html">Saúde</a></li>
                                                        <li><a href="shop-2.html">Direitos Humanos</a></li>
                                                        <li><a href="shop-product-detail.html">Cultura</a></li>
                                                        <li><a href="shop-product-detail-2.html">Desporto</a></li>
                                                        <li><a href="shop-cart.html">Cart</a></li>
                                                        <li><a href="shop-cart-2.html">Cart v2</a></li>
                                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                                        <li><a href="shop-checkout-2.html">Checkout v2</a></li>
                                                        <li><a href="shop-order.html">Order confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Publicações</li>
                                                        <li><a href="sign-in.html">Livros</a></li>
                                                        <li><a href="sign-up.html">Avisos</a></li>
                                                        <li><a href="reset-password.html">Reset password</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="page-terms.html">Terms of service</a></li>
                                                        <li><a href="page-privacy.html">Privacy policy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="panel w-100 overflow-hidden">
                                                <div class="ratio ratio-3x4 overflow-hidden rounded">
                                                    <img src="{{ url('site/assets/images/common/menu-banner.jpg') }}"
                                                        alt="Let's build anything with News5!">
                                                    <a class="position-cover"
                                                        href="https://themeforest.net/user/reacthemes/portfolio"
                                                        target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Contacto</a></li> --}}
                        </ul>
                    </div>
                    <div class="uc-navbar-right gap-2 lg:gap-4">
                        {{-- <div class="uc-modes-trigger w-32px h-32px border fs-4 fw-medium rounded-circle border-white border-opacity-25 text-dark dark:text-white d-none sm:d-inline-flex"
                            data-darkmode-toggle="">
                            <label class="switch">
                                <span class="sr-only">Dark mode toggle</span>
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div> --}}
                        {{--  <button type="button" class="btn h-40px p-0 text-white border-0 lg:d-inline-flex"
                            data-uc-toggle="target: #uc-account-modal">
                            <i class="icon icon-narrow unicon-user-filled"></i>
                            <span>Log in</span>
                        </button> --}}
                        <div class="vr h-16px my-auto"></div>
                        <div class="uc-navbar-item d-none xl:d-inline-flex">
                            <ul class="nav-x gap-2">
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" href="#fb"><i
                                            class="icon icon-1 unicon-logo-facebook"></i></a>
                                </li>
                                {{--  <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" href="#fl"><i
                                            class="icon icon-1 unicon-logo-flickr"></i></a>
                                </li> --}}
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" href="#in"><i
                                            class="icon icon-1 unicon-logo-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" href="#yt"><i
                                            class="icon icon-1 unicon-logo-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="uc-navbar-item">
                            <a class="uc-search-trigger cstack text-none text-dark dark:text-white"
                                href="#uc-search-modal" data-uc-toggle>
                                <i class="icon icon-1 fw-bold unicon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Header end -->
