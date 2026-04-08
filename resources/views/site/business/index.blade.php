@extends('layouts._site.main')
@section('title', 'Radar Economico - Negócios')
@section('content')

    {{-- reforçando o estilos das imagens e paginação --}}
    <link rel="stylesheet" href="{{ url('site/assets/css/style.css') }}">

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap overflow-hidden-x">
        <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
            <div class="container max-w-xl">
                <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                    <li><a href="index.html">Inicio</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><span class="opacity-50">Negócios e Inovações</span></li>
                </ul>
            </div>
        </div>
        <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
            <div class="container max-w-xl">
                <div class="post-header">
                    {{-- post1 start --}}
                    @foreach ($post1 as $data)
                        <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                            <div
                                class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                                <h1 class="h4 sm:h2 lg:h1 xl:display-6">{{ $data->title }}
                                </h1>
                                <ul class="post-share-icons nav-x gap-1 dark:text-white">
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-email icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                            href="#"><i class="unicon-link icon-1"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <figure class="featured-image m-0">
                                <figure
                                    class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                        src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                        data-src="{{ asset('img/news/' . $data->image) }}"
                                        alt="The Rise of Gourmet Street Food: Trends and Top Picks"
                                        data-uc-img="loading: lazy">
                                </figure>

                            </figure>
                        </div>
                </div>
            </div>
            <div class="panel mt-4 lg:mt-6 xl:mt-9">
                <div class="container">
                    <div class="content-wrap row child-col-12 lg:child-cols g-4 lg:g-6">
                        <div class="lg:col-8 uc-first-column">
                            <div class="max-w-lg">
                                <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                                    <p>
                                        {{ $data->subtitle }}
                                    </p>
                                    <p class="mt-3">
                                        {!! $data->description !!}
                                    </p>
                                    {{--  <div class="panel mt-3">
                                        <figure class="float-end ms-3 mb-1">
                                            <figure
                                                class="featured-image m-0 ratio ratio-1x1 sm:w-300px rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                    src="{{ url('site/assets/images/demo-eight/news/capa-mercado.jpg') }}"
                                                    data-src="{{ url('site/assets/images/demo-eight/news/capa-mercado.jpg') }}"
                                                    alt="Holding flower, by Anthony Tran" data-uc-img="loading: lazy">
                                                <a href="{{ url('site/assets/images/demo-eight/news/capa-mercado.jpg') }}"
                                                    class="position-cover"
                                                    data-caption="Holding flower, by Anthony Tran"></a>
                                                </figure>
                                                <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">
                                                Capa do jornal</figcaption>
                                        </figure>
                                        <p>A carteira de crédito a clientes também registou crescimento, passando de 20,7%
                                            em 2023 para 25% em 2024, impulsionada pelas medidas de incentivo ao crédito
                                            adoptadas pelo Executivo e pelo BNA.
                                            O sector bancário apresentou um desempenho robusto, com um resultado líquido de
                                            aproximadamente 709 mil milhões kz, um aumento de 19%, motivado sobretudo pela
                                            subida dos proveitos com juros.</p>
                                        <p class="mt-3">Durante a apresentação do estudo “Banca em Análise 2025”, o
                                            presidente da Deloitte Angola, José Barata, destacou a entrada em operação do
                                            sistema KWiK como um dos principais marcos do ano.
                                            O sector também registou avanços na inclusão financeira, com a Estratégia
                                            Nacional de Inclusão Financeira (ENIF) em fase de consulta pública.</p>
                                        <p class="mt-3">O comércio electrónico registou um crescimento de 244% nas
                                            transacções, passando de 1,3 milhões em 2023 para 4,6 milhões em 2024.
                                            O número de balcões bancários aumentou de 28 para 1 454 e o de agentes bancários
                                            cresceu 641%, subindo de 665 para 4 922.</p>
                                        </div> --}}
                                    @endforeach
                                    {{-- end post1 --}}

                                    {{-- post2 --}}
                                    {{-- @foreach ($post2 as $data)
                                        <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">{{ $data->title }}</h4>
                                        <p>{{ $data->subtitle }}</p>
                                        <p class="mt-3">A equipa médica terá como missão partilhar experiências, prestar
                                            assistência clínica (excluindo medicina forense), e colaborar com técnicos
                                            angolanos
                                            no reforço do sistema nacional de saúde.
                                            O protocolo estabelece ainda mecanismos para intercâmbios académicos, formação,
                                            consultas gratuitas e cooperação directa entre hospitais dos dois países.
                                        </p>
                                        <figure class="my-3 sm:my-4">
                                            <figure
                                                class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                    src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                                    data-src="{{ asset('img/news/' . $data->image) }}"
                                                    alt="Pink Marketing, by Mak" data-uc-img="loading: lazy">
                                                <a href="{{ asset('img/news/' . $data->image) }}" class="position-cover"
                                                    data-caption="Pink Marketing, by Mak"></a>
                                            </figure>
                                            <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">
                                                {{ $data->title }}</figcaption>
                                        </figure>
                                        <p>
                                            {!! $data->description !!}
                                        </p>
                                    @endforeach --}}
                                    {{-- <p class="mt-3">O acordo contempla ainda o fomento ao investimento, promoção de
                                        produtos de elevado valor acrescentado e apoio à integração de Angola e de outros
                                        países africanos na economia global..
                                        As assinaturas ocorreram na presença de altas entidades governamentais dos dois
                                        países e reforçam o compromisso mútuo de aprofundar a cooperação nas áreas da saúde,
                                        economia e desenvolvimento sustentável</p> --}}
                                    {{-- <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">“Não terceirizem a vossa carreira: cada uma de
                                        nós é responsável pelo crescimento individual”</h4>
                                    <p>Há uma década no Grupo Boticário, Renata Gomide construiu uma trajectória que une
                                        consistência, estratégia e visão empreendedora.
                                        Actual vice-presidente de marketing da companhia, ela defende que montar equipes
                                        diversas e pensar no longo prazo são pilares para uma liderança eficiente.</p>
                                    <p class="mt-3">“Ao longo do tempo, entendo que a beleza de um time de alto desempenho
                                        está em saber extrair o máximo de cada um respeitando a diversidade de perfil. No
                                        passado, procurava pessoas muito parecidas comigo”, afirma.
                                        “Hoje tenho um time composto por pessoas muito diferentes entre elas. E é, sem
                                        dúvida, o mais potente que já montei”, completa.
                                        A executiva lidera o marketing de uma empresa que é referência nacional.
                                        Em 2023, o Grupo Boticário ultrapassou os 30 biliões de reais em vendas, com
                                        crescimento de 30,5%.
                                    </p>
                                    <figure class="my-3 sm:my-4">
                                        <figure
                                            class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                src="../assets/images/common/img-fallback.png"
                                                data-src="{{ url('site/assets/images/demo-eight/news/Renata-Gomide.jpg') }}"
                                                alt="Pink Marketing, by Mak" data-uc-img="loading: lazy">
                                            <a href="{{ url('site/assets/images/demo-eight/news/Renata-Gomide.jpg') }}"
                                                class="position-cover" data-caption="Pink Marketing, by Mak"></a>
                                        </figure>
                                        <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Angola e
                                            China reforçaram acordo econômico</figcaption>
                                    </figure>
                                    <p>
                                        Para Renata, o papel da liderança está também em equilibrar o presente com o futuro.
                                        “Eu tenho uma cadeira muito estratégica que tem a responsabilidade de gerar um valor
                                        para a organização na entrega do curto prazo.
                                        Mas isso não quer dizer que o longo prazo esteja fora do radar”, explica. “Também
                                        actuo na construção de futuro da organização.
                                        Tenho muitas frentes a serem exploradas na cadeira de marketing, porém, como sempre
                                        fiz na minha carreira, me preparo para o futuro de uma maneira que esteja pronta
                                        para todas as oportunidades que surgirem.”
                                        <br>
                                        Renata é formada em administração pela Faap, em marketing pela ESPM, e tem MBA em
                                        gestão estratégica de negócios pela FGV.
                                        Desde que ingressou no Grupo Boticário em 2015, passou por diferentes cargos de
                                        liderança.
                                        Esteve à frente da construção da marca Eudora e da unidade de negócios da Quem
                                        Disse, Berenice. Em 2021, assumiu a directoria-executiva de branding e comunicação
                                        de todas as marcas de consumo do grupo, e em novembro de 2022 foi promovida a
                                        vice-presidente de Consumer, com a missão de expandir o ecossistema de beleza da
                                        companhia.
                                    </p>
                                    <p class="mt-3">Também atleta amadora, com paixão por maratonas, Renata está na lista
                                        Forbes Mulheres Mais Poderosas do Brasil e usa sua experiência pessoal como
                                        combustível para inspirar outras líderes.
                                        “Sejam corajosas, busquem conhecimento em áreas que ultrapassem o que se espera de
                                        suas cadeiras – estejam preparadas para os próximos passos e oportunidades. Não
                                        terceirizem a vossa carreira: cada uma de nós é responsável pelo crescimento
                                        individual. E se cerquem de pessoas capazes de te ensinarem algo. Enfim, aproveitem
                                        a jornada – ela precisa ser divertida. Apaixonem-se pelo que fazem.”</p>
                                    <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">Emanuela Vunge junta-se ao board da PRIME
                                        Advogados</h4>
                                    <p>Com um percurso marcado pela experiência em fiscalidade, direito público e sectores
                                        regulados, Emanuela Vunge junta-se à PRIME Advogados como sócia internacional,
                                        reforçando a actuação da firma em áreas-chave como petróleo e gás, energia,
                                        compliance corporativo e contencioso fiscal.
                                        Ao longo de mais de uma década, desempenhou funções de compliance officer numa das
                                        maiores multinacionais do sector petrolífero, com passagens por Angola e Reino
                                        Unido, tornando-se uma referência na implementação de programas de compliance em
                                        transações complexas de petróleo e gás.</p>
                                    <p class="mt-3">Tem experiência em fusões e aquisições, com destaque para processos de
                                        due diligence, avaliação de risco fiscal e análise da legislação aplicável.
                                        Emanuela Vunge actua regularmente como consultora em estruturação tributária,
                                        processos fiscais e tax compliance, representando empresas nacionais e
                                        multinacionais perante os tribunais angolanos em litígios sobre impostos sobre o
                                        rendimento, IVA, imposto de selo e tributação patrimonial.</p>
                                    <div class="panel my-3">
                                        <figure class="float-start me-3 mb-0">
                                            <figure
                                                class="featured-image m-0 ratio ratio-1x1 sm:w-300px rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover img image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="{{ url('site/assets/images/demo-eight/news/prime.png') }}"
                                                    alt="Great Schools and Entertainment" data-uc-img="loading: lazy">
                                                <a href="{{ url('site/assets/images/demo-eight/news/prime.png') }}"
                                                    class="position-cover"
                                                    data-caption="Great Schools and Entertainment"></a>
                                            </figure>
                                            <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">
                                                Emanuela Vunge</figcaption>
                                        </figure>
                                        <p>O percurso académico inclui uma licenciatura em Direito pela Universidade
                                            Agostinho Neto, mestrados em Governação e Direito Público (Institut Catholique
                                            de Paris) e em Direito Societário Internacional (Universidade Panthéon-Assas,
                                            Paris II), além de uma pós-graduação em Direito Civil e um LLM em Direito do
                                            Petróleo e Gás.
                                            Emanuela Vunge é também sócia fundadora da Lead Advogados, posteriormente
                                            Dentons LEAD.
                                            Também foi eleita pelo Parlamento para o Conselho Superior da Magistratura
                                            Judicial, representando a classe dos advogados.</p>
                                        <p>Autora de vários trabalhos sobre Direito Público e Direito Civil, é ainda oradora
                                            habitual em conferências nacionais e internacionais sobre fiscalidade,
                                            governação e energia. </p>
                                    </div> 
                                    <p>Na PRIME Advogados, Emanuela Vunge acrescenta visão estratégica, experiência
                                        internacional e conhecimento do mercado angolano, num momento em que a firma aposta
                                        na consolidação de uma prática jurídica alinhada com os mais elevados padrões
                                        internacionais.</p> --}}
                                    {{-- <p class="mt-3">I talked to climbers, Olympic mountain bikers, musicians, and
                                        award-winning chefs about what exactly makes their hometowns so special and fun.</p> --}}
                                </div>
                                <div class="post-content panel fs-6 md:fs-5 p-6 m-auto text-center">

                                    <button class="btn btn-sm xl:btn-md btn-primary md:mt-1 xl:mt-2 text-white"
                                        id="load-more">Mais Notícias
                                    </button>

                                </div>
                                <div
                                    class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                                    <ul class="nav-x gap-narrow text-primary">
                                        {{-- <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
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
                                                    data-src="../assets/images/demo-eight/posts/post-author.jpg"
                                                    alt="Amir Nisi" data-uc-img="loading: lazy">
                                            </figure>
                                        </div>
                                        <div class="col">
                                            <div class="panel vstack items-start gap-2 md:gap-3">
                                                <h4 class="h5 lg:h4 m-0">Amir Nisi</h4>
                                                <p class="fs-6 lg:fs-5">Creative and experienced content writer with 6+
                                                    years of experience lazy to create unique content strategy for News5 to
                                                    turn website visitors into customers.</p>
                                                <ul class="nav-x gap-1 text-gray-400 dark:text-white">
                                                    <li>
                                                        <a href="#medium"><i class="icon-2 unicon-logo-medium"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#twitter"><i class="icon-2 unicon-logo-x-filled"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#instagram"><i
                                                                class="icon-2 unicon-logo-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="post-navigation panel vstack sm:hstack justify-between gap-2 mt-8 xl:mt-9">
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
                                            <h6 class="h6 lg:h5 m-0">Tech Innovations Reshaping the Retail Landscape: AI
                                                Payments</h6>
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="new-post panel hstack w-100 sm:w-1/2">
                                        <div class="panel vstack justify-center px-2 gap-1 w-1/3 text-end">
                                            <span class="fs-7 opacity-60">Next Article</span>
                                            <h6 class="h6 lg:h5 m-0">The Rise of AI-Powered Personal Assistants: How They
                                                Manage</h6>
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
                                                        <a class="text-none" href="blog-details.html">The Art of Baking:
                                                            From Classic Bread to Artisan Pastries</a>
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
                                                        <a class="text-none" href="blog-details.html">AI and Marketing:
                                                            Unlocking Customer Insights</a>
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
                                                        <a class="text-none" href="blog-details.html">Hidden Gems:
                                                            Underrated Travel Destinations Around the World</a>
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
                                                        <a class="text-none" href="blog-details.html">Eco-Tourism:
                                                            Traveling Responsibly and Sustainably</a>
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

                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo
                                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
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
                                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error
                                                        sit
                                                        voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                                        eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt
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
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo
                                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
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
                                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error
                                                        sit
                                                        voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                                        eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt
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
                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo
                                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
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
                        <div class="lg:col-4">
                            <div class="sidebar-wrap panel vstack gap-2" data-uc-sticky="end: true;">
                                <div class="right-sidebar">
                                    <div class="recent-widget widget">
                                        <h2 class="widget-title">Publicações Recentes</h2>
                                        <div class="recent-post-widget clearfix">
                                            @foreach ($recentNews as $data)
                                                <div class="show-featured clearfix">
                                                    <div class="post-img">
                                                        <a  href="{{ route('site.details', ['news' => $data->slug]) }}">
                                                            <img width="1200" height="700"
                                                                src="{{ asset('img/news/' . $data->image) }}"
                                                                class="attachment-full size-full wp-post-image"
                                                                alt="" decoding="async"
                                                                sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                                                    </div>
                                                    <div class="post-item">
                                                        <div class="post-desc">
                                                            <div class="rt-site-mega">
                                                                <span class="author-post">
                                                                    {{ \Carbon\Carbon::parse($data->updated_at)->format('d/m/y') }}</span><span
                                                                    class="date-post">
                                                                    By <a href="#">Anna</a>
                                                                </span>
                                                            </div>
                                                            <a  href="{{ route('site.details', ['news' => $data->slug]) }}">
                                                                {{ $data->title }} </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{--  <div class="show-featured clearfix">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img width="1200" height="700"
                                                            src="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04.webp"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            decoding="async"
                                                            srcset="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04.webp 1200w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04-300x175.webp 300w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04-1024x597.webp 1024w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04-768x448.webp 768w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-04-600x350.webp 600w"
                                                            sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-desc">
                                                        <div class="rt-site-mega">
                                                            <span class="author-post">
                                                                Apr 21, 2025 </span><span class="date-post">
                                                                By <a href="#">Kelis</a>
                                                            </span>
                                                        </div>
                                                        <a href="#">
                                                            Why Digital Currencies Are Gaining Traction </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show-featured clearfix">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img width="1200" height="700"
                                                            src="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01.webp"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            decoding="async"
                                                            srcset="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01.webp 1200w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01-300x175.webp 300w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01-1024x597.webp 1024w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01-768x448.webp 768w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post-01-600x350.webp 600w"
                                                            sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-desc">
                                                        <div class="rt-site-mega">
                                                            <span class="author-post">
                                                                Apr 21, 2025 </span><span class="date-post">
                                                                By <a href="#">Kelis</a>
                                                            </span>
                                                        </div>
                                                        <a href="#">
                                                            Why Central Banks Are Adjusting Interest </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show-featured clearfix">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img width="1200" height="700"
                                                            src="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5.webp"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            decoding="async"
                                                            srcset="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5.webp 1200w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5-300x175.webp 300w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5-1024x597.webp 1024w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5-768x448.webp 768w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/post5-600x350.webp 600w"
                                                            sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-desc">
                                                        <div class="rt-site-mega">
                                                            <span class="author-post">
                                                                Apr 21, 2025 </span><span class="date-post">
                                                                By <a
                                                                    href="https://reactheme.com/news5/news-magazine/author/jennifer/">Jenni</a>
                                                            </span>
                                                        </div>
                                                        <a
                                                            href="https://reactheme.com/news5/news-magazine/what-a-recession-could-mean-for-jobs-investment-and-small-business-growth-in-2025/">
                                                            What a Recession Could Mean for </a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="recent-widget widget">
                                        <h2 class="widget-title">Categorias</h2>
                                        <ul>
                                            <li><a href="#">Nacional</a><span>2</span></li>
                                            <li><a href="#">Internacional</a><span>2</span></li>
                                            <li><a href="#">Mercado Econômico</a><span>2</span></li>
                                            <li><a href="#">Negocios</a><span>2</span></li>
                                            <li><a href="#">Tecnologia & Inovações</a><span>2</span></li>
                                            <li><a href="#">Opiniões & Análises</a><span>2</span></li>
                                            {{-- <li>Politics <span>2</span></li>
                                            <li>Opinions <span>4</span></li>
                                            <li>World <span>1</span></li>
                                            <li>Media <span>2</span></li>
                                            <li>Tech <span>3</span></li>
                                            <li>Business <span>4</span></li>
                                            <li>Fashion <span>5</span></li>
                                            <li>Art <span>7</span></li>
                                            <li>Food <span>2</span></li>
                                            <li>E-books <span>1</span></li> --}}
                                        </ul>
                                    </div>
                                    <section id="media_image-1" class="widget widget_media_image"><img width="600"
                                            height="700"
                                            src="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/add__image.png"
                                            class="image wp-image-10098 attachment-full size-full" alt=""
                                            decoding="async"
                                            srcset="https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/add__image.png 600w, https://reactheme.com/news5/news-magazine/wp-content/uploads/sites/26/2025/04/add__image-257x300.png 257w"
                                            sizes="(max-width: 600px) 100vw, 600px"></section>
                                    <div class="recent-widget widget newsletter">
                                        <h4 class="widget-title">Inscreva-se no nosso Newsletter</h4>
                                        <p>Sem spam, Notificações apenas sobre atualizações do mercado economico, nacional e
                                            internacional.</p>
                                        <form action="#" class="newsletter-form">
                                            <input type="email" placeholder="Seu E-mail">
                                            <button class="btn btn-primary btn-sm mt-1" type="submit">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Newsletter -->
    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var post2Data = {!! $post2 !!};
            // Agora post2Data é um array de objetos JavaScript
            console.log(post2Data);
            console.log('fgmnlmgfdçl');
        });
    </script> --}}
    <!-- Wrapper end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#load-more").click(function() {
            var data = {!! $post2 !!};
            if (data && data.length > 0) {
                console.log(data);
                const qtd = data.length;
                // Adiciona as novas notícias ao container
                data.forEach(function(data) {
                    const newsHtml = `
                            <div class="news-item">
                                <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">${
                                    data.title
                                }</h4>
                                <p>${data.subtitle || ""}</p>
                                <figure class="my-3 sm:my-4">
                                    <figure class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                            data-src="http://127.0.0.1:8000/img/news/${
                                                data.image
                                            }"
                                            alt="${
                                                data.title
                                            }" data-uc-img="loading: lazy">
                                        <a href="http://127.0.0.1:8000/img/news/${
                                            data.image
                                        }" class="position-cover"
                                            data-caption="${data.title}"></a>
                                    </figure>
                                    <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">
                                        ${data.title}
                                    </figcaption>
                                </figure>
                                <p>
                                    ${data.description}
                                </p>
                            </div>
                        `;

                    // Adiciona a nova notícia antes do botão "Ver Mais"
                    $("#load-more").before(newsHtml);
                })
                // Verifica se há mais páginas para carregar
                /*  if (currentPage >= data.last_page) {
                     $("#load-more").hide(); // Esconde o botão se não houver mais páginas
                 } */
            } else {
                console.log('chegou')
                $("#load-more").hide(); // Esconde o botão se não houver dados
            }
        });
    </script>
    {{-- <script src="{{ url('site/assets/js/lern-more.js') }}"></script> --}}
@endsection
