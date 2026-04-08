<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor USD para Kwanza</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        /*  * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        /*  body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        } */

        .converter {
            background: rgba(255, 255, 255, 0.95);
            /* border-radius: 20px; */
            padding: 5px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            /*  max-width: 400px; */
            width: 100%;
            height: 160px;
            text-align: center;
        }

        .title {
            color: #333;
            margin: auto;
            font-size: 18px;
            font-weight: 600;
            padding: 0.2rem;
        }

        .currency-group {
            margin-bottom: 25px;
            text-align: center;

        }

        .currency-label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }

        .currency-input {
            /* width: 100%; */
            padding: 5px;
            border: 2px solid #e1e5e9;
            /*  border-radius: 12px; */
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .currency-input:focus {
            outline: none;
            border-color: #F47F19;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .rate-info {
            background: #f0f2f5;
            padding: 6px;
            /* border-radius: 10px; */
            margin: 2px 15px;
            color: #666;
            font-size: 14px;
            border-left: 4px solid #F47F19;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .convert-btn {
            background: #F47F19;
            color: white;
            border: none;
            padding: 15px 40px;
            /* border-radius: 12px; */
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 20px 0;
        }

        .convert-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(234, 170, 102, 0.279);
        }

        .swap-icon {
            background: #F47F19;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px auto;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 20px;
        }

        .swap-icon:hover {
            transform: rotate(180deg);
            background: #b96317;
        }

        @media (max-width: 480px) {
            .converter {
                padding: 30px 20px;
            }

            .title {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="converter">
        
        <h1 class="title">💱 Conversor de Moeda</h1>

        <div class="row">
            <div class="col-md-3  m-4"   >
                <div class="currency-group">
                    <label class="currency-label">🇺🇸 Dólar Americano (USD)</label>
                    <input type="number" class="currency-input" id="usd-input" placeholder="Digite o valor em USD"
                        step="0.01" min="0">
                </div>
                
            </div>
           {{--  <div class="col m-0">
                <button class="swap-icon" id="swap-btn" title="Trocar moedas">⇅</button>
            </div> --}}
            <div class="col-md-3 m-4">
                <label class="currency-label">Taxa Actual</label>
                <div class="rate-info" id="rate-info">
                    Taxa atual: 1 USD = 830.00 AOA
                </div>
            </div>
            <div class="col-md-3 m-4">
                <div class="currency-group">
                    <label class="currency-label">🇦🇴 Kwanza Angolano (AOA)</label>
                    <input type="number" class="currency-input" id="aoa-input" placeholder="Digite o valor em AOA"
                        step="0.01" min="0">
                </div>
            </div>
            
            {{-- <div class="col">
                <button class="convert-btn" id="convert-btn">Converter Agora</button>
            </div> --}}
        </div>




    </div>

    <script>
        $(document).ready(function() {
            // Taxa de câmbio aproximada (você pode atualizar esta taxa)
            const exchangeRate = {!! $rate->rate ?? 900 !!}; // 1 USD = 830 AOA (aproximado)

            // Atualizar display da taxa
            $('#rate-info').text(`Taxa atual: 1 USD = ${exchangeRate.toFixed(2)} AOA`);

            // Função para converter USD para AOA
            function convertUSDToAOA() {
                const usdValue = parseFloat($('#usd-input').val()) || 0;
                const aoaValue = usdValue * exchangeRate;
                $('#aoa-input').val(aoaValue.toFixed(2));
            }

            // Função para converter AOA para USD
            function convertAOAToUSD() {
                const aoaValue = parseFloat($('#aoa-input').val()) || 0;
                const usdValue = aoaValue / exchangeRate;
                $('#usd-input').val(usdValue.toFixed(2));
            }

            // Event listeners para conversão automática
            $('#usd-input').on('input', function() {
                convertUSDToAOA();
            });

            $('#aoa-input').on('input', function() {
                convertAOAToUSD();
            });

            // Botão de conversão manual
            $('#convert-btn').on('click', function() {
                const usdValue = $('#usd-input').val();
                const aoaValue = $('#aoa-input').val();

                if (usdValue && !aoaValue) {
                    convertUSDToAOA();
                } else if (aoaValue && !usdValue) {
                    convertAOAToUSD();
                } else if (usdValue) {
                    convertUSDToAOA();
                }
            });

            // Função para trocar os valores
            $('#swap-btn').on('click', function() {
                const usdValue = $('#usd-input').val();
                const aoaValue = $('#aoa-input').val();

                $('#usd-input').val(aoaValue);
                $('#aoa-input').val(usdValue);
            });

            // Permitir apenas números positivos
            $('.currency-input').on('keypress', function(e) {
                if (e.which < 48 || e.which > 57) {
                    if (e.which !== 46 && e.which !== 8 && e.which !== 0) {
                        e.preventDefault();
                    }
                }
            });
        });
    </script>
</body>

</html>
