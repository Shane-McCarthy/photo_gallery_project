<?php
/**
 * Created by PhpStorm.
 * User: Shane McCarthy
 * Date: 1/14/14
 * Time: 9:06 AM
 */



$first_name_cookie= "";
$last_name_cookie = "";
$checked="";

if (isset($_POST['submit'])){
if (isset($_POST['firstname'])){
    $fname=trim($_POST['firstname']);
    setcookie("firstname",$fname,time()+60*60*24*7);
    if(isset($_COOKIE['firstname'])){
        $first_name_cookie=$_COOKIE['firstname'];
        $message_fname= "Welcome {$first_name_cookie} ";

}
}else {
    $fname = "";
    $first_name_cookie= "";
    $message_fname = "user name invalid entry<br /> ";
}
if (isset($_POST['lastname'])){
    $lname=trim($_POST['lastname']);
    setcookie("lastname",$lname,time()+60*60*24*7);
    if(isset($_COOKIE['lastname'])){
        $last_name_cookie=$_COOKIE['lastname'];
    }

   $message_lname = "{$lname}<br /> ";
}else {
    $last_name_cookie = "";
    $message_lname = "user name invalid entry<br /> ";
}
if (isset($_POST['remember'])){
    $remember=trim($_POST['remember']);
   // $remember = strtoupper($remember);
    setcookie("remember",$remember,time()+60*60*24*7);



    $message_remember = "You are going to be remembered {$fname} {$lname}<br /> ";
    $checked="checked";
}else {
    $remember = "";
    $fname = "";
    $lname = "";
    $checked="";

    setcookie("remember",$remember,time()-1);
    setcookie("firstname",$fname,time()-1);
    setcookie("lastname",$lname,time()-1);
    $message_remember = "Does anyone remember who I am ?? No they do not {$fname} {$lname}<br /> ";
}

    $pattern_postal = "^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$^";
    $pattern_name = "^[\s\S]{4,}^";

        function testRegex($pattern, $testString){
       // echo "<p>Testing string ".$testString." against pattern ".$pattern ."</p>";
        if(  preg_match($pattern, $testString) == 0  ){
            echo "<p>Your information at {$testString} is in an incorrect format.</p>";
            echo "<p>Please re-enter you information below.</p>";
        }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz 3: Form</title>
    <style type="text/css"></style>
</head>
<body>
<?php if (isset($_POST['submit'])){echo $message_fname." ".$message_lname." ".$message_remember;

    testRegex($pattern_name,$fname);
    testRegex($pattern_name,$lname);}
?>
<h2>lab: HTML Form with Cookies</h2>
<form method="post" action="quiz03.php" style="width:350px;">
    <fieldset>
        <legend>Please input a First and Last Name </legend>
        <input type="text" name="firstname" id="firstname" VALUE="<?php echo "$first_name_cookie" ?>" /> -
        <label for="firstname">First Name</label>
        <input type="text" name="lastname" id="lastname"VALUE="<?php echo "$last_name_cookie" ?>" /> -
        <label for="lastname">Last Name</label>
        <br>

        <input type="checkbox" name="remember" checked="<?php echo $checked ?>">
        <label for="remember">Remember Me?</label>

        <br />
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>