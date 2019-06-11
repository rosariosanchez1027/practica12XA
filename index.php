<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
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
   <h2>Problema: Cálcular la densidad del Sol</h2>
  <p>Descripción:</p>
  <p>El radio del sol es 6.97E5 km y su masa es 1.99E30 kg la densidad <br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Densidad = Masa/Volumen<br>
    Volumen=pi*r*r
</section>
<section class="datos">
<h2>Dats:</h2>
   m= 1.99E30 Kg. <br>
   r= 6.97E5 Km.
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La densidad del Sol es:<br>
    densidad = 1.99E30 Kg/volumen (m) <br>
    volumen= pi*(6.97E5)*(6.97E5)</p>
    
</section>

<?php
     function calcula_densidad(){
        $PI=3.141592;
        $masa= 5.97E24;
        $radio= 6378e3;
        $volumen= (4/3)*$PI*$radio*$radio*$radio;
        $densidad= $masa/$volumen;
        return $densidad;
     }
?>

<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>

 <print <h1>  densidad = 1.41 g/cm³<br>
 volumen =   1.412.000 m³ </h1> 

</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
