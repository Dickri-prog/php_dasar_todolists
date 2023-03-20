<?php
require_once __DIR__ . "/../Model/TodoLists.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoLists.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";



function viewShowTodoLists() {
  while (true) {
    showTodoLists();

    echo "Menu " . PHP_EOL;
    echo "1. Menambah TodoList" . PHP_EOL;
    echo "2. Menghapus TodoList" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilihan");

    if ($pilihan == "1") {
      viewAddTodoList();
    }else if ($pilihan == "2") {
      viewRemoveTodoList();
    }else if ($pilihan == "x") {
      break;
    }else {
      echo "Pilihan Tidak dimengerti" . PHP_EOL;
    }

  }
  echo "Sampai jumpa lagi!!" . PHP_EOL;
}
