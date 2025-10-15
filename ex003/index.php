<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal     0b = binário      0 = octal
        // $num = 010;
        // echo "O valor da variável num é $num."

        $var = 3;
        var_dump($var);

        // $int = (integer) 3e2; //Coerção
        // var_dump($int);

        // $coer = (int) "950";
        // var_dump($coer);

        // $casado = false;
        // var_dump($casado); 
        // echo "<br>O valor pra casado é $casado";

        // $vet = [6, 2.5, "array", 8, true];
        // var_dump($vet);

        // class pessoa {
        //     private string $nome;
        // }
        // $p = new pessoa;
        // var_dump($p);

    ?>
</body>
</html>