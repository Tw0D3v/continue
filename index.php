<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

$multiplicando= 2;
$multiplicador;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
  $acum = 0;
  for($i=0; $i < $multiplicador; $i++){
        $acum += $multiplicando;
      }
  
	echo "$multiplicando" . " X " . $multiplicador . " = ". "   $acum" ;
	echo "<br>";


 
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