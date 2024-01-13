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
  <style>
    .labels {
      font-size: 15px;
      font-weight: bold;

    }
  </style>
</head>

<body style="background-color: #2f2fa2">
  <header>
    <!-- place navbar here -->
  </header>
  <!-- profile view -->
  <div class="container rounded bg-white mt-5 mb-5 ">
    <?php 
           $id=$_GET["id"];
           include('config.php');
            $sql="SELECT * FROM `application` WHERE `enroll_no`=$id;";
           $result=mysqli_query($conn,$sql);
           $rows=mysqli_fetch_assoc($result);
      
      ?>

    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
            width="150px" src="applicant/<?php  echo $rows['image'] ; ?>"><span class="font-weight-bold">Enroll id:
            <?php  echo $rows['enroll_no'] ; ?>
          </span><span class="text-black-50">
            <?php  echo $rows['email'] ; ?>
          </span><span> </span>
        </div>
      </div>
      <div class="col-md-5 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-center align-items-center mb-3 rounded-pill"
            style="background-color:lightblue;">
            <h4 class="h4 text-uppercase">Applicant</h4>
          </div>
          <div class="row mt-2">
            <div class="col-md-6"><label class="labels">Name:</label><span class="mx-1">
                <?php  echo $rows['first_name'] ; ?>
              </span> </div>
            <div class="col-md-6"><label class="labels">Surname:</label>
              <?php  echo $rows['last_name'] ; ?>
            </div>

          </div>
          <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Gender:</label><span class="mx-1">
                <?php  echo $rows['gender'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">DOB:</label><span class="mx-1">
                <?php  echo $rows['dob'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">Academic year</label><span class="mx-1">
                <?php  echo $rows['academic_year'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">Standard:</label><span class="mx-1">
                <?php  echo $rows['standard'] ; ?>
              </span></div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Father:</label><span class="mx-1">
                <?php  echo $rows['father_name'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">Mother:</label><span class="mx-1">
                <?php  echo $rows['mother_name'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">Mobiler No1:</label><span class="mx-1">
                <?php  echo $rows['mobile_no1'] ; ?>
              </span></div>
            <div class="col-md-6"><label class="labels">Mobiler No2:</label><span class="mx-1">
                <?php  echo $rows['mobile_no2'] ; ?>
              </span></div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Address:</label><span class="mx-1">
                <?php  echo $rows['address'] ; ?>
              </span></div>
          </div>

          <div class="mt-5 text-center">
            <?php 
                if (!empty($rows['mail'])) {
                  //echo "<a name='' id='' class='btn btn-success' href='notification_mail.php?id= {$rows['enroll_no']}' role='button'>Notefied</a>";
                  echo "<button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Notefied</button>";
                }
                else{
                //  echo "    <a name='' id='' class='btn btn-primary' href='notification_mail.php?id= {$rows['enroll_no']}' role='button'>Accept</a>";
                  echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Accept</button>";

                }
            
            ?>



          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
  <!-- for popup mailling -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="notification_mail.php" method="post">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name" value="<?php  echo $rows['first_name'] ; ?>"
                name="s_name">
            </div>
            <div class="mb-3">
              <label for="recipient-email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-email" value=" <?php  echo $rows['email'] ; ?>"
                name="s_email">
            </div>
            <div class="mb-3">
              <label for="recipient-subject" class="col-form-label">Subject:</label>
              <input type="text" class="form-control" id="recipient-subject" name="s_subject">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text" name="s_body"></textarea>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Send message</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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