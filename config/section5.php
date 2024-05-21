<?php 
    if($_REQUEST["submit5"]){
        add_config("affiche_sect5");
    }
?>
<form method="post" action="admin.php?page=section5">
    <div class="content">
        <label for="affiche_sect5">Afficher</label>
        <input type="checkbox" name="affiche_sect5" id="affiche_sect5" <?=(get_option("affiche_sect5"))?'checked':''?>>
    </div>
    <input type="submit" name="submit5" id="submit5" class="button button-primary" value="Enregistrer">
</form>