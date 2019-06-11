<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema:</h2> Cálcular cuantas vaces se tendria que recorrer <br>
  la altura del popcatepetl(hpop) para cubrir la distancia entre:<br>
  a) la tierra y la luna<br>
  b)la tierra y marte<br>
  <p>Descripción:</p>
  <p>La altura del popcatepetl es de: 5.426 km <br>
    La distancia de la tierra a la luna es de: 384.400 km<br>
    La distancia de la tierra a marte es de: 560 000 000 km<br></p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    veces = d/hpop<br>
</section>
<section class="datos">
<h2>Datos:</h2>
d=distancia al cuerpo celeste <br>
hpop= altura del popcatepetl<br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)Las veces que se recorre el popcatepetl<br>
     debido a la distancia de la tierra y la luna es:<br>
     b) Las veces que se recorre el popcatepetl<br>
     debido a la distancia de la tierra a marte es:<br>
    </p>
</section>
<?php
     function calcula_vecesR(){
        $tl= 384.400;
        $tm= 560000000;
        $hpop= 5.426;
        $recorridoA= tl/hpop;
        $recorridoB= tm/hpop;
        return $recorridoA;
        }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<div id="resultadoB"></div>
<?php
 print "<h1>a)70.84408403980832 km<br>
b)103206782.1599705 km";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
