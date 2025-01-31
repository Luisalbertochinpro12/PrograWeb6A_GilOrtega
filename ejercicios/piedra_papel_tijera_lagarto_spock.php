<?php
    function game ($player1, $player2) {

        // 0 Piedra
        // 1 Papel
        // 2 Tijera
        // 3 Lagarto
        // 4 Spock

        // 0 le gana 4 y 1
        // 1 le gana 2 y 3x
        
        //Diccionario de debilidades
        $weakness = [
            0 => [4, 1],
            1 => [2, 3],
            2 => [0, 4],
            3 => [2, 1],
            4 => [3, 1]
        ];

        if ($player1 > 4 || $player2 > 4 ) {

            echo "Valores no admitidos";

        } elseif($player1 < 0 || $player2 < 0)
        {
          echo "Valores no admitidos";
        } else {

            if ($player1 == $player2) {
                echo "Empate entre los dos jugadores";
                echo "\n";
            }
    
    
            if ($player1 == 0 ) {
                if($player2 == $weakness[0][0]  || $player2 == $weakness[0][1]) {
                    echo "Jugador 2 gana";
                    echo "\n";
                } else {
                    echo "Jugador 1 gana";
                    echo "\n";
                } 
            }
            
            if ($player1 == 1 ) {
                if($player2 == $weakness[1][0]  || $player2 == $weakness[1][1]) {
                    echo "Jugador 2 gana";
                    echo "\n";
                } else {
                    echo "Jugador 1 gana";
                    echo "\n";
                } 
            }
    
            if ($player1 == 2 ) {
                if($player2 == $weakness[2][0]  || $player2 == $weakness[2][1]) {
                    echo "Jugador 2 gana";
                    echo "\n";
                } else {
                    echo "Jugador 1 gana";
                    echo "\n";
                } 
            }
    
            if ($player1 == 3 ) {
                if($player2 == $weakness[3][0]  || $player2 == $weakness[3][1]) {
                    echo "Jugador 2 gana";
                    echo "\n";
                } else {
                    echo "Jugador 1 gana";
                    echo "\n";
                } 
            }
    
            if ($player1 == 4 ) {
                if($player2 == $weakness[4][0]  || $player2 == $weakness[4][1]) {
                    echo "Jugador 2 gana";
                    echo "\n";
                } else {
                    echo "Jugador 1 gana";
                    echo "\n";
                } 
            }
        }

        
        
    }

    if (isset($argv[1]) && isset($argv[2])) {

        $player1 = (int)$argv[1];
        $player2 = (int)$argv[2];

        game($player1, $player2);
        
    } else {
        echo "Por favor ingrese valores correctos";
    }
?>