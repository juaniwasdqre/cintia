<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURB65</title>
</head>
<body>
    <h1>CALCULADORA CURB65</h1>
    <h2>permite evaluar la gravedad de la neumonía adquirida en la comunidad.</h2>
    <div class="calculadora">
        <h3>Ingrese los datos</h3> 
        
        <form action="CURB65.php" method="get">
            <label for="confusion">¿SE ENCUENTRA CONFUSO?</label>
            <select name="confusion" id="confusion">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
            <br>
            <label for="">Ingrese Urea</label>
            <input type="number" name="urea" placeholder="valor urea">
            <br>
            <label for="fr">la FR es mayor a 30?</label>
            <select name="fr" id="fr">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
            <br>
            <label for="tas">la TAS es menor a 90?</label>
            <select name="tas" id="tas">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
            <br>
            <label for="tad">la TAD es menor a 60?</label>
            <select name="tad" id="tad">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
            <br>
            
            <label for="EDAD">edad mayor a 65 años?</label>
            <select name="edad" id="edad">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
            <br>
            <input type="submit" value="Calcular CURB65">
        </form>
        <?php 
            if ((isset($_GET['confusion'])) && (isset($_GET['urea'])) && (isset($_GET['fr'])) && (isset($_GET['tas'])) && (isset($_GET['tad'])) && (isset($_GET['edad'])) ) {
                $urea = $_GET["urea"];
                $confusion = $_GET["confusion"];
                $fr= $_GET["fr"];
                $tas = $_GET["tas"];
                $tad= $_GET["tad"];
                $edad = $_GET["edad"];
                
                if ( ($urea*2.8) > 19 ) {
                    $bun = 1;
                } else {
                    $bun = 0;
                }
                
                if ($tad== 1 || $tas == 1) {
                    $ta = 1;
                }
                else {
                    $ta = 0;
                }

                $curb65 = $confusion + $bun + $fr + $ta + $edad;

                echo "<h2>El valor del CURB65 es ".$curb65."</h2>";
                
                switch ($curb65) {
                    case ($curb65 == 0 || $curb65== 1):
                        echo "<h2>El paciente puede ser tratado en su domicilio</h2>";
                        break;
                    case ($curb65 ==2):
                        echo "<h2>El paciente debe ser hospitalizado</h2>";
                        break;
                    case ($curb65>=3 && $curb65<=5 ) :
                        echo "<h2>Hospitalizar y considerar ingreso en UCI</h2>";
                        break;
                    default:
                        echo "<p>no se entiende</p>";
                        break;
                }

            }
        ?>
    </div>
    <div class="referencias">
        
    </div>
 </body>