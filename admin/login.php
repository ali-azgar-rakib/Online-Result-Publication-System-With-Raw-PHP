<?php
require_once 'dbcon.php';
session_start();
if (isset($_SESSION['user_login'])) {
  header('location: index.php');
}
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $check_user_name = $dbcon->query("SELECT * FROM users WHERE username='$username'");

  if ($check_user_name->num_rows > 0) {
    $result = $check_user_name->fetch_assoc();
    if ($result['password'] == $password) {
      if ($result['status'] == 1) {
        $_SESSION['user_login'] = $username;

        header('location: index.php');
      } else {
        echo "Waiting for admin approval";
      }
    } else {
      $password_not_match = "password not found";
    }
  } else {
    $user_not_match = "user name not found";
  }
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

    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <!-- ===========================Card================== -->
                <div class="card m-auto">

                    <div class="card-header bg-success text-center">
                        <h2>Login page</h2>
                    </div>
                    <div class="card-body">

                        <!-- =============================form===================               -->
                        <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                            <!-- =========================username===================== -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username" value="<?php if (isset($username)) {
                                                                                                echo $username;
                                                                                              } ?>"
                                    placeholder="Enter  username">
                                <label class="text-small text-danger"><?php if (isset($user_not_match)) {
                                                        echo $user_not_match;
                                                      } ?></label>
                            </div>


                            <!-- ================================ Password ======================== -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" value="<?php if (isset($password)) {
                                                                                                    echo $password;
                                                                                                  } ?>"
                                    placeholder="Enter  password">
                            </div>


                            <!-- ============================= submit ======================= -->
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="login" value="Login">

                                <a class="btn btn-success float-right" href="../index.php">Result Page</a>

                            </div>
                        </form>
                        <!-- =============================== small text ============================= -->
                        <div class="small">
                            Don't have a account ? <a href="register.php">Click here</a>

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