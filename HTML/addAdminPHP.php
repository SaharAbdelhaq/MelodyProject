<?php
session_start();
$connection=mysqli_connect("localhost","root","","melody");
if(isset($_POST['registerbtn'])){
    $phone=$_POST['phone'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $email=$_POST['email'];
    $password1=($_POST['password']);
    $password2=($_POST['confirmpassword']);
    if($phone!=null && $Fname!=null && $Lname!=null && $email!=null && $password1!=null && $password2!=null) {
        if ($password1 === $password2) {
           // $query = "INSERT INTO `person` ( `Fname`, `Lname`, `Email_adress`, `profile_image`, `password`, `phone`, `admin`) VALUES ( 'juls', 'aqsde', 'aqswyy@gmail.com', NULL, '12345', '00494452', '1')";
            $query = "INSERT INTO `person` (`Fname`,`Lname`,`Email_adress`,`password`,`phone`,`admin`) VALUES ('$Fname','$Lname','$email','$password1','$phone','1')";
            $query_run = mysqli_query($connection, $query);
            //$query = "INSERT INTO admin(personal_ID,password) VALUES ('$id','$password')";
           // $query_run = mysqli_query($connection, $query);
            if ($query_run) {
                $_SESSION['success'] = "Admin Profile Added";
                header('Location:RegisterAdmin.php');
            } else {
                $_SESSION['status'] = "Admin Profile Not Added";
              //  header('Location:RegisterAdmin.php');
                echo $query;
            }
        } else {
            $_SESSION['status'] = "Password And Confirm Password Does Not Match";
            header('Location:RegisterAdmin.php');
        }
    }
    else{
        $_SESSION['status']="The admin was NOT added because you did not fill in all the fields";
        header('Location:RegisterAdmin.php');
    }

}





//****************

if(isset($_POST['updatebtn'])){
    $id=$_POST['heddin_id'];
    $phone=$_POST['edit_phone'];
    $Lname=$_POST['edit_Lname'];
    $Fname=$_POST['edit_Fname'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];

    $query="UPDATE `person` SET `Fname`='$Fname',`Lname`='$Lname',`Email_adress`='$email',  `password`='$password', `phone`='$phone'  WHERE `personal_ID`= $id";
    $query_run=mysqli_query($connection,$query);
    //$query="UPDATE admin SET password='$password',personal_ID='$id' WHERE personal_ID='$id'";
  //  $query_run=mysqli_query($connection,$query);
    if($query_run ){
        $_SESSION['success']="Your Data Is Updated";
        header('Location:RegisterAdmin.php');
    }
    else{
        $_SESSION['status']="Your Data Is NOT Updated";
        echo $query;
    //   header('Location:RegisterAdmin.php');
    }
}

//************
if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];
    $query="DELETE FROM person WHERE personal_ID='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        $_SESSION['success']="Your Data Is Deleted";
        header('Location:RegisterAdmin.php');
    }
    else{
        $_SESSION['status']="Your Data Is NOT Deleted";
        header('Location:RegisterAdmin.php');
    }
}

?>