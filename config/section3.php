<?php 
    if($_REQUEST["submit3"]){
        add_config("affiche_sect3");
    }
?>
<form method="post" action="admin.php?page=section3">
    <div class="content">
        <label for="affiche_sect2">Afficher</label>
        <input type="checkbox" name="affiche_sect3" id="affiche_sect3" <?=(get_option("affiche_sect3"))?'checked':''?>>
    </div>
    <input type="submit" name="submit3" id="submit3" class="button button-primary" value="Enregistrer">
</form>