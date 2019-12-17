<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST');
header('Access-Control-Allow-Headers: X-Requested-with');

session_start();

$conn =  mysqli_connect('localhost','root','','leafberri');


if(!empty($_POST['Email1']) && !empty($_POST['Password1'])){

    $sql ="SELECT * FROM admin WHERE user_email ='".$_POST['Email1']."' ";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){

        if($_POST['Password1'] == $row['user_password']){
            $_SESSION['email'] = $_POST['Email1'];
            $_SESSION['password'] = $_POST['Password1'];
            echo $_POST['Email1'];

        }elseif($_POST['Password1'] !== $row['user_password']){

            echo"No such data";
        }
    }
 exit();   
}

if(!empty($_POST["pname"])){

    $target_dir = "product_image/";
$target_file = $target_dir . basename($_FILES["pimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pimage"]["size"] > 50000000) {
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
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {

    $product_image = $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
    $Product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_desc = $_POST['pdesc'];

 
    $sql= "INSERT INTO products(product_name,product_description,product_price,product_image)VALUES('$Product_name','$product_desc','$product_price','$product_image')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Product saved";
    }else{
        echo"Product was not saved";
    }



        echo "The file ". basename( $_FILES["pimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
   


}


?>
