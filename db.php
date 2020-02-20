<?php


$connection = mysqli_connect('127.0.0.1','parktofly_kaf904','5791114','parktofly_kaf904');
mysqli_set_charset($connection, 'utf8');

if ($connection == false)
{
  echo 'Не удалось подключиться к базе данных!<br>';
  echo mysqli_connect_error();
  exit();

}

?>