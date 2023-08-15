<?php

$server_name = "localhost";
$user_name = "root";
$user_pass = 'Y1012jqkhkp';
$database_name= "music_users";

$con = mysqli_connect($server_name, $user_name, $user_pass, $database_name);

if(!$con){
    die ('connection failed!!' . mysql_error());
}
// else{
//     echo('Database Successfully connected!!');
// }  //only used initially to check is there successful connection or not
?>