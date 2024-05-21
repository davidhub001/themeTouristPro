<?php 
    if($_REQUEST["submit6"]){
        add_config("affiche_sect6");
    }
?>
<form method="post" action="admin.php?page=section6">
    <div class="content">
        <label for="affiche_sect6">Afficher</label>
        <input type="checkbox" name="affiche_sect6" id="affiche_sect6" <?=(get_option("affiche_sect6"))?'checked':''?>>
    </div>
    <input type="submit" name="submit6" id="submit6" class="button button-primary" value="Enregistrer">
</form>