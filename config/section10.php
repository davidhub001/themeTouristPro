<?php 
    if($_REQUEST["submit10"]){
        add_config("affiche_sect10");
    }
?>
<form method="post" action="admin.php?page=section10">
    <div class="content">
        <label for="affiche_sect10">Afficher</label>
        <input type="checkbox" name="affiche_sect10" id="affiche_sect10" <?=(get_option("affiche_sect10"))?'checked':''?>>
    </div>
    <input type="submit" name="submit10" id="submit10" class="button button-primary" value="Enregistrer">
</form>