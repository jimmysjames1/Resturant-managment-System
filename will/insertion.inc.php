<?php 

//Insert Functions
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];
 $type = $_POST['type'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

  if ($mod == 1) {
  $sql = "INSERT INTO `users`(`Fullname`, `Email_Address`, `Phone_Number`, `User_Type`, `Password`) VALUES ('$fname','$email','$phone','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
  }else{
   $sql = "INSERT INTO `users`(`Fullname`, `Email_Address`, `Phone_Number`, `User_Type`, `Password`) VALUES ('$fname','$email','$phone','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
 }
 }else{
  echo "Passwords do not match.";
 }
}

if (isset($_POST['addw'])) {
 $uid = $_POST['uid'];
 $bid = $_POST['bid'];
 $wname = $_POST['wname'];

 require_once 'dbconnection.inc.php';

   if ($_FILES["doc"]["error"] === 4) {
   echo "<script> alert('Document does not exist!'); </script>";
  }else{
  $uploads_dir = 'documents';

  $fileName = $_FILES["doc"]["name"];
  $fileSize = $_FILES["doc"]["size"];
  $tmpName = $_FILES["doc"]["tmp_name"];

  $validDocumentExtension = ['pdf', 'csv', 'doc', 'docx', 'txt', 'xlsx', 'pptx'];
  $DocumentExtension = explode('.', $fileName);
  $DocumentExtension = strtolower(end($DocumentExtension));

  if (!in_array($DocumentExtension, $validDocumentExtension)) {
    echo "<script> alert('Invalid Document Format!');</script>";
  }else if($fileSize > 100000000000){
    echo "<script> alert('Document is too large!');</script>";
  }else{

    $newDocumentName = uniqid();
    $newDocumentName .= '.' . $DocumentExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newDocumentName");

   $sql = "INSERT INTO `will`(`User_ID`, `Beneficiary_ID`, `Name`, `Directory`) VALUES ('$uid','$bid','$wname','$newDocumentName')";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index2.php?addWill=success");
}
}
}

//Delete Functions

        if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteuser=success");
        }

        if($_REQUEST['action'] == 'deleteW' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `will` WHERE `Will_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deletewill=success");
        }

        if($_REQUEST['action'] == 'deleteW1' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `will` WHERE `Will_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index2.php?deletewill=success");
        }

//Update Functions
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updatedeliverystaff=success");
  }else{
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateuser=success");
 }
 }else{
  echo "Passwords do not match.";
 }
}

if (isset($_POST['upw'])) {
 $wid = $_POST['wid'];
 $bid = $_POST['bid'];
 $wname = $_POST['wname'];

 require_once 'dbconnection.inc.php';

   if ($_FILES["doc"]["error"] === 4) {
   echo "<script> alert('Document does not exist!'); </script>";
  }else{
  $uploads_dir = 'documents';

  $fileName = $_FILES["doc"]["name"];
  $fileSize = $_FILES["doc"]["size"];
  $tmpName = $_FILES["doc"]["tmp_name"];

  $validDocumentExtension = ['pdf', 'csv', 'doc', 'docx', 'txt', 'xlsx', 'pptx'];
  $DocumentExtension = explode('.', $fileName);
  $DocumentExtension = strtolower(end($DocumentExtension));

  if (!in_array($DocumentExtension, $validDocumentExtension)) {
    echo "<script> alert('Invalid Document Format!');</script>";
  }else if($fileSize > 100000000000){
    echo "<script> alert('Document is too large!');</script>";
  }else{

    $newDocumentName = uniqid();
    $newDocumentName .= '.' . $DocumentExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newDocumentName");

          $sql = "SELECT * FROM `will` WHERE `Will_ID`='$oid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $uid = $row['User_ID'];
            $price = $row['Price'];

   $sql = "UPDATE `will` SET `Name` = '$wname',  `Beneficiary_ID` = '$bid', `Directory` = '$newDocumentName', `Updated_Date` = DATE(NOW()) WHERE `Will_ID` = '$wid'";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index2.php?updateWill=success");
}else{
  echo "Will Not Found.";
}
}
}
}

 ?>