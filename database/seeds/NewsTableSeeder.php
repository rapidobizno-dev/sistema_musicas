<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('news')->delete();

        DB::table('news')->insert(array (
            0 =>
            array (
                'id' => 1,
                'image' => '19bfa773eb99991adca1e7a617eb744a.jpg',
                'title' => 'Petróleo avança após retórica de Trump contra Rússia e riscos na oferta da OPEP+',
                'slug' => 'petroleo-avanca-apos-retorica-de-trump-contra-russia-e-riscos-na-oferta-da-opep',
            'subtitle' => 'Os preços do petróleo estão a negociar em alta esta quarta-feira, impulsionados pelo aumento das tensões geopolíticas entre os Estados Unidos e a Rússia e pelas preocupações com a oferta no seio da Organização dos Países Exportadores de Petróleo e aliados (OPEP+).',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:42:43',
                'updated_at' => '2025-09-25 09:42:43',
            ),
            1 =>
            array (
                'id' => 2,
                'image' => 'c6ead590e471a642b4e4bf67bc5d3d3f.jpg',
                'title' => 'Fundo Soberano de Angola regista crescimento recorde de 137% no primeiro semestre de 2025',
                'slug' => 'fundo-soberano-de-angola-regista-crescimento-recorde-de-137-no-primeiro-semestre-de-2025',
            'subtitle' => 'O Fundo Soberano de Angola (FSDEA) anunciou um crescimento histórico de 137% no resultado líquido do primeiro semestre de 2025, atingindo 187,96 milhões USD, o melhor desempenho desde a sua criação em 2012.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:46:31',
                'updated_at' => '2025-09-25 09:46:31',
            ),
            2 =>
            array (
                'id' => 3,
                'image' => 'cc9e218a664b38493814f8fc973593f5.jpg',
                'title' => 'João Lourenço reúne-se com Volodymyr Zelensky em Nova Iorque',
                'slug' => 'joao-lourenco-reune-se-com-volodymyr-zelensky-em-nova-iorque',
                'subtitle' => 'O Presidente da República de Angola e Presidente em exercício da União Africana, João Lourenço, encontrou-se nesta quarta-feira, em Nova Iorque, com o Presidente da Ucrânia, Volodymyr Zelensky.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:47:54',
                'updated_at' => '2025-09-25 09:47:54',
            ),
            3 =>
            array (
                'id' => 4,
                'image' => 'b7ff8ed2a25c10e949133dcd107a7765.jpg',
                'title' => 'ENDIAMA promove expedição científica no Leste de Angola',
                'slug' => 'endiama-promove-expedicao-cientifica-no-leste-de-angola',
                'subtitle' => 'A ENDIAMA-E.P liderou, de 15 a 24 de Setembro, uma expedição científica no Leste de Angola, abrangendo as províncias da Lunda Sul, Lunda Norte, Moxico e Moxico Leste.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:49:01',
                'updated_at' => '2025-09-25 09:49:01',
            ),
            4 =>
            array (
                'id' => 5,
                'image' => '88490dc911ea1c4b6d3976039ad347cb.jpg',
                'title' => 'Ouro mantém valorização perto de máximos históricos',
                'slug' => 'ouro-mantem-valorizacao-perto-de-maximos-historicos',
            'subtitle' => 'Os preços do ouro voltam a subir esta quarta-feira, permanecendo próximos de níveis recorde, sustentados pelas expectativas de cortes nas taxas de juro da Reserva Federal (Fed) dos Estados Unidos e pela incerteza geopolítica em torno da Rússia.',     
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:52:34',
                'updated_at' => '2025-09-25 09:52:34',
            ),
            5 =>
            array (
                'id' => 6,
                'image' => 'bfa67521a84c2fc0db4b5509b921f39d.jpg',
                'title' => 'UBS eleva Saipem para Compra devido a "potencial de recuperação subestimado"',
                'slug' => 'ubs-eleva-saipem-para-compra-devido-a-potencial-de-recuperacao-subestimado',
                'subtitle' => 'O UBS iniciou a cobertura da Saipem com recomendação de Compra e preço-alvo de €3, implicando um potencial de alta de cerca de 23%, argumentando que o mercado está ignorando o "potencial de recuperação subestimado" do grupo.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 10:14:04',
                'updated_at' => '2025-09-25 10:14:04',
            ),
            6 =>
            array (
                'id' => 7,
                'image' => '1fa27a930adb563c60681f599ce5a199.jpg',
                'title' => 'História da Nvidia está ficando "confusa" em meio a investimentos, diz Yardeni',
                'slug' => 'historia-da-nvidia-esta-ficando-confusa-em-meio-a-investimentos-diz-yardeni',
                'subtitle' => 'A narrativa em torno da Nvidia está ficando "confusa" à medida que a queridinha da inteligência artificial realiza investimentos massivos em empresas
menores que são, ao mesmo tempo, suas clientes, segundo analistas da Yardeni Research.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 10:15:59',
                'updated_at' => '2025-09-25 10:15:59',
            ),
            7 =>
            array (
                'id' => 8,
                'image' => '96d8283abfd595572c79d5f83858ab36.jpg',
                'title' => 'Ações da China sobem com ganhos de IA',
                'slug' => 'acoes-da-china-sobem-com-ganhos-de-ia',
                'subtitle' => 'O mercado acionário chinês subiu nesta quinta-feira, liderado por papéis de IA e de chips, enquanto as ações de tecnologia listadas em Hong Kong avançaram para uma semana recorde, uma vez que os investidores permaneceram concentrados nas tendências do setor antes de feriados.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-09-25',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 10:16:48',
                'updated_at' => '2025-09-25 10:16:48',
            ),
            8 =>
            array (
                'id' => 9,
                'image' => '8ac6472ff4d960bc618bd5316a6b9585.jpg',
                'title' => 'Ações da SAP caem após UE abrir investigação antitruste',
                'slug' => 'acoes-da-sap-caem-apos-ue-abrir-investigacao-antitruste',
            'subtitle' => 'As ações da SAP SE (ETR:SAPG) caíram 2,5% na quinta-feira após a Comissão Europeia iniciar uma investigação sobre possíveis práticas anticompetitivas da maior fabricante de software da Europa.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p><strong><u>agdfsfegsrhrgsfdz</u></strong></p>',
                'date' => '2025-09-25',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 10:17:28',
                'updated_at' => '2025-09-25 15:40:51',
            ),
            9 =>
            array (
                'id' => 10,
                'image' => 'bfda3808c7eaf2a6d50ed546f7b6e926.jpg',
                'title' => 'Petróleo sobe 1% após decisão da OPEP+ de aumentar produção abaixo do esperado',
                'slug' => 'petroleo-sobe-1-apos-decisao-da-opep-de-aumentar-producao-abaixo-do-esperado',
                'subtitle' => 'Os preços do petróleo subiram nesta segunda-feira, impulsionados pela decisão da OPEP+ de aumentar a oferta 
em 137 mil barris por dia em Novembro — um valor inferior ao esperado pelos mercados.',
                'detach' => 'destaque',
                'status' => 'published',
            'description' => '<p>O incremento, embora marque a oitava revisão em alta consecutiva, é considerado modesto face à produção anual.</p><p>A decisão atenuou parte das preocupações de um possível excesso de oferta no final de 2025 e em 2026.</p><p>Nos mercados internacionais, o West Texas Intermediate (WTI) avançou 1,15%, cotando-se a 61,58 dólares por barril. O Brent subiu 1,12%, para 65,25 dólares.</p><p>Segundo a analista independente Tina Teng, citada pela Reuters, a valorização “foi impulsionada principalmente pelo aumento da produção 
abaixo do esperado, numa tentativa da OPEP+ de amortecer a recente queda nos mercados”.</p><p>Chris Weston, da Pepperstone Group, disse à Bloomberg que a decisão “ficou claramente aquém das expectativas”, atribuindo a subida dos preços ao ajuste de carteiras dos investidores, que antecipavam um aumento.</p><p>Para Weston, a medida “não favorece a ideia de um mercado com excesso de oferta em 2026”, mas a recuperação dos preços deve manter-se limitada.</p><p>Nos últimos trimestres, a OPEP+ tem reduzido gradualmente as restrições ao fornecimento para recuperar quota de mercado.</p><p>O cartel tinha acordado recuperar uma parte dos 2,2 milhões de barris por dia de produção, mas os aumentos 
efectivos têm ficado abaixo do previsto.</p><p>A curto prazo, analistas esperam que a época de manutenção de refinarias no Médio Oriente, que obriga à paralisação temporária dessas unidades, contribua para limitar a pressão sobre os preços.</p>',
                'date' => '2025-10-06',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:15:38',
                'updated_at' => '2025-10-06 09:15:38',
            ),
            10 =>
            array (
                'id' => 11,
                'image' => 'ec9cb2b0c2edcbdef40007f604d536e2.jpg',
                'title' => 'Ouro supera os 3 900 USD e renova recordes históricos no mercado global',
                'slug' => 'ouro-supera-os-3-900-usd-e-renova-recordes-historicos-no-mercado-global',
                'subtitle' => 'Os preços do ouro atingiram esta segunda-feira de madrugada o quinquagésimo máximo histórico desde o início 
do ano, impulsionados pela procura de activos de refúgio devido à incerteza provocada pelo “shutdown” do Governo dos Estados Unidos.',     
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>O metal precioso alcançou os 3 945,15 dólares por onça, um aumento de 1,51% face à sessão anterior.</p><p>Posteriormente, reduziu os ganhos, negociando-se nos 3 927,60 dólares, ainda assim com uma valorização diária de 1,06%.</p><p>A tendência de valorização estendeu-se a outros metais preciosos.</p><p>A prata avançou 1%, para 48,48 dólares por onça. A platina registou uma subida de 0,22%, para 1 609,00 dólares, enquanto o paládio valorizou 0,16%, cotando-se em 1 266,82 dólares por onça.</p><p>Especialistas do sector acreditam que o movimento de alta do ouro ainda não terminou.</p><p>Claudio Wewel, estratega da J. Safra Sarasin Sustainable AM, defende que eventuais correcções devem ser vistas como oportunidades de investimento.</p><p>Já o Goldman Sachs prevê que, num cenário adverso, o 
preço possa atingir os 5 000 dólares por onça, embora o cenário base aponte para negociações em torno dos 4 000 dólares a meio do próximo ano.</p>',
                'date' => '2025-10-06',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:17:54',
                'updated_at' => '2025-10-06 09:17:54',
            ),
            11 =>
            array (
                'id' => 12,
                'image' => '9e73841eed5d22e6f81cb0b3498f6845.jpg',
                'title' => 'Banco Keve reforça presença internacional na SIBOS 2025, em Frankfurt',
                'slug' => 'banco-keve-reforca-presenca-internacional-na-sibos-2025-em-frankfurt',
                'subtitle' => 'O Banco Keve marcou presença, pela segunda vez, como expositor na SIBOS 2025 — a maior conferência mundial de serviços financeiros, que reuniu mais de 12 mil participantes e 500 oradores.',
                'detach' => 'destaque',
                'status' => 'published',
            'description' => '<p>Com um stand de destaque, o Keve promoveu Angola no maior mapa da Banca Mundial, reforçando parcerias internacionais em trade finance, compliance e inovação tecnológica.</p><p>O Cocktail Welcome to Angola organizado pelo KEVE uniu a banca angolana (BIC, BCI, BFA, BAI, BCS, Yetu, BCA, Atlântico), simbolizando cooperação e representação conjunta do sistema financeiro nacional.</p><p>A participação coincidiu com o 22.º aniversário do Banco Keve, reafirmando o compromisso de trazer para Angola as melhores práticas internacionais e de projectar um sector bancário unido e competitivo no cenário global, abrindo portas aos grandes investidores do mercado Internacional.</p>',
                'date' => '2025-10-06',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:21:01',
                'updated_at' => '2025-10-06 09:21:01',
            ),
            12 =>
            array (
                'id' => 13,
                'image' => '6f778a6322694ddbc92dc5f24bce43ec.jpg',
                'title' => 'Pedro da Cunha Neto condecorado nos 50 anos da Independência',
                'slug' => 'pedro-da-cunha-neto-condecorado-nos-50-anos-da-independencia',
                'subtitle' => 'O economista Pedro da Cunha Neto foi condecorado este ano pelo Presidente da República, no âmbito das comemorações dos 50 anos da Independência Nacional, pelo contributo prestado à construção e consolidação do sistema financeiro angolano.',       
                'detach' => 'destaque',
                'status' => 'published',
                'description' => NULL,
                'date' => '2025-10-06',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:22:18',
                'updated_at' => '2025-10-06 09:25:46',
            ),
            13 =>
            array (
                'id' => 14,
                'image' => '14588f2424bba6432537a5013caf88d7.jpg',
                'title' => 'Saint-Gobain define metas para 2026-2030 sob estratégia ’Lead and Grow’',
                'slug' => 'saint-gobain-define-metas-para-2026-2030-sob-estrategia-lead-and-grow',
                'subtitle' => 'A Saint-Gobain revelou nesta segunda-feira suas metas para 2026-2030 sob sua estratégia "Lead and Grow", delineando ambições para a contínua transformação do portfólio, crescimento em regiões de alto potencial e maior exposição aos mercados não residenciais e de infraestrutura.',
                'detach' => 'destaque',
                'status' => 'published',
            'description' => '<p>A empresa francesa de manufatura afirmou que visa um crescimento de vendas em moeda local de médio dígito 
único com "superação do mercado de 1-2 pontos percentuais" durante o período, comparado com uma média de consenso de 4,0% de crescimento anual em moeda local para os anos fiscais 2026-2030.</p><p>A Saint-Gobain estabeleceu uma meta de margem de EBITDA de 15,0-18,0%, acima das expectativas de consenso de 16,2% até o ano fiscal de 2029. Espera-se que o retorno sobre o capital empregado (ROCE) exceda 13%, acima do plano anterior de 12-15% e da cifra de 14,3% do ano fiscal de 2024.</p><p>A Saint-Gobain planeja retornos aos acionistas de US$ 6 bilhões em 
dividendos e US$ 2 bilhões em recompras de ações entre os anos fiscais 2026-2030, ligeiramente abaixo das previsões de consenso de US$ 6,4 
bilhões e US$ 2,2 bilhões.</p><p>O investimento de capital para crescimento e aquisições está previsto em US$ 12 bilhões, com uma rotação planejada do portfólio de mais de 20% até 2030. A empresa afirmou que América do Norte e Ásia devem representar 60% das vendas a longo prazo, acima dos cerca de 50% atuais.</p><p>As vendas de produtos químicos para construção têm como meta atingir US$ 9 bilhões até 2030, partindo de US$ 6,5 bilhões em 2024. Os mercados não residenciais e de infraestrutura, atualmente cerca de um terço das receitas, receberão investimentos aumentados.A Saint-Gobain reiterou sua orientação para o ano fiscal de 2025, visando uma margem operacional acima de 11%, comparada com um consenso de 11,5%.</p><p>A empresa pretende manter uma relação de dívida líquida para EBITDA entre 1,5x e 2x e manter uma taxa de conversão de fluxo de caixa livre acima de 50%, em linha com sua estratégia de 2021-2025.</p><p>O RBC Capital Markets observou que a estratégia "Lead and Grow" concentra-se no crescimento do segmento de produtos químicos para construção, no aumento da exposição à América do Norte e Ásia, e na mudança para mercados mais estáveis e de alto crescimento.</p><p>O RBC comentou que "essa transformação tem sido um elemento-chave da reavaliação de múltiplos anos na Saint-Gobain" e que as metas "devem ser vistas positivamente em uma perspectiva de médio prazo".</p><p>O RBC também afirmou que as metas gerais para os anos fiscais 2026-2030 são ligeiramente superiores ao consenso, embora não esperem 
"atualizações significativas de lucros para os anos fiscais 2025 ou 2026", dada a orientação reiterada da margem para o ano fiscal de 2025.</p><p>A US$ 94,32 por ação, a Saint-Gobain negocia a um EV/EBITDA estimado para o ano fiscal de 2025 de 8,1x, abaixo da média global do setor Lightside de 12,9x, e uma relação preço-lucro estimada para o ano fiscal de 2025 de 14,1x, comparada com a média do setor de 20,2x.</p><p>Prevê-se que a empresa entregue um rendimento de fluxo de caixa livre para o ano fiscal de 2026 de 6,7%, versus a média do setor de 5,5%.</p>',
                'date' => '2025-10-06',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:42:58',
                'updated_at' => '2025-10-06 09:42:58',
            ),
            14 =>
            array (
                'id' => 15,
                'image' => '3a3069e2bb9514baf6c06fd321bddf05.jpg',
                'title' => 'Preço do bitcoin hoje: cai após máxima histórica acima de US$ 125 mil',
                'slug' => 'preco-do-bitcoin-hoje-cai-apos-maxima-historica-acima-de-us-125-mil',
                'subtitle' => 'O Bitcoin caiu ligeiramente na segunda-feira após atingir uma máxima histórica acima de US$ 125.000 durante 
o fim de semana, enquanto fortes entradas nos ETFs à vista dos EUA e preocupações crescentes com o prolongado shutdown do governo americano continuaram a sustentar o sentimento.',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>A maior criptomoeda do mundo era negociada 1,6% abaixo, a US$ 123.716,7 às 06:50 (horário de Brasília), depois de atingir uma máxima histórica de US$ 125.617,4 no domingo.</p><p>O Bitcoin subiu mais de 11% na semana passada e, nos níveis atuais, a moeda digital acumulou ganhos superiores a 30% desde o início de 2025.</p><p><strong>Bitcoin dispara com entradas em ETFs; ’negociação de desvalorização’</strong></p><p>Dados da pesquisadora de ativos digitais SoSoValue mostraram entradas líquidas de US$ 3,24 bilhões em ETFs de Bitcoin à vista dos EUA na semana passada, marcando o maior aumento semanal de 2025.</p><p>O aumento refletiu o interesse institucional renovado, com investidores buscando exposição através de veículos de investimento regulamentados em vez de compras diretas de tokens.</p><p>O aumento nas entradas também coincide com preocupações crescentes sobre o shutdown do governo em Washington, que agora entra em sua segunda semana.</p><p>O impasse atrasou várias divulgações de dados importantes e aumentou a incerteza sobre a política fiscal, levando os traders a apostar que o Federal Reserve poderia adotar uma postura mais cautelosa sobre as taxas de juros quando as operações forem retomadas.</p><p>Relatórios descrevem o movimento como uma "negociação de desvalorização", onde investidores rotacionam capital para ativos como Bitcoin e ouro em antecipação ao enfraquecimento da confiança na moeda fiduciária e ao estresse fiscal.</p><p>&nbsp;</p><p>Anúncio de terceiros. Não é uma oferta ou recomendação do Investing.com. Leia as nossas diretrizes <u>aqui</u> ou <strong>remova os anúncios</strong>.</p><p><strong>OnePay, apoiada pelo Walmart, planeja adicionar negociação de criptomoedas - CNBC</strong></p><p>A empresa de tecnologia financeira OnePay, apoiada pelo Walmart (Nova York:WMT) e pela firma de venture capital Ribbit Capital, planeja adicionar recursos de negociação e custódia de criptomoedas ao seu aplicativo bancário ainda este ano, informou a CNBC na sexta-feira, citando pessoas familiarizadas com o assunto.</p><p>A empresa, de propriedade majoritária do Walmart e da Ribbit Capital, oferecerá aos clientes acesso a bitcoin e ether através de uma parceria com o provedor de infraestrutura cripto Zerohash, segundo o relatório.</p><p>A medida marca o mais recente passo da OnePay na construção de um "aplicativo completo" para finanças digitais, expandindo-se além de contas de poupança, cartões e empréstimos de compre agora e pague depois.</p><p><strong>Preço das criptomoedas hoje: altcoins contidas após fortes ganhos</strong></p><p>A maioria das altcoins também permaneceu em intervalo limitado na segunda-feira após fortes ganhos semanais impulsionados pelo rally de risco.</p><p>O Ethereum, segunda maior criptomoeda do mundo, era negociado 1% abaixo a US$ 4.528,65 após saltar mais de 10% na semana anterior.</p><p>O XRP, terceira maior criptomoeda do mundo, caiu 2% para US$ 2,97 após ganhar quase 5% na semana passada.</p><p>Solana perdeu 1%, enquanto Cardano caiu 3,5% 
e Polygon recuou 1,3%.</p><p>Entre os tokens meme, Dogecoin caiu 2,5%, enquanto $TRUMP recuou 1,2%.</p><p>Você deveria investir US$ 2.000 em WMT agora?</p><p>É difícil responder a essa pergunta com total segurança. Sem garantias, os traders mais experientes seguem práticas sólidas e testadas, evitando decisões guiadas por euforia ou medo.<br><br>Mas isso não significa que você não possa usar atalhos inteligentes. 
<strong>Se está considerando WMT, experimente conversar com o WarrenAI, nosso assistente financeiro com IA.</strong><br><br>Ele funciona como um ChatGPT para investidores, com acesso a 10 anos de dados de empresas, buscador integrado, relatórios de analistas e transcrições completas de balanços, tudo em tempo real.<br><br>Mesmo que sua decisão final seja por intuição, pelo menos você saberá exatamente por quê.</p>',
                'date' => '2025-10-06',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:45:41',
                'updated_at' => '2025-10-06 09:45:41',
            ),
            15 =>
            array (
                'id' => 16,
                'image' => '74e7d1126c1834fc9393ea58617bdb7f.jpg',
                'title' => 'Tesla insinua revelação de novo produto em 7 de outubro',
                'slug' => 'tesla-insinua-revelacao-de-novo-produto-em-7-de-outubro',
            'subtitle' => 'A Tesla Inc (NASDAQ:TSLA) divulgou no domingo teasers para um evento em 7 de outubro, onde a empresa deve revelar um novo produto.',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>A empresa lançou dois vídeos curtos na plataforma de mídia social X – um apresentando uma roda ou turbina 
giratória, e o outro mostrando os faróis iluminados de um veículo – destacando a data de 7 de outubro.</p><p>A prévia surge em meio a um crescente foco em um modelo acessível do fabricante de veículos elétricos, enquanto enfrenta dificuldades com vendas em declínio, uma linha de produtos envelhecida e maior concorrência de empresas chinesas.</p><p>A Tesla havia relatado na semana passada entregas recordes no trimestre de setembro. Mas o número foi visto como impulsionado principalmente pelo aumento das compras antes da expiração dos créditos fiscais 
dos EUA para veículos elétricos, com a empresa agora enfrentando maior pressão de vendas nos próximos trimestres.</p><p>A Tesla também foi 
vista perdendo terreno na Europa e China, em meio à forte concorrência de fabricantes locais em ambas as regiões. A chinesa BYD Co (HK:1211) tem sido uma grande concorrente da Tesla nos últimos trimestres, e superou as vendas da fabricante de veículos elétricos em vários mercados fora dos Estados Unidos.</p><p>O CEO Elon Musk tem repetidamente promovido a direção autônoma, inteligência artificial e robótica como os próximos grandes impulsionadores de crescimento para a Tesla.</p><p><i>Essa notícia foi traduzida com a ajuda de inteligência artificial. Para mais informação, veja nossos Termos de Uso.</i></p><p>&nbsp;</p><p>&nbsp;</p><p>Anúncio de terceiros. Não é uma oferta ou recomendação do Investing.com. Leia as nossas diretrizes <u>aqui</u> ou <strong>remova os anúncios</strong>.</p><p>Está na hora de comprar 1211?</p><p><strong>O ProPicks IA avalia 1211 ao lado de milhares de outras empresas todos os meses, utilizando mais de 100 indicadores financeiros.</strong><br><br>Com tecnologia avançada, o sistema gera ideias de investimento com base em fundamentos, momento de mercado e preço justo, e 
não em popularidade. Sem viés ou ruído, ele aponta as ações com melhor relação risco-retorno, com históricos de sucesso como Super Micro Computers (+185%) e AppLovin (+157%).<br><br>Quer saber se 1211 está incluída em alguma estratégia do ProPicks IA neste mês? Ou se há alternativas ainda mais interessantes no mesmo setor?</p>',
                'date' => '2025-10-06',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:47:08',
                'updated_at' => '2025-10-06 09:47:08',
            ),
            16 =>
            array (
                'id' => 17,
                'image' => '84a8f33c72bda8e6ea55ccb75961e5d0.jpg',
                'title' => 'OpenAI planeja monetizar geração de vídeos e compartilhar receita com detentores de direitos',
                'slug' => 'openai-planeja-monetizar-geracao-de-videos-e-compartilhar-receita-com-detentores-de-direitos',
                'subtitle' => 'A OpenAI está planejando monetizar sua tecnologia de geração de vídeos e compartilhar receita com detentores de direitos de conteúdo, segundo o CEO Sam Altman.',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>Em uma publicação no blog, Altman revelou que o engajamento dos usuários com as ferramentas de geração de 
vídeo da OpenAI superou as expectativas, com usuários criando mais conteúdo do que o previsto.</p><p>"As pessoas estão gerando muito mais do que esperávamos por usuário, e muitos vídeos estão sendo criados para públicos muito pequenos", escreveu Altman.</p><p>A empresa agora enfrenta o desafio de desenvolver um modelo de negócios sustentável para essa tecnologia. "Vamos ter que encontrar alguma forma de ganhar dinheiro com a geração de vídeos", afirmou Altman.</p><p>Como parte dessa estratégia de monetização, a OpenAI planeja compartilhar receita com detentores de direitos que queiram que seus personagens sejam gerados pelos usuários. Os detentores de direitos incluem indivíduos ou organizações que legalmente possuem direitos sobre obras criativas, intelectuais ou proprietárias.</p><p>Altman reconheceu que desenvolver o modelo certo de compartilhamento de receita exigirá experimentação, descrevendo-o como um processo que "demandará tentativa e erro". A empresa pretende começar a implementar essas mudanças "muito em breve", segundo a publicação no blog.</p><p>&nbsp;</p><p><i>Essa notícia foi traduzida com a ajuda de inteligência artificial. Para mais informação, veja nossos Termos de Uso.</i></p><p>Quer saber qual ação comprar agora?</p><p>A inteligência artificial está mudando a forma de operar na bolsa. O ProPicks IA do Investing.com oferece dezenas de carteiras com 
ações selecionadas por nossa IA avançada.<br><br>No acumulado do ano, 3 em cada 4 carteiras globais superaram seus índices de referência, com 98% das ações no positivo. <strong>A estratégia Titãs da Tecnologia, por exemplo, registrou o dobro do desempenho do S&amp;P 500 em apenas 18 meses</strong>, com destaques como Super Micro Computer (+185%) e AppLovin (+157%).&nbsp;<br><br>Qual será a próxima ação a disparar?</p>',
                'date' => '2025-10-06',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 09:49:11',
                'updated_at' => '2025-10-06 09:49:11',
            ),
            17 =>
            array (
                'id' => 18,
                'image' => '9f5ae7db6811c9e5fb0a7846440fc4d0.jpg',
                'title' => 'Berkshire anuncia compra de unidade petroquímica da Occidental por 9,7 mil milhões USD',
                'slug' => 'berkshire-anuncia-compra-de-unidade-petroquimica-da-occidental-por-97-mil-milhoes-usd',
                'subtitle' => 'A Berkshire Hathaway, conglomerado liderado por Warren Buffett, anunciou ontem a aquisição da unidade petroquímica OxyChem, pertencente à Occidental Petroleum, por 9,7 mil milhões USD.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A operação representa o regresso de Buffett às grandes aquisições, após um período de relativa inactividade em negócios de grande porte.</p><p>Segundo comunicado da empresa, o negócio deverá ser concluído até o final de 2025.</p><p>A compra 
da OxyChem é a maior operação da Berkshire desde a aquisição da seguradora Alleghany, em 2022, por 13,7 mil milhões USD.</p><p>As acções da Occidental Petroleum avançavam 1,4% na pré-abertura de Wall Street, enquanto os títulos da Berkshire Hathaway recuavam 0,3%.</p><p>A Occidental, da qual a Berkshire detém cerca de 27% do capital, informou que pretende utilizar 6,5 mil milhões USD provenientes da venda da OxyChem para reduzir a dívida, estimando colocá-la abaixo dos 15 mil milhões USD.</p><p>A aquisição ocorre num contexto em que a Berkshire tem reduzido participações em empresas como a Apple, sinalizando uma mudança de estratégia para novas oportunidades no sector energético e petroquímico.</p>',
                'date' => '2025-10-06',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:57:22',
                'updated_at' => '2025-10-06 10:57:22',
            ),
            18 =>
            array (
                'id' => 19,
                'image' => 'a82af4ec78164922f6255ed2e06bca56.jpg',
                'title' => 'Huawei anuncia construção de centro de pesquisa e desenvolvimento em Angola',
                'slug' => 'huawei-anuncia-construcao-de-centro-de-pesquisa-e-desenvolvimento-em-angola',
                'subtitle' => 'A multinacional chinesa de telecomunicações, Huawei, planeia construir em Angola um centro de pesquisa e desenvolvimento até 2027, para reforçar a inclusão digital e expandir a sua presença em África, disse na última semana o presidente da empresa para a região da África Subsaariana, Hover Gao.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>O responsável falava à imprensa após ser recebido na Cidade Alta, pelo Presidente João Lourenço. Perante os jornalistas, Hover Gao reafirmou a intenção da Huawei em continuar a apoiar o país no processo de inclusão e transformação digital.</p><p>Segundo o director geral da Huawei para os países lusófonos, António Hou, no encontro foram abordadas questões ligadas aos projectos da empresa em Angola, sublinhando que o novo centro faz parte do seu compromisso com a transformação digital e o acesso universal à tecnologia em Angola.</p><p>“A tecnologia não deve ser um privilégio para poucos. Vamos continuar a contribuir para que Angola atinja o acesso universal à Internet e aos benefícios da transformação digital”, disse, citado pela Angop.</p><p>A decisão para avançar com o projecto já está 
tomada, disse António Hou, observando que está apenas por decidir o local e o valor do investimento para a construção do centro.</p><p>Além de reforçar a inclusão digital, António Hou afirma que o centro vai acelerar o desenvolvimento de sectores estratégicos como a educação, saúde e conectividade, promovendo o acesso equitativo às novas tecnologias. Pois, refere, o projecto inclui também parcerias com universidades angolanas para a formação de 7.000 talentos em áreas como inteligência artificial, conectividade e tecnologias emergentes, até 2027.</p><p>Como parte deste programa de formação, revelou, cinco estudantes angolanos já foram selecionados este mês para viajar à China, onde participarão num programa avançado de capacitação em tecnologias de informação e comunicação.</p><p>“É uma oportunidade para aprofundarem os seus conhecimentos e voltarem com mais competências para contribuir com o desenvolvimento do país”, acrescentou, citado pela agência.</p>',  
                'date' => '2025-10-06',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 11:26:46',
                'updated_at' => '2025-10-06 11:26:46',
            ),
            19 =>
            array (
                'id' => 20,
                'image' => '5fe26e0fce801d004ab7d6fb1ef2e2b9.jpg',
                'title' => 'Empresas japonesas querem ficar no projecto de exploração de gás russo Sakhalin-2',
                'slug' => 'empresas-japonesas-querem-ficar-no-projecto-de-exploracao-de-gas-russo-sakhalin-2',
                'subtitle' => 'De acordo com os pormenores relatados pelo jornal Nikkei, espera-se que a Rússia decida sobre a continuação 
do envolvimento das empresas no Projecto no prazo de três dias após a ressecção da notificação oficial da decisão, com o acordo de investimento a ser renegociado.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>As empresas japonesas Mitsubishi e Mitsui, participantes na exploração de gás russo Sakhalin-2, decidiram continuar no projecto após a nacionalização pela Federação Russa, anunciou hoje o Governo japonês, noticiou a Lusa.</p><p>“Mitsui e Mitsubishi decidiram oficialmente continuar a participar no projecto” e “a partir de agora, ambas vão solicitar ao Governo russo o acordo de participação na nova empresa operacional, e a Rússia tomará a decisão de aceitar ou não”, disse o porta-voz governamental Hirokazu Matsuno, 
numa conferência de imprensa.</p><p>Matsuno deu esta indicação depois de ter sido questionado sobre notícias nos meios de comunicação locais de que as empresas japonesas iam continuar no projeto russo, num contexto de guerra na Ucrânia e de sanções impostas a Moscovo.</p><p>Tanto a Mitsui como a Mitsubishi deverão anunciar publicamente a decisão antes do final deste mês.</p><p>De acordo com os pormenores relatados pelo jornal Nikkei, espera-se que a Rússia decida sobre a continuação do envolvimento das empresas no Projecto no prazo de três dias após 
a ressecção da notificação oficial da decisão, com o acordo de investimento a ser renegociado.</p>',
                'date' => '2025-10-07',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:23:05',
                'updated_at' => '2025-10-07 10:29:10',
            ),
            20 =>
            array (
                'id' => 21,
                'image' => '509dd330606c1e31c28dd6934ff11057.jpg',
                'title' => 'São Tomé e Príncipe inaugura primeira central de energia fotovoltaica',
                'slug' => 'sao-tome-e-principe-inaugura-primeira-central-de-energia-fotovoltaica',
                'subtitle' => '“Nós acabamos de quebrar um paradigma, acabamos de demonstrar que é possível nós construirmos o futuro com base nas energias renováveis com a diminuição do consumo dos combustíveis”, sublinhou o ministro das Infra-estruturas e Recursos Naturais, Osvaldo Abreu.',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>O primeiro-ministro são-tomense inaugurou ontem, a primeira fase da instalação da primeira central fotovoltaica do arquipélago para a produção de 540 kilowatt no pico de energia, que permitirá reduzir em 10% o custo com combustíveis.</p><p>Segundo a Lusa, Jorge Bom Jesus considerou que a inauguração da central “é um virar de página incalculável” e “um sonho” que se está a “transformar em realidade”.</p><p>“Estamos a falar de um projecto que cria emprego, proporciona economia, promove essa energia limpa, é muito mais fácil em termos de manutenção, portanto, tudo isso é que nos permite começar a dar passos pequenos mais significativos”, afirmou o primeiro-ministro.</p><p>A instalação desta central, situada no recinto da central diesel de Santo Amaro, enquadra-se num projecto orçado em cerca de 690.000 USD, financiados pelo Programa das Nações Unidas para o Desenvolvimento (PNUD) e o Fundo Global para o Meio Ambiente (GEF, na sigla inglesa).</p><p>“Pensar sobre a energia sustentável nestas ilhas é prioridade e nós, como PNUD e Nações Unidas, vamos fazer uma grande advocacia para o Governo implementar com urgência projectos de energia renovável”, sublinhou a representante residente do PNUD, Katarzyna Wawiernia.</p><p>A segunda fase do projecto é financiado pelo Banco Africano de Desenvolvimento, para a instalação de painéis solares, na zona sul da central de Santo Amaro, com capacidade estimada de 1,7 megawatt pico (MWp), aumentando a capacidade da central para a produção de 
dois megawatts.</p><p>“Nós acabamos de quebrar um paradigma, acabamos de demonstrar que é possível nós construirmos o futuro com base nas energias renováveis com a diminuição do consumo dos combustíveis”, sublinhou o ministro das Infra-estruturas e Recursos Naturais, Osvaldo Abreu.</p>',
                'date' => '2025-10-07',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:24:24',
                'updated_at' => '2025-10-07 10:24:24',
            ),
            21 =>
            array (
                'id' => 22,
                'image' => 'd3ead4302fcd75e501f09385743ce344.jpg',
                'title' => 'Acções de empresas chinesas impulsionadas por acordo EUA-China',
                'slug' => 'accoes-de-empresas-chinesas-impulsionadas-por-acordo-eua-china',
                'subtitle' => 'As regras, introduzidas em 2020, aprofundaram as tensões entre Washington e Pequim, que não permite que reguladores estrangeiros inspeccionem auditorias das empresas chinesas.',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>As acções das empresas chinesas listadas na Bolsa de Valores de Nova Iorque registaram fortes ganhos, face a informações de que Pequim e Washington estão próximos de um acordo sobre as regras de acesso a auditoria.</p><p>Na quinta-feira, o índice Nasdaq Golden Dragon, que inclui as empresas chinesas listadas nos EUA, fechou com uma subida de mais de 6%. As acções da gigante tecnológica Alibaba subiram 8%. O portal de comércio electrónico&nbsp;JD.com&nbsp;e o motor de busca Baidu subiram 11% e 8%, respectivamente.</p><p>Estas empresas estão sob ameaça de serem excluídas do mercado norte-americano de capitais por não fornecerem acesso aos arquivos de auditoria.</p><p>As regras, introduzidas em 2020, aprofundaram as tensões entre Washington e Pequim, que não permite que reguladores estrangeiros inspeccionem auditorias das empresas chinesas.</p><p>No entanto, a imprensa internacional avançou na quinta-feira com a possibilidade de 
Estados Unidos e China alcançarem um acordo.</p><p>Em Abril, a Comissão Reguladora de Valores Mobiliários da China (CSRC, na sigla em inglês), que regula os mercados financeiros do país, disse que vai mudar as leis de confidencialidade, que impedem as empresas chinesas listadas no exterior de fornecer informações financeiras confidenciais a reguladores estrangeiros.</p><p>O país asiático proibia reguladores estrangeiros de inspeccionar a contabilidade das empresas locais, citando preocupações com a segurança nacional. A CSRC disse que as regras existentes, que foram actualizadas pela última vez em 2009, estão desactualizadas.</p>',
                'date' => '2025-10-07',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:25:16',
                'updated_at' => '2025-10-07 10:25:16',
            ),
            22 =>
            array (
                'id' => 23,
                'image' => '48fdcc7906fc725b30d2d6dd8bb91ff4.jpg',
                'title' => 'Galp recebe 100 milhões após avanço em projeto de gás em Moçambique',
                'slug' => 'galp-recebe-100-milhoes-apos-avanco-em-projeto-de-gas-em-mocambique',
                'subtitle' => 'Galp recebe 100 milhões após avanço em projeto de gás em Moçambique',
                'detach' => 'normal',
                'status' => 'published',
            'description' => '<p>A informação foi divulgada esta terça-feira pela petrolífera portuguesa em comunicado à Comissão do Mercado de Valores Mobiliários (CMVM).</p><p>O montante estava previsto no âmbito da venda dos activos de gás natural na Área 4, em Moçambique, concluída em Março, quando a Galp alienou a sua participação à XRG, subsidiária da ADNOC (Emirados Árabes Unidos), por 881 milhões USD.</p><p>Além dos 100 milhões agora confirmados, a empresa espera ainda receber 400 milhões USD adicionais, dependentes da decisão final de investimento no projecto Rovuma.</p><p>Paralelamente, a Galp informou ter notificado formalmente o Estado moçambicano sobre um diferendo fiscal relativo à tributação de mais-valias na alienação da participação na Área 4 da Bacia do Rovuma.</p><p>A petrolífera invocou acordos internacionais de protecção recíproca de investimentos, abrindo assim um período de negociações bilaterais antes de avançar para um eventual processo de arbitragem internacional.</p><p>“A Galp tem demonstrado total disponibilidade para cumprir com todas as obrigações fiscais e para encontrar uma via de entendimento. O recurso a mecanismos legais, nacionais e internacionais, é um passo que a empresa se vê obrigada a dar, mas que sempre procurou evitar”, refere o comunicado, sublinhando a preferência por um diálogo construtivo com as autoridades moçambicanas.</p><p>A empresa conclui que “não pode ser exigido o pagamento de impostos sem fundamento na legislação aplicável”, reafirmando o seu compromisso com os investimentos realizados no país.</p>',
                'date' => '2025-10-07',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:31:31',
                'updated_at' => '2025-10-07 10:31:31',
            ),
            23 =>
            array (
                'id' => 24,
                'image' => '507ce41eee54e0189f6f21e4a7500ebb.png',
                'title' => 'Afreximbank financia fábrica de fertilizantes no Soyo',
                'slug' => 'afreximbank-financia-fabrica-de-fertilizantes-no-soyo',
                'subtitle' => 'O Afreximbank anunciou o financiamento de 1,4 mil milhões USD para a construção da fábrica de fertilizantes 
de amoníaco e ureia no Soyo, província do Zaire.',
                'detach' => 'destaque',
                'status' => 'published',
            'description' => '<p>O projecto é liderado pelo Grupo OPAIA através da Amufert S.A. A iniciativa, avaliada em 2 mil milhões USD, conta com o contrato de Engenharia, Aprovisionamento e Construção (EPC) assinado a 20 de Novembro de 2024.</p><p>Com o início das obras previsto para 2025 e entrada em operação em 2027, a fábrica terá capacidade para produzir quatro mil toneladas métricas de fertilizantes por dia.</p><p>O objectivo é reduzir a dependência de importações, garantindo fertilizantes de qualidade e preços acessíveis para os agricultores locais, ao mesmo tempo que Angola se posiciona como o exportador importante no continente africano.</p><p>O projecto, apoiado por empresas técnicas globais como KBR e TOYO Engineering, visa impulsionar a produtividade agrícola, fortalecer a segurança alimentar e promover o 
comércio intra-africano, contribuindo para a integração económica regional.</p><p>Oluranti Doherty, representante do Afreximbank, destacou 
a importância do empreendimento na diversificação económica e na soberania alimentar regional.</p><p>Segundo informações da Further Africa, o projecto utilizará recursos de gás natural de Angola, ajudando o País a reduzir a dependência das receitas petrolíferas.</p><p>Estima-se que a construção crie 4700 empregos, sendo 3500 temporários e 1200 permanentes, consolidando o impacto positivo na economia local e nacional.</p>',
                'date' => '2025-10-07',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:34:04',
                'updated_at' => '2025-10-07 10:34:04',
            ),
            24 =>
            array (
                'id' => 25,
                'image' => 'dceb9a166adfaf07407e9a348f883aa4.jpg',
                'title' => 'Especialistas analisam futuro dos carros eléctricos e mobilidade sustentável',
                'slug' => 'especialistas-analisam-futuro-dos-carros-electricos-e-mobilidade-sustentavel',
                'subtitle' => 'O encontro “Carros Eléctricos e a Mobilidade Urbana”, promovido pela agência de comunicação ARC, reuniu, hoje, investidores em Luanda para debater o futuro do sector automóvel e explorar alternativas sustentáveis aos transportes convencionais.',  
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>O evento serviu como oportunidade para analisar os desafios e as oportunidades gerados pela transição 
energética global.</p><p>António Coimbra, CEO da ARC, explicou que o evento, denominado “Sinergia”, é uma plataforma concebida para fomentar a troca de ideias e conteúdos entre diferentes segmentos de mercado, que visam o impacto directo e sustentável na vida de famílias e empresas.</p><p>A iniciativa reforçou o compromisso da ARC em abordar questões estratégicas e inovadoras, necessárias para a evolução da mobilidade urbana e para a redução da dependência de combustíveis fósseis.</p>',
                'date' => '2025-10-07',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:38:19',
                'updated_at' => '2025-10-07 10:38:19',
            ),
            25 =>
            array (
                'id' => 26,
                'image' => '54983d614200b3d828ea4f3b0fa1cd5c.png',
                'title' => 'Hackers reivindicam ataque a Moniz Silva Internacional',
                'slug' => 'hackers-reivindicam-ataque-a-moniz-silva-internacional',
                'subtitle' => 'O grupo de ransomware Qilin reivindicou a autoria de um ciberataque à Moniz Silva International, uma empresa retalhista angolana do sector farmacêutico. De acordo com a alegação publicada no site da hacktivist grupo, foram filtrados documentos internos confidenciais e dados pessoais de colaboradores e clientes.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>Num comunicado, o grupo Qilin justificou o ataque com motivações éticas, acusando a empresa de colocar os lucros acima da saúde dos seus clientes. As alegações incluem a “venda de medicamentos perigosos”, “preços excessivamente inflacionados” e a contratação de “funcionários não qualificados”, práticas que, segundo os cibercriminosos, “podem literalmente matar uma pessoa”.</p><p>Entre as informações supostamente comprometidas encontram-se detalhes financeiros sensíveis, como demonstrações financeiras completas e a estrutura de preços de compra e venda ao público. Esta exposição pode revelar segredos comerciais críticos e estratégias competitivas da empresa, além de ter um impacto significativo na sua reputação e estabilidade financeira.</p><p>O grupo Qilin tem sido associado a vários incidentes de alto perfil, incluindo um ataque recente à Synnovis no Reino Unido que afectou hospitais de Londres e que, segundo um relatório, terá levado à morte de um doente. Esta alegação contra a Moniz Silva segue um padrão recente do grupo de tentar justificar os seus crimes cibernéticos com retórica de protesto ético ou político.</p><p>Até ao fecho desta notícia, a Moniz Silva International não se havia pronunciado publicamente sobre o alegado ciberataque, nem tinha emitido qualquer comunicado a confirmar ou a negar a ocorrência do incidente ou a extensão do comprometimento&nbsp;de&nbsp;dados.</p>',
                'date' => '2025-10-07',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-07 10:58:27',
                'updated_at' => '2025-10-07 10:58:27',
            ),
        ));

        /* factory(App\Models\News::class, 50)->create(); */
    }
}
