<?php 
    if($_REQUEST["submit9"]){
        add_config("affiche_sect9");
    }
?>
<form method="post" action="admin.php?page=section9">
    <div class="content">
        <label for="affiche_sect9">Afficher</label>
        <input type="checkbox" name="affiche_sect9" id="affiche_sect9" <?=(get_option("affiche_sect9"))?'checked':''?>>
    </div>
    <input type="submit" name="submit9" id="submit9" class="button button-primary" value="Enregistrer">
</form>