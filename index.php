<?php
include('connections/db-connect.php');


if(isset($_REQUEST['btn-login'])){

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$user_retrieve = $conn -> prepare("SELECT * FROM users where username = '$username' and password = '$password'");
$user_retrieve->execute();
if($user_retrieve->rowCount() > 0){
while ($row = $user_retrieve->fetch()) {
  $_SESSION['usertype_id'] = $row['usertype_id'];
  $_SESSION['user_id'] =  $row['user_id'];
  $_SESSION['firstname'] = $row['fname'];
  $_SESSION['middlename'] = $row['mname'];
  $_SESSION['lastname'] = $row['lname'];
  $_SESSION['course'] = $row['course'];

  $usertype_id = $_SESSION['usertype_id'];
  
  if($usertype_id == 3){ 
        echo "<script type='text/javascript'>window.location.href = 'students/home/index/';</script>";
        
  }
  elseif ($usertype_id == 1 || $usertype_id == 2 ) {
        echo "<script type='text/javascript'>window.location.href = 'admins/home/index/';</script>";
         
  }

}
}else{
  ?> <script>
        alert('Try Again');
       </script>"; <?php
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        exit();
}
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Examination System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <style type="text/css">
      .wrap-input100 {
        margin-bottom: 5px;
      }
    </style>
<style type="text/css">
.stretch {
  height: 30px;
}
.stretch img{
  width: 50%;
  height: 150px;
  margin-bottom: 5px;
}
  
</style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Examination System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Main Website </a>
            </li>
                    </ul>
        
</div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome to Our Examination Center. </strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Vit Pune </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.html">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    
            
           
 <p class="text-faded mb-12"><?php echo $row['Description'] ?></p>
            

<p class="text-faded mb-12"><?php echo $row['Course'] ?></p>
      
 <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Login</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

    
          <div class="col-lg-12 col-md-12 text-center">
            <div class="service-box mt-5 mx-auto">
              <div class="container-login100">
                  <div class="wrap-login100">
                    <div class="login100-form-title">
                      <span class="login100-form-title-1 stretch">
                        <!-- <img src="img/capislogo.png"> -->
                      </span>
                    </div> 
                    <form class="login100-form validate-form" action="" method="POST">
                      <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100 form-control" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                      </div>

                      <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 form-control" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                      </div>

                      <div class="container-login100-form-btn">
                        <input type="submit" name="btn-login" value = "Log In" class="btn btn-primary btn-login">
                      </div>
                    </form>
                  </div>
                </div>
               
            </div>
          </div>
       <!--    <div class="col-lg-3 col-md-6 text-center">
       

        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
