<!-- CALCULADORA PHP
1. CREAR HTML 
2. FORMULARIO PARA TOMAR LOS DATOS DE NUMERO 1 Y 2 Y LAS OPERACIONES
    (action apuntando al mismo archivo, y método get)
3. en PHP: checkeo de los datos y realizar las operaciones -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <h2>ingrese la cuenta deseada:</h2>

    <form action="calculadora.php" method="get">
        <input type="number" name="a">
        <select name="operacion" id="">
            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select>
        <input type="number" name="b">
        <input type="submit" value="=">
    </form>


    <?php

        // PHP TOMA TODO FORMULARIO ENVIADO CON SU RESPECTIVO METODO (POST O GET)
        // Y LO GUARDA EN SU PROPIA VARIABLE PHP $_GET o $_POST
        if ((isset($_GET['a']) && (isset($_GET['b'])) && (isset($_GET['operacion'])))) {
            
            // SI pasa el if, continuamos con nuestro proceso
            //definimos variables

            $n1 = $_GET['a'];
            $n2 = $_GET['b'];
            $op = $_GET['operacion'];

            switch ($op) {
                case 'sumar':
                    echo "<h3>".($n1+$n2)."</h3>";
                    break;
                case 'restar':
                    echo "<h3>".($n1-$n2)."</h3>";
                    break;
                case 'multiplicar':
                    echo "<h3>".($n1*$n2)."</h3>";
                    break;
                case 'dividir':
                    echo "<h3>".($n1/$n2)."</h3>";
                    break;
                default:
                    echo "<p>ERROR</p>";
                    break;
            }
        }
    ?>


</body>
</html>