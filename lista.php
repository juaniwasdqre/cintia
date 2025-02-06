<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista expandible</title>
</head>
<body>
    <h2>Lista expandible en php</h2>
    <?php
    
        $edades = array(
            "juan" => 24,
            "cintia" => 46,
            "pancho" => 11
        );

        echo "<p>esto es un arreglo ASOCIATIVO:</p>";
        echo "<h2>Edades:</h2>";
        echo "<ul>"; //unordered list, <ol> ordered list 

        foreach($edades as $key => $value) {
            echo "<li>$key = $value</li>"; //<li> = list item
        }

        echo "</ul>";

        
        echo "<h2>Perros:</h2>";
        $perros = array("pancho","negrito","hercules","rabioso","mansito","morocho","max","killa","pedro","tomas");
        $cant = count($perros);

        echo "cantidad de perros: $cant perros";
        echo "<br>"

    ?>
    <!-- CIERRO PHP -->

    <!-- DEFINO LOS LINKS -->
    <br>
    <!-- con el get vemos los datos en la url -->
    <a href="lista.php?mostrar=5">5 items</a>
    <!-- manipulo que dato quiero que aparezca en la url mediante el a (anchor) -->
    <br>
    <a href="lista.php?mostrar=10">10 items</a>
    <br>
    <a href="lista.php?mostrar=20">20 items</a>
    <br>

    <!-- VUELVO A ABRIR TAGS PHP -->
    <?php
        if(isset($_GET["mostrar"])) {
            // busco el valor que defini en el link (a (anchor))

            $max = $_GET['mostrar'];   
            // le asigno una variable max

            echo "<ul>";
            // hago un for para controlar la cantidad de datos que imprimo (dependiendo de max)
            for ($i=0; $i < $max ; $i++) { 
                echo "<li>$perros[$i]</li>";
            }
            echo "</ul>";
        }

        echo "<p>esto es un arreglo INDEXADO</p>";
    ?>

</body>
</html>