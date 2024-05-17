<form method="post" action="admin.php?page=section1">
    <div class="content">
        <label for="icone_sect">Icone</label>
        <input type="text" name="icone_sect" id="icone_sect">
        <label for="titre_sect">Titre</label>
        <input type="text" name="titre_sect" id="titre_sect">
        <label for="description_sect">Description</label>
        <textarea id="description_sect" name="description_sect"></textarea>
    </div>
    <input type="submit" name="submit" id="submit" class="button button-primary" value="Enregistrer">
</form>
<?php 
    var_dump($_REQUEST);
?>