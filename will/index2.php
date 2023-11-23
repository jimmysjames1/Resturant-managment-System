<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Will Platform - User Homepage</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 20px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="index2.php">
            <span>
              Will Platform
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome To <br>
                        <span>
                          Will Platform
                        </span>
                      </h1>
                      <p>
                        <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>.
                      </p>
                      <div class="btn-box">
                        <a href="#contact" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome To <br>
                        <span>
                          Will Platform
                        </span>
                      </h1>
                      <p>
                        <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>.
                      </p>
                      <div class="btn-box">
                        <a href="#contact" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Welcome to our will platform management system! We are a team dedicated to providing a simple and secure way for individuals to manage their wills online. Our platform allows users to create, store, and update their wills with ease, while maintaining the highest level of security and privacy. We believe that everyone should have access to reliable estate planning, and we are committed to making that a reality.
            </p>
            <a href="#start">
              Get Started
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->
  <div class="body_bg layout_padding">

    <!-- service section -->

    <section class="service_section " id="database">
      <div class="container">
        <div class="heading_container">
          <h2>
           Database
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h4>
                My Details
              </h4>
              <br>
<table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
</tr>

<?php
$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
              <a onclick="printData();">
                Print
              </a>
          </div>
          <br>
          <br>
                    <div class="col-md-12">
              <h4>
                Wills
              </h4>
              <br>
<table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Will ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">User ID</th>
  <th style="text-align: left;
  padding: 8px;">Beneficiary ID</th>
  <th style="text-align: left;
  padding: 8px;">Created Date</th>
  <th style="text-align: left;
  padding: 8px;">Updated Date</th> 
  <th style="text-align: left;
  padding: 8px;"></th>   
  <th style="text-align: left;
  padding: 8px;"></th>  
  <th style="text-align: left;
  padding: 8px;"></th>  
</tr>

<?php
$sql = "SELECT * FROM `will` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Will_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Beneficiary_ID"]); ?></td>
<td><?php echo($row["Created_Date"]); ?></td>
<td><?php echo($row["Updated_Date"]); ?></td>
<td><a href="documents/<?php echo($row["Directory"]); ?>" target="_blank">Open</a></td>
<td><a href="documents/<?php echo($row["Directory"]); ?>" target="_blank" download>Download</a></td>
<td><button onclick="return confirm('Are you sure you want to delete this will?')?window.location.href='insertion.inc.php?action=deleteW1&id=<?php echo($row["Will_ID"]); ?>':true;" title='Remove Will'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
              <a onclick="printData1();">
                Print
              </a>
          </div>
        </div>
      </div>
      <br>
      <br>
    </section>

    <!-- end service section -->

    <!-- contact section -->

    <section class="contact_section" id="start">
      <div class="container">
        <div class="heading_container">
          <h2>
            Update My Details 
          </h2>
        </div>
      </div>
      <div class="container contact_bg layout_padding2-top">
        <div class="row">
          <div class="col-md-12">
            <div class="contact_form ">
              <form action="insertion.inc.php" method="post">        
                <input type="text" name="fname" required placeholder="Fullname">
                <input type="text" name="phone" required placeholder="Phone Number">
                <input type="email" name="email" required placeholder="Email">
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                <input type="hidden" value="<?php echo $filter; ?>" name="uid">
                <button name="upu">
                  Update
                </button>
              </form>
            </div>
          </div>
        </div>
     </div>
           <div class="container">
        <div class="heading_container">
          <h2>
            Add A Will & Update A Will
          </h2>
        </div>
      </div>
       <div class="container contact_bg layout_padding2-top">
                <div class="row">
          <div class="col-md-6">
            <div class="contact_form ">
              <form action="insertion.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="wname" required placeholder="Will Name">
                <input type="file" name="doc" required accept=".pdf, .txt, .doc, . docx">
                       <select required name="bid">
                         <option disabled selected>Kindly Select A Beneficiary</option>
                        <?php
                        $sql = "SELECT * FROM `users` WHERE `User_Type` = 'Beneficiary'";
                        $all_categories = mysqli_query($conn,$sql);
                        while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $category["User_ID"];?>">
                        <?php echo $category["Fullname"];
                        ?>
                        </option>
                        <?php
                        endwhile;
                        ?>
                      </select>
                <input type="hidden" value="<?php echo $filter; ?>" name="uid">
                <input type="hidden" value="1" name="mod">
                <button name="addw">
                  Add
                </button>
              </form>
            </div>
          </div>
                    <div class="col-md-6">
            <div class="contact_form ">
              <form action="insertion.inc.php" method="post" enctype="multipart/form-data">        
                <input type="text" name="wname" required placeholder="Will Name">
                <input type="file" name="doc" required accept=".pdf, .txt, .doc, . docx">
                       <select required name="bid">
                         <option disabled selected>Kindly Select A Beneficiary</option>
                        <?php
                        $sql = "SELECT * FROM `will` WHERE `User_ID` = '$filter'";
                        $all_categories = mysqli_query($conn,$sql);
                        while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $category["User_ID"];?>">
                        <?php echo $category["Fullname"];
                        ?>
                        </option>
                        <?php
                        endwhile;
                        ?>
                      </select>
                      <select required name="wid">
                         <option disabled selected>Kindly Select A Will</option>
                        <?php
                        $sql = "SELECT * FROM `will` WHERE `User_ID` = '$filter'";
                        $all_categories = mysqli_query($conn,$sql);
                        while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $category["Will_ID"];?>">
                        <?php echo $category["Will_ID"];
                        ?>
                        </option>
                        <?php
                        endwhile;
                        $conn->close();
                        ?>
                      </select>
                <button name="upw">
                  Update
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

  </div>
  <!-- info section -->

  <section class="info_section layout_padding" id="contact">
    <div class="footer_contact">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="box">
        <a href="" class="img-box">
          <img src="images/location.png" alt="" class="img-1" title="Nairobi, KENYA">
          <img src="images/location-o.png" alt="" class="img-2" title="Nairobi, KENYA">
        </a>
        <a href="" class="img-box">
          <img src="images/call.png" alt="" class="img-1" title="+254 795 779076">
          <img src="images/call-o.png" alt="" class="img-2" title="+254 795 779076">
        </a>
        <a href="" class="img-box">
          <img src="images/envelope.png" alt="" class="img-1" title="will.management@gmail.com">
          <img src="images/envelope-o.png" alt="" class="img-2" title="will.management@gmail.com">
        </a>
      </div>
    </div>


  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023.</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>