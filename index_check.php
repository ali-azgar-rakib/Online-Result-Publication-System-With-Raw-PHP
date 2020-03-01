<?php
require_once 'admin/dbcon.php';
if (isset($_POST['result'])) {
  $department = $_POST['department'];
  $semester = $_POST['semester'];
  $roll = $_POST['roll'];


  $result_query = "SELECT * FROM students WHERE department='$department' AND semester=$semester AND roll=$roll";
  $result = $dbcon->query($result_query);
  $result_row = $result->fetch_assoc();
}



?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('mun_poly.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      opacity: .9;


    }
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Student Management System</title>


</head>



<body>




  <div class="container ">



    <div class="row">
      <div class="col-6 mx-auto my-3">



        <div class="card bg-dark text-white">
          <img class="card-img-top mx-auto" style="width:150px;" src="admin/student_image/<?= $result_row['photo'] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center"></h5>
            <table class="table table-bordered text-white table-striped">
              <tr>
                <td>Name</td>
                <td><?= $result_row['name'] ?></td>
              </tr>

              <tr>
                <td>Roll</td>
                <td><?= $result_row['roll'] ?></td>
              </tr>
              <tr>
                <td>Department</td>
                <td><?= $result_row['department'] ?></td>
              </tr>
              <tr>
                <td>Semester</td>
                <td><?= $result_row['semester'] ?></td>
              </tr>
              <tr>
                <td>CGPA</td>
                <td><?= $result_row['cgpa'] ?></td>
              </tr>

            </table>
            <a class="btn btn-success d-block" href="index.php">See Another Result</a>
          </div>
        </div>

      </div>

    </div>

  </div>














  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>