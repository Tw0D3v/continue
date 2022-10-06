<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

function multplicacion($multiplicador,$multiplicando) {
  $acum=0;
  for($i=0; $i < $multiplicador; $i++){
        $acum += $multiplicando;
      }
  echo $multiplicador."=";
      echo $acum;
}



 for($valores = 1; $valores<=10; $valores++) {
  
   $val = $valores;
  echo "<br>";
   echo $val." x ";
   
  multplicacion(10,$valores);
   
 }



   ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>