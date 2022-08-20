<?php
session_start();
$connection=mysqli_connect("localhost","root","","melody");
if(isset($_POST['registerbtn'])){
    $orchname=$_POST['orchname'];
    $day=$_POST['showday'];
    $date=$_POST['showdate'];
    $hallnum=$_POST['hallnumber'];
    $discription=$_POST['orchdiscription'];
    $orchrate=$_POST['orchrate'];
    $picture=$_FILES['orchpicture']['name'];

    if($orchname!=null && $day!=null && $date!=null && $hallnum!=null && $orchrate!=null && $discription!=null && $_FILES['orchpicture']['size']!=0){

//        $query="INSERT INTO hall(hallNum) VALUES ('$hallnum')";
//        $query_run=mysqli_query($connection,$query);
//        $query="INSERT INTO days(showDay) VALUES ('$day')";
//        $query_run=mysqli_query($connection,$query);

        $query="INSERT INTO orch(Orchname,showDay,hallNum,showDate,photo,description,rate) VALUES ('$orchname','$day','$hallnum','$date','$picture','$discription','$orchrate')";
        $query_run=mysqli_query($connection,$query);
        if($query_run){
            $_SESSION['success']="orchestra Added";
            header('Location:orchTable.php');
        }
        else{
            $_SESSION['status']="orchestra Not Added";
            header('Location:orchTable.php');
        }

//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','1A','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','2A','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','3A','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','1B','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','2B','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','3B','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','1C','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','2C','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
//        $query1="INSERT INTO seats(booked,seatNum,Orchname) VALUES ('n','3C','$orchname')";
//        $query_run1=mysqli_query($connection,$query1);
    }
    else{
        $_SESSION['status']="The orchesrta was NOT added because you did not fill in all the fields";
        echo "The orchesrta was NOT added because you did not fill in all the fields";
//        header('Location:RegisterOrch.php');
    }

}





//****************

if(isset($_POST['updatebtn'])){
    echo json_encode($_POST);
    $orchname=$_POST['edit_name'];
    $day=$_POST['edit_showday'];
    $date=$_POST['edit_showdate'];
    $hallnum=$_POST['edit_hallnumber'];
    $rate=$_POST['edit_rate'];
    $discription=$_POST['edit_description'];

//    if($picture == ""){
//        $picture =  $_POST['hidden_photo'];
//        echo $_POST['hidden_photo'];
//    }
    echo "\nFiles = ". json_encode($_FILES['photo']['name']);
    if ($_FILES['photo']['size'] == 0)
    {
        if(  $_POST['hidden_photo'] == "emptyPhoto"){
            $picture = NULL;
            echo "\nhidden_photo = NULL".  $picture;
            $query="UPDATE `orch` SET `Orchname`='$orchname',`showDay`='$day',`showDate`='$date',hallNum='$hallnum',`rate`='$rate'
               ,`description`='$discription' WHERE `Orchname`='$orchname'";
            $query_run=mysqli_query($connection,$query);
            echo "\n\nQuery =  ". $query;

        }else{
            $picture = $_POST['hidden_photo'];
            echo "\nhidden_photo = ".  $picture;

            $query="UPDATE `orch` SET `Orchname`='$orchname',`showDay`='$day',`showDate`='$date',hallNum='$hallnum',`rate`='$rate'
               ,`description`='$discription',`photo`='$picture' WHERE `Orchname`='$orchname'";
            $query_run=mysqli_query($connection,$query);
            echo "\n\nQuery =  ". $query;
        }
        if($query_run){
            $_SESSION['success']="Orchestra Is Updated";
            header('Location:orchTable.php');
        }
        else{
            $_SESSION['status']="Orchestra Is NOT Updated";
            header('Location:orchTable.php');
        }

    }elseif ($_FILES['photo']['error']!=0){
        echo "\n\nError =  ".$_FILES['photo']['error']." on upload photo\n";
        echo "<a href='orchTable.php'>back to orchestra table</a>";

    }else{
        $picture=$_FILES['photo']['name'];
        $query="UPDATE `orch` SET `Orchname`='$orchname',`showDay`='$day',`showDate`='$date',hallNum='$hallnum',`rate`='$rate'
               ,`description`='$discription',`photo`='$picture' WHERE `Orchname`='$orchname'";
        $query_run=mysqli_query($connection,$query);

        if($query_run){
            $_SESSION['success']="Orchestra Is Updated";
            header('Location:orchTable.php');
        }
        else{
            $_SESSION['status']="Orchestra Is NOT Updated";
            header('Location:orchTable.php');
        }
    }

}

//************
if(isset($_POST['delete_btn'])){
    $orchname=$_POST['delete_id'];
//    $day=$_POST['showday'];
//    $hallnum=$_POST['hallnumber'];
//    $query="DELETE FROM hall WHERE  hallNum='$hallnum' AND movie.Mname='$Mname'";
//    $query_run=mysqli_query($connection,$query);
//    $query="DELETE FROM days WHERE ShowDay='$day' AND movie.Mname='$Mname'";
//    $query_run=mysqli_query($connection,$query);
    $query="SELECT Orchname FROM seats WHERE Orchname='$orchname'" ;
    $query_run=mysqli_query($connection,$query);
    for ($i=0;$i<'9';$i++){
        $query="DELETE FROM seats WHERE Orchname='$orchname'";
        $query_run=mysqli_query($connection,$query);
    }
    $query="DELETE FROM orch WHERE Orchname='$orchname'";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Orchestra Is Deleted";
        header('Location:orchTable.php');
    }
    else{
        $_SESSION['status']="Orchestra Is NOT Deleted";
        header('Location:orchTable.php');
    }
}

?>