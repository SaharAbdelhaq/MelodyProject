<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "melody");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['btn-cart'])){
        if(isset($_SESSION['cart'])){
            $myItems=array_column($_SESSION['cart'],'Name');
            if(in_array($_POST['Name'],$myItems)){
//                print_r($_SESSION['cart']);
                echo '<script type="text/javascript">window.alert("'."Item already added "  .'");</script>';
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array(
//                    'code'=> $_POST['code'],
                    'Name'=>$_POST['Name'],
                    'Price'=>$_POST['Price'], 'Quantity'=>1
                );
            }
        }
        else{
            $_SESSION['cart'][0]=array(
//                'code'=> $_POST['code'],
                'Name'=>$_POST['Name'],
                'Price'=>$_POST['Price'], 'Quantity'=>1
            );
//        print_r($_SESSION['cart']);
        }
    }
    if(isset($_POST['buy-now'])){
        if(isset($_SESSION['cart'])){
            $myItems=array_column($_SESSION['cart'],'Name');
            if(in_array($_POST['Name'],$myItems)){
//                print_r($_SESSION['cart']);
                echo '<script type="text/javascript">window.alert("'."Item already added "  .'");</script>';
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array(
//                    'code'=> $_POST['code'],
                    'Name'=>$_POST['Name'],
                    'Price'=>$_POST['Price'], 'Quantity'=>1
                );
                echo'<script> location.replace("Payment.php"); </script>';

            }
        }
        else{
            $_SESSION['cart'][0]=array(
//                'code'=> $_POST['code'],
                'Name'=>$_POST['Name'],
                'Price'=>$_POST['Price'], 'Quantity'=>1
            );
//        print_r($_SESSION['cart']);
        }
    }

//    if (isset($_POST['+'])){
//        foreach ($_SESSION['cart'] as $key => $value){
//
//            echo "<script>alert(parseInt(document.getElementById(qnt).innerText))</script>";
//
//        }
//    }
//    if (isset($_POST['-'])){
//        foreach ($_SESSION['cart'] as $key => $value){
//            $value['Quantity']=$value['Quantity']-1;
//        }
//    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> guitar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/guitars.css">

</head>
<body>
<!--add navbar start-->
<!--navbar end-->


<div class="containerrr red topBotomBordersOut">
    <nav1 >
        <a class="navclass" href="../homee.html">HOME</a>
        <a class="navclass" href="../HTML/about.html">ABOUT</a>
        <a class="navclass" href="../HTML/profile.php">ACCOUNT</a>
        <a class="navclass" href="#hui1 ">ORCHESTRA</a>
        <a class="navclass" href="#hui2">INSTRUMENTS</a>
    </nav1>
</div>


<h1 class="lg-title">
    <span>G</span>
    <span>U</span>
    <span>I</span>
    <span>T</span>
    <span>A</span>
    <span>R</span>
</h1>
<div class = "products" style="background: white; ">
    <div class = "containerr">
        <div class = "product-items">
            <?php
            $sql="SELECT * FROM product WHERE Type='guitar'";
            $result = $db->query($sql);
            while($row= $result->fetch_assoc()) {?>
                <form action="laptops.php? code=<?=$row['Code']?>" method="post">
                    <?php
                    $Name=$row['Name'];
                    $Price=$row['Price'];
                    $Image=$row['Image'];
                    $code1=$row['Code'];
                    $Code=trim($code1);
                    $Availability=$row['availability'];
                    $Description=$row['Description'];
                    $Type=$row['Type']
                    ?>
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img" >
                                <img src = "<?php echo $Image ?>" alt = "product image">
                            </div>
                            <input type="hidden" name="Image" value="<?=$Image?>>">
                            <div class = "product-btns">
                                <button type = "submit" class = "btn-cart" name="btn-cart"> add to cart
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>

                            </div>
                        </div>
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "subproduct.php?code=<?php echo $Code ?>" class = "product-name" ><?php echo $Name ?> </a>
                            <input type="hidden" name="Name" value="<?=$Name?>">
                            <p class = "product-price1" >$<?php echo $Price ?></p>
                            <input type="hidden" name="Price" value="<?=$Price?>">
                        </div>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>