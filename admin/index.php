<?php
session_start();
require_once('dbcon.php');

if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
else{
require "header.php";
?>

<!-- ==================================== dahsboard ================= -->


<div class="col-9 mt-3">
      <div class="content">
        <h2 class="text-primary"><i class="fas fa-tachometer-alt"></i> Dashboard <small>content overview</small></h2>
          <div aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
          </ol>
      </div>

      <div class="row">
          <!-- ========================= php code for user count========= -->
        
        <?php
        $std_query = $dbcon->query("SELECT * FROM students");
        $total_student = $std_query->num_rows;
        ?>

        <div class="col-4">
          <div class="card-deck">
            <div class="card">

              <div class="card-body bg-primary text-white ">
                <div class="row">
                  <div class="col-6 display-3 text-center">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="col-6 my-auto">
                    <p class="float-right" style="font-size:40px;clear:both;" ><?=$total_student?></p>
                    <p class="float-right " style="font-size:15px; font-weight:700;clear:both;">all student</p>
                  </div>
                </div>

                </div>
                  <a href="all_student.php">
                  <div class="card-footer bg-light">
                    <small class="text-muted">all student</small>
                    <small class="text-muted float-right" style="font-size:20px;"><i class="fas fa-arrow-circle-right"></i></small>
                    </a>
                </div>

        </div>
      </div>
    </div>
    <!-- ========================= php code for user count========= -->

    <?php
      $user_query = $dbcon->query("SELECT * FROM users");
      $total_user = $user_query->num_rows;
    ?>
      <div class="col-4">
        <div class="card-deck">
          <div class="card">

            <div class="card-body bg-primary text-white ">
              <div class="row">
                <div class="col-6 display-3 text-center">
                  <i class="fas fa-users"></i>
                </div>
                <div class="col-6 my-auto">
                  <p class="float-right " style="clear: both;font-size:40px;" ><?=$total_user?></p>
                  <p class="float-right " style="clear: both;font-size:15px; font-weight:700;">all users</p>
                </div>
              </div>
            </div>

            <a href="all_users.php">
              <div class="card-footer bg-light">
                <small class="text-muted d-block">all users</small>
                <small class="text-muted float-right" style="font-size:20px;"><i class="fas fa-arrow-circle-right"></i></small>
              </div>
            </a>

      </div>
    </div>
  </div>
</div>


  </div>
</div>


<!-- ================================ footer ==================== -->


<?php
require_once 'footer.php';
} ?>
