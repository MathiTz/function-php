<?php
    // declaração de tipos escalares
  function soma(int ...$valores){

    return array_sum($valores); //soma valores de uma array

  }  

  echo soma(2,2);
  echo '<br>';
  echo soma(20,25);
  echo '<br>';
  echo soma(3.2,2);

?>