<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora Server-Side</h1>
    <div>
        <h2>CALCULAR:</h2>
        <p>ingrese su cuenta deseada aqui</p>
        <form action="calculadora.php" method="get">
            <input type="number" name="a">
            <select name="operacion">
                <option value="sumar">+</option>
                <option value="restar">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>
            <input type="number" name="b">
            <input type="submit" value="=">
            <span id="resultado"></span>
        </form>

        <?php

            if ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['operacion']))) {
                $n1 = $_GET['a'];
                $n2 = $_GET['b'];
                $op = $_GET['operacion'];
                var_dump($n1,$n2,$op);
            }
            
            switch ($op) {
                case 'sumar':
                    echo "<p>".$n1+$n2."</p>";
                    break;
                
                default:
                    echo "<p> no entiendo</p>";
                    break;
            }
        ?>

    </div>
</body>
</html>