<?php 
    if($_REQUEST["submit2"]){
        add_config("affiche_sect2");
    }
?>
<form method="post" action="admin.php?page=section2">
    <div class="content">
        <label for="affiche_sect2">Afficher</label>
        <input type="checkbox" name="affiche_sect2" id="affiche_sect2" <?=(get_option("affiche_sect2"))?'checked':''?>>
    </div>
    <input type="submit" name="submit2" id="submit2" class="button button-primary" value="Enregistrer">
</form>