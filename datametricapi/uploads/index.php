<?php
$requestMethod = $_SERVER['REQUEST_METHOD'];

phpinfo();
if($requestMethod != 'POST'){
	header('HTTP/1.1 519 Rompio todo che');
	echo "la concha puta de tu hermana, te dije POST";
	return;
} else {
	header('HTTP/1.1 200 Todo piola');
}


echo $requestMethod;
echo "\n";
print_r($_FILES);
echo "-\n";

// The uploaded file will end up in the /upload/ subdirectory of the PHP script location.
$uploaddir = 'upload/'; // Relative Upload Location of data file

if (is_uploaded_file($_FILES['file']['tmp_name']))
{
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

	echo "File ". $_FILES['file']['name'] . " uploaded successfully.";

	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
	{
		echo "File upload succesful!";
	}
	else 
	{
		print_r($_FILES);
	}
}
else
{
	echo "Upload Failed!";
	print_r($_FILES);
}
/*
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
*/
/*
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}
*/
/*
echo $uploadOk;
echo "\n";
echo $target_file;
echo "\n";

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}

return;
*/
?>