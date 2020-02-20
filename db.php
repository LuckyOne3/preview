<?php


$connection = mysqli_connect(,,,);
mysqli_set_charset($connection, 'utf8');

if ($connection == false)
{
  echo 'Не удалось подключиться к базе данных!<br>';
  echo mysqli_connect_error();
  exit();

}

?>
