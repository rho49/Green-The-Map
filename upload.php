<?php
if(isset($_POST['submit'])){
$file = $_FILES['file'];
print_r($file);
$fileName = $_FILES['file']['name']; 
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

//C:\Users\admin\AppData\Local\Programs\Python\Python36
//C:\Users\admin\Desktop\Image_Recognition

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpeg','jpg','png','pdf');

if(in_array($fileActualExt, $allowed))
{
 if($fileError==0){
 	if($fileSize<1000000){
 		/*$output = shell_exec("C:\\Users\\admin\\AppData\\Local\\Programs\\Python\\Python36\\python.exe C:\\Users\\admin\\Desktop\\Image_Recognition\\time_to_test.py 2x&1");
		echo $output;*/
 		$fileNameNew = uniqid('',true).".".$fileActualExt;
 		$fileDestination = 'uploads/'.$fileNameNew;
 		move_uploaded_file($fileTmpName, $fileDestination);
 		header("location:Booking Successful.php");

 	}
 	else{
 		echo "File size too large";
 	}
 }
 else{
 	echo "There was an error uploading your file";
 }
}
else{
	echo "You cannot upload files of this type";
}
}
?>