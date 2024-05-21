<?php 
    if($_REQUEST["submit7"]){
        add_config("affiche_sect7");
    }
?>
<form method="post" action="admin.php?page=section7">
    <div class="content">
        <label for="affiche_sect7">Afficher</label>
        <input type="checkbox" name="affiche_sect7" id="affiche_sect7" <?=(get_option("affiche_sect7"))?'checked':''?>>
    </div>
    <input type="submit" name="submit7" id="submit7" class="button button-primary" value="Enregistrer">
</form>