<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/14/14
 * Time: 1:09 PM
 */
require_once('lab04_functions.php');


?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style type="text/css"></style>
</head>
<body>
<h2>Success</h2>
<h3>
    <?php echo $first_name_cookie." ".$last_name_cookie." ".$message_remember;
    $redirect = false;
    if(isset($_POST['firstname'])){testRegex($pattern_name,$fname);}
    if(isset($_POST['lastname'])){testRegex($pattern_name,$lname);}
    ?>
</h3>
<h4><a href="lab04_form.php">Back to form </a> </h4>

</body>
</html>