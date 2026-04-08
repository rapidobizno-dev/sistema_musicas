<div class="col-12">
    {{-- imagens do carocel --}}
    <div class="panel w-100 text-center text-white">
        <div class="swiper swiper-main h-350px md:h-500px"
            data-uc-swiper="connect: .swiper-thumbs; active: 1; items: 1; gap: 0; dots: .swiper-pagination; disable-class: d-none;">
            <div class="swiper-wrapper">
                @forelse ($newsCarocel as $data)
                    <div class="swiper-slide">
                        <article class="post type-post">
                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-16x9">
                                <img class="media-cover image" src="{{ asset('img/news/' . $data->image) }}"
                                    data-src="{{ asset('img/news/' . $data->image) }}" alt="carocel image"
                                    data-uc-img="loading: lazy">
                            </div>
                            <div
                                class="post-content py-2 sm:py-4 md:py-6 xl:py-8 md:px-4 xl:px-6 position-absolute top-0 start-0 end-0 bottom-0 z-1 vstack justify-center items-center gap-2 text-center w-100 h-100 bg-gray-900 bg-opacity-50">
                                <h2 class="h4 md:h3 xl:h1 max-w-2/3 md:max-w-sm my-0 mx-auto"><a href="#news"
                                        class="text-none text-white">{{ $data->title }}</a></h2>
                                <div
                                    class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                </div>
                                <a  href="{{ route('site.details', ['news' => $data->slug]) }}"
                                    class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white">Ver
                                    Mais</a>
                            </div>
                        </article>
                    </div>
                @empty

                    <div class="swiper-slide">
                        <article class="post type-post">
                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-16x9">
                                <img class="media-cover image"
                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                    data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                    alt="A importância do sono: dicas para um melhor descanso e recuperação"
                                    data-uc-img="loading: lazy">
                            </div>
                            <div
                                class="post-content py-2 sm:py-4 md:py-6 xl:py-8 md:px-4 xl:px-6 position-absolute top-0 start-0 end-0 bottom-0 z-1 vstack justify-center items-center gap-2 text-center w-100 h-100 bg-gray-900 bg-opacity-50">
                                <h2 class="h4 md:h3 xl:h1 max-w-2/3 md:max-w-sm my-0 mx-auto"><a href="#news"
                                        class="text-none text-white">Radar Econoômico</a></h2>
                                <div
                                    class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                </div>
                                <a href="{{ route('site.national') }}"
                                    class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white">Ver
                                    Mais</a>
                            </div>
                        </article>
                    </div>
                @endforelse

                {{--  <div class="swiper-slide">
                                            <article class="post type-post">
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-16x9">
                                                    <img class="media-cover image"
                                                        src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                        data-src="{{ url('site/assets/images/demo-eight/news/vera4.webp') }}"
                                                        alt="O Futuro da Vida Sustentável: Impulsionando Estilos de Vida Ecologicamente Corretos"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                                <div
                                                    class="post-content py-2 sm:py-4 md:py-6 xl:py-8 md:px-4 xl:px-6 position-absolute top-0 start-0 end-0 bottom-0 z-1 vstack justify-center items-center gap-2 text-center w-100 h-100 bg-gray-900 bg-opacity-50">
                                                    <h2 class="h4 md:h3 xl:h1 max-w-2/3 md:max-w-sm my-0 mx-auto"><a
                                                            href="#news" class="text-none text-white"> "Estado não pode
                                                            ser um bombeiro permanente de empresas inviáveis"</a></h2>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    </div>
                                                    <a href="{{ route('site.national') }}"
                                                        class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white">Ver
                                                        Mais</a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="post type-post">
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-16x9">
                                                    <img class="media-cover image"
                                                        src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                        data-src="{{ url('site/assets/images/demo-eight/news/petrole.jpg') }}"
                                                        alt="Agilidade empresarial na era digital: aproveitando a IA e a automação"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                                <div
                                                    class="post-content py-2 sm:py-4 md:py-6 xl:py-8 md:px-4 xl:px-6 position-absolute top-0 start-0 end-0 bottom-0 z-1 vstack justify-center items-center gap-2 text-center w-100 h-100 bg-gray-900 bg-opacity-50">
                                                    <h2 class="h4 md:h3 xl:h1 max-w-2/3 md:max-w-sm my-0 mx-auto"><a
                                                            href="#news" class="text-none text-white">Petróleo: Começo
                                                            promissor de uma semana que promete tudo menos sossego
                                                            geoestratégico</a></h2>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    </div>
                                                    <a href="{{ route('site.national') }}"
                                                        class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white">Ver
                                                        Mais</a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="post type-post">
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-16x9">
                                                    <img class="media-cover image"
                                                        src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                        data-src="{{ url('site/assets/images/demo-eight/news/emis.jpg') }}"
                                                        alt="A Arte da Panificação: Do ​​Pão Clássico aos Doces Artesanais"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                                <div
                                                    class="post-content py-2 sm:py-4 md:py-6 xl:py-8 md:px-4 xl:px-6 position-absolute top-0 start-0 end-0 bottom-0 z-1 vstack justify-center items-center gap-2 text-center w-100 h-100 bg-gray-900 bg-opacity-50">
                                                    <h2 class="h4 md:h3 xl:h1 max-w-2/3 md:max-w-sm my-0 mx-auto"><a
                                                            href="#news" class="text-none text-white">EMIS anuncia que
                                                            limite diário de transferências Express será de 500 mil kwanzas
                                                            a partir desta sexta-feira</a></h2>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    </div>
                                                    <a href="{{ route('site.national') }}"
                                                        class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white">Ver
                                                        Mais</a>
                                                </div>
                                            </article>
                                        </div> --}}
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination mb-2 md:mb-3 xl:mb-4 text-white d-none md:d-inline-flex">
            </div>

            <!-- Add Arrows -->
            <div
                class="swiper-nav swiper-next btn btn-xs md:btn-md p-0 w-32px md:w-40px xl:w-56px h-32px md:h-40px xl:h-56px bg-white text-dark rounded-circle shadow-xs position-absolute top-50 end-0 translate-middle-y me-narrow md:me-4 z-1">
                <i class="unicon-chevron-right icon-1 md:icon-2"></i>
            </div>
            <div
                class="swiper-nav swiper-prev btn btn-xs md:btn-md p-0 w-32px md:w-40px xl:w-56px h-32px md:h-40px xl:h-56px bg-white text-dark rounded-circle shadow-xs position-absolute top-50 start-0 translate-middle-y ms-narrow md:ms-4 z-1">
                <i class="unicon-chevron-left icon-1 md:icon-2"></i>
            </div>
        </div>
    </div>
    {{-- fim imagens do carocel --}}
    @include('components.breakNews')
