<?php
    $enunciado = [
        "Em que ano ocorreu a Independência do Brasil?",
        "Sócrates, famoso filósofo da cultura ocidental, nasceu no território que é qual país atualmente?",
        "Qual das músicas a seguir foi feita por Raul Seixas?",
        "A cidade de Brumadinho fica em qual estado brasileiro?",
        "O cogumelo pertence a qual reino de seres vivos?"
    ];
    $alternativas = [
        ["1776", "1822", "1492", "1889", "1808"],
        ["Itália", "Egito", "Grécia", "Turquia", "Espanha"],
        ["Descobridor dos Sete Mares", "Malandragem", "Maluco Beleza", "Aquarela do Brasil", "Garota de Ipanema"],
        ["São Paulo", "Rio de Janeiro", "Bahia", "Minas Gerais", "Goiás"],
        ["Plantae", "Animalia", "Fungi", "Protista", "Monera"]
    ];
    $respostas = [1, 2, 2, 3, 2];

    for ($index = 0; $index < 5; $index++) {
        echo $enunciado[$index];
        for ($indexJ = 0; $indexJ < 5; $indexJ++) {
            echo $alternativas[$index][$indexJ];
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>