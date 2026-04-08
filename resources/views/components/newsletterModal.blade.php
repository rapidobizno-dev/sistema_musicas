<!--  Newsletter modal -->
<div id="uc-newsletter-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog w-1000px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
        <button
            class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
            type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="row md:child-cols-6 col-match g-0">
            @forelse($modalDetachNews as $data)
                <div class="d-none md:d-flex">
                    <div class="position-relative w-100 ratio-1x1">
                        <img class="media-cover" src="{{ asset('img/news/' . $data->image) }}" alt="Newsletter image">
                    </div>
                </div>
                <div>
                    <div class="panel vstack self-center p-4 md:py-8 text-center">
                        <h3 class="h3 md:h2">{{ Str::limit($data->title, 45) }}</h3>
                        <p class="ft-tertiary">{{ Str::limit($data->subtitle, 150) }}</p>
                        <div class="block-footer cstack items-center lg:mt-2">
                            <a  href="{{ route('site.details', ['news' => $data->slug]) }}"
                                class="animate-btn gap-0 btn btn-sm lg:btn-md btn-primary px-3 lg:px-6">
                                <span>Ver Mais</span>
                                <i class="icon icon-2 unicon-chevron-right"></i>
                            </a>
                        </div>
                        {{-- <div class="panel mt-2 lg:mt-4">
                            <form class="vstack gap-1">
                                <input type="email"
                                    class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                                    placeholder="Seu endereço de email..">
                                <button type="submit" class="btn btn-sm btn-primary">Entrar</button>
                            </form>
                            <p class="fs-7 mt-2">Não se preocupe, não enviamos spam!</p>
                        </div> --}}
                    </div>
                </div>
            @empty
                <!--  Newsletter modal -->
                <div class="d-none md:d-flex">
                    <div class="position-relative w-100 ratio-1x1">
                        <img class="media-cover" src="{{ url('site/assets/images/demo-eight/common/newsletter.jpg') }}"
                            alt="Newsletter image">
                    </div>
                </div>
                <div>
                    <div class="panel vstack self-center p-4 md:py-8 text-center">
                        <h3 class="h3 md:h2">Subescreva-se no ARadar Econômico</h3>
                        <p class="ft-tertiary">Junte-se a mais de 10 mil pessoas para receber notificações
                            sobre novas
                            postagens, notícias e dicas.</p>
                        <div class="panel mt-2 lg:mt-4">
                            <form class="vstack gap-1">
                                <input type="email"
                                    class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                                    placeholder="Seu endereço de email..">
                                <button type="submit" class="btn btn-sm btn-primary">Entrar</button>
                            </form>
                            <p class="fs-7 mt-2">Não se preocupe, não enviamos spam!</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
{{-- <div class="panel vstack self-center p-4 md:py-8 text-center">
                    <h3 class="h3 md:h2">Subescreva-se no ARadar Econômico</h3>
                    <p class="ft-tertiary">Junte-se a mais de 10 mil pessoas para receber notificações sobre novas
                        postagens, notícias e dicas.</p>
                    <div class="panel mt-2 lg:mt-4">
                        <form class="vstack gap-1">
                            <input type="email"
                                class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                                placeholder="Seu endereço de email..">
                            <button type="submit" class="btn btn-sm btn-primary">Entrar</button>
                        </form>
                        <p class="fs-7 mt-2">Não se preocupe, não enviamos spam!</p>
                    </div>
                </div> --}}
