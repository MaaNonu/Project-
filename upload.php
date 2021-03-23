<?php
if (isset($_POST['submit'])){ //this code comes from a tutorial which can be found here: https://www.youtube.com/watch?v=JaRq73y5MJk&ab_channel=DaniKrossing
    $file=$_FILES['file'];

    $fileName=$_FILES['file']['name'];
    $filetmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    
    $fileExt=explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed= array('jpg', 'jpeg', 'png', 'pdf');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError ===0){
            if($fileSize <1000000){
                $fileNameNew=uniqid('', true). ".".$fileActualExt;
                $fileDestination='uploads/'.$fileNameNew;// this allows the image to be viewed in the "uploads" folder
                move_uploaded_file($filetmpName,$fileDestination);
                header("location:homepage.php?uploadsuccess");
            }else{ 
                    echo "Your file is too big";
                }
            }
        } else{
            echo "There was an error uploading your file!";
        }
    }else {
        echo "You cannot upload files of this type!";
    }
?>