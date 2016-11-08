<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
      <title>Tablas de multiplicar</title>
  </head>

  <body>

<h1> Tablas de multiplicar con Foreach & For </h1>
<hr/>

<?php

//creamos el array con los numeros que vamos a multiplicar

$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
];


//Usamos foreach para analizar el array

foreach ($tablas as $key => $value) {

  echo "<h3>Tabla del $value </h3>";

//Utilizmos for para crear las tablas de multiplicar
  for ($i=1; $i <=10 ; $i++) {

      $mutiplicar= $i * $value;

      echo " $value x $i = $mutiplicar <br>" ;

    }


echo "<hr>";


  }


 ?>

    </body>
</html>
