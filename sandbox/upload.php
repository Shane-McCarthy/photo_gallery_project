<?php
// In an application, this could be moved to a config file
$upload_errors = array(
    // http://www.php.net/manual/en/features.file-upload.errors.php
    UPLOAD_ERR_OK 				=> "No errors.",
    UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
    UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
    UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
    UPLOAD_ERR_NO_FILE 		=> "No file.",
    UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
    UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
    UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
);


echo "<pre>";
if(isset($_FILES['file_upload'])){
    $error = $_FILES['file_upload']['error'];
    $message = $upload_errors[$error];
    print_r($_FILES['file_upload']);
};
echo "</pre>";
echo "</hr>";
if(isset($_POST['submit'])){
    // process the form
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $target_file = basename($_FILES['file_upload']['name']);
    $upload_directory = "uploads";
    // You will probably want to first use file_exists() to make sure
    // there isn't already a file by the same name.

    // move_uploaded_file will return false if $tmp_file is not a valid upload file
    // or if it cannot be moved for any other reason
    if(move_uploaded_file($tmp_file,$upload_directory."/".$target_file)){
        $message = "File upload successful ";
            }else{
        $message= $upload_errors[$error];
    }

}
?>
<html>
	<head>
		<title>Basic</title>
	</head>
	<body>
    <!--the max file size in bytes must be declared before the input field and cannot be larger than the
     settting in the php.ini file -->
    <?php if (!empty($message)){echo "<p>{$message}</p>"; }?>
	<form action="upload.php" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" VALUE="1000000">
        <input type="file" name="file_upload"/>
        <input type="submit" name="submit" value="Upload"/>
    </form>
	</body>
</html>