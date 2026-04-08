
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard | BODIVA</title>

   {{--  <link href="../fonts.googleapis.com/css2713f.css?family=Manrope:wght@200;400;600&amp;display=swap" rel="stylesheet"> --}}
    {{-- <link rel="icon" type="image/png" href="{{ url('assets2/images/file2.png')}}" /> --}}



{{--     <link rel='stylesheet' href='../cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
    <link rel='stylesheet' href='../fonts.googleapis.com/css9292.css?family=Open+Sans:300,400,700,800'>
 --}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('bodiva/assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ url('bodiva/assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ url('bodiva/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('bodiva/assets/css/news.css')}}">
    {{-- <link rel="stylesheet" href="index.html"> --}}
    <link rel="stylesheet" href="{{ url('bodiva/tabs.css')}}">
    <link rel="stylesheet" href="{{ url('bodiva/table.css')}}">
    <style type="text/css">
        .dados {
            position: absolute;
            z-index: 10;
            bottom: -59px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            padding-top: 15px;
        }

        /*banner-info
    slider-info*/
        .slider-info {
            position: absolute;

        }

        .banner-info-bg {
            max-width: 800px !important;
            margin-top: 100px;
            margin-bottom: 30px;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        .owl-dots {
            margin-top: 0px;
            position: absolute;

            bottom: 30% !important;
            background: none;
            text-align: right !important;
            width: 34px;
            right: 34px !important;
        }

        .owl-dots .owl-dot.active span {
            background: rgba(0, 0, 0, 0) !important;
            border: solid 3px #28a745;
        }

        .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: var(--success);
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 12px;
            height: 12px;
            margin: 5px 2px;
            background: var(--success);
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s ease;
            border-radius: 30px;
            position: relative;
        }

        .borda {
            border-top: solid 4px #28a745;
        }

        .menu_top {
            align-items: center;
            display: flex;
            margin: 0 auto;
        }

        .menu_top li {
            clear: both;
            width: 100%;
            display: block;
            padding: 20px;
        }

        .tamanho {
            min-height: 180px;
        }



        /****/




        .card_1 {

            transform: translate(-50%, -50%);

            min-height: 400px;
            background: #fff;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .1);
            border-radius: 10px;
            transition: 0.5s;
            padding: 20px;
            margin: 10px;

        }

        .card:hover {
            box-shadow: 0 30px 70px rgba(0, 0, 0, .2);
        }

        .dados {
            position: absolute;
            z-index: 100;
            bottom: -59px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            padding-top: 15px;
        }

        h3 {
            color: #5cb85c !important;
        }

        .card {
            padding: 20px;
            text-align: justify;
        }

        center img {
            padding: 20px;
        }

        .parallax {
            /* The image used */
            background-image: url("assets/images/slide_b_1.jpg");


            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .profile {
            margin: auto;

        }

        .profile img {
            border-radius: 100%;
            border: 2px solid lightgray;
            width: 60%;
        }

        .profile .card-body {
            text-align: center;
        }

        .col-6 {
            margin-bottom: 10px;
        }

        .card-title {
            color: #5cb85c;
        }

        .glyphicon {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
    </style>

</head>

<body>


    {{-- <header id="site-header" class="fixed-top">

        <link rel="stylesheet" href="../fonts.googleapis.com/css25712.css?family=Material+Symbols+Outlined">

        <style>
            #link_lang {
                position: fixed;
                right: 0;
                top: 20;
                display: block;
                cursor: pointer;
                z-index: 0;
                float: right
            }

            @media screen and (max-width: 400px) {
                #link_lang {
                    position: relative;
                }
            }

            @media screen and (max-width: 800px) {
                #link_lang {
                    position: relative;
                }
            }

            .dados2 {
                position: absolute;
                z-index: 100;
                bottom: -59px;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 10px;
                padding-top: 15px;
                width: 100%;
            }

            .bg-success {
                background-color: #5cb85c !important;
                color: white;
            }

            .text-success {
                color: #5cb85c !important;
            }
        </style>

        <div class="container-fluid py-6 mx-auto">

            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/bodiva2.png" alt="logo" style="width: 150px;">
                </a>

                <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars" style="background-color: #28a745"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times" style="background-color: #28a745"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown @@pages__active show">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                style="white-space:nowrap;">A BODIVA
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@g__active" href="sobre-nos.html"
                                    style="white-space:nowrap;">Sobre Nós</a>
                                <a class="dropdown-item @@r__active" href="governacao-corporativa.html"
                                    style="white-space:nowrap;">Governação Corporativa</a>
                                <a class="dropdown-item @@r__active" href="informacao-ao-acionista.html"
                                    style="white-space:nowrap;">Informação ao Accionista</a>

                                <!-- Item com submenu de segundo nível para Relatório e Contas -->
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="#" style="white-space:nowrap;"
                                        onmouseover="showSubmenu(this)">Informação Financeira <span
                                            style="float:right;">▸</span></a>
                                    <div class="dropdown-menu submenu" onmouseover="keepSubmenuOpen(this)"
                                        onmouseout="hideSubmenu(this)">
                                        <a class="dropdown-item" href="relatorio-e-contas.html"
                                            style="white-space:nowrap;">Relatório & Contas</a>
                                        <a class="dropdown-item" href="relatorio-trimestral.html"
                                            style="white-space:nowrap;">Relatório Trimestral</a>
                                    </div>
                                </div>

                                <a class="dropdown-item @@lp__active" href="cooperacao.html"
                                    style="white-space:nowrap;">Cooperação</a>
                                <a class="dropdown-item @@lp__active" href="responsabilidade_social.html"
                                    style="white-space:nowrap;">Responsabilidade Social</a>
                            </div>
                        </li>



                        <li class="nav-item dropdown @@pages__active show">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                style="white-space:nowrap;">Produtos & Serviços
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@g__active" href="negociacao.html"
                                    style="white-space:nowrap;">Negociação</a>
                                <a class="dropdown-item @@r__active" href="liquidacao-e-custodia.html"
                                    style="white-space:nowrap;">Liquidação & Custódia</a>
                                <!--  <a class="dropdown-item @@r__active" href="https://www.bodiva.ao/carteira-do-investidor" target="_blank" style="white-space:nowrap;" >Carteira do Investidor</a>-->
                                <a class="dropdown-item @@lp__active" href="outros-servicos.html"
                                    style="white-space:nowrap;">Outros Serviços</a>
                            </div>
                        </li>




                        <li class="nav-item dropdown @@pages__active show">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                style="white-space:nowrap;">Participantes
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@g__active" href="lista-de-membros.html"
                                    style="white-space:nowrap;">Membros</a>
                                <a class="dropdown-item @@g__active" href="agentes-de-liquidacao.html"
                                    style="white-space:nowrap;">Agentes de Liquidação</a>


                                <a class="dropdown-item @@r__active" href="market-makers.html"
                                    style="white-space:nowrap;">Market Makers</a>


                                <a class="dropdown-item @@g__active" href="lista-de-emitentes.html"
                                    style="white-space:nowrap;">Emitentes</a>


                                <a class="dropdown-item @@g__active" href="processo-de-registo.html"
                                    style="white-space:nowrap;">Processo de Registo</a>
                            </div>
                        </li>

                        <li class="nav-item @@contact__active @@pages__active show">
                            <a class="nav-link" href="quadro-regulatorio.html" style="white-space:nowrap;">Quadro
                                Regulatório</a>
                        </li>


                        <li class="nav-item dropdown @@pages__active show">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                style="white-space:nowrap;">Estatísticas
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@g__active" href="dashboard.html"
                                    style="white-space:nowrap;">Dashboard</a>
                                <a class="dropdown-item @@g__active" href="boletim-diario.html"
                                    style="white-space:nowrap;">Boletim Diário</a>
                                <a class="dropdown-item @@g__active"
                                    href="relatorios-dos-mercados.html" style="white-space:nowrap;">Relatórios M&T</a>
                                <a class="dropdown-item @@g__active" href="cotacoes-diarios.html"
                                    style="white-space:nowrap;">Cotações de Fecho</a>
                            </div>
                        </li>


                        <li class="nav-item @@contact__active @@pages__active show">
                            <a class="nav-link" href="publicacoes.html" style="white-space:nowrap;">Publicações</a>
                        </li>


                        <li class="nav-item @@contact__active  @@pages__active show ">
                            <a title="Pesquisar" class="nav-link" href="pagina-de-buscas.html">
                                <span class="material-symbols-outlined">search</span>
                            </a>
                        </li>


                        <li class="nav-item @@contact__active  @@pages__active show">
                            <a class="nav-link" href="index9ed2.html?lang=en">EN</a>
                        </li>




                        <!-- Restante do menu (mantido igual) -->
                        <!-- ... -->

                    </ul>
                </div>
            </nav>


            <script>
                function showSubmenu(element) {
                    const submenu = element.nextElementSibling;
                    submenu.style.display = 'block';
                }

                function hideSubmenu(element) {
                    element.style.display = 'none';
                }

                function keepSubmenuOpen(element) {
                    element.style.display = 'block';
                }

                // Fechar submenus ao clicar em qualquer lugar
                document.addEventListener('click', function() {
                    document.querySelectorAll('.submenu').forEach(function(submenu) {
                        submenu.style.display = 'none';
                    });
                });
            </script>






        </div>



        <style>
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: 0;
                min-width: 200px;
                background-color: #fff;
                border: 1px solid rgba(0, 0, 0, .15);
                border-radius: 0.25rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .175);
                padding: 0.5rem 0;
                z-index: 1000;
            }

            .dropdown-submenu:hover .submenu {
                display: block;
            }

            .dropdown-item {
                white-space: nowrap;
            }

            #link_lang {
                position: fixed;
                right: 0;
                top: 20;
                display: block;
                cursor: pointer;
                z-index: 0;
                float: right
            }

            @media screen and (max-width: 400px) {
                #link_lang {
                    position: relative;
                }
            }

            @media screen and (max-width: 800px) {
                #link_lang {
                    position: relative;
                }
            }

            .dados2 {
                position: absolute;
                z-index: 100;
                bottom: -59px;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 10px;
                padding-top: 15px;
                width: 100%;
            }
        </style>
        <script async src="../cse.google.com/fe50b.txt?cx=b610a061eac7e4387"></script>



        <div class="dados2">
            <marquee direction="left" scrollamount="6" behavior="scroll" onmouseover="this.stop();"
                onmouseout="this.start();"
                style="margin:0 0px; display:inline-block; top: auto;  margin-right:10px; margin-left:10px; z-index: 1; ">

                <label>BCGAAAAA</label>&nbsp;
                <label>13 997,00 %</label>&nbsp;

                <label class="text-danger">-0,02000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>ENSAAAAA</label>&nbsp;
                <label>22 500,00 %</label>&nbsp;

                <label class="text-danger">-0,84000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>BDVAAAAA</label>&nbsp;
                <label>26 000,00 %</label>&nbsp;

                <label class="text-success">1,96000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>SNLEDOFB</label>&nbsp;
                <label>99,98 %</label>&nbsp;

                <label class="text-success">0,00500%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>OO01I34A</label>&nbsp;
                <label>120,00 %</label>&nbsp;

                <label class="text-success">0,00100%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>STDRUFVA</label>&nbsp;
                <label>63 500,00 %</label>&nbsp;

                <label class="text-danger">-2,31000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>OJ10M28A</label>&nbsp;
                <label>106,00 %</label>&nbsp;

                <label class="text-success">3,00000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>OL01U31A</label>&nbsp;
                <label>109,53 %</label>&nbsp;

                <label class="text-success">9,54100%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <label>ON07A32A</label>&nbsp;
                <label>111,00 %</label>&nbsp;

                <label class="text-danger">-2,00000%</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            </marquee>

        </div>
    </header> --}}


