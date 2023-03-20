<?php

/*
  Menampilkan TodoLists
*/

function showTodoLists() {
  global $todoLists;

  echo "TODOLISTS" . PHP_EOL;

  foreach ($todoLists as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}

 ?>
