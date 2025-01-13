<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice Masa Corporal</title>
</head>
<body>
    <h1>Calculadora de su Indice de Masa Corporal</h1> 
    <div class="formu">
        <div class="form-msg">
            <h2>INDICE DE MASA CORPORAL (IMC)</h2>
            <p>IMC = PESO[kg] / ALTURA[m]</p>
        </div>
        <form action="imc.php" method="GET">
            <input type="text" name="nombre" placeholder="Ingrese nombre..." class="form_input">
            <input type="number" name="edad" placeholder="Ingrese edad..." class="form_input">
            <input type="number" step="any" name="peso" placeholder="Ingrese su peso..." class="form_input">
            <input type="number" step="any" name="altura" placeholder="Ingrese su altura" class="form_input">
            
            <button type="submit" class="btn-subm">CALCULAR</button>
        </form>
    </div>
    <div class="rta">
        <h2>RESULTADO:</h2>

        <?php

        // $nombre = $_GET['nombre'];
        // $edad = $_GET['edad'];
        // $peso = $_GET['peso'];
        // $altura = $_GET['altura'];

        if (isset($_GET['nombre'])  && !empty($_GET['edad']) && !empty($_GET['peso']) && !empty($_GET['altura'])){
            echo "<h3>" . round(($_GET['peso']/pow($_GET['altura'],2)),2) . "</h3>";
            // la funcion round para redondear un numero a la cantidad de decimales deseados
            echo "<p>Nombre: $_GET[nombre]</p>
                <p>Edad: $_GET[edad]</p>
                <p>Peso: $_GET[peso]</p>
                <p>Altura: $_GET[altura]</p>
            ";
            //prueba para git
        } else {
            echo "<h2>Error! completar todos los datos</h2>";
        }
        ?>


        <table>
            <tbody>
                <tr>
                    <td>Bajo Peso</td>
                    <td>&lt;18,50</td>
                </tr>
                <tr>
                    <td>Normal</td>
                    <td>18,5 - 24,99</td>
                </tr>
                <tr>
                    <td>Sobrepeso</td>
                    <td>&gt;=25</td>
                </tr>
                <tr>
                    <td>Obesidad</td>
                    <td>&gt;=30</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>