<?php
require_once __DIR__ . "/../Model/TodoLists.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";


function viewAddTodoList() {
  echo "MENAMBAH TODOLIST" . PHP_EOL;

  $todo = input("Todo (x untuk batal)");

  if ($todo == "x") {
    echo "Batal Tambah TodoList" . PHP_EOL;
  }else {
    addTodoList($todo);
  }
}
