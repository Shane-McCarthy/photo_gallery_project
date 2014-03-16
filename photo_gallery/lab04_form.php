<?php
require_once('lab04_functions.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>lab04: Form</title>
    <style type="text/css"></style>

</head>
<body>
<?php
if (isset($_COOKIE['firstname'])||(isset($_COOKIE['lastname']))){
    $first_name_cookie= $_COOKIE['firstname'];
    $last_name_cookie= $_COOKIE['lastname'];

}

?>
<h2>lab: HTML Form with Cookies</h2>
<form method="post" action="lab04_success.php" style="width:350px;">
    <fieldset>
        <legend>Please input a First and Last Name </legend>
        <input type="text" name="firstname" id="firstname" VALUE="<?php echo "$first_name_cookie" ?>" /> -
        <label for="firstname">First Name</label>
        <input type="text" name="lastname" id="lastname"VALUE="<?php echo "$last_name_cookie" ?>" /> -
        <label for="lastname">Last Name</label>
        <br>

        <input type="checkbox" name="remember" checked="<?php echo $checked ?>"/>
        <label for="remember">Remember Me?</label>

        <br />
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>