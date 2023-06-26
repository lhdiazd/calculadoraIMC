<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header id="cabecera">
        <div>
            <a href="index.html"><img src="imagenes//bmi.png" alt=""></a>
            <h1>Calculadora IMC</h1>
        </div>
    </header>


    <div class="contenedor-resultado" id="bajo-peso">
        <div class="resultado">
            <img src="imagenes/anorexia.png" alt="">
            <p> Bajo Peso (IMC < 18.5) = el bajo peso puede tener efectos negativos en la salud, como debilidad muscular, deficiencias nutricionales y mayor riesgo de enfermedades. Se recomienda consultar a un profesional de la salud</p>
            <a href="index.html"><button class="entendido">Entendido</button></a>
        </div>
    </div>

    <div class="contenedor-resultado" id="saludable">
        <div class="resultado">
            <img src="imagenes/saludable.png" alt="">
            <p> Saludable (IMC 18.5-24.9) = Continúa priorizando tu salud y bienestar. Mantén una alimentación equilibrada, incorpora actividad física regularmente y busca el apoyo de profesionales de la salud cuando lo necesites</p>
            <a href="index.html"><button class="entendido">Entendido</button></a>
        </div>
    </div>
    <div class="contenedor-resultado" id="sobrepeso">
        <div class="resultado">
            <img src="imagenes/sobrepeso.png" alt="">
            <p> Sobrepeso (IMC 25-29.9) = Se recomienda hacer pequeños cambios en el estilo de vida, mediante una alimentación balanceada y la incorporación de actividad física regular en la rutina diaria</p>
            <a href="index.html"><button class="entendido">Entendido</button></a>
        </div>
    </div>
    <div class="contenedor-resultado" id="obesidad">
        <div class="resultado">
            <img src="imagenes/obesidad.png" alt="">
            <p> Obesidad (IMC 30-39.9) = Es importante buscar apoyo profesional para abordar la obesidad, además de realizar cambios en la alimentación  e incorporar la actividad física regular. </p>
            <a href="index.html"><button class="entendido">Entendido</button></a>
        </div>
    </div>
    <div class="contenedor-resultado" id="obesidad-severa">
        <div class="resultado">
            <img src="imagenes/severo.png" alt="">
            <p> Obesidad severa (IMC >40) = La obesidad severa requiere una atención especializada, se recomienda buscar apoyo médico y trabajar con profesionales de la salud para desarrollar un plan integral</p>
            <a href="index.html"><button class="entendido">Entendido</button></a>
        </div>
    </div>


    <main>

        <form id="formulario-principal" action="calculo.php" method="POST">
            <div id="pesa">
                <input autocomplete="off" type="text" id="input-peso" name="input-peso" placeholder="Ingrese su peso">
                <div id="huellas">
                    <img src="imagenes/zapato-izquierdo.png" alt="">
                    <img src="imagenes/zapato-derecho.png" alt="">
                </div>
            </div>
            <div id="regla">
                <img src="imagenes/altura.png" alt="">
                <input autocomplete="off" type="text" id="input-altura" name="input-altura" placeholder="Ingrese su altura">
            </div>
            <div id="contenedor-button"><button type="button" id="calcular">Calcular IMC</button></div>

        </form>
        <?php
        if (isset($_GET['imc'])) {            
            $imc = $_GET['imc'];
            $imc = round($imc, 1);

            if ($imc < 18.5) {
                echo "<div class='imc'>
                            <p >IMC = $imc</p>
                        </div>";
                echo "<script>
                            let bajoPeso = document.querySelector('#bajo-peso');
                            bajoPeso.style.display = 'flex';                              
                            </script>";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                echo "<div class='imc'>
                            <p >IMC = $imc</p>
                        </div>";
                echo "<script>
                            let saludable = document.querySelector('#saludable');
                            saludable.style.display = 'flex';                         
                        </script>";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                echo "<div class='imc'>
                            <p >IMC = $imc</p>
                        </div>";
                echo "<script>
                            let sobrePeso = document.querySelector('#sobrepeso');
                            sobrePeso.style.display = 'flex';                         
                        </script>";          
            } elseif ($imc >= 30 && $imc <= 39.9) {
                echo "<div class='imc'>
                            <p >IMC = $imc</p>
                        </div>";
                echo "<script>
                            let obesidad = document.querySelector('#obesidad');
                            obesidad.style.display = 'flex';                         
                        </script>"; 
            } elseif ($imc >= 40) {
                echo "<div class='imc'>
                            <p >IMC = $imc</p>
                        </div>";
                echo "<script>
                            let obesidadSevera = document.querySelector('#obesidad-severa');
                            obesidadSevera.style.display = 'flex';                         
                        </script>";           
            } else {
                header("Location: index.html");
            }
        }
        ?>
    </main>








</body>

</html>