{{--     <div class="inner-banner tamanho">
    </div>
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Estatística <span
                        class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Dashboard</li>
            </ul>
        </div>
    </section>




    <!----->

 --}}




{{--     <div class="main-content w3l-team py-5">
        <!-- Table -->
        <h5 class="title-small text-center mb-2">Estatística</h5>
        <h3 class="title-big text-center mb-5">Dashboard</h3>
 --}}


  

                        <iframe style="width:100%; height:600px; background:white;"
                            class="m-4"
                            src="https://app.powerbi.com/view?r=eyJrIjoiODZkZTcyYmItMjA1MS00YTBjLTg5ZjctNTEyM2Q4ZTNhNTYyIiwidCI6IjRmNTVkY2RkLTY1MzctNDM3OS1hMjNlLWMwMWYyMTdlMmE4ZSIsImMiOjh9"
                            frameborder="0" allowFullScreen="true">

                        </iframe>
                    









{{--         <div class="w3l-bg-image">
            <div class="bg-mask py-5">
                <div class="container py-lg-5 py-4">
                    <div class="text-align text-center py-lg-4 py-md-3">
                        <h3> <img src="assets/images/bodiva2.png" alt="logo" style="width: 150px;"></h3>
                        <p>Conexões com Transparência</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="w3l-footer-29-main py-5">
            <div class="footer-29 py-lg-4 py-md-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">



                            <div class="row">


                                <div class="col-lg-12">
                                    <ul style="color:#fff;">
                                        <br>
                                        <h6 class="footer-title-29">BODIVA</h6>
                                        <li><a href="contractos.html">Contratos</a></li>
                                        <li><a href="manutencao.html">Recrutamento</a></li>
                                        <li><a href="perguntas-frequentes.html">FAQ's</a></li>
                                        <li><a href="glossario.html">Glossário</a></li>
                                        <li><a href="investidores.html#denunciasReclamacoes">Denúncias e
                                                Reclamações</a></li>
                                    </ul>
                                </div>



                                <div class="col-lg-12" id="app">
                                    <!-- <h2>Inscreva-se na nossa Newsletter!</h2>-->
                                    <p>Newsletters</p>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <input type="text" class="form-control form-control-sm"
                                                    v-model="subscriber.name" placeholder="Seu Nome">
                                            </div>

                                            <div class="col-lg-12 mt-2">
                                                <input type="email" class="form-control form-control-sm"
                                                    v-model="subscriber.email" placeholder="Informe o Email">
                                            </div>

                                        </div>
                                        <div class="col">
                                            <button type="button" @click="subscrever()"
                                                class="btn btn-primary btn-md">Enviar</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>



                        <div class="col-lg-4">
                            <ul style="color:#fff;">
                                <br>
                                <h6 class="footer-title-29">Sites Relacionados</h6>
                                <li><a href="../www.ameda.org.eg/Members.html" target="_blank">AMEDA</a></li>
                                <li><a href="../www.anna-web.org/index.html" target="_blank">ANNA</a></li>
                                <li><a href="../african-exchanges.org/index.html" target="_blank">ASEA</a></li>
                                <li><a href="../www.cmc.ao/sites/main/pt/Paginas/Home.html" target="_blank">CMC</a>
                                </li>
                                <li><a href="../www.cosse.africa/index.html" target="_blank">CoSSE</a></li>
                                <li><a href="../www.minfin.gov.ao/PortalMinfin/index.html#!/"
                                        target="_blank">MINFIN</a></li>
                                <li><a href="../www.world-exchanges.org/index.html" target="_blank">WFE</a></li>
                            </ul>
                        </div>
                        <div class=" col-lg-4">
                            <br>
                            <h6 class="footer-title-29">Contactos</h6>
                            <ul>
                                <li>
                                    <p style="color: #FFFFFF"><span class="fa fa-map-marker"></span> Rua Marechal Brós
                                        Tito, Nº 41, Sky Business Tower, 8º Andar, Luanda, Angola</p>
                                </li>
                                <li style="color: #FFFFFF"><span class="fa fa-phone"></span> (+244) 225 420 300</li>
                                <li style="color: #FFFFFF"><span class="fa fa-whatsapp"></span><a target="_blank"
                                        href="../api.whatsapp.com/send/index1467.html?text=Ol%c3%a1!%20Em%20que%20posso%20ajudar?">
                                        (+244) 926 927 703</a></li>
                                <li style="color: #FFFFFF"><span class="fa fa-envelope-open-o"></span><a
                                        href="mailto:institucional@bodiva.ao"> institucional@bodiva.ao</a></li>
                                <li style="color: #FFFFFF"><span class="fa fa-envelope-open-o"></span><a
                                        href="mailto:apoio.investidor@bodiva.ao"> apoio.investidor@bodiva.ao</a></li>
                                <li style="color: #FFFFFF"><span class="fa fa-envelope-open-o"></span><a
                                        href="mailto:relacao.investidores@bodiva.ao">
                                        relacao.investidores@bodiva.ao</a></li>

                            </ul>
                            <div class="main-social-footer-29">
                                <a href="../www.linkedin.com/company/bodiva---sgmr.html" class="linkedin"
                                    target='_blank'><span class="fa fa-linkedin"></span></a>
                                <a href="../www.facebook.com/bodiva.sgmr/index.html" class="facebook"
                                    target='_blank'><span class="fa fa-facebook"></span></a>
                                <a href="../instagram.com/bodiva_sgmr/index.html" class="instagram"
                                    target='_blank'><span class="fa fa-instagram"></span></a>
                                <a href="../www.youtube.com/channel/UCGsrKpIdIo2fCRGsmK0rmFQ.html" class="google-plus"
                                    target='_blank'><span class="fa fa-youtube"></span></a>
                            </div>



                        </div>

                        <!--http://192.168.1.51:8000-->




                    </div>
                    <div class="d-grid grid-col-2 bottom-copies">
                        <p class="copy-footer-29" style="color: #FFFFFF">Copyright © 2014 - 2025 BODIVA. Todos os
                            direitos reservados.</p>
                        <ul class="list-btm-29">


                        </ul>
                    </div>
                </div>
            </div>







            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }

                //Manipular searbar input
            </script>
            <!-- /move top -->

        </section>


        <!-- Modal SearchBar-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesquisars</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="gcse-search"></div>
                    </div>

                </div>
            </div>
        </div> --}}

        <script src="../unpkg.com/axios%401.12.2/dist/axios.min.js"></script>
        <script src="../cdn.jsdelivr.net/npm/vue%402.6.12/dist/vue.js"></script>
        <script src="../cdn.jsdelivr.net/npm/sweetalert2%4011"></script>
        <!-- jsdelivr cdn -->
        <script src="{{ url('bodiva/assets/js/app.js')}}"></script>


        <script>
            //'#8CC152'
            var botmanWidget = {
                title: 'BodiBot',
                frameEndpoint: 'https://chat.bodiva.ao/chat',
                chatServer: 'https://chat.bodiva.ao/botman',
                aboutText: 'Powered by DSTI-BODIVA',
                introMessage: "✋ Olá, seja bem vindo, estou aqui para te ajudar. <br> <br>A informação disponibilizada está sujeita a actualizações.<br><br>Como utilizador, é o único responsável por todas as decisões tomadas com base nos dados inseridos.",
                placeholderText: 'Envie uma mensagem...',
                mainColor: '#fbfbf9',
                bubbleBackground: 'white',
                bubbleAvatarUrl: 'https://www.bodiva.ao//img/robo.png',
                titleColor: 'white',
                headerTextColor: 'black',
                aboutLink: 'https://www.bodiva.ao/'
            };
        </script>

        <script src='../cdn.jsdelivr.net/npm/botman-web-widget%400/build/js/widget.js'></script>

        <script src='../cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>


        <script>
            var timelineSwiper = new Swiper('.timeline .swiper-container', {
                direction: 'vertical',
                loop: false,
                speed: 1600,
                pagination: '.swiper-pagination',
                paginationBulletRender: function(swiper, index, className) {
                    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
                    return '<span class="' + className + '">' + year + '</span>';
                },
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                breakpoints: {
                    768: {
                        direction: 'horizontal',
                    }
                }
            });
        </script>


        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
        </section>

        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <!-- script for testimonials -->
        <script>
            $(document).ready(function() {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script for testimonials -->
        <script src='../cdn.jsdelivr.net/npm/chart.js%402.8.0'></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/theme-change.js"></script>

        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function() {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <!--/MENU-JS-->
        <script>
            $(window).on("scroll", function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function() {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function() {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>
        <!--//MENU-JS-->

        <!--Carousel-->

        <script type="text/javascript">
            $(document).ready(function() {
                $("#myCarousel").on("slide.bs.carousel", function(e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 3;
                    var totalItems = $(".carousel-item").length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $(".carousel-item")
                                    .eq(i)
                                    .appendTo(".carousel-inner");
                            } else {
                                $(".carousel-item")
                                    .eq(0)
                                    .appendTo($(this).find(".carousel-inner"));
                            }
                        }
                    }
                });
            });
        </script>

        <script src="assets/js/bootstrap.min.js"></script>


        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-102167650-1', 'auto');
            ga('send', 'pageview');
        </script>