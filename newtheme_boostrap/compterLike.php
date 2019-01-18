<?php
$serv="localhost";
$user="root";
$password="";
$db="microblog";
@mysql_connect($serv, $user, $password) or die (mysql_error ());
    mysql_select_db($db) or die(mysql_error());

    $id = $_POST['id'];

    mysql_query("UPDATE messages SET nb_like=nb_like+1 WHERE id='$id'")OR die (mysql_error());	
    
?>