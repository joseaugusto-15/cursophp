<?php 
    $nome = 'José';
    $sobrenome = 'Augusto';
    echo "Olá $nome $sobrenome!<br><br>";
    echo 'Olá $nome $sobrenome<br><br>';

    const ESTADO = "RJ <br><br>";
    echo "moro no ESTADO<br><br>";
    echo "Moro no " . ESTADO;

    echo "Estamos no ano de date('Y')<br><br>";
    echo "Estamos no ano de ". date('Y');

    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "<br><br>$nom \"Minotauro\" $snom <br><br>";

    $curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
        Estou estudando
            $curso em $ano. <br><br>
    FRASE;

    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'FRASE'
        Estou estudando
            $curso em $ano.
    FRASE;
    ?>