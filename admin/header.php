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

  <!-- ==================== nav bar =================== -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Pannel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-user" style="font-size:12px;"></i>welcome: <i style='font-size:11px;color:green;' class='fa fa-circle' aria-hidden='true'></i> <?= $_SESSION['user_login'] ?> <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="profile.php"><i class="fas fa-user" style="font-size:12px;"></i> profile<span class="sr-only">(current)</span>
          </a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="approve_user.php"><i class="fas fa-user-plus" style="font-size:12px;"></i> add user<span class="sr-only">(current)</span></a>
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

<!-- ================================ dashboard sidebar ====================== -->

        <ul class="list-group">
          <a href="index.php" class="list-group-item  <?php if ($_SERVER['PHP_SELF'] == "/online_result_publication_system/admin/index.php"){
              echo "active";
            } ?>">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>

<!-- ======================== add student ====================== -->
          <a href="add_student.php" class="list-group-item   
            <?php
            if ($_SERVER['PHP_SELF'] == "/online_result_publication_system/admin/add_student.php") {
              echo "active";
            } ?>">
            <i class="fas fa-user-plus"></i> add student
          </a>
<!-- ============================== all student ================ -->

          <a href="all_student.php" class="list-group-item 
            <?php
              if ($_SERVER['PHP_SELF'] == "/online_result_publication_system/admin/all_student.php") {
                echo "active";
            } ?>">
            <i class="fas fa-users"></i> all student</a>

 <!-- ============================= all user ================            -->

          <a href="all_users.php" class="list-group-item 
          <?php 
          if ($_SERVER['PHP_SELF'] == "/online_result_publication_system/admin/all_users.php") {
            echo "active";
          } ?>">
          <i class="fas fa-users"></i> all users</a>

<!-- ============================ approve user ===================== -->

        <a href="approve_user.php" class="list-group-item 
        <?php 
        if ($_SERVER['PHP_SELF'] == "/online_result_publication_system/admin/approve_user.php") {
          echo "active";
        } ?>">
        <i class="fas fa-user-plus"></i> approve users</a>

        </ul>
      </div>

<!-- ================================== side bar end ============================ -->