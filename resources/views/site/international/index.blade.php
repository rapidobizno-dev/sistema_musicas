@extends('layouts._site.main')
@section('title', 'Radar economico - Internacional')
@section('content')

{{-- reforçando o estilos das imagens e paginação --}}
<link rel="stylesheet" href="{{ url('site/assets/css/style.css') }}">

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap overflow-hidden-x">
        <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
            <div class="container max-w-xl">
                <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                    <li><a href="/">Inicio</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><span class="opacity-50">Todas a notícias internacionais</span></li>
                </ul>
            </div>
        </div>

        <div class="section py-3 sm:py-6 lg:py-9">
            <div class="container max-w-xl">
                <div class="panel vstack gap-3 sm:gap-6 lg:gap-9">
                    <header class="page-header vstack justify-center items-center text-center max-w-500px mx-auto">
                        <h1 class="h4 lg:h1">Radar Econômico Internacional</h1>
                        <p class="fs-6 lg:fs-5 opacity-60">Todas as novidades sobre a economia internacional</p>
                    </header>
                    <div class="row g-4 xl:g-8">
                        <div class="col">
                            <div class="panel text-center">
                                <div
                                    class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 col-match gy-4 xl:gy-6 gx-2 sm:gx-4">
                                    @forelse ($news as $data)
                                        <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="{{ asset('img/news/' . $data->image)}}"
                                                        alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                        data-uc-img="loading: lazy">
                                                    <a href="{{ route('site.details', ['news' => $data])}}" class="position-cover"
                                                        data-caption="The Rise of AI-Powered Personal Assistants: How They Manage"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="#category">{{ $data->category->name }}</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                {{-- <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span> --}}
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="{{ route('site.details', ['news' => $data])}}">{{ $data->title}}</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <{{-- div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="David Peterson"><img
                                                                                src="../assets/images/avatars/01.png"
                                                                                alt="David Peterson"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">David
                                                                            Peterson</a>
                                                                    </div>
                                                                </> --}}
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>
                                                                            {{ \Carbon\Carbon::parse($data->updated_at)->translatedFormat('F j, Y \a\s g:i a') }}
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
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @empty
                                       <p class="m-auto text-center">Nenhum artigo encontrado.</p>
                                    @endforelse
                                    {{-- <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-02.jpg"
                                                        alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Startups</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Tech Innovations Reshaping
                                                        the Retail Landscape: AI Payments</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Jason Blake"><img
                                                                                src="../assets/images/avatars/05.png"
                                                                                alt="Jason Blake"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Jason
                                                                            Blake</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Mar 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>100</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-03.jpg"
                                                        alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Balancing Work and Wellness: Tech Solutions for Healthy"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Gadgets</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Balancing Work and
                                                        Wellness: Tech Solutions for Healthy</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Sarah Eddrissi"><img
                                                                                src="../assets/images/avatars/03.png"
                                                                                alt="Sarah Eddrissi"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Sarah
                                                                            Eddrissi</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Mar 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>0</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-04.jpg"
                                                        alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="The Importance of Sleep: Tips for Better Rest and Recovery"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">AI Powered</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">The Importance of Sleep:
                                                        Tips for Better Rest and Recovery</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Sarah Eddrissi"><img
                                                                                src="../assets/images/avatars/03.png"
                                                                                alt="Sarah Eddrissi"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Sarah
                                                                            Eddrissi</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Mar 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>0</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-05.jpg"
                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">The Future of
                                                        Sustainable Living: Driving Eco-Friendly Lifestyles</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Anna Luis"><img
                                                                                src="../assets/images/avatars/04.png"
                                                                                alt="Anna Luis"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Anna
                                                                            Luis</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Mar 7,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>1</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-06.jpg"
                                                        alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Business Agility the Digital Age: Leveraging AI and Automation"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Tech</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Business Agility the
                                                        Digital Age: Leveraging AI and Automation</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Nisi Nyung"><img
                                                                                src="../assets/images/avatars/08.png"
                                                                                alt="Nisi Nyung"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Nisi
                                                                            Nyung</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Mar 1,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>23</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-07.jpg"
                                                        alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="The Art of Baking: From Classic Bread to Artisan Pastries"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Network</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">The Art of Baking: From
                                                        Classic Bread to Artisan Pastries</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Nisi Nyung"><img
                                                                                src="../assets/images/avatars/08.png"
                                                                                alt="Nisi Nyung"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Nisi
                                                                            Nyung</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Feb 28,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>112</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-08.jpg"
                                                        alt="AI and Marketing: Unlocking Customer Insights"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="AI and Marketing: Unlocking Customer Insights"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Virtual Reality</a>
                                                </div>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">AI and Marketing:
                                                        Unlocking Customer Insights</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Rico Santos"><img
                                                                                src="../assets/images/avatars/07.png"
                                                                                alt="Rico Santos"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Rico
                                                                            Santos</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Feb 22,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>2</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-09.jpg"
                                                        alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Hidden Gems: Underrated Travel Destinations Around the World"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Hidden Gems: Underrated
                                                        Travel Destinations Around the World</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="David Peterson"><img
                                                                                src="../assets/images/avatars/01.png"
                                                                                alt="David Peterson"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">David
                                                                            Peterson</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Feb 14,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>15</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-10.jpg"
                                                        alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Eco-Tourism: Traveling Responsibly and Sustainably"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Trips</a>
                                                </div>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Eco-Tourism: Traveling
                                                        Responsibly and Sustainably</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="David Peterson"><img
                                                                                src="../assets/images/avatars/01.png"
                                                                                alt="David Peterson"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">David
                                                                            Peterson</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Feb 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>20</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-11.jpg"
                                                        alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Travel</a>
                                                </div>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">Solo Travel: Some Tips
                                                        and Destinations for the Adventurous Explorer</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Peter Sawyer"><img
                                                                                src="../assets/images/avatars/02.png"
                                                                                alt="Peter Sawyer"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Peter
                                                                            Sawyer</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Jan 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>5</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="post type-post panel vstack gap-2">
                                            <div class="post-image panel overflow-hidden">
                                                <figure
                                                    class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                        src="../assets/images/common/img-fallback.png"
                                                        data-src="../assets/images/demo-eight/posts/img-12.jpg"
                                                        alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                        data-uc-img="loading: lazy">
                                                    <a href="blog-details.html" class="position-cover"
                                                        data-caption="AI-Powered Financial Planning: How Algorithms Revolutionizing"></a>
                                                </figure>
                                                <div
                                                    class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                    <a class="text-none" href="blog-category.html">Tech</a>
                                                </div>
                                                <div
                                                    class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                            </div>
                                            <div class="post-header panel vstack gap-1 lg:gap-2">
                                                <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                    <a class="text-none" href="blog-details.html">AI-Powered Financial
                                                        Planning: How Algorithms Revolutionizing</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Sarah Eddrissi"><img
                                                                                src="../assets/images/avatars/03.png"
                                                                                alt="Sarah Eddrissi"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Sarah
                                                                            Eddrissi</a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>Jan 8,
                                                                            <script>
                                                                                document.write(
                                                                                    new Date().getFullYear()
                                                                                )
                                                                            </script>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#post_comment"
                                                                        class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                        <span>2</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> --}}
                                </div>
                                <div
                                    class="nav-pagination pt-3 mt-6 lg:mt-9 border-top border-gray-100 dark:border-gray-800">
                                    <ul class="nav-x uc-pagination hstack gap-1 justify-center ft-secondary"
                                        data-uc-margin="">
                                        {{ $news->links() }}
                                        {{-- <li>
                                            <a href="#"><span class="icon icon-1 unicon-chevron-left"></span></a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#" class="uc-active">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="uc-disabled"><span>…</span></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">9</a></li>
                                        <li>
                                            <a href="#"><span class="icon icon-1 unicon-chevron-right"></span></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
    </div>

    <!-- Wrapper end -->

@endsection
