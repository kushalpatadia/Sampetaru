<?php


$reqAuth = false;
$module = 'manageslider-nct';
require_once "../../../includes-nct/config-nct.php";
require_once "class.manageslider-nct.php";

$winTitle = 'Manage Slider';

$headTitle = 'Manage Slider';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

/*Insert Image Slider*/
if (isset($_POST['insertslider'])){
       //echo "<script>alert('heeeelllo')</script>";
    $target_dir = "../../../themes-nct/images-nct/Slider/";
    $target_file = $target_dir . basename($_FILES["image1"]["name"]);
    $imagename = basename($_FILES["image1"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $title = $_POST['title'];
    $discount = $_POST['discount'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;}
    // Check file size
    if ($_FILES["image1"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        
        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
        }
         else { echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO `tbl_slider`(`id`, `imageName`, `title`, `discount`, `isUpDown`, `description`, `isActive`) VALUES 
             ('','$imagename','$title','$discount','$position','$description','$status')";

    $query= mysqli_query($conn,$sql);
    if ($query==1) {
        echo "<script>alert('Slider Image Added')</script>";
        //redirectPage(SITE_ADM_MOD.'manageslider-nct/');
    }
}

if(isset($_POST['updateslider'])){
	$sliderdetails = $_POST['sliderdetails'];
	$position = $_POST['position'];
	$status = $_POST['status'];
	$result= "UPDATE `tbl_slider` SET `isUpDown`='$position', `isActive`='$status' WHERE id='$sliderdetails'";
	$query = mysqli_query($conn,$result);
}
if (isset($_SESSION['adminusername'])){
$obj = new ManageSlider($module, 0, issetor($token));

$pageContent = $obj->getPageContent();
}
else{
	redirectPage(SITE_ADMIN_URL);
}

require_once DIR_ADMIN_TMPL . "parsing-nct.tpl.php";
?>