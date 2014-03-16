<?php require_once("../includes/initialize.php"); ?>
<?php include_layout_template('header.php'); ?>
<?php

$gallery =  Photograph::find_all();

?>
<h2>Photographs</h2>

<table class="bordered">
    <tr>
        <th>Image</th>

        <th>Caption</th>
        <th>Size</th>
        <th>Type</th>
    </tr>
    <?php
    foreach( $gallery as $gallerys){
        echo  "<tr>";
        echo  "<td><a href='photo_large.php?id=".$gallerys->id."'>
<img src='".$gallerys->image_path()."' width='100'/></a></td>";
        echo  "<td>".$gallerys->caption."</td>";

        echo  "<td>".$gallerys->size_as_text()."</td>";
        echo  "<td>".$gallerys->type."</td>";

        echo  "</tr>";
    }
    ?>
</table>
    <h2>Menu</h2>
    <ul>
        <li><a href="admin/login.php">login</a></li>
    </ul>
<?php include_layout_template('footer.php'); ?>