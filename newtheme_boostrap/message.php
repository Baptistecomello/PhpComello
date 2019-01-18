<?php
include("includes/connexion.inc.php");
var_dump($_GET);
if(!isset($_GET['id'])){
    echo("ici");
    $query = "INSERT INTO messages(contenu, date) VALUES(:contenu, :date)";
    echo($id);
    $prep = $pdo->prepare($query);
    $prep->bindValue(':contenu', $_POST['message']);
    $prep->bindValue(':date', time());
    $prep->execute();
    header("Location:index.php");
}

else {  
    echo("j'ai mon id");
   $id = $_GET['id'];
   $query = "UPDATE messages SET contenu = :contenu, date = :date  WHERE id = $id ";
   $prep = $pdo->prepare($query);
   $prep->execute();
   header("Location:index.php");

}

?>  