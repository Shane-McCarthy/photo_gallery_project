<?php
require_once('../../includes/initialize.php');


if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<?php include_layout_template('admin_header.php'); ?>

<?php
$gallery =  Photograph::find_all();

?>
<h2>Photographs</h2>
<?php echo $session->message ?>
<table class="bordered">
    <tr>
        <th>Image</th>

        <th>Caption</th>
        <th>Size</th>
        <th>Type</th>
        <th>Comments</th>
        <th></th>
    </tr>
<?php
foreach( $gallery as $gallerys){
    echo  "<tr>";
    echo  "<td><img src='../".$gallerys->image_path()."' width='100'/></td>";
    echo  "<td>".$gallerys->caption."</td>";

    echo  "<td>".$gallerys->size_as_text()."</td>";
    echo  "<td>".$gallerys->type."</td>";
    echo  "<td><a href='delete_photo.php?id=".$gallerys->id."'/>Delete Photo</td>";
    echo  "</tr>";
}
?>
</table>
<br />
<a href="photo_upload.php">Upload a new photograph</a>

<?php include_layout_template('admin_footer.php'); ?>

