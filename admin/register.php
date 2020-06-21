<?php
require_once 'dbcon.php';
session_start();

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $photo = explode('.', $_FILES['photo']['name']);
  $photo1 = end($photo);
  $photo_name = $username . '.' . $photo1;




  // ===================== input error==================

  $input_error = [];
  if (empty($name)) {
    $input_error['name'] = "Enter a name";
  }
  if (empty($username)) {
    $input_error['username'] = "Enter a username";
  }
  if (strlen($username) <= 8) {
    $input_error['username_err1'] = "You must enter 8 character user name";
  }
  if (empty($email)) {
    $input_error['email'] = "Enter a email";
  }
  if (empty($password)) {
    $input_error['password'] = "Enter a password";
  }
  if (empty($photo)) {
    $input_error['photo'] = "Attached a photo";
  }

  if (count($input_error) === 0) {
    $sql_1 = "SELECT * FROM users WHERE email='$email'";
    $email_check = $dbcon->query($sql_1);
    if (($email_check->num_rows) == 0) {


      $query = "INSERT INTO users(name, username, email, password, photo, status) VALUES ('$name','$username','$email','$password','$photo_name',0)";
      $result = $dbcon->query($query);

      if ($result) {
        $_SESSION['dsuccess'] = "Data insert successfully";
        if (isset($_FILES['photo']['tmp_name'])) {
          move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $photo_name);
          header('location: register.php');
        }
      }
    } else {
      $email_err = "email already exists";
    }

    $sql_1 = "SELECT * FROM users WHERE username='$username'";
    $username_check = $dbcon->query($sql_1);
    if ($username_check->num_rows == 0) {

      echo "user-yes";
    } else {
      $username_err = "username already exists";
    }
  }

  // ===isset end bracket==
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <!-- ===========================Card================== -->
                <div class="card m-auto">

                    <div class="card-header bg-success text-center">
                        <h2>Login page</h2>

                        <!-- // if(isset($_SESSION['dsuccess'])){
              //   $insert_message = $_SESSION['dsuccess'];
              //   echo $insert_message;
              //   if(isset($insert_message)){
              //     unset($_SESSION['dsuccess']);
              //   }
              // } -->

                    </div>
                    <div class="card-body">

                        <!-- =============================form===================               -->
                        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                            enctype="multipart/form-data">
                            <!-- =================================Name=================== -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" value="<?php if (isset($name)) {
                                                                                        echo $name;
                                                                                      } ?>" placeholder="Enter name">
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['name'])) {
                    echo $input_error['name'];
                  }

                  ?>
                                </label>
                            </div>
                            <!-- =========================username===================== -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username" value="<?php if (isset($username)) {
                                                                                                echo $username;
                                                                                              } ?>"
                                    placeholder="Enter your username">
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['username'])) {
                    echo $input_error['username'];
                  }
                  ?>
                                </label>
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($username_err)) {
                    echo $username_err;
                  }

                  ?>
                                </label>
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['username_err1'])) {
                    echo $input_error['username_err1'];
                  }

                  ?>
                                </label>

                            </div>

                            <!-- ============================Email=============================== -->
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" name="email" id="email" value="<?php if (isset($email)) {
                                                                                          echo $email;
                                                                                        } ?>"
                                    placeholder="Enter a email">
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['email'])) {
                    echo $input_error['email'];
                  }

                  ?>
                                </label>
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($email_err)) {
                    echo $email_err;
                  }

                  ?>
                                </label>

                            </div>
                            <!-- ================================ Password ======================== -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" value="<?php if (isset($password)) {
                                                                                                    echo $password;
                                                                                                  } ?>"
                                    placeholder="Enter a password">

                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['password'])) {
                    echo $input_error['password'];
                  }

                  ?>
                                </label>
                            </div>

                            <!-- ====================== photo ==================== -->
                            <div class="form-group">
                                <label for="photo">Attached a Photo</label>
                                <input class="form-control-file" type="file" name="photo" id="photo" value="">
                                <label style="color:red; font-style:italic;">
                                    <?php
                  if (isset($input_error['photo'])) {
                    echo $input_error['photo'];
                  }

                  ?>
                                </label>
                            </div>
                            <!-- ============================= submit ======================= -->
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="register" value="Registration">

                            </div>
                        </form>
                        <!-- ===========================small text ======================== -->
                        <div class="small">
                            already have a account? <a href="login.php">Click here</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>