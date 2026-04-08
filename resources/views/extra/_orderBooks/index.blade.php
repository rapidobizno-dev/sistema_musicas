<link rel="stylesheet" href="../cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ url('bodiva/assets/css/style-starter-ple.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/assets/css/style.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/assets/css/news.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/tabs.css')}}">
<link rel="stylesheet" href="{{ url('bodiva/table.css')}}">


<div class="row">

    <div class="col-md-12">
        {{-- <a class=" btn btn-success"
            href="controllers/excel/Export/Ordens%20Dispon%c3%adveis%20no%20Mercado%2025-09-2025%2012-54-35.xlsx"
            target="_blank">Exportar</a>
        <i>Clique em exportar para visualizar a YIELD.</i><br> --}}

        <div class="card shadow">
            <div class="card-header border-0">
                <!--- <h5 class="mb-" style="color:#444">Lista de Membros</h5>-->

            </div>

            <div class="table-responsive">
                <table id="example2" class="table align-items-center table-flush" style="width:100%"><br>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" rowspan="2"> Código de Negociação</th>
                            <th scope="col" rowspan="2"> Tipologia do Título</th>
                            <th scope="col" rowspan="2"> VNUA / Dividendos</th>
                            <th scope="col" rowspan="2"> Taxa de Cupão (%)</th>
                            <th scope="col" rowspan="2"> Data de Emissão</th>
                            <th scope="col" rowspan="2"> Data de Vencimento</th>
                            <th scope="col" rowspan="2"> Última Cotação</th>
                            <th scope="col" colspan="2" style="text-align: center;"> Compra</th>
                            <th scope="col" colspan="2" class="border-lb" style="text-align: center;"> Venda</th>
                        </tr>
                        <tr>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="border-lb">Preço</th>
                            <th scope="col" class="border-lb">Quantidade</th>
                            <th scope="col" class="border-lb">Preço</th>
                        </tr>
                    </thead>
                    <tbody
                        style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('BDVAAAAA')"><i class="fa fa-search"></i>
                                    <u>BDVAAAAA</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOBDVAAAAA05', '2')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">Acções</td>
                            <td style="text-align: right;">972,93</td>
                            <td style="text-align: right;">NA </td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">NA</td>
                            <td style="text-align: right;">25.500,00</td>
                            <td style="text-align: right;">
                                6 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>22.000,0000</b>
                            </td>
                            <td style="text-align: right;">

                                197 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>26.000,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('BAIAAAAA')"><i class="fa fa-search"></i>
                                    <u>BAIAAAAA</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOBAIAAAAA05', '2')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">Acções</td>
                            <td style="text-align: right;">3.494,58</td>
                            <td style="text-align: right;">NA </td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">NA</td>
                            <td style="text-align: right;">74.000,00</td>
                            <td style="text-align: right;">
                                2 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>65.000,0000</b>
                            </td>
                            <td style="text-align: right;">

                                2.493 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>74.000,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('BCGAAAAA')"><i class="fa fa-search"></i>
                                    <u>BCGAAAAA</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOBCGAAAAA05', '2')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">Acções</td>
                            <td style="text-align: right;">1.227,55</td>
                            <td style="text-align: right;">NA </td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">NA</td>
                            <td style="text-align: right;">14.000,00</td>
                            <td style="text-align: right;">
                                14 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>12.000,0000</b>
                            </td>
                            <td style="text-align: right;">

                                248 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>13.997,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('ENSAAAAA')"><i class="fa fa-search"></i>
                                    <u>ENSAAAAA</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOENSAAAAA05', '2')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">Acções</td>
                            <td style="text-align: right;">1.811,62</td>
                            <td style="text-align: right;">NA </td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">NA</td>
                            <td style="text-align: right;">22.690,00</td>
                            <td style="text-align: right;">
                                4 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>18.500,0000</b>
                            </td>
                            <td style="text-align: right;">

                                2 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>22.690,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('SNLEDOFB')"><i class="fa fa-search"></i>
                                    <u>SNLEDOFB</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOSNLEDOFA16', '4')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">Obrigações Ordinárias</td>
                            <td style="text-align: right;">10.000,00</td>
                            <td style="text-align: right;">17,50 % </td>
                            <td style="text-align: center;">2023-09-14</td>
                            <td style="text-align: center;">2028-09-14</td>
                            <td style="text-align: right;">99,97</td>
                            <td style="text-align: right;">
                                50 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>88,0000</b>
                            </td>
                            <td style="text-align: right;">

                                499 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>99,9750</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('STDRUFVA')"><i class="fa fa-search"></i>
                                    <u>STDRUFVA</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOSTDRUFVA07', '3')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">OIC Fechado</td>
                            <td style="text-align: right;">50.000,00</td>
                            <td style="text-align: right;">NA </td>
                            <td style="text-align: center;">2024-03-15</td>
                            <td style="text-align: center;">2027-03-15</td>
                            <td style="text-align: right;">65.000,00</td>
                            <td style="text-align: right;">
                                -- </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                --</td>
                            <td style="text-align: right;">

                                8 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>63.500,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('BE14F26A')"><i class="fa fa-search"></i>
                                    <u>BE14F26A</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOUGDBEF25A7', '1')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">BT-364 dias</td>
                            <td style="text-align: right;">1.000,00</td>
                            <td style="text-align: right;">14,75 % </td>
                            <td style="text-align: center;">2025-02-15</td>
                            <td style="text-align: center;">2026-02-14</td>
                            <td style="text-align: right;">944,54</td>
                            <td style="text-align: right;">
                                -- </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                --</td>
                            <td style="text-align: right;">

                                5.000.000 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>947,0785</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('OM26O26A')"><i class="fa fa-search"></i>
                                    <u>OM26O26A</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOUGDXMO17C9', '1')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">OT-TX</td>
                            <td style="text-align: right;">1.143.610,89</td>
                            <td style="text-align: right;">8,50 % </td>
                            <td style="text-align: center;">2017-10-26</td>
                            <td style="text-align: center;">2026-10-26</td>
                            <td style="text-align: right;">102,00</td>
                            <td style="text-align: right;">
                                -- </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                --</td>
                            <td style="text-align: right;">

                                25 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>101,0000</b>
                            </td>
                        </tr>
                        <tr
                            style="color:#000000; background: #FFFFFF; border-color: #FFFFFF; background-color: #FFFFFF;">
                            <td style="text-align: left;">
                                <a id="contaCustodia" style="color: #2b669a; cursor: pointer;"
                                    onclick="functionViewPQODM('EI10I26A')"><i class="fa fa-search"></i>
                                    <u>EI10I26A</u></a>
                                <a id="isin4" target="_blank" style="color: #5dbecd;"
                                    onclick="ResultPDFFT('AOUGDEII21B3', '1')"><i class="fa fa-file-pdf-o"></i>
                                    <u></u></a>
                            </td>
                            <td style="text-align: center;">OT-ME</td>
                            <td style="text-align: right;">10.000,00</td>
                            <td style="text-align: right;">5,90 % </td>
                            <td style="text-align: center;">2021-05-10</td>
                            <td style="text-align: center;">2026-05-10</td>
                            <td style="text-align: right;">99,89</td>
                            <td style="text-align: right;">
                                -- </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                --</td>
                            <td style="text-align: right;">

                                300 </td>
                            <td style="text-align: right;" class="border-lb" style="color: black">
                                <b>99,9000</b>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
            {{-- <div class="card-body" style="  text-align: justify;text-justify: inter-word;">
                <p>
                    <b style="color: red;"><u><i>Disclaimer:</i></u></b> Todos os esforços razoáveis foram feitos para
                    garantir que as informações neste documento estejam correctas no momento da publicação. No entanto,
                    a BODIVA SGMR S.A não aceita qualquer responsabilidade por decisões tomadas, ou relacionadas a
                    sistemas ou outros trabalhos realizados por qualquer parte com base neste documento. Este documento
                    não é uma recomendação de investimento, não constitui qualquer tipo de aconselhamento, nem é uma
                    oferta de compra e venda ou tem como intenção solicitar uma oferta de compra ou de venda de
                    instrumentos financeiros. Adicionalmente, para as acções admitidas a negociação os dividendos pagos
                    correspondem ao último exercício.
                </p>
                <p>
                    <a style="color: #2b669a;" href="livro-de-ordens.html">Clique aqui para ver todas as ordens
                        disponíveis no mercado.</a>
                </p>
            </div> --}}





        </div>
    </div>
</div>
</div>
