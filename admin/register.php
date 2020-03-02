
<?php
session_start();
require_once 'dbcon.php';


if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $photo = explode('.', $_FILES['photo']['name']);
  $photo1 = end($photo);
  $photo_ext = '.' . $photo1;
  $photo_name = $username . '.' . $photo1;
  $valid_ex = ['.jpg','jpeg','.png'];



  // ===================== input error==================
  


  $input_error = [];
  if (empty($name)) {
    $input_error['name'] = "Enter a name";
  }
  if (empty($username)) {
    $input_error['username'] = "Enter a username";
  }
  else if (strlen($username) < 8) {
    $input_error['username'] = "You must enter 8 character user name";
  }
  if (empty($email)) {
    $input_error['email'] = "Enter a email";
  }
  else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $input_error['email'] = "Enter correct email";
  }
  if (empty($password)) {
    $input_error['password'] = "Enter a password with more than 8 lowercase(a,b,c...),uppercase(A,B,C..) character  and number";
  }
  else if($password<8){
    $input_error['password'] = "Enter a password with more than 8 lowercase(a,b,c...),uppercase(A,B,C..) character  and number";

  }
  else if(!(preg_match('@[0-9]@',$password)) || !(preg_match('@[a-z]@',$password)) || !(preg_match('@[A-Z]@',$password))){
    $input_error['password'] = "Enter a password with more than 8 lowercase(a,b,c...),uppercase(A,B,C..) character  and number";
  }

  else if(empty($cpassword)){
    $input_error['cpassword']= "Enter your confirm password";
  }

  else if($password!==$cpassword){
    $input_error['cpassword']= "Password not match.Enter a right password";
  }

  if (empty($photo)) {
    $input_error['photo'] = "Attached a photo";
  }
  else if($_FILES['photo']['size']>1048576){
    $input_error['photo'] = "Upload a photo within 1 MB";

  }
  else if(!in_array($photo_ext,$valid_ex)){
    $input_error['photo'] = "Upload a photo valid extension. valid extension:".implode(',',$valid_ex);

  }
  

  if (count($input_error) === 0) {
    $sql_1 = "SELECT * FROM users WHERE email='$email'";
    $email_check = $dbcon->query($sql_1);
    if (($email_check->num_rows) == 0) {
      $pass_hash = password_hash($password, PASSWORD_BCRYPT);


      $query = "INSERT INTO users(name, username, email, password, photo) VALUES ('$name','$username','$email','$pass_hash','$photo_name')";
      $result = $dbcon->query($query);

      if ($result) {
        $_SESSION['dsuccess'] = "Data insert successfully";
        if (isset($_FILES['photo']['tmp_name'])) {
          move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $photo_name);
          header('location: login.php');
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
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body >

        <!-- Begin page -->
        <div class="accountbg" style="background: url('https://scontent.fdac20-1.fna.fbcdn.net/v/t1.0-9/p720x720/70884052_679920399194756_4461503484671295488_o.jpg?_nc_cat=109&_nc_sid=07e735&_nc_oc=AQk5qBC_fbb1cCJK4oEcrno3dWZl-X9k9rXUd8N8KPDSSlUBMYs5KL4E3H1yEpC8vhA&_nc_ht=scontent.fdac20-1.fna&_nc_tp=6&oh=13213399ab4218da92241b5ac4cdc44a&oe=5EF5C730');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                        <a style="margin-left: 200px;" href="../index.php" class="text-success">
                                    <span><img src="http://www.munpoly.gov.bd/images/mpi.png" alt="" height="50"></span>
                                </a>
                            <h4 class="text-uppercase text-center pb-4">
                                Munshiganj polytechnic institute
                            </h4>

             <!-- =============================form===================               -->
            <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
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
                } ?>" placeholder="Enter your username">
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
                } ?>" placeholder="Enter a email">
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
                } ?>" placeholder="Enter a password">

                <label style="color:red; font-style:italic;">
                  <?php
                  if (isset($input_error['password'])) {
                    echo $input_error['password'];
                  }

                  ?>
                </label>
              </div>              

      <!-- ================================ confirm Password ======================== -->
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input class="form-control" type="password" name="cpassword" id="cpassword" value="<?php if(isset($password,$cpassword)){
                  echo $cpassword;
                } ?>" placeholder="Enter a password">

                <label style="color:red; font-style:italic;">
                  <?php
                  if (isset($input_error['cpassword'])) {
                    echo $input_error['cpassword'];
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

            <div class="row">
                <div class="col-sm-12">
                    <p class="text-muted">Already have an account?  <a href="login.php" class="text-dark ml-2"><b>Sign In</b></a></p>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p class="account-copyright"><?=date("Y")?> © Munpoly.gov.bd</p>
            </div>

        </div>
    </div>

    </div>
  </div>

            

</div>
        
    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014, Tue, 09 Apr 2019 06:52:57 GMT -->
</html>