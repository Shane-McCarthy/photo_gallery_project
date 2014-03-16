<?php
$first_name_cookie= "";
$last_name_cookie = "";
$fname="";
$lname="";
$checked="";
$redirect = false;
$message_fname = "";
$message_lname = "";
$message_remember = "";

$pattern_name = "^[\s\S]{4,}^";



function testRegex($pattern, $testString1){
    // echo "<p>Testing string ".$testString." against pattern ".$pattern ."</p>";
    if(  preg_match($pattern, $testString1) == 0  ){
        echo "<p>Your information at first name or last name is in an incorrect format.</p>";
        echo "<p>Please re-enter your information .</p>";
        $redirect = false;

    } else{
        $redirect= true;
    }
}

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
        $message_fname = "";
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
        $message_lname = " ";
    }
    if (isset($_POST['remember'])){
        $remember=$_POST['remember'];
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








}
?>