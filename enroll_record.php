

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      html,
      body,
      .intro {
        height: 100%;
      }

      table td,
      table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
      }

      .card {
        border-radius: 0.5rem;
      }

      .table-scroll {
        border-radius: 0.5rem;
      }

      thead {
        top: 0;
        position: sticky;
      }
    </style>
  </head>

  <body style="background-color: #2f2fa2">
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <section class="intro my-5">
        <h3 class="h3 text-center">Enrolled Records</h3>
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="card shadow-2-strong">
                  <div class="card-body p-0">
                    <div class="table-responsive table-scroll">
                      <table class="table table-white mb-0">
                        <thead style="background-color: white">
                          <tr class="text-uppercase text-success">
                            <th scope="col">Enroll No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Years</th>
                            <th scope="col">Standard</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile no1.</th>
                            <th scope="col">Mobile no2.</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      session_start();
                      include('config.php');
                      $sql="SELECT * FROM `application`;";
                      $result=mysqli_query($conn,$sql);
                      while ($rows=mysqli_fetch_assoc($result)) {
                        
                            echo "<tr>
                            <td>{$rows['enroll_no']}</td>
                            <td>{$rows['first_name']} {$rows['last_name']}</td>
                            <td>{$rows['academic_year']}</td>
                            <td>{$rows['standard']}</td>
                            <td  class='text-wrap'>{$rows['address']}</td>
                            <td>{$rows['mobile_no1']}</td>
                            <td>{$rows['mobile_no2']}</td>
                          </tr>";
                          
                        }


                        ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
