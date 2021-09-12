<?php

define('USER', 'well2k');
define('PASS', 'wellcs2021');
define('PASSFAKE', '');
define('NICKNAME', 'well2k');

if($_POST["nome"] == USER && $_POST["senha"] == PASS) {
    header("Location: http://127.0.0.1");
} else if($_POST["nome"] == USER && $_POST["senha"] == PASSFAKE) {
    echo "Por favor, retorne ao input e digite sua senha";
} else {
    echo "Você não colocou a senha ou usuario correto, tente novamente";
}

?>