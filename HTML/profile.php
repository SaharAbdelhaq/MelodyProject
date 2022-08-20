<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "melody");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}else{
    $query = "SELECT * FROM person WHERE personal_ID='".$_SESSION['userID']."'";
    $query_run=mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run); // info. for user
    $query1= "SELECT * FROM customer_instru WHERE custemerID='".$_SESSION['userID']."'";
    $query_run1=mysqli_query($connection,$query1);
    $query3= "SELECT * FROM issueticket WHERE custemerID='".$_SESSION['userID']."'";
    $query_run3=mysqli_query($connection,$query3);
//    echo $query."\n";
//    echo $query1."\n";
//    echo json_encode($row);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/profile.css"/>
    <script src="profile.js" defer></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


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

<div class="okka">
<div class="container">
    <aside>
        <div class="navbar">
            <nav>
                <ul>
                    <li class="selectedLink" name="home">USER NAME</li>
                    <li name="resume">MY INSTRUMENRS</li>
                    <li name="about">MY TICKETS</li>

                </ul>
            </nav>
        </div>
    </aside>
    <main>
        <div class="card active home" data-home>
            <form action="signup.php" method="post" class="leftdiv">
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="User Name" value="<?php echo $row['Fname'] ." ".$row['Lname']?>">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" value="<?php echo $row['Email_adress']?>">
                </div>
                <div class="input-field">

                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Phone" value="<?php echo $row['phone']?>">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" placeholder=Password>
                </div>
                <input type="submit" value="Update" class="btn">
                <input type="submit" name="logout" value="logout" class="btn">
            </form>
            <div class="imgcard"><img class="imgpr" src="../imgs/myprofile1.png"></div>

        </div>
        <div class="card about" style="color: black"  data-about>
            <div class="container2">

                <h1>Tickets Cart</h1>

                <div class="cart2">

                    <div class="products2">
                        <?php
                        while ($row3 = mysqli_fetch_assoc($query_run3)){
                            $query2="SELECT * FROM orch WHERE Code = '".$row3['CodeOrch']."'";
                            $query_run2=mysqli_query($connection,$query2);
                            $row2= mysqli_fetch_assoc($query_run2);

                            ?>
                            <div class="product2">
                                <!--                                <img src="../imgs/guitar5.png">-->
                                <img src="<?php echo $row2['photo']?>">
                                <div class="product-info2">

                                    <h2 class=""><?php echo $row2['Orchname']?></h2>
                                    <h4 class=""><?php echo $row2['showDay']?></h4>
                                    <h4 class="">$<?php echo $row2['hallNum']?></h4>
                                    <h4 class="">$<?php echo $row2['rate']?></h4>
                                    <h4 class="">$<?php echo $row2['description']?></h4>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="card resume" style="color: black" data-resume>

            <div class="container2">

                <h1>Shopping Cart</h1>

                <div class="cart2">

                    <div class="products2">
                        <?php
                        while ($row1 = mysqli_fetch_assoc($query_run1)){
                            $query2="SELECT * FROM product WHERE Code = '".$row1['Code']."'";
                            $query_run2=mysqli_query($connection,$query2);
                            $row2= mysqli_fetch_assoc($query_run2);

                            ?>

                            <div class="product2">
<!--                             <img src="../imgs/piano2.png">-->
                                <img src="<?php echo $row2['Image']?>">
                                <div class="product-info2">

                                    <h2 class=""><?php echo $row2['Code']?></h2>
                                    <h4 class=""><?php echo $row2['Name']?></h4>
                                    <h4 class=""><?php echo $row2['Type']?></h4>
                                    <h4 class="">$<?php echo $row2['Price']?></h4>


<!--                                    <p class="product-remove2">-->
<!---->
<!--                                        <i class="fa2 fa-trash2" aria-hidden="true"></i>-->
<!---->
<!--                                        <span class="remove2">Remove</span>-->
<!---->
<!--                                    </p>-->

                                </div>
                            </div>
                                <?php
                        }

                        ?>

                    </div>

                </div>
            </div>
            <div class="card contact" data-contact>
                <div class="title">Contact Page</div>
                <div class="content">Content Goes Here</div>
            </div>
        </div>
    </main>

</div>
</div>
<script>
    const links = document.querySelectorAll(".navbar > nav > ul > li");
    const cards = document.querySelectorAll(".card");

    [...links].map((link, index) => {
        link.addEventListener("click", () => onLinkClick(link, index), false);
    });

    const onLinkClick = (link, currentIndex) => {
        const selectedItem = link.getAttribute("name");
        cards.forEach((card) => {
            card.classList.remove("active");
        });
        // const currentCard = [...cards].find((card) =>
        //   card.classList.contains(selectedItem)
        // );

        const currentCard = [...cards].find((card) =>
            Object.keys(card.dataset).includes(selectedItem)
        );
        currentCard.classList.add("active");
        highLightSelectedLink(currentIndex);
    };

    const highLightSelectedLink = (currentIndex) => {
        links.forEach((link) => {
            link.classList.remove("selectedLink");
        });
        links[currentIndex].classList.add("selectedLink");
    };
</script>

</body>
</html>