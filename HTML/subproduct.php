<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'melody');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
};
$CurPageURL =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$arr=explode("?",$CurPageURL);
$arr1=explode("=",$arr[1]);
$code= $arr1[1];
$sql=mysqli_query($db,"select * from product where Code= '$code'");

for($i=0;$i<$sql->num_rows;$i=$i+1) {
    $row = $sql->fetch_assoc();
    $Name = $row['Name'];
    $Price = $row['Price'];
    $Image = $row['Image'];
    $Image2 = $row['Image2'];
    $Image3 = $row['Image3'];
    $Image4 = $row['Image4'];
    $Code = $row['Code'];
    $Availability = $row['availability'];
    if ($Availability == null) {
        $Availability = "Out of stock";
    }
    $Description = $row['Description'];

    $Type = $row['Type'];
    $path = "Home.php";
    if ($Type == "piano") {
        $path = "piano.php";
    } elseif ($Type == "guitar") {
        $path = "guitar.php";
    } elseif ($Type == "cello") {
        $path = "cello.php";
    }
}

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>All Products</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/subproduct.css">
</head>

<body>

<div class="nin">
    <img src="../imgs/logo.png" alt="Melody Logo" width="160" height="60" >
</div>

<div class="containerrr red topBotomBordersOut">

    <nav1>
        <a class="navclass" href="../homee.html">Home</a>
        <a class="navclass" href="./about.html">About</a>
        <a class="navclass" href="./profile.php">Account</a>
        <a class="navclass" href="./login.php">Login</a>
        <a class="navclass" href="#hui1 ">Orchestra</a>
        <a class="navclass" href="#hui2">Instruments</a>
        <a class="navclass" href="#hui2">ContactUs</a>

    </nav1>

</div>

<div class = "card-wrapper">
    <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
            <div class = "img-display">
                <div class = "img-showcase">
                    <img src="<?php echo $Image ?>" alt="...">
                    <img src="<?php echo $Image2 ?>" alt="...">
                    <img src="<?php echo $Image3 ?>" alt="...">
                    <img src="<?php echo $Image4 ?>" alt="...">
                </div>
            </div>
            <div class = "img-select">
                <div class = "img-item">
                    <a href = "#" data-id = "1">
                        <img src="<?php echo $Image ?>" alt="...">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "2">
                        <img src="<?php echo $Image2 ?>" alt="...">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "3">
                        <img src="<?php echo $Image3 ?>" alt="...">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "4">
                        <img src="<?php echo $Image4 ?>" alt="...">
                    </a>
                </div>
            </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
            <h2 class = "product-title"><?php echo $Name ?> </h2>
            <div class = "product-rating">
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star-half-alt"></i>
                <span style="color: #001a4d">PRODUCT CODE: <?php echo $Code ?></span>
            </div>

            <div class = "product-price">
                <p class = "new-price" style=" color: #660000; font-size: 20px; font-weight: bold;" > Price: <span style=" color: #660000; font-size: 20px; font-weight: bold;"  ><?php echo $Price ?>$</span></p>
            </div>

            <div class = "product-detail">
                <h2>Description: </h2>
                <p><?php echo $Description ?></p>
                <ul>
                    <li>Available: <span><?php echo $Availability ?></span></li>
                    <li>Shipping Fee: <span>Free</span></li>
                    <li>Condition: <span>New</span></li>
                </ul>
            </div>

            <form action="addProduct.php" method="post" class = "purchase-info">
                <input type="hidden" name="code" value="<?=$Code?>">

                <button type = "submit" class = "btn">

                    Add to Cart <i class = "fas fa-shopping-cart"></i>
                </button>
            </form>


        </div>
    </div>
</div>
<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage(){
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>

</body>
</html>
