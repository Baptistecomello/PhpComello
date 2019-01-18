<?php
include("includes/haut.inc.php");
?>
    <script src="vendor/jquery/jquery.js"></script>
    <script src="js/script.js"></script>
<section>
	<div class="container">
		<div class="row">
			<form>
				<div class="form-group">
				<input id="user" type="text" name="pseudoUser" placeholder="Pseudo"/></label><br/>
				<input id="pwd" type="password" name="password" placeholder="Mot de passe"/></label><br/>
				<button type="button" id="submit" class="btn btn-success btn-lg">Connexion</button>
			</form>
					
		</div>
	</div>
</section>

<?php
include("includes/bas.inc.php");
?>