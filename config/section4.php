<?php 
    if($_REQUEST["submit4"]){
        add_config("affiche_sect4");
    }
?>
<form method="post" action="admin.php?page=section4">
    <div class="content">
        <label for="affiche_sect4">Afficher</label>
        <input type="checkbox" name="affiche_sect4" id="affiche_sect4" <?=(get_option("affiche_sect4"))?'checked':''?>>
    </div>
    <input type="submit" name="submit4" id="submit4" class="button button-primary" value="Enregistrer">
</form>