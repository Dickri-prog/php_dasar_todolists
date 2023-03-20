<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";


function viewRemoveTodoList() {
  echo "MENGHAPUS TODOLIST" . PHP_EOL;

  $pilihan = input("Nomor (x untuk batal)");

  if ($pilihan == 'x') {
    echo "Batal menghapus Todo" . PHP_EOL;
  }else {
    $success = removeTodoList($pilihan);

    if ($success) {
      echo "Success menghapus Todo" . PHP_EOL;
    }else {
      echo "Gagal menghapus Todo" .PHP_EOL;
    }
  }
}
