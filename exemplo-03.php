<?php


function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Olá $texto! $periodo!<br>";


}

echo ola();

echo ola("", "Boa noite");//não passa nenhum valor

echo ola("Matheus", "Boa Tarde");

echo ola("João", "");
?>