<link rel="stylesheet" href="../cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ url('bodiva/assets/css/style-starter-ple.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/assets/css/style.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/assets/css/news.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/tabs.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/table.css')}}">



<style type="text/css">

    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0; // remove the gap so it doesn't close
    }


    .dados {
        position: absolute;
        z-index: 100;
        bottom: -59px;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        padding-top: 15px;
        width: 100%;
    }

    /*banner-info
slider-info*/
    .slider-info {
        position: absolute;

    }

    .black-one{
      color:#000;
    }
    .banner-info-bg {
        max-width: 800px !important;
        margin-top: 100px;
        margin-bottom: 20px;
        margin-left: 10% !important;
        margin-right: 10%;
        bottom: 20px;

        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #10253F;
        text-align: center;
    }

    .banner-info-bg-ple {
        max-width: 800px !important;
        margin-top: 100px;
        margin-bottom: 20px;
        margin-left: 10% !important;
        margin-right: 45%;
        bottom: 20px;

        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #10253F;
        text-align: right;
    }

    .countdown {
        font-size: 23px;
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
        border-top: solid 4px #7596a1;
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

    .card {
        min-height: 510px;
    }

    .video-title {
        color: #444 !important;
    }

    @media (max-width: 450px) {
        .banner-info-bg-ple {
            max-width: 800px !important;
            margin-top: 100px;
            margin-bottom: 20px;
            margin-left: 10% !important;
            margin-right: 10%;
            bottom: 20px;

            z-index: 10;
            padding-top: 100px;
            padding-bottom: 100px;
            color: #10253F;
            text-align: center;
        }

        .banner-info-bg-ple h5 {
            font-size: 100px;


        }
    }

    .banner-info-OPV-7 a {
        float: left;
        margin-left: 20%;
    }






    /* Estilo para a seção principal */
    #w3l-main-slider {
        background-color: rgb(13, 13, 13) !important;
    }

    /* Container dos banners */
    .companies20-content .owl-carousel .item {
        margin-top: 94px !important;
    }

    /* Estilo responsivo para os banners */
    .slider-info {
        background-size: cover;
        /* Garante que a imagem cubra o espaço do banner */
        background-position: center;
        /* Centraliza a imagem */
        min-height: calc(60vh - 10px);
        /* Altura mínima responsiva */
        height: auto;
        /* Altura ajustável para diferentes telas */
        display: grid;
        align-items: center;
        padding: 3em 0;
        border-radius: 8px;
        /* (Opcional) Adiciona cantos arredondados */
        overflow: hidden;
        /* (Opcional) Garante que conteúdo excedente seja cortado */
    }

    /* Ajuste do botão dentro do banner */
    .slider-info .btn {
        margin-top: 2em;
        padding: 0.8em 1.5em;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .slider-info .btn:hover {
        background-color: #004d40;
        /* Cor ao passar o mouse */
        color: black;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .slider-info {
            padding: 2em 1em;
            min-height: calc(50vh - 10px);
            /* Ajusta a altura para telas menores */
        }

        .slider-info .btn {
            font-size: 0.9rem;
            padding: 0.7em 1.2em;
        }
    }

    @media (max-width: 480px) {
        .slider-info {
            min-height: calc(40vh - 10px);
            /* Ajusta a altura para dispositivos muito pequenos */
        }

        .slider-info .btn {
            font-size: 0.8rem;
            padding: 0.6em 1em;
        }
    }
</style>



<div class="row">

    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">

            </div>



            <div class="table-responsive">
                <table id="example1" class="table align-items-center table-flush" style="width:100%"><br>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Valor Mobiliário</th>
                            <th scope="col">Tipologia do Título</th>
                            <th scope="col">Preço (%)</th>
                            <th scope="col">Variação (%)</th>
                            <th scope="col">N° de Negócios</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Montante</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOBCGAAAAA05', '2')"><u>BCGAAAAA</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Acções</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    13 997,0000 </span>
                            </td>
                            <td class="text-danger"><i class="fa fa-arrow-down"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    -0,02000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    29 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    586 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    8 203 416,5500 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOENSAAAAA05', '2')"><u>ENSAAAAA</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Acções</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    22 500,0000 </span>
                            </td>
                            <td class="text-danger"><i class="fa fa-arrow-down"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    -0,84000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    10 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    40 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    897 500,0000 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOBDVAAAAA05', '2')"><u>BDVAAAAA</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Acções</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    26 000,0000 </span>
                            </td>
                            <td class="text-success"><i class="fa fa-arrow-up"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    1,96000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    8 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    601 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    15 626 000,0000 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOHL24A4', '1')"><u>OH15L28B</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    94,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    7 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    4 357 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    4 233 081,1313 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOSNLEDOFA16', '4')"><u>SNLEDOFB</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Obrigações Ordinárias</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    99,9750 % </span>
                            </td>
                            <td class="text-success"><i class="fa fa-arrow-up"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00500 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    7 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    262 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    2 633 541,7750 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDONJ23A8', '1')"><u>ON30J33A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 ">
                                    94,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    5 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    17 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    1 641 271,4669 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOBAIAAAAA05', '2')"><u>BAIAAAAA</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Acções</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    74 000,0000 </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    5 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    19 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    1 406 000,0000 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOOI23A8', '1')"><u>OO01I34A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    120,0000 % </span>
                            </td>
                            <td class="text-success"><i class="fa fa-arrow-up"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00100 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    4 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    799 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    1 029 010,1651 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOML23A6', '1')"><u>OM15L32A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    80,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    2 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    245 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    203 041,0039 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOIA25A2', '1')"><u>OI15A30A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    94,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    2 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    9 100 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    9 212 531,6907 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOSTDRUFVA07', '3')"><u>STDRUFVA</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">UP</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    63 500,0000 </span>
                            </td>
                            <td class="text-danger"><i class="fa fa-arrow-down"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    -2,31000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    2 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    7 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    444 500,0000 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOIF25A1', '1')"><u>OI15F30A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    90,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    200 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    183 740,6250 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOGL25B1', '1')"><u>OG15L28A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    93,9998 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    200 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    194 312,7114 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDELF23E3', '1')"><u>EL15F31A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-ME</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    100,0000 % </span>
                            </td>
                            <td class="text-warning"><i class="fa fa-equals"> - </i>
                                <span class="badge badge-dot mr-4 black-one">
                                    0,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    79 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    79 232,1989 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOJM22A2', '1')"><u>OJ10M28A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    106,0000 % </span>
                            </td>
                            <td class="text-success"><i class="fa fa-arrow-up"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    3,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    5 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    534 093,9229 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDOLU23A9', '1')"><u>OL01U31A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    109,5310 % </span>
                            </td>
                            <td class="text-success"><i class="fa fa-arrow-up"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    9,54100 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    200 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    231 816,9181 </span>
                            </td>

                        </tr>




                        <tr>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">
                                            <a id="isin"  style="color: #5dbecd;"
                                                onclick="ResultPDFFT('AOUGDONA22A9', '1')"><u>ON07A32A</u></a>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">OT-NR</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    111,0000 % </span>
                            </td>
                            <td class="text-danger"><i class="fa fa-arrow-down"></i>
                                <span class="badge badge-dot mr-4 black-one">
                                    -2,00000 % </span>
                            </td>

                            <td>
                                <span class="badge badge-dot mr-4 black-one">
                                    1 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    4 </span>
                            </td>

                            <td align="right">
                                <span class="badge badge-dot mr-4 black-one">
                                    481 501,6395 </span>
                            </td>

                        </tr>



                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function ResultPDFFT(isin, tipologia) {

        //var isin = document.getElementById("isin").value;
        //var isin = $("#isin").val();
        //var isin = isin;

        var form = document.createElement("form");
        form.setAttribute("method", "POST");
        form.setAttribute("action", "ficha-tecnica.html");
        form.setAttribute("target", "_blank");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "isin");
        hiddenField.setAttribute("value", isin);
        form.appendChild(hiddenField);

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "tipologia");
        hiddenField.setAttribute("value", tipologia);
        form.appendChild(hiddenField);

        document.body.appendChild(form);
        form.submit();

    }

    function openMultPage() {

        window.open('media/apresentacoes/brochura_e_apresentacao_20240209_091649.pdf', '_blank');
        window.open('media/apresentacoes/ADENDA_AO_PROSPECTO_ACREP_23_02_2024.pdf', '_blank');


        window.open('media/apresentacoes/ADENDA_AO_PROSPECTO_ACREP_15_03_2024.pdf', '_blank');
        window.open('media/apresentacoes/20240320_Divulga%c3%a7%c3%a3o_de_Resultados_OPS.OPV_ACREP.pdf', '_blank');


    }
</script>
