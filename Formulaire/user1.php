<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
    
} else {
    echo 'a+ en lan';
}









?>



