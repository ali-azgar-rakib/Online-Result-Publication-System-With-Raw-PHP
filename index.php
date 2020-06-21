<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    body{
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



<body >




      <div class="container ">



        <div class="row">
          <div class="col-6 mx-auto my-3">

            <div class="card">
              <div class="card-header bg-muted">
                <h2 style="font-size:40px;">Munshiganj Polytecnic Institute</h2>

              </div>
              <div class="card-body">
                <form class="" action="index_check.php" method="post">
                  <div class="form-group">
                    <label for="department">Department</label>
                    <select class="form-control" name="department" id="department">
                      <option disabled>Select Department</option>
                      <option value="computer">Computer</option>
                      <option value="electrical">Electrical</option>
                      <option value="electronics">Electronics</option>


                    </select>

                  </div>

                  <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" name="semester" id="semester">
                      <option disabled>Select Your Semester</option>
                      <option value="1">1st</option>
                      <option value="2">2nd</option>
                      <option value="3">3rd</option>
                      <option value="4">4th</option>
                      <option value="5">5th</option>
                      <option value="6">6th</option>
                      <option value="7">7th</option>
                      <option value="8">8th</option>

                    </select>

                  </div>

                  <div class="form-group">
                    <label for="roll">Roll</label>
                    <input class="form-control" type="text" name="roll" id="roll" placeholder="Enter your roll" value="">
                  </div>

                  <div class="form-group">
                    <input class="btn btn-success" type="submit" name="result" value="Show Result">

                  <!-- </div>

                  <div class="form-group"> -->
                    <a class="btn btn-success float-right" href="admin/login.php">Admin Login</a>

                  </div>


                </form>

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
