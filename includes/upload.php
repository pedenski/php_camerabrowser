<?php 
include "./functions.php";


if (isset($_POST["submit"]) && !empty($_POST['name'])) {


/* GETTERS */
 $name = $_POST['name']; //gets input for name
 $encoded_data = $_POST['mydata']; //get image data



/*SETTERS */
/* removes this data:image/png;base64, and put it on array via delimeter of (,) */
/* array[0] = data:image/png  
/* array[1] = actual image data */
 $encoded_data = explode(',', $encoded_data); 
// this converts the image data to base64_decode without the data:image/png;
 $binary_data = base64_decode($encoded_data[1]);


/*DB RELATED */
$id = recordUser($name); //record user & avatar path, also upload avatar to /files/ and 


$avatar_path = "../files/".$id.".jpg";

 /*store the image file in folder with format
 /* '/files/name_of_image.jpg' */
$result = file_put_contents( $avatar_path , $binary_data );


header("Location: ../users.php");













// $filename = strtolower($_FILES["thisFile"]["name"]); //get name of file and convert to lowercase
// $file_temp = $_FILES['thisFile']['tmp_name']; //get temporary name




// move_uploaded_file($file_temp,"./file/".$filename); //upload file to directory







} 










?>
