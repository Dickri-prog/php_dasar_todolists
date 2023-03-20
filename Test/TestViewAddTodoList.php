<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BussinessLogic/ShowTodoLists.php";
require_once "../BussinessLogic/addTodoList.php";

addTodoList("Dickri");
addTodoList("Barkah");
addTodoList("Sandi");
addTodoList("Hibar");

viewAddTodoList();

showTodoLists();

viewAddTodoList();

showTodoLists();
