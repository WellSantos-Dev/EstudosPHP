<?php

$nomeCompleto = "Wellington";

// unset($nomeCompleto);

if(isset($nomeCompleto)) {
  echo "Variável existe!";
  echo "<br/>";
  echo $nomeCompleto;
} else {
  echo "Variável não definida!";
}

?>