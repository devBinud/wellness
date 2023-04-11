<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellness Login</title>
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css//custom-css/customStyle.css">
  <style>
    /* body{
      background: #4B49AC;
    } */
    body{
      width: 100%;
      min-height: 100vh;
      background: url("https://images.unsplash.com/reserve/bOvf94dPRxWu0u3QsPjF_tree.jpg?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476&q=80");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .login__button{
      margin-top: 30px;
      text-align: center;
      border: 1px solid #fff;
      background-color: red;
      padding: 0.4rem 1rem;
      background: #4B49AC;
      color: #fff;
      border-radius: 6px;
    }
    .login__button:hover{
      transition: 0.3s ease;
     
    }
    .login__button a{
      text-decoration: none;
      font-size: 14px;
      color: #fff;
    }
  
  </style>
</head>
<body>
<div class="container-scroller" style="width:100%;height:100vh;display:flex;align-items:center;justify-content:center;">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto" >
            <div class="auth-form-light text-left py-5 px-4 px-sm-5"style="border:1px outset #fff;box-shadow:0 0.25rem 0.5rem rgba(0,0,0,0.9); border-radius:8px;background:rgba(225,225,225,0.5);)">
              <div class="brand-logo">
              <h6 class="text-dark" style="font-weight: 300;">Welcome to</h6>
                <h2 style="font-size: 19px; margin-bottom:30px;color:#000;font-weight:bolder">Wellness Palm Private Limited</h2>
              </div>
        
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg shadow-none" id="exampleInputEmail1" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                  <input type="password" class="form-control form-control-lg shadow-none" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
                </div>
                <div class="row mt-2">
                <div class="col-md-12 text-center mb-4">
                  <button type="button" class="btn btn-dark shadow-none btn-block mt-3"><a href="index.php" style="color:#fff;text-decoration:none;">LOG IN</a></button>
                </div>
              </div>          
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  
</body>
</html>