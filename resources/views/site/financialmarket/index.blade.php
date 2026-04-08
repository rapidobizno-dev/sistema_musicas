@extends('layouts._site.main')
@section('title', 'Radar Economico - Mecado Financeiro')
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
                    <li><span class="opacity-50">Mercado Fincanceiro Angolano</span></li>
                </ul>
            </div>
        </div>

        <article class="post type-post single-post pb-4 lg:pb-6 xl:pb-9">
            <div class="container-full">
                <figure class="featured-image m-0">
                    <figure
                        class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                            src="{{ url('site/assets/images/common/img-fallback.png')}}"
                            data-src="{{ url('site/assets/images/demo-eight/news/6256878.jpg') }}"
                            alt="Mercado Fincanceiro Angolano" data-uc-img="loading: lazy">
                    </figure>
                </figure>
                <div class="post-content-wrap panel">
                    <aside class="post-share-float d-none lg:d-block" data-uc-sticky="bottom: .post-author;">
                        <div class="vstack justify-center items-center gap-2 position-absolute top-0 end-0 m-4 xl:m-9">
                            <span class="ft-secondary">Share</span>
                            <ul class="social-icons nav-y justify-center gap-2 text-gray-900 dark:text-white">
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110"
                                        href="https://dribbble.com/unistudioinc"><i
                                            class="unicon-logo-x-filled icon-1 xl:icon-2"></i></a>
                                </li>
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110 text-white bg-primary border-primary"
                                        href="https://ui8.net/users/unistudio"><i
                                            class="unicon-logo-linkedin icon-1 xl:icon-2"></i></a>
                                </li>
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110"
                                        href="https://themeforest.net/user/unistudioco"><i
                                            class="unicon-logo-facebook icon-1 xl:icon-2"></i></a>
                                </li>
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110"
                                        href="https://unistudio.co/unicore/"><i
                                            class="unicon-logo-pinterest icon-1 xl:icon-2"></i></a>
                                </li>
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110"
                                        href="https://unistudio.co/unicore/"><i
                                            class="unicon-email icon-1 xl:icon-2"></i></a>
                                </li>
                                <li>
                                    <a class="w-40px xl:w-48px h-40px xl:h-48px d-inline-flex justify-center items-center rounded-circle border transition-all duration-200 ease-in hover:scale-110"
                                        href="https://unistudio.co/unicore/"><i
                                            class="unicon-link icon-1 xl:icon-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="container max-w-1000px">
                        <div class="post-header mt-4 lg:mt-6 xl:mt-8">
                            <div
                                class="panel vstack items-center gap-2 md:gap-3 text-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto">
                                <h1 class="h4 sm:h3 xl:h1 m-0">Resumo dos Mercados</h1>
                            </div>
                        </div>
                        <hr class="my-4 lg:my-6 xl:my-4 opacity-100 border-gray-100 dark:border-gray-700">
                        {{-- <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                            <p>She started her blog exactly six months before I launched Camels & Chocolate, and she really
                                set the bar high for my own blog birthday, Y’all this summer! I’ve already been
                                brainstorming party ideas … who wants to come? It’s no coincidence that Buster Keaton and
                                Charlot’s movies of the and award-winning chefs about what exactly makes their hometowns In
                                fact, not being able to rely on spoken word made them better storytellers. They fully
                                understood and used the power of showing without words. A range of amenities provides many
                                things to do in Bellevue. About 40 percent of the city’s population are minorities, which
                                contributes to an overall diverse range of lifestyles and ideas.</p>
                            <p class="mt-3">I talked to climbers, Olympic mountain bikers, musicians, and award-winning
                                chefs about what exactly makes their hometowns so special and fun.</p>
                            <div class="panel mt-3">
                                <figure class="float-end ms-3 mb-1">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 sm:w-300px rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/demo-eight/posts/post-1.jpg"
                                            alt="Holding flower, by Anthony Tran" data-uc-img="loading: lazy">
                                        <a href="../assets/images/demo-eight/posts/post-1.jpg" class="position-cover"
                                            data-caption="Holding flower, by Anthony Tran"></a>
                                    </figure>
                                    <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Holding
                                        flower, by Anthony Tran</figcaption>
                                </figure>
                                <p>Bike paths and sidewalks make getting to and from the city’s many festivals, museums,
                                    restaurants and music venues easy. A range of amenities provides many things to do in
                                    Bellevue. About 40 percent of the city’s population are minorities, which contributes to
                                    an overall diverse range of lifestyles and ideas.</p>
                                <p class="mt-3">While Denver sits at the base of the Rocky Mountains, it’s not considered
                                    a mountain town since it takes at least an hour to get to the Rockies for snowboarding
                                    and ski activities, a local expert explained. Olympic mountain bikers, musicians, and
                                    award-winning chefs about what exactly makes their hometowns so special and fun.</p>
                                <p class="mt-3">In fact, not being able to rely on spoken word made them better
                                    storytellers. They fully understood and used the power of showing without words. They
                                    fully understood and used the power of showing without words. They fully understood and
                                    used the power of showing without words.</p>
                            </div>
                            <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">Capital of Texas</h4>
                            <p>Visual storytelling is simply the way most brands will decide to go in 2016 & beyond, as they
                                try to tell their story to their customers the oldest and most important unwritten rule in
                                film industry says that you shouldn’t rely much on words to tell your story. In fact, you
                                should rely on them as less as possible. It’s no coincidence that Buster Keaton and
                                Charlot’s movies remain among the biggest classic movies of all time. In fact, not being
                                able to rely on spoken word made them better storytellers. They fully understood and used
                                the power of showing without words.</p>
                            <p class="mt-3">While Denver sits at the base of the Rocky Mountains, it’s not considered a
                                mountain town since it takes at least an hour to get to the Rockies for snowboarding and ski
                                activities, a local expert explained sits at the base of the Rocky Mountains, it’s not
                                considered a mountain town since it takes at least an hour to get to the Rockies for
                                snowboarding and ski activities, a local expert explained.</p>
                            <figure class="my-3 sm:my-4">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                        src="../assets/images/common/img-fallback.png"
                                        data-src="../assets/images/demo-eight/posts/post-2.jpg" alt="Pink Marketing, by Mak"
                                        data-uc-img="loading: lazy">
                                    <a href="../assets/images/demo-eight/posts/post-2.jpg" class="position-cover"
                                        data-caption="Pink Marketing, by Mak"></a>
                                </figure>
                                <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Pink Marketing,
                                    by Mak</figcaption>
                            </figure>
                            <p>
                                While Denver sits at the base of the Rocky Mountains, it’s not considered a mountain town
                                since it takes at least an hour to get to the Rockies for snowboarding and ski activities, a
                                local expert explained. Olympic mountain bikers, musicians, and award-winning chefs about
                                what exactly makes their hometowns so special and fun. <br>
                                In fact, not being able to rely on spoken word made them better storytellers. They fully
                                understood and used the power of showing without words.
                            </p>
                            <p class="mt-3">Probably the oldest and most important unwritten rule in film industry says
                                that you shouldn’t rely much on words to tell your story. In fact, you should rely on them
                                as less as possible is simply the way most brands will decide to go in 2016 & beyond, as
                                they try to tell their story to their customers.</p>
                            <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">Great Schools and Entertainment</h4>
                            <p>Education is a high point when it comes to analyzing the quality of life factors that make
                                Ann Arbor one of the best places to live. The University of Michigan, which has 43,000
                                students, makes Ann Arbor a perennial candidate for our annual ranking of the best college
                                towns and plays a big role in the city’s economy and culture.</p>
                            <p class="mt-3">While Denver sits at the base of the Rocky Mountains, it’s not considered a
                                mountain town since it takes considered at least an hour to get to the Rockies for
                                snowboarding and ski activities, a local expert explained sits at the base of the Rocky
                                Mountains, it’s not considered a mountain town since it takes at least an hour to get to the
                                Rockies for snowboarding and ski activities, a local expert explained.</p>
                            <div class="panel my-3">
                                <figure class="float-start me-3 mb-0">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 sm:w-300px rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/demo-eight/posts/post-3.jpg"
                                            alt="Great Schools and Entertainment" data-uc-img="loading: lazy">
                                        <a href="../assets/images/demo-eight/posts/post-3.jpg" class="position-cover"
                                            data-caption="Great Schools and Entertainment"></a>
                                    </figure>
                                    <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Great Schools
                                        and Entertainment</figcaption>
                                </figure>
                                <p>Bike paths and sidewalks make getting to and from the city’s many festivals, museums,
                                    restaurants and music venues easy. A range of amenities provides many things to do in
                                    Bellevue. About 40 percent of the city’s population are minorities, which contributes to
                                    an overall diverse range of lifestyles and ideas.</p>
                                <p>While Denver sits at the base of the Rocky Mountains, it’s not considered a mountain town
                                    since it takes at least an hour to get to the Rockies for snowboarding and ski
                                    activities, a local expert explained. Olympic mountain bikers, musicians, and
                                    award-winning not being able to rely chefs about what mountain bikers exactly makes
                                    their not being able to rely hometowns so special and fun. In fact, not being able to
                                    rely on spoken word made them better storytellers. They fully understood and used the
                                    power of showing without words. They fully understood and used the power of showing
                                    without words.</p>
                            </div>
                            <p>Probably the oldest and most important unwritten rule in film industry says that you
                                shouldn’t rely much on words to tell your story. In fact, you should rely on them as less as
                                possible is simply the way most brands will decide to go in 2016 & beyond, as they try to
                                tell their story to their customers.</p>
                            <p class="mt-3">I talked to climbers, Olympic mountain bikers, musicians, and award-winning
                                chefs about what exactly makes their hometowns so special and fun.</p>
                        </div> --}}
                        {{-- financial market resume --}}
                        <iframe src="{{ route('site.table') }}" style="width:100%; height:600px; background:white;"
                            class="m-4">
                        </iframe>
                        {{-- end financial market resume --}}
                        {{-- oredrs books --}}
                        <div class="post-header mt-4 lg:mt-6 xl:mt-8">
                            <div
                                class="panel vstack items-center gap-2 md:gap-3 text-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto">
                                <h1 class="h4 sm:h3 xl:h1 m-0">Livro de Ordens</h1>
                            </div>
                        </div>
                        <hr class="my-2 lg:my-4 xl:my-4 opacity-100 border-gray-100 dark:border-gray-700">
                        <iframe src="{{ route('site.ordersbook') }}" style="width:100%; height:600px; background:white;"
                            class="m-4">
                        </iframe>
                        {{-- end oredrs books --}}
                        {{-- dashboard --}}
                        <div class="post-header mt-4 lg:mt-6 xl:mt-8">
                            <div
                                class="panel vstack items-center gap-2 md:gap-3 text-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto">
                                <h1 class="h4 sm:h3 xl:h1 m-0">Estatística Dashboard</h1>
                            </div>
                        </div>
                        <hr class="my-2 lg:my-4 xl:my-4 opacity-100 border-gray-100 dark:border-gray-700">
                        <iframe src="{{ route('site.dashboard') }}" style="width:100%; height:625px; background:white;"
                            class="m-4">
                        </iframe>
                        {{-- @include('components.dashboard') --}}
                        {{-- end dashboard --}}
                        {{-- taxas --}}
                        <div class="post-header mt-4 lg:mt-6 xl:mt-8">
                            <div
                                class="panel vstack items-center gap-2 md:gap-3 text-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto">
                                <h1 class="h4 sm:h3 xl:h1 m-0">Taxas de Mercado</h1>
                            </div>
                        </div>
                        <hr class="my-2 lg:my-4 xl:my-4 opacity-100 border-gray-100 dark:border-gray-700">
                        <iframe src="{{ route('site.taxas') }}" style="width:100%; height:600px; background:white;"
                            class="m-4">
                        </iframe>
                        {{-- end taxas --}}
                        {{-- Preço médio --}}
                        <div class="post-header mt-4 lg:mt-6 xl:mt-8">
                            <div
                                class="panel vstack items-center gap-2 md:gap-3 text-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto">
                                <h1 class="h4 sm:h3 xl:h1 m-0">Preço Médio</h1>
                            </div>
                        </div>
                        <hr class="my-2 lg:my-4 xl:my-4 opacity-100 border-gray-100 dark:border-gray-700">
                        <iframe src="{{ route('site.midleprice') }}" style="width:100%; height:600px; background:white;"
                            class="m-4">
                        </iframe>
                        {{-- end Preço médio --}}
                        <div
                            class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                            <ul class="nav-x gap-narrow text-primary">
                               {{--  <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
                                <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Food <span
                                            class="text-black dark:text-white">,</span></a>
                                </li>
                                <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span
                                            class="text-black dark:text-white">,</span></a>
                                </li>
                                <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Tech <span
                                            class="text-black dark:text-white">,</span></a>
                                </li>
                                <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li> --}}
                            </ul>
                            <ul class="post-share-icons nav-x gap-narrow">
                                <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-email icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-link icon-1"></i></a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div
                            class="post-author panel py-4 px-3 sm:p-3 xl:p-4 bg-gray-25 dark:bg-opacity-10 rounded lg:rounded-2">
                            <div class="row g-4 items-center">
                                <div class="col-12 sm:col-5 xl:col-3">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/demo-eight/posts/post-author.jpg" alt="Amir Nisi"
                                            data-uc-img="loading: lazy">
                                    </figure>
                                </div>
                                <div class="col">
                                    <div class="panel vstack items-start gap-2 md:gap-3">
                                        <h4 class="h5 lg:h4 m-0">Amir Nisi</h4>
                                        <p class="fs-6 lg:fs-5">Creative and experienced content writer with 6+ years of
                                            experience lazy to create unique content strategy for News5 to turn website
                                            visitors into customers.</p>
                                        <ul class="nav-x gap-1 text-gray-400 dark:text-white">
                                            <li>
                                                <a href="#medium"><i class="icon-2 unicon-logo-medium"></i></a>
                                            </li>
                                            <li>
                                                <a href="#twitter"><i class="icon-2 unicon-logo-x-filled"></i></a>
                                            </li>
                                            <li>
                                                <a href="#instagram"><i class="icon-2 unicon-logo-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="post-navigation panel vstack sm:hstack justify-between gap-2 mt-8 xl:mt-9">
                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/demo-eight/posts/img-02.jpg"
                                            alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                            data-uc-img="loading: lazy">
                                        <a href="blog-details.html" class="position-cover"
                                            data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                    </figure>
                                </div>
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3">
                                    <span class="fs-7 opacity-60">Prev Article</span>
                                    <h6 class="h6 lg:h5 m-0">Tech Innovations Reshaping the Retail Landscape: AI Payments
                                    </h6>
                                </div>
                                <a href="blog-details.html" class="position-cover"></a>
                            </div>
                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3 text-end">
                                    <span class="fs-7 opacity-60">Next Article</span>
                                    <h6 class="h6 lg:h5 m-0">The Rise of AI-Powered Personal Assistants: How They Manage
                                    </h6>
                                </div>
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/demo-eight/posts/img-01.jpg"
                                            alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                            data-uc-img="loading: lazy">
                                        <a href="blog-details.html" class="position-cover"
                                            data-caption="The Rise of AI-Powered Personal Assistants: How They Manage"></a>
                                    </figure>
                                </div>
                                <a href="blog-details.html" class="position-cover"></a>
                            </div>
                        </div>
                        <div class="post-related panel border-top pt-2 mt-8 xl:mt-9">
                            <h4 class="h5 xl:h4 mb-5 xl:mb-6">Related to this topic:</h4>
                            <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure
                                            class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                src="../assets/images/common/img-fallback.png"
                                                data-src="../assets/images/demo-eight/posts/img-07.jpg"
                                                alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                data-uc-img="loading: lazy">
                                            <a href="blog-details.html" class="position-cover"
                                                data-caption="The Art of Baking: From Classic Bread to Artisan Pastries"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0">
                                                <a class="text-none" href="blog-details.html">The Art of Baking: From
                                                    Classic Bread to Artisan Pastries</a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span>Feb 28,
                                                    <script>
                                                        document.write(
                                                            new Date().getFullYear()
                                                        )
                                                    </script>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure
                                            class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                src="../assets/images/common/img-fallback.png"
                                                data-src="../assets/images/demo-eight/posts/img-08.jpg"
                                                alt="AI and Marketing: Unlocking Customer Insights"
                                                data-uc-img="loading: lazy">
                                            <a href="blog-details.html" class="position-cover"
                                                data-caption="AI and Marketing: Unlocking Customer Insights"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0">
                                                <a class="text-none" href="blog-details.html">AI and Marketing: Unlocking
                                                    Customer Insights</a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span>Feb 22,
                                                    <script>
                                                        document.write(
                                                            new Date().getFullYear()
                                                        )
                                                    </script>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure
                                            class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                src="../assets/images/common/img-fallback.png"
                                                data-src="../assets/images/demo-eight/posts/img-09.jpg"
                                                alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                data-uc-img="loading: lazy">
                                            <a href="blog-details.html" class="position-cover"
                                                data-caption="Hidden Gems: Underrated Travel Destinations Around the World"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0">
                                                <a class="text-none" href="blog-details.html">Hidden Gems: Underrated
                                                    Travel Destinations Around the World</a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span>Feb 14,
                                                    <script>
                                                        document.write(
                                                            new Date().getFullYear()
                                                        )
                                                    </script>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure
                                            class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                src="../assets/images/common/img-fallback.png"
                                                data-src="../assets/images/demo-eight/posts/img-10.jpg"
                                                alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                data-uc-img="loading: lazy">
                                            <a href="blog-details.html" class="position-cover"
                                                data-caption="Eco-Tourism: Traveling Responsibly and Sustainably"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0">
                                                <a class="text-none" href="blog-details.html">Eco-Tourism: Traveling
                                                    Responsibly and Sustainably</a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span>Feb 8,
                                                    <script>
                                                        document.write(
                                                            new Date().getFullYear()
                                                        )
                                                    </script>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div id="blog-comment" class="panel border-top pt-2 mt-8 xl:mt-9">
                            <h4 class="h5 xl:h4 mb-5 xl:mb-6">Comments (5)</h4>

                            <div class="spacer-half"></div>

                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="../assets/images/avatars/01.png" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Merrill Rayos</span>
                                        <span class="c_date id-color">2 days ago</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="../assets/images/avatars/02.png" alt="">
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">Jackqueline Sprang</span>
                                                <span class="c_date id-color">2 days ago</span>
                                                <span class="c_reply"><a href="#">Reply</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo.</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="../assets/images/avatars/03.png" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Sanford Crowley</span>
                                        <span class="c_date id-color">2 days ago</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    <ol>
                                        <li>
                                            <div class="avatar">
                                                <img src="../assets/images/avatars/04.png" alt="">
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">Lyndon Pocekay</span>
                                                <span class="c_date id-color">2 days ago</span>
                                                <span class="c_reply"><a href="#">Reply</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo.</div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <img src="../assets/images/avatars/05.png" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Aleen Crigger</span>
                                        <span class="c_date id-color">2 days ago</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                </li>
                            </ol>

                            <div class="spacer-single"></div>

                            <div id="comment-form-wrapper" class="panel pt-2 mt-8 xl:mt-9">
                                <h4 class="h5 xl:h4 mb-5 xl:mb-6">Leave a Comment</h4>
                                <div class="comment_form_holder">
                                    <form class="vstack gap-2">
                                        <input
                                            class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                            type="text" placeholder="First name" required>
                                        <input
                                            class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                            type="text" placeholder="Last name" required>
                                        <input
                                            class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                            type="email" placeholder="Your email" required>
                                        <textarea
                                            class="form-control h-250px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                            type="text" placeholder="Your comment" required></textarea>
                                        <button class="btn btn-primary btn-sm mt-1" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </article>

        <!-- Newsletter -->
    </div>

    <!-- Wrapper end -->

@endsection
