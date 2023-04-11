<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aarush-Center</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->

  <!-- Link with Jquery cdn -->

  <script src=”//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js”></script>

  <!-- Font awsome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- External css link  -->
  <link rel="stylesheet" href="css/custom-css/customStyle.css">

  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 font-weight-bold" href="index.php"><img src="images/logo.png"
            class="mr-2" alt="" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo.png" width="200px" height="40px"
            alt="mini-logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu shadow-none"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/avtar.png" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="bi bi-grid me-3"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="registration.php">
              <i class="bi bi-card-list me-3"></i>
              <span class="menu-title">Registration</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="">
              <i class="bi bi-person me-3"></i>
              <span class="menu-title">Doctors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="doctors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllDoctors.php">View Doctors</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="addNewDoctor.php">Add New Doctor</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="companyRelations.php">Company Relations</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="prescriptions.php">
              <i class="bi bi-file-earmark-medical me-3"></i>

              <span class="menu-title">Prescriptions</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="invoices.php">
              <i class="bi bi-file-ruled me-3"></i>
              <span class="menu-title">Invoices</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="employee">
              <!-- <i class="icon-layout menu-icon"></i> -->
              <i class="bi bi-person-check me-3"></i>
              <span class="menu-title">Employee</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="employee">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllEmployees.php">View All Employees</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="addNewEmployee.php">Add New Employee</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" hre  f="assignAgent.php">Assign Agent to Area</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#delivery" aria-expanded="false" aria-controls="delivery">
              <i class="bi bi-truck me-3"></i>
              <span class="menu-title">Order Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="delivery">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="assignExecutive.php">Assign Executive</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#inventory" aria-expanded="false"
              aria-controls="inventory">
              <i class="bi bi-collection me-3"></i>
              <span class="menu-title">All Stocks</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="inventory">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllStocks.php">View All Stocks</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#challans" aria-expanded="false" aria-controls="challans">
              <i class="bi bi-card-checklist me-3"></i>
              <span class="menu-title">Challans</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="challans">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllChallans.php">View all Challans</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="inwardChallan.php">Inward Challan</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="createOutwardChallan.php">Outward Challan</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="productRequest.php">
              <i class="bi bi-bag-check me-3"></i>
              <span class="menu-title">Product Request</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="reports.php">
              <i class="bi bi-clipboard-data me-3"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>



        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">