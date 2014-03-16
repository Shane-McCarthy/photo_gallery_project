<?php
require_once('../../includes/initialize.php');


if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<?php
include_layout_template("admin_header.php");
echo $session->message;
?>

<h2>Menu</h2>
<ul>
    <li><a href="logfile.php">View Log file</a></li>
    <li><a href="gallery.php">Go to the gallery</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php
include_layout_template("admin_footer.php");
?>
