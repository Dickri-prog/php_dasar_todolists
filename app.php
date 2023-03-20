<?php

require_once __DIR__ . "/Model/TodoLists.php";
require_once __DIR__ . "/BussinessLogic/ShowTodoLists.php";
require_once __DIR__ . "/BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/BussinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoLists.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";

echo "Aplikasi Todo list" . PHP_EOL;

viewShowTodoLists();
