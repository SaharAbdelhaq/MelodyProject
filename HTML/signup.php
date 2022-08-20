<?php
session_start();

$flag1=0;
$flag2=0;
$flag3=0;
$flag4=0;

$_SESSION['check']=false;
$_SESSION['emailcheck']=false;
$_SESSION['checkcode']=false;
$_SESSION['flagpay']=false;
$_SESSION['flagfood']=false;

if(isset($_POST['login'])) {
    if ($_POST['email']!=null && $_POST['password']!=null) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        try {
            $db = new mysqli('localhost', 'root', '', 'melody');
            $qryStr = "select * from `person` Where `Email_adress` = '$email'";

            $res = $db->query($qryStr);
            if($res->num_rows > 0){
                $row = $res->fetch_object();
                if ($row->password == $pass) {

                    $_SESSION['loggedIn']=true;
                    $_SESSION['userID'] = $row->personal_ID;
                    if($row->admin){
                        header('Location:dashboard.php');
                    }else{
                        header('Location:../homee.html');

                    }


                }else{
                    echo '<script>alert("wrong password")</script>';
                    $flag1 = 1;
                  //  echo $row->password;
                  //  echo "wrong pass";
                    // header('Location:login.php');
                }
            }else{
                 echo '<script>alert("Email does not exist")</script>';
                $flag4 = 1;
                //echo "no email";
                 header('Location:login.php');
            }



            $db->close();

        } catch (Exception $e) {
            echo $e;
        }


    } else {
        $flag3 = 1;
      //  echo "no data";
         header('Location:login.php');
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');

}

if (isset($_POST["signup"])) {
    if ($_POST['email'] != null && $_POST['password'] != null && $_POST['fname'] != null && $_POST['lname'] != null)
    {
        $fnmae = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $confpass = $_POST['confpass'];
        $phonee = $_POST['phone'];


        try {
            $db = new mysqli('localhost', 'root', '', 'melody');
            $qryStr4 = "select * from person";
            $res3 = $db->query($qryStr4);
            for ($i = 0; $i < $res3->num_rows; $i++) {

                $row = $res3->fetch_object();
                if($row->Email_adress==$email)
                {
                    echo "<script>alert('this user has registeerrd beforr');</script>";
                    header('Location:login.php');

                }
            }

            if ($pass == $confpass) {

                $qryStr = "INSERT INTO `person` (`Fname`, `Lname`,`phone`, `Email_adress`,`password`) VALUES (' $fnmae ' , ' $lname ' , ' $phonee  ' , '  $email  ',' $pass')";


                if(mysqli_query($db, $qryStr)){
                    echo "Records inserted successfully.";
                    header('Location:login.php');

                } else {
                    echo "ERROR: Could not able to execute $qryStr. " . mysqli_error($db);
                }

                $db->close();

            } else {
                header('Location:login.php');

            }


        } catch (Exception $e) {
            echo $e;
        }

    } //email
    else{
        $flag1=1;
    }
}//submit
?>


