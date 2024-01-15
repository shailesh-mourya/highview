<?php
    session_start();
if (isset($_POST['cLogout'])) {
session_destroy();
header("location:index.php");
echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/highview/index.php'>;";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- css file -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="counter.css" />
    <script>
      $(document).ready(function () {
        $(".counter-value").each(function () {
          $(this)
            .prop("Counter", 0)
            .animate(
              {
                Counter: $(this).text(),
              },
              {
                duration: 3500,
                easing: "swing",
                step: function (now) {
                  $(this).text(Math.ceil(now));
                },
              }
            );
        });
      });
    </script>
  </head>

  <body>
    <header>
      <!-- navbar -->
      <nav
        class="navbar navbar-expand-sm fixed-top"
        style="background-color: #2f2fa2"
      >
        <div class="container">
          <a class="navbar-brand" href="#" style="color: #f64c72"
            > <img src="logo/sc_bgless.png" class="img-fluid rounded mx-2 " height="35px" width="35px" alt="">Sadhana Classes</a
          >
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page"
                  >Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutus1">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactus1">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="dropdownId"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >User</a
                >
              
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                <?php 
                if (!isset($_SESSION['user'])) {
                  echo "  <a class='dropdown-item' href='login.html'>LogIn</a>
                  <a class='dropdown-item' href='signup.html'>SignUp</a>";
                  
                }
                elseif(isset($_SESSION['user'])){
                 echo "<form action='";
                 echo htmlspecialchars($_SERVER['PHP_SELF']);
                 echo "' method='post'>";
                 echo "<button class='btn nav-link' name='cLogout'>Logout</button></form>";
                }
                
                ?>
                
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!-- banner svg -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="mainDiv my-4">
              <p class="pt-5 h3" style="text-align: center">
                Move Towards Knowledge
              </p>
              <h5 class="h5" style="text-align: center">
                Welcome to sadhana classes
              </h5>
              <img src="logo/sc_bgless.png" class="img-fluid rounded mx-2 " height="200px" width="200px" alt="">
              <?php 
                
                if (isset($_SESSION["user"])) {
                  echo "<h5 class='h5 text-uppercase' style='text-align: center'>";
                  echo $_SESSION['user'];
                  echo "</h5>";
                }


                ?>
              
              <a
                name=""
                id=""
                class="btn btn-primary"
                href="enroll.html"
                role="button"
                >Enroll</a
              >

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

      <!-- carousel or banner -->
      <!-- <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="First slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="1"
            aria-label="Second slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="2"
            aria-label="Third slide"
          ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img
              src="/image/banner2.jpg"
              class="w-100 img-fluid d-block"
              alt="First slide"
              height="500px"
              width="100%"
            />
            <div class="carousel-caption d-none d-md-block">
              <a
                name=""
                id=""
                class="btn btn-primary"
                href="enroll.html"
                role="button"
                >Enroll Form</a
              >
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="/image/banner2.jpg"
              class="w-100 img-fluid d-block"
              alt="Second slide"
              height="500px"
              width="100%"
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>Title</h3>
              <p>Description</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="/image/banner2.jpg"
              class="w-100 img-fluid d-block"
              alt="Third slide"
              height="500px"
              width="100%"
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>Title</h3>
              <p>Description</p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->

      <!-- card -->
      <div class="container my-2">
        <div class="row">
          <h1 class="text-center">In our Classes only</h1>
          <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
              <img
                src="image/tennis.png"
                class="card-img-top img-thumbnail"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Indoor Games</h5>
                <p class="card-text" style="font-size: 15px">
                  Focus on other than study some time make life better
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
              <img
                src="image/meditation.png"
                class="card-img-top img-thumbnail"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Events</h5>
                <p class="card-text" style="font-size: 15px">
                  Events like speech ,handwriting ,dance etc compitation.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
              <img
                src="image/interview.png"
                class="card-img-top img-thumbnail"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">PTM</h5>
                <p class="card-text" style="font-size: 15px">
                  we conduct once a month, parent and teacher meeting student.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
              <img
                src="image/elearning.png"
                class="card-img-top img-thumbnail"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Education</h5>
                <p class="card-text" style="font-size: 15px">
                  computer and english speaking lecture for every student.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- iframe -->
    </main>

    <!-- aboutus -->
    <section class="container-fluid py-5 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <h1 class="display-4" id="aboutus1">About Us</h1>
            <h3 class="h3 text-black">Welcome to Sadhana classes!</h3>
            <p class="lead">
              sadhana classes is a educational institute located in
              [nallasopara, Maharashtra]. We are a diverse community of learners
              who are dedicated to academic excellence and personal growth. We
              offer a rigorous academic program that prepares students for
              success in school, college and beyond. We also offer a variety of
              extracurricular activities to help students explore their
              interests and develop their talents.
            </p>
            <br />
            <p>
              Our institute mission is to provide all students with a
              high-quality education that prepares them for success in college
              and career. We believe that all students can learn and achieve,
              and we are committed to providing them with the support they need
              to reach their full potential.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- counter -->
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
    <div class="container my-5">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="counter">
            <div class="counter-icon">
              <i class="fa-solid fa-users"></i>
            </div>
            <div class="counter-content">
              <h3>Applicant</h3>
              <span class="counter-value"><?php echo $total_enroll; ?></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter blue">
            <div class="counter-icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <div class="counter-content">
              <h3>User</h3>
              <span class="counter-value"><?php echo $total_register; ?></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter red">
            <div class="counter-icon">
              <i class="fa-solid fa-children"></i>
            </div>
            <div class="counter-content">
              <h3>Students</h3>
              <span class="counter-value">89</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter gray">
            <div class="counter-icon">
              <i class="fa fa-rocket"></i>
            </div>
            <div class="counter-content">
              <h3>Teachers</h3>
              <span class="counter-value">12</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- history -->
    <section class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <h2 class="h3">Our History</h2>
          <p>
            Sadhana classes was founded in 2019 by a group of community members
            who were passionate about education.Institute has grown
            significantly over the years, and we now serve over 500 students.
          </p>
          <br />
          <h2 class="h3">Our Founder</h2>
          <h2 class="h5">Ajay Mourya</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
            at sed, amet molestiae autem explicabo quam temporibus in.
            Architecto, dicta.
          </p>
        </div>
        <div class="col-md-6">
          <img
            src="image/founder.jpg"
            class="img img-thumbnail"
            alt="Company photo"
          />
        </div>
      </div>
    </section>

    <section class="container py-5">
      <h2 class="h3">Our Faculty and Staff</h2>
      <div class="row mt-3">
        <div class="col-md-6 col-lg-12">
          <p>
            Sadhana Classes has a dedicated and experienced faculty and staff.
            Our teachers are passionate about education, and they are committed
            to helping students succeed. Our teachers have a variety of advanced
            degrees and certifications, and they are constantly learning and
            growing. They are also active members of the professional
            development community.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-2">
          <div class="card">
            <img
              src="image/sadhana2.jpg"
              alt="Team member photo"
              height="300"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Sadhana Mourya</h5>
              <p class="card-text">Co-founder & English Teacher</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img
              src="https://media.istockphoto.com/id/1200677760/photo/portrait-of-handsome-smiling-young-man-with-crossed-arms.jpg?b=1&s=612x612&w=0&k=20&c=t7Z7NBXf5t7jWqoFxsH7B3bgrO3_BznOOhqEXWywjOc="
              alt="Team member photo"
              height="300"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Santosh Pal</h5>
              <p class="card-text">Co-founder & Math Teacher</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img
              src="https://images.pexels.com/photos/3183824/pexels-photo-3183824.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              height="300"
              alt="Team member photo"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Sandeep jha</h5>
              <p class="card-text">Science Teacher</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container py-5">
      <h2 class="h2 mb-4" id="contactus1">Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <h5 class="h5">Institute Name:</h5>
          <h6 class="h6">Sadhana Classes</h6>
          <br />
          <h5 class="h5">Address:</h5>
          <h6 class="h6">Gandhi nagar,nallasopara (east)</h6>
          <br />
          <h5 class="h5">Phone Number:</h5>
          <h6 class="h6"><a href="#">99353453xx</a></h6>
          <br />
          <h5 class="h5">Email Address:</h5>
          <h6 class="h6"><a href="#">sadhanaclasses@gmail.com</a></h6>
          <br />
          <p>
            We welcome you to visit our campus and learn more about our
            institute. We are proud of what we have to offer, and we are
            confident that sadhana classes is the right institute for your
            child.
          </p>
        </div>
        <div class="col-md-6 col-sm-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.579898362751!2d72.83321257588973!3d19.43054914074506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a916c24ca28f%3A0xce51a68739e2b3da!2sAmchi%20Sala%20Marathi%20School!5e0!3m2!1sen!2sin!4v1696877381345!5m2!1sen!2sin"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            class="img-fluid"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>

    <!-- place footer here -->

    <div class="container-fluid">
      <div class="row mb-0">
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
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
