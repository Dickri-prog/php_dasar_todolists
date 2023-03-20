<?php
require_once "../Model/TodoLists.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/ShowTodoLists.php";
require_once "../BussinessLogic/RemoveTodoList.php";


addTodoList("Dickri");
addTodoList("Barkah");
addTodoList("Sandi");
addTodoList("Hibar");


showTodoLists();


$success = removeTodoList(4);

var_dump($success);

showTodoLists();

$success = removeTodoList(4);
var_dump($success);

showTodoLists();
