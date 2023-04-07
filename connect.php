<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "deneme_website";

$connect = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if(!$connect)
{
    die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}

?>