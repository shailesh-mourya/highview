<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #2f2fa2">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                                    Admin Updates
                                </h3>
                                <form action="adminoupdate.php" method="post">
                                    <?php 
                                    session_start();
                                    include('config.php');
                                    $phoneNumber=$_SESSION["admino_mobile"];

                                    $sql="SELECT * FROM `admino` WHERE `mobile`='$phoneNumber' ;";
                                    $result=mysqli_query($conn,$sql);
                                     $rows=mysqli_fetch_assoc($result);

                                    
                                    ?>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 col-lg-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="mob">Mobile No.</label>
                                                <input type="tel" id="mob" name="adminphone"
                                                    class="form-control form-control-lg"
                                                    value="<?php echo $rows['mobile']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 col-lg-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">Email Id:</label>
                                                <input type="email" id="email" name="emailAddress"
                                                    class="form-control form-control-lg" 
                                                    value="<?php echo $rows['email']; ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 col-lg-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="passwordl">Old Password</label>
                                                <input type="password" id="passwordl" name="adminpasso"
                                                    class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 col-lg-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="passwordn">New Password</label>
                                                <input type="password" id="passwordn" name="adminpassn"
                                                    class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <center>
                                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>