<?php
include("includes/connexion.inc.php");
include("includes/haut.inc.php");
?>

    <script src="vendor/jquery/jquery.js"></script>
    <script src="js/scriptindex.js"></script>
<section>
    <div class="container">
        <div class="row">
            <form action="message.php" method="POST">
                <div class="col-sm-10">
                    <div class="form-group">
                    <?php
                    if (isset($_GET['id'])) {
                        $sql = "SELECT * FROM messages WHERE id=:id";
                        $prep = $pdo->prepare($sql);
                        $prep->bindValue(':id',$_GET['id']);
                        $prep->execute();
                        $data = $prep->fetch();
                    ?>
                        <textarea id="message" name="message" class="form-control" placeholder="Message"> <?php echo $data['contenu']; ?> </textarea>
                    <?php
                    } 
                    else {
                    ?>
                        <textarea id="message" name="message" class="form-control" placeholder="Message"> </textarea>
                    <?php 
                    }
                    ?>
                        <input type="hidden" name="id" values= <?php"$_GET['id']"?> 

                    </div>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                </div>
            </form>
        </div>

        <?php
        include("includes/connexion.inc.php");

        $query = "SELECT * FROM messages ORDER BY id DESC";
        $stmt = $pdo->query($query);

        while($data = $stmt->fetch()){
        ?>
            <div class="row">
                <div class="col-md-12">
                    <blockquote>
                        <p>
                            <?php echo $data['contenu']; ?>
                        </p>
                        <footer>
                      
                        <?php echo date("d-m-Y, H:i:s", $data['date']); ?>
                            <a class="btn btn-secondary" href="index.php?id=<?php echo $data['id'] ?>">Modifier</a>
                            <a  class="btn btn-secondary" href="supprimer.php?id=<?php echo $data['id'] ?>"> Supprimer</a>
                            <a class="btn btn-secondary" name="like" id="<?php echo $data['id'] ?>">J'aime</a>
                            <a class="btn btn-secondary" id="compteLike"><?php echo $data['nb_like'] ?></a>
                        </footer>
                    </blockquote>
                </div>
            </div>
        <?php
        }
       ?>
    </div>
</section>
<?php
include("includes/bas.inc.php");
?>