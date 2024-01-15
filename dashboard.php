<?php 

session_start();
$admin_name=$_SESSION['admin_name'];
if (!isset($admin_name)) {
    header('location:admin_login.html');
  
}


?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />


  <script>
    function enrolledStudents() {
      window.location.href = "enroll_record.php";
    }
    function registeredUsers() {
      window.location.href = "registered_record.php";
    }
    function teacherRecord() {
      window.location.href = "teacher_record.php"
    }
    function destory(){
     
      location.reload();
    }
    
  </script>

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav  class="navbar navbar-expand-sm fixed-top mb-2"
    style="background-color: #2f2fa2" >
      <div class="container " >
        <a class="navbar-brand text-center" href="#" style="color: #f64c72">
          <img src="logo/sc_bgless.png" class="img-fluid rounded-top " height="30px" width="30px" alt="">
          Sadhana Classes
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
            <li class="nav-item  ">
              <a class="nav-link active" href="#" aria-current="page">Home <span
                  class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item" >
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              <button type="submit" class="nav-linki btn" name="Logout">Logout</button>
              <!-- <a class="nav-link btn " type="submit" name="Logout" >Logout</a> -->
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="message.html">Mail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-share-fill text-primary"></i>
              </a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link" href="#">
                <i class="bi bi-person-circle"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

  </header>

<!-- banner svg -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 p-0">
      <div class="mainDiv">
        <p class="pt-5 h3 mt-3 mt-sm-5" style="text-align: center">
          Move Towards Knowledges
        </p>
        <h5 class="h5" style="text-align: center">
          Welcome to sadhana classes
        </h5>
        <img src="logo/sc_bgless.png" class="img-fluid rounded mx-2 " height="200px" width="200px" alt="">
       
        <h5 class="h5 text-uppercase" style="text-align: center">Admin: <?php echo $_SESSION['admin_name'];  ?> </h5>
       
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#fff"
            fill-opacity="1"
            stroke="none"
            d="M0,64L60,101.3C120,139,240,213,360,213.3C480,213,600,139,720,122.7C840,107,960,149,1080,149.3C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          ></path>
        </svg>
      </div>
    </div>
  </div>
</div>



  <!-- sidebar -->
  <div class="offcanvas offcanvas-start" width="60%" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 203px !important;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Sadhana Classes</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link active  href=" #" aria-current="page">
            <i class="bi bi-house-door-fill text-primary "></i> Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-person-fill text-primary"></i> About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right text-primary"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-r-circle-fill text-primary"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-telephone-fill text-primary"></i> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-share-fill text-primary"></i> Share
          </a>
        </li>

      </ul>

    </div>
  </div>

  <!--counter card -->
  <?php 
  include('config.php');
  $sql="SELECT * FROM `application`;";
  $sql2="SELECT * FROM `user`;";
  $result=mysqli_query($conn,$sql);
  $result2=mysqli_query($conn,$sql2);
  $total_enroll=mysqli_num_rows($result);
  $total_register=mysqli_num_rows($result2);
  $total_teacher=0;
  
  ?>
  <div class="container">
    <h1 class="text-center">Counts</h1>
    <div class="row">
      <div class="col-md-4" onclick="enrolledStudents()">
        <div class="card border-0 text-center bg-danger">
          <div class="card-body rounded-circle bg-primary " >
            <h5 class="card-title">Total Enrolled Students</h5>
            <p class="card-text display-4"><?php echo $total_enroll; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4" onclick="registeredUsers()">
        <div class="card border-0 text-center bg-danger">
          <div class="card-body rounded-circle bg-success ">
            <h5 class="card-title">Total Registered Users</h5>
            <p class="card-text display-4"><?php echo $total_register; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4" onclick="teacherRecord()">
        <div class="card border-0 text-center bg-danger">
          <div class="card-body rounded-circle bg-warning ">
            <h5 class="card-title">Total Number of Teachers</h5>
            <p class="card-text display-4"><?php echo $total_teacher; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  



    <!-- place footer here -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-sm-12 mt-2 mb-4 text-center p-0">
          <div class="upperdiv">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#fff"
                fill-opacity="1"
                d="M0,64L60,101.3C120,139,240,213,360,213.3C480,213,600,139,720,122.7C840,107,960,149,1080,149.3C1200,149,1320,107,1380,85.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
              ></path>
              <div class="pb-5">
                <span>Copyright &copy;</span>
                <a href="" class="">Sadhana Classes</a>
                <span>.Designed with</span>
                <i class="bi bi-heart-fill text-danger"></i>
                <span>by</span>
                <a href="" class="">Shailesh Mourya</a>

                <span>All rights reserved.</span>
              </div>
            </svg>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <?php 
    if (isset($_POST["Logout"])) {
      session_destroy();
      header('location:admin_login.html');
      echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/highview/dashboard.php'>;";
    }
    
    
    ?>
</body>

</html>
