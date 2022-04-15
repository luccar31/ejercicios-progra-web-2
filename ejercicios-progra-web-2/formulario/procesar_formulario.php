<?php
  echo "Se envió el formulario :)", "<br>";

  echo 'Su nombre es: ' . '<h3>' . $_GET["nombre"] . '</h3>'
        . ' y es de: ' . '<h4>' . $_GET["equipo"] . '</h4>' . '<br>';

  echo 'Le gustan los siguientes deportes:';

  echo "<ul>";

  $deportes = $_GET["deporte"];
  for($i = 0; $i < sizeof($deportes) ; $i++){
      echo "<li>$deportes[$i]</li>";
  }

  echo "</ul>";

  echo "Su contraseña es:" . $_GET["password"] , "<br>";

  echo "Fecha y hora:" . $_GET["fechahora"];