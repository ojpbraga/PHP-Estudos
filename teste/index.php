<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<p>Olá Mundo</p>"; ?>
    <?php 
        // Tipos de variaveis
        // String
        $nome = "João";
        $idade = "18";

        // int
        $valor = 250;

        // Float
        $altura = 1.70;

        // Boolean
        $filhos = true;

        // Array
        $carros = array('Gol', 'Uno', 'Palio');

        // Objeto
        // $clientes = new cadastro();

        // Print e Concatenação
        print "Aluno ".$nome.", altura: ".$altura;

        
        
        ?>

    <?php 
        // var_dump(variavel) - função que identifica o tipo de dados de qualquer variável
        $f = 5/3;
        var_dump($f);
    ?>

    <?php 
        // Função settype - Permite converter uma variável já declarada em qualquer outro tipo de dados

        $g = 5/3;
        settype($g, 'integer');
        echo $g;

    ?>
    
</body>
</html>