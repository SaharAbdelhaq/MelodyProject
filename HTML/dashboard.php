<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title >Melodies  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <!--   animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--    change favicon: -->
    <link rel="shortcut icon" type="image/png" href="../imgs/popcornicon.png" sizes="128x128">

    <style>
        body {
            margin: 0;
        }

        .topmod {
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #660000;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .navo{
            margin-top: -30px;
            margin-top: -50px;
        }
        .navo ul{
            list-style-type: none;
        }

        .navo li a {
            display: block;
            color: white;
            padding: -4px 16px;
            text-decoration: none;
            font-size: 20px;
        }


        .navo li a:hover:not(.active) {
            color: #ff6363;
        }

        .topli{
            margin-top: 20px;
        }
        .topli a {
            font-size: 20px;
            font-weight: lighter;
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .topli a:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }


        .topli a:after {
            border-radius: 1em;
            border-top: 2px solid #d1d0d5;
            content: "";
            position: absolute;
            right: 100%;
            bottom: .14em;
            left: 0;
            transition: right .4s cubic-bezier(0,.5,0,1),
            border-color .4s ease-out;
        }


        @keyframes anchor-underline {
            0%, 10% {
                left: 0;
                right: 100%;
            }
            40%, 60% {
                left: 0;
                right: 0;
            }
            90%, 100% {
                left: 100%;
                right: 0;
            }
        }



        .CINEMA{
            float: left;
            color: white;
            text-transform: uppercase;
            transition: all 2s linear;
            position: center;
            text-align: center;
            margin-left: 30px;
            margin-top: 20px;
        }
        .CINEMA{
            text-align: left;
            list-style-type: none;
            font-size: 3rem;
            display: inline;
        }
        .dashboard{
            text-transform: uppercase;
            transition: all 2s linear;
            position: center;
            text-align: center;
            margin-left: 30px;
            list-style-type: none;
            font-size: 1.5rem;
            display: inline;
            color: white;
        }
        #profileImage{
            display: block;
            height: 50px;
            width: 50px;
            margin-left: 30px;
            border-radius: 50%;

        }
        .admininfo{
        /margin-left: -15px;/
        padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            border-top: 4px solid #ff6363;
            border-bottom: 0.1px solid #d1d0d5;
            float: left;
        }
        .tableuserinformation{
            margin-top: 40px;
        }
        .userinformation table{
            border-collapse: collapse;
            width: 100%;
            color:  #660000;
            font-family: Bell MT;
            font-size: 24px;
            text-align: left;

        }
        .userinformation table th{
            background-color: gray;
            color: white;
            font-family: Bell MT;
            font-size: 24px;
        }
        .userinformation table tr:nth-child(even){
            background-color: darkgray;
        }
        .logoutinfo{
            padding-top: 20px;
            padding-bottom: 10px;
            width: 100%;
            border-top: 0.1px solid white;
            float: left;
        }

        .logout {
            font-size: 22px;
            font-weight: lighter;
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
            margin-left: 40px;
            font-family: Verdana;
        }

        .logout:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }
        /*    Change the scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 13px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background:  #660000;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ff6363;
        }
        .dashboard {
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .dashboard:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }
        .dashboard a:hover:not(.active) {
            color: #ff6363;
        }

        .dashboard{
            margin-top: 20px;
        }
        .dashboard a {
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .dashboard a:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }


        .dashboard a:after {
            border-radius: 1em;
            border-top: 2px solid #d1d0d5;
            content: "";
            position: absolute;
            right: 100%;
            bottom: .14em;
            left: 0;
            transition: right .4s cubic-bezier(0,.5,0,1),
            border-color .4s ease-out;
        }
    </style>

</head>
<body>
<div class="intro">
    <h1 class="logoheader">
    </h1>
</div>
<div class="topmod" style="height: 100%; ">
    <div class="CINEMA">
        <p >Melodies </p>
    </div>
    <br> <br><br> <br><br> <br>
    <div class="admininfo">
        <!--        <table>-->
        <!--            <tr><img id="profileImage" class="form-control"-->
        <!--                     src="../imgs/adminpic.png" alt="adminPicture"></tr>-->
        <!--        </table>-->
        <p class="dashboard"> <a href="dashboard.php"><i class="fa fa-dashboard" style="color: white; font-size:24px"></i> dashboard </a></p>
    </div>
    <br><br>
    <br><br><br>

    <div class="navo">
        <ul >
            <li class="topli"><a href="RegisterAdmin.php"><i class="fa fa-user" style="color: white; font-size:24px"></i> Admin</a></li>
            <li class="topli"><a href="UserInfoAdmin.php"><i class="fa fa-user-circle" style="color: white; font-size:24px"></i> User</a></li>
            <li class="topli"><a href="orchTable.php"><i class="fa fa-ticket" style="color: white; font-size:24px"></i> Orchestras</a></li>
            <li class="topli"><a href="InstruTable.php"><i class="fa fa-music" style="color: white; font-size:24px"></i> Instruments </a></li>
        </ul>
    </div>
    <br>
    <div class="logoutinfo">
        <form method="post" action="logout.php">
            <a class="logout" href="login.php"> LOG OUT <i class="fa fa-sign-out"  style="color: white; font-size:24px"></i></a>
        </form>

    </div>
</div>

<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;">
    <!-- Button trigger modal -->
    <!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
    <!--        Launch demo modal-->
    <!--    </button>-->


    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">


            <div class="card-body" >
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                    echo '<h2>'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                }

                ?>
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

                ?>


                <div class="table-responsive" >


                    <table class="table table-bordered" id="dataTable"  STYLE="border-radius: 10px" width="100%" cellspacing="0">
                        <thead >
                        <tr STYLE="margin: 10px">
                            <th STYLE="margin: 10px">
                                <?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $query="SELECT personal_ID FROM person WHERE admin=1";
                                $query_num=mysqli_query($connection,$query);
                                $row=mysqli_num_rows($query_num);
                                echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">Admins NO. : '.$row.'</h4>';
                                $connection->close();
                                ?>
                            </th>
                            <th STYLE="margin: 10px">
                                <?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $query="SELECT personal_ID FROM person WHERE admin=0";
                                $query_run=mysqli_query($connection,$query);
                                $row=mysqli_num_rows($query_run);
                                echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">Users NO. : '.$row.'</h4>';
                                $connection->close();
                                ?>
                            </th>
                            <th>
                                <?php
                                $connection=mysqli_connect("localhost","root","","melody");

                                $query="SELECT Orchname FROM Orch ORDER BY Orchname";
                                $query_num=mysqli_query($connection,$query);
                                $row=mysqli_num_rows($query_num);
                                if($row == 0 ) {

                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">Orch NO. : 0 </h4>';
                                }
                                else{
                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">Orch NO. : ' . $row . '</h4>';

                                }
                                $connection->close();
                                ?>
                            </th>
                            <th>
                                <?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $query="SELECT * FROM issueticket";
                                $query_num=mysqli_query($connection,$query);
                                $row=mysqli_num_rows($query_num);
                                if($row == 0 ) {

                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">ticket NO. : 0 </h4>';
                                }
                                else{
                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">ticket NO. : ' . $row . '</h4>';

                                }
                                $connection->close();
                                ?>
                            </th>
                            <th><?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $query="SELECT * FROM product";
                                $query_run=mysqli_query($connection,$query);
                                $row=mysqli_num_rows($query_run);
                                if($row == 0 ) {

                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">instruments NO. : 0 </h4>';
                                }
                                else{
                                    echo '<h4 class="m-0 font-weight-bold " style="color: #a10202; font-size: 18px; font-family: Verdana; font-weight: lighter">instruments NO. : ' . $row . '</h4>';

                                }
                                $connection->close();
                                ?>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;">


    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <div class="m-0 font-weight-bold " style="color: #a10202;font-family: Bell MT;
            font-size: 24px;">
                    Admin
                    <?php
                    $connection=mysqli_connect("localhost","root","","melody");
                    $query="SELECT personal_ID FROM person  WHERE admin=1";
                    $query_num=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($query_num);
                    ?>
                </div>
            </div>
            <div class="card-body" >
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                    echo '<h2  style="background-color: lightgreen ; color: darkgreen; font-size: 20px">'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                }

                ?>
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    echo '<h2  style="background-color: #f2797d; color: #a10202; font-size: 20px">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

                ?>


                <div class="table-responsive" >
                    <?php
                    $connection=mysqli_connect("localhost","root","","melody");

                    $query="SELECT personal_ID FROM person WHERE admin=1";
                    $query_run=mysqli_query($connection,$query);

                    ?>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Admin Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(mysqli_num_rows($query_run)>0){
                            while ($row=mysqli_fetch_assoc($query_run)){
                                ?>


                                <tr>
                                    <td><?php echo $row['personal_ID']; ?></td>
                                    <td><?php
                                        $connection=mysqli_connect("localhost","root","","melody");
                                        $idc=$row['personal_ID'];
                                        $query="SELECT personal_ID,Fname,Lname FROM person WHERE personal_ID='$idc' ";
                                        $query_num1=mysqli_query($connection,$query);
                                        $row11=mysqli_fetch_assoc($query_num1);
                                        echo $row11['Fname'];
                                        echo " ";
                                        echo $row11['Lname'];
                                        ?>
                                    </td>
                                    <td><?php
                                        $connection=mysqli_connect("localhost","root","","melody");
                                        $idc=$row['personal_ID'];
                                        $query="SELECT Email_adress FROM person WHERE personal_ID='$idc' ";
                                        $query_num11=mysqli_query($connection,$query);
                                        $row2=mysqli_fetch_assoc($query_num11);
                                        echo $row2['Email_adress'];
                                        ?></td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;">
    <!-- Button trigger modal -->
    <!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
    <!--        Launch demo modal-->
    <!--    </button>-->


    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <div class="m-0 font-weight-bold " style="color: #a10202;font-family: Bell MT;
            font-size: 24px;">
                    User
                    <?php
                    $connection=mysqli_connect("localhost","root","","melody");
                    $query="SELECT personal_ID FROM person WHERE admin=0";
                    $query_run=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($query_run);
                    ?>
                </div>
            </div>

            <div class="card-body" >
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                    echo '<h2>'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                }

                ?>
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

                ?>


                <div class="table-responsive" >


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        if(mysqli_num_rows($query_run)>0){
                            while ($row=mysqli_fetch_assoc($query_run)){
                                ?>
                                <tr>
                                    <td><?php echo $row['personal_ID']; ?></td>
                                    <td><?php
                                        $connection=mysqli_connect("localhost","root","","melody");
                                        $idc=$row['personal_ID'];
                                        $query="SELECT personal_ID,Fname,Lname FROM person WHERE personal_ID='$idc' ";
                                        $query_num=mysqli_query($connection,$query);
                                        $row11=mysqli_fetch_assoc($query_num);
                                        echo $row11['Fname'];
                                        echo " ";
                                        echo $row11['Lname'];
                                        ?>
                                    </td>
                                    <td><?php
                                        $connection=mysqli_connect("localhost","root","","melody");
                                        $idc=$row['personal_ID'];
                                        $query="SELECT Email_adress FROM person WHERE personal_ID='$idc' ";
                                        $query_num1=mysqli_query($connection,$query);
                                        $row2=mysqli_fetch_assoc($query_num1);
                                        echo $row2['Email_adress'];
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;" data-aos="fade-up">


    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <div class="m-0 font-weight-bold " style="color: #a10202; font-size: 26px; font-weight: bold;">
                    INSTRUMENTS
                </div>
            </div>
            <div class="card-body" >
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                    echo '<h2  style="background-color: lightgreen ; color: darkgreen; font-size: 20px">'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                }

                ?>
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    echo '<h2  style="background-color: #f2797d; color: #a10202; font-size: 20px">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

                ?>


                <div class="table-responsive" style="font-size: 20px">
                    <?php
                    $connection=mysqli_connect("localhost","root","","melody");

                    $query="SELECT *  FROM product";
                    $query_run=mysqli_query($connection,$query);

                    ?>

                    <table class="table table-bordered"  id="dataTable" style="font-size: 20px" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="font-size: 17px">Code</th>
                            <th style="font-size: 17px"> Name</th>
                            <th style="font-size: 17px">Type</th>
                            <th style="font-size: 17px"> Description</th>
                            <th style="font-size: 17px"> price</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(mysqli_num_rows($query_run)>0){
                            while ($row=mysqli_fetch_assoc($query_run)){
                                ?>

                                <tr>
                                    <td style="font-size: 20px"><?php echo $row['Code']; ?></td>
                                    <td style="font-size: 20px"><?php echo $row['Name']; ?></td>
                                    <td style="font-size: 20px"><?php echo $row['Type']; ?></td>
                                    <td style="font-size: 20px"><?php echo $row['Description']; ?></td>
                                    <td style="font-size: 20px"><?php echo $row['Price']; ?></td>

                                <?php

                            }
                        }


                        else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;" data-aos="fade-up">


    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <div class="m-0 font-weight-bold " style="color: #a10202; font-size: 26px; font-weight: bold;">

                    Orchestras
                </div>
            </div>
            <div class="card-body" >
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                    echo '<h2  style="background-color: lightgreen ; color: darkgreen; font-size: 20px">'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                }

                ?>
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    echo '<h2  style="background-color: #f2797d; color: #a10202; font-size: 20px">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

                ?>


                <div class="table-responsive" >
                    <?php
                    $connection=mysqli_connect("localhost","root","","melody");

                    $query="SELECT * FROM orch";
                    $query_run=mysqli_query($connection,$query);

                    ?>

                    <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>orch Name</th>
                            <th> show Day </th>
                            <th> show date </th>
                            <th>hall num</th>
                            <th> Description</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(mysqli_num_rows($query_run)>0){
                            while ($row=mysqli_fetch_assoc($query_run)){
                                ?>


                                <tr>
                                    <td><?php echo $row['Orchname']; ?></td>
                                    <td><?php echo $row['showDay']; ?></td>
                                    <td><?php echo $row['showDate']; ?></td>
                                    <td><?php echo $row['hallNum']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                <?php
                            }
                        }
                        else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;" data-aos="fade-up">
    <!-- Button trigger modal -->
    <!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
    <!--        Launch demo modal-->
    <!--    </button>-->




</div>

<!--to make  things moving-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration:1000
    });
</script>

<!--Javascript for splash loading -->
<script>
    let intro=document.querySelector(".intro");
    let logo=document.querySelector(".logoheader");
    let logospan=document.querySelectorAll(".logo");
    window.addEventListener('DOMContentLoaded',()=>{
        setTimeout(()=>{
            logospan.forEach((span,idx)=>{
                setTimeout(()=>{
                    span.classList.add('active');
                },(idx+1)+400)
            });
            setTimeout(()=>{
                logospan.forEach((span,idx)=>{
                    setTimeout(()=>{
                        span.classList.remove('active');
                        span.classList.add('fade');
                    },(idx+1)*50)
                })
            },2000)
            setTimeout(()=>{
                intro.style.top='-100vh';
            },2300)
        })
    })

</script>
</body>
</html>