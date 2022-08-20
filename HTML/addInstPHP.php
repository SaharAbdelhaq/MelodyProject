<?php
session_start();

$connection=mysqli_connect("localhost","root","","melody");

if (isset($_POST['registerbtn'])) {
    $code = $_POST['code'];
    $Instname = $_POST['Instname'];
    $price = $_POST['price'];
    $avai = $_POST['availibity'];
    $type = $_POST['category'];
    $description = $_POST['description'];
    $photo="../imgs/".$_FILES['photos']['name'][0];
    $photo1="../imgs/".$_FILES['photos']['name'][1];
    $photo2="../imgs/".$_FILES['photos']['name'][2];
    $photo3="../imgs/".$_FILES['photos']['name'][3];
    if ($Instname != null && $price != null && $description != null && $photo != null) {
//        $query = "INSERT INTO food(Code,Name,Type,Price,Description,Image,Image2,Image3,Image4) VALUES ('$code','$Instname','$type','$price','$description','$photo','$photo1','$photo2','$photo3')";
        $query="INSERT INTO `product` (`Code`, `Name`, `Price`, `Image`, `availability`, `Description`, `Type`, `Image2`, `Image4`, `Image3`) VALUES ('$code', '$Instname', '$price', 'cello1.png', '$avai', '$description', '$type', 'cello2.png', 'cello3.png', 'cello4.png');";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            $_SESSION['success'] = "Instrument Added";
            header('Location:InstruTable.php');
        } else {
            $_SESSION['status'] = "Instrument Not Added";
            header('Location:InstruTable.php');
        }
    } else {
        $_SESSION['status'] = "The instrument was NOT added because you did not fill in all the fields";
        header('Location:RegisterInst.php');
    }

}


//****************

if (isset($_POST['edit_btn'])) {
    $code = $_POST['code'];
    $name = $_POST['Instname'];
    $price = $_POST['price'];
    $type = $_POST['category'];
    $description = $_POST['description'];
    if ($name != null && $price != null && $description != null) {
//        $query = "INSERT INTO food(Code,Name,Type,Price,Description,Image,Image2,Image3,Image4) VALUES ('$code','$Instname','$type','$price','$description','$photo','$photo1','$photo2','$photo3')";
//        $query="INSERT INTO `product` (`Code`, `Name`, `Price`, `Image`, `availability`, `Description`, `Type`, `Image2`, `Image4`, `Image3`) VALUES ('$code', '$Instname', '$price', 'cello1.png', '$avai', '$description', '$type', 'cello2.png', 'cello3.png', 'cello4.png');";
//        $query = "UPDATE `product` SET Name='$name',`Price`=$price,Description='$description',Image='$photo',Image2='$photo1',Image3='$photo2',Image4='$photo3' WHERE Code='$code'";
        $query="UPDATE `product` SET Name='$name',`Price`='$price',Description='$description'  WHERE Code='$code'; ";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            $_SESSION['success'] = "Instrument Updated";
            header('Location:InstruTable.php');
        } else {
            $_SESSION['status'] = "Instrument Not Updated";
            echo $query;
            header('Location:InstruTable.php');
        }
    } else {
        $_SESSION['status'] = "The instrument was NOT added because you did not fill in all the fields";
//        echo "The instrument was NOT added because you did not fill in all the fields";

        header('Location:RegisterInst.php');
    }

}
//if (isset($_POST['edit_btn'])) {
//    $foodName = $_POST['edit_foodname'];
//    $price = $_POST['edit_foodprice'];
//    $description = $_POST['edit_fooddiscription'];
//    $photo = "../imgs/" . $_POST['edit_foodphoto'];
//    $foodNameold = $_POST['foodname'];
//    $query = "UPDATE food SET foodName='$foodName',price='$price',description='$description',photo='$photo' WHERE foodName='$foodName'";
//    $query_run = mysqli_query($connection, $query);
//    if ($query_run) {
//        $_SESSION['success'] = "Snack Is Updated";
//        header('Location:RegisterFood.php');
//    } else {
//        $_SESSION['status'] = "Snack Is NOT Updated";
//        header('Location:RegisterFood.php');
//    }
//}

//************
if (isset($_POST['delete_btn'])) {
    $code = $_POST['delete_id'];

    $query = "DELETE FROM product WHERE Code='$code'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Product Is Deleted";
        header('Location:InstruTable.php');
    } else {
        $_SESSION['status'] = "Product Is NOT Deleted";
        header('Location:InstruTable.php');
    }
}

