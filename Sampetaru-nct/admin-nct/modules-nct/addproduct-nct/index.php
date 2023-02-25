<?php

$reqAuth = false;
$module = 'addproduct-nct';
require_once "../../../includes-nct/config-nct.php";
require_once "class.addproduct-nct.php";

extract($_REQUEST);

$winTitle = 'Add Product';

$headTitle = 'Add Product';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

/*Upload Logic start*/
// Check if image file is a actual image or fake image
if(isset($_POST['addproduct'])){
    $target_dir = "../../../themes-nct/images-nct/Products/";
    $target_file = $target_dir . basename($_FILES["image1"]["name"]);
    $imagename1 = basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
    $imagename2 = basename($_FILES["image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
    $imagename3 = basename($_FILES["image3"]["name"]);
    $uploadOk = 1;

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $title = $_POST['title'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $qty_available = $_POST['qty_avilable'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $brand = $_POST['brand'];
    $short_description = $_POST['short_discription'];
    $specification = $_POST['specification'];
    $additional_info = $_POST['additional_info'];
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
            if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2)) {
            echo "The file ". basename( $_FILES["image2"]["name"]). " has been uploaded.";
        }
         else { echo "Sorry, there was an error uploading your file.";
        }
                    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3)) {
            echo "The file ". basename( $_FILES["image3"]["name"]). " has been uploaded.";
        }
         else { echo "Sorry, there was an error uploading your file.";
        }
    }

    /*insert query*/
    $sql = "INSERT INTO tbl_products VALUES ('','$imagename1','$imagename2','$imagename3','$title','$category','$subcategory','$brand','$price','$qty_available','','','$size','$color','$short_description','$specification','$additional_info')";
    $query= mysqli_query($conn,$sql);
    if ($query==1) {
        echo "<script>alert('Product Added')</script>";
        redirectPage(SITE_ADM_MOD.'manageproduct-nct/');
    }
}
/*Upload logic end*/

if (isset($_SESSION['adminusername'])){
$obj = new AddProduct($module, 0, issetor($token));

$pageContent = $obj->getPageContent();
}
else{
    redirectPage(SITE_ADMIN_URL);
}


require_once DIR_ADMIN_TMPL . "parsing-nct.tpl.php";
?>