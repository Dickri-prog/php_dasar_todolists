<?php
require_once "../Model/TodoLists.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinessLogic/ShowTodoLists.php";
require_once "../BussinessLogic/AddTodoList.php";

addTodoList("Dickri");
addTodoList("Barkah");
addTodoList("Sandi");
addTodoList("Hibar");

showTodoLists();

viewRemoveTodoList();

showTodoLists();

viewRemoveTodoList();
?>
