<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];   

         $sql = "SELECT * FROM `users` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];
            $type = $row['User_Type'];

if(md5($password) == $pass){

                if ($type == "Administrator") {
                $_SESSION['adminname'] = $row['User_ID'];
                header("Location: index.php");
                }else if ($type == "Beneficiary") {
                $_SESSION['benname'] = $row['User_ID'];
                header("Location: index1.php");
                }else{
                $_SESSION['username'] = $row['User_ID'];
                header("Location: index2.php");
            }
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "User does not exist.";
        }
}
           
?>
