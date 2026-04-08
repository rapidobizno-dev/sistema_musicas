<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeedertable extends Seeder
{
    public function run()
    {
        DB::table('videos')->delete();

        DB::table('videos')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Carlos Rosado de Carvalho - A Economia de Angola',
                'detach' => 'normal',
                'description' => 'Carlos Rosado de Carvalho, uma das figuras mais respeitadas no comentário económico angolano, marcou presença na Conferência Nacional Motivos para Investir com uma análise profunda e provocadora sobre o estado actual da economia angolana. Combinando rigor técnico, visão crítica e uma vasta experiência nos media e na consultoria, abordou os principais desafios e oportunidades para 
                    o futuro económico de Angola, à luz das dinâmicas políticas e financeiras globais.

                Neste vídeo, assista à sua intervenção completa, onde partilha insights valiosos com investidores, empresários e decisores sobre as projecções económicas para os próximos anos, e reflecte sobre os caminhos possíveis para um crescimento sustentável e competitivo.',
                'url' => 'https://www.youtube.com/watch?v=Se_lkzyi4ko',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:28:40',
                'updated_at' => '2025-10-06 10:28:40',
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'COMO OS BANCOS FUNCIONAM EM ANGOLA?',
                'detach' => 'normal',
                'description' => 'Neste episódio do Tudo Economia, Itamar Pereira e Ladislau Souza discutem como o sistema bancário funciona em Angola. Eles exploram o sistema financeiro e seu impacto na economia de Angola, oferecendo insights valiosos sobre administração e finança no setor de banca e negócios local.',
                'url' => 'https://www.youtube.com/watch?v=n9h4TS3PlKk',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:30:24',
                'updated_at' => '2025-10-06 10:30:24',
            ),
            2 =>
            array(
                'id' => 3,
                'title' => 'Alves da Rocha - Investimento Privado Estrangeiro',
                'detach' => 'normal',
                'description' => 'Na sua intervenção na Conferência Nacional Motivos para Investir, o Prof. Doutor Manuel José Alves da Rocha — um dos mais prestigiados economistas angolanos — apresenta uma análise profunda e crítica sobre o estado e os desafios do investimento privado estrangeiro em Angola.

                Com mais de 50 anos de carreira académica e consultiva, e vasta experiência internacional junto de instituições como o Banco Mundial, o Banco Europeu de Investimento e a UNCTAD, o Professor Alves da Rocha identifica as principais barreiras estruturais e comportamentais que limitam a atracção de capital estrangeiro, e propõe soluções realistas para um ambiente económico mais competitivo e sustentável.',
                'url' => 'https://www.youtube.com/watch?v=0p6nlKlf3U8',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:31:08',
                'updated_at' => '2025-10-06 10:31:08',
            ),
            3 =>
            array(
                'id' => 4,
                'title' => 'Francisco Destino - Os Recursos para Evolução dos Angolanos',
                'detach' => 'normal',
                'description' => 'Na Conferência Motivos para Investir, Francisco Destino apresenta uma reflexão incisiva sobre os recursos necessários para mudar a vida dos angolanos, destacando que não fala de investimentos financeiros, mas sim dos princípios do investimento 
                    — sobretudo o investimento nas pessoas.
                O orador inicia a sua intervenção partilhando que aceitou o convite por compromisso, mesmo após uma digressão cansativa. Explica que todos 
                possuímos um “escadote interno” feito de recursos como coragem, empatia, garra e protagonismo, mas que muitas vezes utilizamos de forma invertida. Em vez de assumir responsabilidades, caímos no vitimismo, culpando terceiros — políticos, Estado ou contexto — e esquecendo que também temos responsabilidade pelos resultados atuais do país.',
                'url' => 'https://www.youtube.com/watch?v=lYFah1p0hPE',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:31:53',
                'updated_at' => '2025-10-06 10:31:53',
            ),
            4 =>
            array(
                'id' => 5,
                'title' => 'Alves da Rocha - Investimento Privado Estrangeiro',
                'detach' => 'normal',
                'description' => 'Na sua intervenção na Conferência Nacional Motivos para Investir, o Prof. Doutor Manuel José Alves da Rocha — um dos mais prestigiados economistas angolanos — apresenta uma análise profunda e crítica sobre o estado e os desafios do investimento privado estrangeiro em Angola.

                Com mais de 50 anos de carreira académica e consultiva, e vasta experiência internacional junto de instituições como o Banco Mundial, o Banco Europeu de Investimento e a UNCTAD, o Professor Alves da Rocha identifica as principais barreiras estruturais e comportamentais que limitam a atracção de capital estrangeiro, e propõe soluções realistas para um ambiente económico mais competitivo e sustentável.',
                'url' => 'https://www.youtube.com/watch?v=0p6nlKlf3U8',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:32:33',
                'updated_at' => '2025-10-06 10:32:33',
            ),
            5 =>
            array(
                'id' => 6,
                'title' => 'Adilson Camacho - Angola não pode simbolizar fome, guerra e corrupção',
                'detach' => 'destaque',
                'description' => 'Na Conferência Motivos para Investir, Adilson Camacho apresenta uma reflexão profunda sobre a relação entre investimento, identidade e narrativa de marca, trazendo para o centro do debate a importância da confiança e da credibilidade como bases para atrair capital.

                A sua intervenção parte de uma ideia simples mas poderosa: ninguém investe no que não acredita. Camacho questiona a forma como África e Angola são retratadas no imaginário internacional — associadas a guerra, fome e regimes frágeis — e propõe uma mudança de paradigma. Para ele, a transformação da imagem de um país começa pela forma como comunica, como se posiciona e como projeta o seu valor simbólico e emocional.',
                'url' => 'https://www.youtube.com/watch?v=Q9ff6AQaRgE',
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:33:20',
                'updated_at' => '2025-10-08 09:29:50',
            ),
        ));
    }
}
