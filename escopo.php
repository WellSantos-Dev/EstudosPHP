<?php

$ip = $_SERVER["REMOTE_ADDR"];
$local = $_SERVER["SCRIPT_NAME"];

function mostrarLog() {

  global $ip;
  echo $ip;
  echo "<br/>";
  global $local;
  echo $local;

}


mostrarLog()
?>