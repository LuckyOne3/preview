<?php


$connection = mysqli_connect('127.0.0.1','parktofly_kaf904','5791114','parktofly_kaf904');
mysqli_set_charset($connection, 'utf8');



if ($connection == false)
{
  echo 'Не удалось подключиться к базе данных!<br>';
  echo mysqli_connect_error();
  exit();

}
if (!function_exists("clean")) {
    if (get_magic_quotes_gpc()) {
        function magicquotes_Stripslashes(&$value, $key) {
            $value = stripslashes($value);
        }
        $gpc = array(&$_COOKIE, &$_REQUEST);
        array_walk_recursive($gpc, 'magicquotes_Stripslashes');
    }
    function clean(&$value, $key) {
//эта функция экранирует все кавычки.
        $value = mysqli_real_escape_string($value);
    }
}
$req = array(&$_REQUEST);
array_walk_recursive($req, 'clean');

?>