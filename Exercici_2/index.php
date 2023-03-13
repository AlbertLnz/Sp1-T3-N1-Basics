<?php

$var = "Hello World";
$text = "Aquest és el curs de PHP";

function uppString($x){
  echo strtoupper($x); //sin retorno
}

function lenString($x){
  return strlen($x); //con retorno
}

function revString($x){
  return strrev($x);
}

uppString($var);
echo "\n".lenString($var);
echo "\n".revString($var);
echo "\n".$var.$text;


echo "Version PHP: ".phpversion();

?>