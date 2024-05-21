<?php 
    if($_REQUEST["submit"]){
        add_config("icone_sect");
        add_config("titre_sect");
        add_config("description_sect");
        add_config("affiche_sect1");
    }
?>
<form method="post" action="admin.php?page=section1">
    <div class="content">
        <label for="affiche_sect1">Afficher</label>
        <input type="checkbox" name="affiche_sect1" id="affiche_sect1" <?=(get_option("affiche_sect1"))?'checked':''?>>
        <label for="icone_sect">Icone</label>
        <input type="text" name="icone_sect" id="icone_sect" value="<?=(get_option("icone_sect"))??''?>">
        <label for="titre_sect">Titre</label>
        <input type="text" name="titre_sect" id="titre_sect" value="<?=(get_option("titre_sect"))??''?>">
        <label for="description_sect">Description</label>
        <textarea id="description_sect" name="description_sect"><?=(get_option("description_sect"))??''?></textarea>
    </div>
    <input type="submit" name="submit" id="submit" class="button button-primary" value="Enregistrer">
</form>