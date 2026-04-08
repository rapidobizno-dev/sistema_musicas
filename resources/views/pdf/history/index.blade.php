<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Atividades</title>
</head>

<body>
    <header class="col-12 mt-2 row mb-5">

        <div class="col-12">
            <img src="dashboard/images/logo_blue.png" alt="IMED" width="150" class="mt-3">
            <img src="" alt="" width="250">
        </div>

        <p class="text-left mt-2">
            Luanda, Angola<br>
            Telef. (+244) 222 693 507<br>
            Email: mpanzu@julina.gov.ao<br>
            Site: www.radareconomico.gov.ao<br>
            NIF: <b>XXXXXXXXX</b><br>

        </p>
        {{-- <p class="text-right">
            Exmo.(s) Sr.(s) <br>
            {{ $client }} <br>
            NIF: {{ $nif }} <br>

        </p> --}}

    </header>
    <section class="col-12 mb-5">
        <p class="text-center">
            {{--  <b>Fatura Nº </b>{{ $code }} |
            <b> Data:</b> {{   date('d/m/Y', strtotime($lastUpdate))    }} --}}
        <h2>Relatório de Atividades</h2>
        </p>
        <hr class="pylarge bg-dark">

        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">ID </th>
                    <th>Usuário</th>
                    <th>Ação</th>
                    <th>Propriedades</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr class="text-center">
                        <td class="text-left">{{ $log->id }}</td>
                        <td>{{ optional($log->causer)->name ?? 'Sistema' }}</td>
                        <td>{{ $log->description }}</td>
                        <td>{{ json_encode($log->properties) }}</td>
                        <td>{{ $log->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{--  <hr class="pylarge bg-dark">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">Descrição</th>
                    <th>Un</th>
                    <th>Pr. Unitário</th>
                    <th>Desc.</th>
                    <th>IVA</th>
                    <th>Total Líquido</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="text-left">{{ $service }}</td>
                    <td>UN</td>
                    <td>{!! number_format($value, 2, ',', '.') !!}</td>
                    <td>0,00</td>
                    <td>0,00</td>
                    <td>{!! number_format($value, 2, ',', '.') !!}</td>
                </tr>
            </tbody>

        </table> --}}
    </section>

    <footer class="col-12 mt-2 text-center" id="footer">

        {{-- <div class="col-6 text-left">
            <table class="table table-striped">
                <tr>
                    <th>Mercadoria/Serviços:</th>
                    <td class="text-right">{!! number_format($value, 2, ',', '.') !!} </td>
                </tr>
                <tr>
                    <th>Descontos Comerciais:</th>
                    <td class="text-right">0,00</td>
                </tr>
                <tr>
                    <th>Desconto Financeiro:</th>
                    <td class="text-right">0,00</td>
                </tr>
                <tr>
                    <th>IVA:</th>
                    <td class="text-right">0,00</td>
                </tr>

            </table>

            <hr class="pylarge bg-dark">
            <table class="table table-striped">
                <tr>
                    <th>
                        <h4>Total (AKZ):</h4>
                    </th>
                    <td>
                        <h4 class="text-right"> {!! number_format($value, 2, ',', '.') !!}</h4>
                    </td>
                </tr>


            </table>

        </div> --}}

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>

        {{-- <div class="col-12 mt-5">

            <img src="dashboard/images/minttics.jpg" width="250">
        </div> --}}

    </footer>
</body>

</html>

</body>

</html>
