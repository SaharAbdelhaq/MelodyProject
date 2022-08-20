<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'melody');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
};
$CurPageURL =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$arr=explode("?",$CurPageURL);
$arr1=explode("=",$arr[1]);
$codex= $arr1[1];
$sql=mysqli_query($db,"select * from orch where Code= '$codex'");

for($i=0;$i<$sql->num_rows;$i=$i+1) {
    $row = $sql->fetch_assoc();
    $Orchname = $row['Orchname'];
    $rate = $row['rate'];
    $photo = $row['photo'];
    $showDay=$row['showDay'];
    $showDate=$row['showDate'];
    $Code = $row['Code'];
    $description = $row['description'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/suborchestra.css" />
    <title>Orchestra</title>
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

<div class="outerdiv">
    <div class="rightdiv">
        <div class="orchestraName">
            <h2><?php echo $Orchname ?></h2>
            <p>
            <h4> <?php echo $showDate ?> </h4>
            <h4> <?php echo $showDay ?> </h4>
            <h4> Ticket Price : <?php echo $rate ?>  </h4>
            <h4> Description : <?php echo $description ?> </h4>
            <form action="issueTicket.php" method="post" class = "purchase-info">
                <input type="hidden" name="code" value="<?=$Code?>">

                <button type = "submit" class = "btn" >
                    book Ticket <i class = "fas fa-shopping-cart"></i>
                </button>
            </form>
<!--            <div class="button">-->
<!--                <a  href="">Book Ticket</a>-->
<!--                <p class="text">-->
<!--                </p>-->
<!--            </div>-->
            </p>
        </div>

    </div>
    <div class="leftdiv">
        <img class="orchimg" src="<?php echo $photo ?>">
    </div>

</div>
</div>
<script src="orch1.js"></script>
</body>
</html>
<?php
}
?>