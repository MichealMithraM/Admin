<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php"); 
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$emai = $_REQUEST['email'];
$password = $_REQUEST['password'];
$Phoneno = $_REQUEST['phoneno'];
$date = $_REQUEST['date'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`email`,`password`,`Phoneno`,`date`,`submittedby`)
 values ('$trn_date','$name','$email','$password','$Phoneno','$date','$submittedby')";
mysqli_query($con,$ins_query) or die(mysqli_error($con));
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insert</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <link href="css/boxicons.min.css" rel="stylesheet"> -->
  <!-- <link href="quill/quill.snow.css" rel="stylesheet"> -->
  <!-- <link href="quill/quill.bubble.css" rel="stylesheet"> -->
  <!-- <link href="remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="simple-datatables/style.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="insert.php">
          <i class="bi bi-journal-text"></i><span>Insert</span>
        </a>
      </li><!-- End Insert Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="view.php">
          <i class="bi bi-menu-button-wide"></i><span>View</span>
        </a>
      </li><!-- End View Nav -->


      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Insert New Record</h1>
      <nav>
        <div class="breadcrumb">
        <p><a href="index.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

</div>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Details</h5>

              <!-- General Details -->

              <form name="form" method="post" action=""> 
              <input type="hidden" name="new" value="1" />
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input class="form-control"type="text" class="form-control" id="form-control" name="name" placeholder="Enter Name" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="email" class="form-control" id="form-control" name="email" placeholder="Enter Email" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input class="form-control"type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter password" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone.no</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="form-control" name="phoneno" placeholder="Enter phone no" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="form-control" name="date" placeholder="Enter date" required>
                  </div>
                </div>
                
              </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

              <p style="color:#FF0000;"><?php echo $status; ?></p>
            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
    </div>
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="apexcharts/apexcharts.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="chart.js/chart.umd.js"></script>
  <script src="echarts/echarts.min.js"></script>
  <script src="quill/quill.js"></script>
  <script src="simple-datatables/simple-datatables.js"></script>
  <script src="tinymce/tinymce.min.js"></script>
  <script src="php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>