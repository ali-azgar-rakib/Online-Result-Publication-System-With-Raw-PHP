<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
else{

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ==================data table css ======== -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <title>Munshiganj Polytechnic Institute</title>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user" style="font-size:12px;"></i>welcome<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=profile"><i class="fas fa-user" style="font-size:12px;"></i> profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user-plus" style="font-size:12px;"></i> add user<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php"><i class="fas fa-power-off" style="font-size:12px;"></i> logout<span class="sr-only">(current)</span></a>
      </li>

    </ul>

  </div>
</nav>



<!-- =========================nav end======================== -->

<!-- ================== side bar =================================== -->


<div class="container-fluid">
  <div class="row">
    <div class="col-3 mt-3">

      <ul class="list-group">
  <a href="index.php?page=dashboard" class="list-group-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  <a href="index.php?page=add_student" class="list-group-item"><i class="fas fa-user-plus"></i> add student</a>
  <a href="index.php?page=all_users" class="list-group-item"><i class="fas fa-users"></i> all users</a>
  <a href="index.php?page=all_student" class="list-group-item"><i class="fas fa-users"></i> all student</a>

</ul>
</div>
<?php
if(isset($_GET['page'])){
  $page = $_GET['page'] . '.php';
  if(file_exists($page)){
    require_once($page);
  }else{
    exit();
  }
}else{
  require_once('dashboard.php');
}

?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- ========================= for data table ================ -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );

    </script>

  </body>
</html>
<?php } ?>