</div>
<div class="col-12">
    {{-- imagens menu carocel --}}
    <div class="panel bg-gray-25 dark:bg-gray-100 dark:bg-opacity-15">
        <div class="swiper swiper-thumbs"
            data-uc-swiper="items: 1.5; gap: 0; mousewheel: true; freeMode: true; center: true; center-bounds: true;"
            data-uc-swiper-s="items: 3;" data-uc-swiper-m="items: 4; center: false; center-bounds: false;">
            <div class="swiper-wrapper">
                @forelse ($newsCarocel as $data)
                    <div class="swiper-slide">
                        <article class="post type-post p-1 md:p-2 xl:p-3">
                            <div class="row g-0">
                                <div class="w-56px xl:w-64px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                            data-src="{{ url('img/news/' . $data->image) }}"
                                            alt="A importância do sono: dicas para um melhor descanso e recuperação"
                                            data-uc-img="loading: lazy">
                                    </figure>
                                </div>
                                <div class="col ms-1 md:ms-2">
                                    <h4 class="h6 m-0 text-truncate-3">{{ $data->title }}</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="swiper-slide">
                        <article class="post type-post p-1 md:p-2 xl:p-3">
                            <div class="row g-0">
                                <div class="w-56px xl:w-64px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                            data-src="{{ url('site/assets/images/demo-eight/posts/post-3.jpeg') }}"
                                            alt="imagem radar economico" data-uc-img="loading: lazy">
                                    </figure>
                                </div>
                                <div class="col ms-1 md:ms-2">
                                    <h4 class="h6 m-0 text-truncate-3">Radar Econômico</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforelse
                {{-- <div class="swiper-slide">
                                            <article class="post type-post p-1 md:p-2 xl:p-3">
                                                <div class="row g-0">
                                                    <div class="w-56px xl:w-64px">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-1x1 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/news/vera4.webp') }}"
                                                                alt="O Futuro da Vida Sustentável: Impulsionando Estilos de Vida Ecologicamente Corretos"
                                                                data-uc-img="loading: lazy">
                                                        </figure>
                                                    </div>
                                                    <div class="col ms-1 md:ms-2">
                                                        <h4 class="h6 m-0 text-truncate-3">"Estado não pode serum bombeiro
                                                            permanente de empresas inviáveis" , diz ministra das Finanças,
                                                            que defende reforma urgente do sector empresarial público</h4>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="post type-post p-1 md:p-2 xl:p-3">
                                                <div class="row g-0">
                                                    <div class="w-56px xl:w-64px">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-1x1 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/news/petrole.jpg') }}"
                                                                alt="Agilidade empresarial na era digital: aproveitando a IA e a automação"
                                                                data-uc-img="loading: lazy">
                                                        </figure>
                                                    </div>
                                                    <div class="col ms-1 md:ms-2">
                                                        <h4 class="h6 m-0 text-truncate-3">Petróleo: Começo promissor de
                                                            uma semana que promete tudo menos sossego geoestratégico</h4>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="post type-post p-1 md:p-2 xl:p-3">
                                                <div class="row g-0">
                                                    <div class="w-56px xl:w-64px">
                                                        <figure
                                                            class="featured-image m-0 ratio ratio-1x1 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                                data-src="{{ url('site/assets/images/demo-eight/news/emis.jpg') }}"
                                                                alt="A Arte da Panificação: Do ​​Pão Clássico aos Doces Artesanais"
                                                                data-uc-img="loading: lazy">
                                                        </figure>
                                                    </div>
                                                    <div class="col ms-1 md:ms-2">
                                                        <h4 class="h6 m-0 text-truncate-3">EMIS anuncia que limite diário
                                                            de transferências Express será de 500 mil kwanzas a partir desta
                                                            sexta-feira</h4>
                                                    </div>
                                                </div>
                                            </article>
                                        </div> --}}
            </div>
        </div>
    </div>
    {{-- fim imagens menu carocel --}}
</div>
