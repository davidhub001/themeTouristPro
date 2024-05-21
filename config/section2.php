<?php 
    if($_REQUEST["submit2"]){
        add_config("affiche_sect2");
        $data = json_decode(unserialize(get_option("data_sect2")))??[];
        array_push($data,[$_REQUEST["image_name"], $_REQUEST["destination"], $_REQUEST["description"]]);
        update_option("data_sect2", serialize(json_encode($data)));
    }
?>
<div class="section2">
    <form method="post" action="admin.php?page=section2">
        <div class="content">
            <label for="affiche_sect2">Afficher</label>
            <input type="checkbox" name="affiche_sect2" id="affiche_sect2" <?=(get_option("affiche_sect2"))?'checked':''?>>

            <fieldset class="custom-fieldset">
                <legend>Nouvelle destination</legend>
                <label for="image_name">Image destination</label>
                <input type="file" name="image_name" id="image_name" required>

                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </fieldset>

        </div>
        <input type="submit" name="submit2" id="submit2" class="button button-primary" value="Enregistrer">
    </form>
    <fieldset class="custom-fieldset">
                <legend>Liste des destinations</legend>
                <?php 
                $data = json_decode(unserialize(get_option("data_sect2")));
                echo "<pre>";
                var_dump($data);
                echo "</pre>"
                ?>
    </fieldset>
</div>