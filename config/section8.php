<?php 
    if($_REQUEST["submit8"]){
        add_config("affiche_sect8");
    }
?>
<form method="post" action="admin.php?page=section8">
    <div class="content">
        <label for="affiche_sect8">Afficher</label>
        <input type="checkbox" name="affiche_sect8" id="affiche_sect8" <?=(get_option("affiche_sect8"))?'checked':''?>>
    </div>
    <input type="submit" name="submit8" id="submit8" class="button button-primary" value="Enregistrer">
</form>