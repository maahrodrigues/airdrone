<?php


include "Bot.php";
$bot = new Bot;
$questions = [
    "drones?" => "O drone é uma das tecnologias que mais tem chamado a atenção nos últimos meses. Equipados para resistir a trabalhos pesados e ambientes hostis, esses equipamentos podem ter diversas utilidades.",
    "drone" => "O drone é uma das tecnologias que mais tem chamado a atenção nos últimos meses. Equipados para resistir a trabalhos pesados e ambientes hostis, esses equipamentos podem ter diversas utilidades.",
    "o que e drone?" => "O drone é uma das tecnologias que mais tem chamado a atenção nos últimos meses. Equipados para resistir a trabalhos pesados e ambientes hostis, esses equipamentos podem ter diversas utilidades.",
    "o que é drones?" => "O drone é uma das tecnologias que mais tem chamado a atenção nos últimos meses. Equipados para resistir a trabalhos pesados e ambientes hostis, esses equipamentos podem ter diversas utilidades.",
        "serviços prestados" => "oferecemos prestação de serviços de venda e aluguel para diversos tipos utilidade de drones, para mais informações digite DUVIDAS",
        "duvidas" => "para mais informações entre em contato no numero +55 (11) 4002-8922",
        "duvida" => "para mais informações entre em contato no numero +55 (11) 4002-8922",
        "consulta" => " Por gentileza digite o codigo de postagem",
        "cgss1263" => "OBJETO POSTADO",

            

    "qual seu nome?" => "Meu nome é " . $bot->getName(),
];


if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']); $bot->hears($msg, function (Bot $botty) {
        global $msg;global $questions;
        $generics = ['oi', 'oie', 'ola', 'olá', 'bom dia', 'boa tarde', 'boa noite'];
        if (in_array($msg, $generics)) {
            $botty->reply('Olá meu nome é Juninho, Por gentileza escolha uma das opções CONSULTA, SERVIÇOS PRESTADOS ou DUVIDAS');
        

                        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, não entendi.");
                                    } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
