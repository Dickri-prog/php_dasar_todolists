<?php
/*
  maenghapus TodoList
*/

function removeTodoList(int $number): bool {
  global $todoLists;

  if ($number > sizeof($todoLists)) {
      return false;
  }


  for ($i=$number; $i < sizeof($todoLists); $i++) {
    $todoLists[$i] = $todoLists[$i + 1];
  }


  unset($todoLists[sizeof($todoLists)]);

  return true;
}
