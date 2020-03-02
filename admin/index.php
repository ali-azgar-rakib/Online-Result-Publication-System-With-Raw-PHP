<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
$title="dashboard";
require "header.php";

?>

<!-- ==================================== dahsboard ================= -->


                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
                                <!-- dashboard page content -->


    <div class="content">
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

  


  <!-- user count card  -->

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
                    <p class="float-right" style="font-size:40px;clear:both;" ><?=$total_user?></p>
                    <p class="float-right " style="font-size:15px; font-weight:700;clear:both;">all user</p>
                  </div>
                </div>

                </div>
                  <a href="all_student.php">
                  <div class="card-footer bg-light">
                    <small class="text-muted">all user</small>
                    <small class="text-muted float-right" style="font-size:20px;"><i class="fas fa-arrow-circle-right"></i></small>
                    </a>
                </div>

        </div>
      </div>
    </div>


<!-- dashboard page content end  -->




                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->


<!-- ================================ footer ==================== -->


<?php
require_once 'footer.php';
?>
