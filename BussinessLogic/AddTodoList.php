<?php

/*
*  Menambah TodoList
*/

function addTodoList(string $todo) {
    global $todoLists;

    $number = sizeof($todoLists) + 1;

    $todoLists[$number] = $todo;

}
