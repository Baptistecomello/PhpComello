<?php 

$serv="localhost";
$user="root";
$password="";
$db="microblog";
@mysql_connect($serv, $user, $password) or die (mysql_error ());
    mysql_select_db($db) or die(mysql_error());


    $identifiant = $_POST['id'];
    $mdp = $_POST['mdp'];

    $reponse = mysql_query('SELECT * FROM user');
    while ($donnees = mysql_fetch_array($reponse) ) {
             if($donnees['pseudo']==$identifiant && $donnees['pwd']==$mdp){
                     echo "true";
             }
    } 
mysql_close();

?>
