<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wellness -Admin</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- External css link  -->
  <link rel="stylesheet" href="css/custom-css/customStyle.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    .canvasjs-chart-credit{
      color: white !important;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 font-weight-bold" href="index.php"><img src="images/logo.svgd"
            class="mr-2" alt="" />Wellness</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
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

      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
              aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
              aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllUsers.php">View All Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="addNewUsers.php">Add New Users</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="assignUserRole.php">Assign User Role</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="doctors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Doctors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="doctors">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="ViewDoctors.php">View Doctors</a></li>
                <li class="nav-item"> <a class="nav-link" href="addNewDoctor.php">Add new Doctor</a></li>
                <li class="nav-item"> <a class="nav-link" href="assignToCenter.php">Assign to Center</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="companyRelations.php">Company Relations</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="departments.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Departments</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="false"
              aria-controls="employee">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Employee</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="employee">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewAllEmployees.php">View Employees</a></li>
                <li class="nav-item"> <a class="nav-link" href="addNewEmployee.php">Add New Employee</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="assignAgent.php">Assign Agent to Area</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#inventory" aria-expanded="false"
              aria-controls="inventory">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="inventory">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewLowStocks.php">View Low Stocks</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewAllStocks.php">View All Stocks</a></li>
                <li class="nav-item"> <a class="nav-link" href="addNewItem.php">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="addItemStock.php">Purchase Invoice</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="inventory.php">Inventory</a></li> -->
              </ul>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#challans" aria-expanded="false" aria-controls="challans">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Challans</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="challans">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="createNewChallan.php">Create New Challan </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="viewAllChallans.php">View All Challans</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="viewReturnChallans.php">View Return Challans</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="orders.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Orders</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reports">
              <ul class="nav flex-column sub-menu">
             
                <li class="nav-item"> <a class="nav-link" href="financialReport.php">Financial Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="doctorReport.php">Doctor Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="departmentReport.php">Department Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="daReport.php">DA Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="inventoryReport.php">Inventory Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="challanReport.php">Challan Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="orderReport.php">Order Report</a></li>
            
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav flex-column sub-menu">
             
                <li class="nav-item"> <a class="nav-link" href="userRole.php">User Role</a></li>
                <li class="nav-item"> <a class="nav-link" href="discount.php">Discount</a></li>
         
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
              <a class="nav-link" href="tax.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Tax</span>
              </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
