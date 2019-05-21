
<?php
$target_dir = "uploads/";
$target_file =
$target_dir .
basename($_FILES["fileToUpload"] ["name"]);
$uploadok = 1;
$imageFileType =
 strtolower(pathinfo($target_file, PATHINFO_EXTENTION));

// check if image is a actual image or fake image
if(isset($_POST["submit"])){

	$check = getimagesize($_FILES["fileToUpload"] ["tmp_name"]);
	if($check !== false)
	{

		echo "file is an image - " .
		$check["mime"] . " . ";
		$uploadok = 1;

	}else{

		echo "file is not an image.";

		$uploadok = 0;

	}
}




?>