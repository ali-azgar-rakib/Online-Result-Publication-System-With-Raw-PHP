<?php
session_start();
require_once('dbcon.php');

if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}

else{
  require "header.php";
?>

<!-- ================= profile page code ========================= -->

<div class="col-9 my-3">
  <div class="content">
    <h2 class="text-primary"><i class="fas fa-user"></i> profile</h2>
    <div aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li  class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> user</li>
      </ol>
    </div>

    <!-- ===================== check data and take data from db================= -->

  <?php
    $user_name = $_SESSION['user_login'];
    $user_data = $dbcon->query("SELECT * FROM users WHERE username='$user_name'");
    $user_row = $user_data->fetch_assoc();

   ?>

<!-- ======================= table part start ================ -->

  <div class="row">
    <div class="col-6">
      <table class="table table-bordered table-striped">
        <tr>
          <td>ID</td>
          <td><?=$user_row['id']?></td>
        </tr>

        <tr>
          <td>Name</td>
          <td><?=$user_row['name']?></td>
        </tr>

        <tr>
          <td>Username</td>
          <td><?=$user_row['username']?></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><?=$user_row['email']?></td>
        </tr>

        <tr>
          <td>Status</td>
          <td><?php echo "active <i style='font-size:11px;color:green;' class='fa fa-circle' aria-hidden='true'></i>"?></td>
        </tr>
        
      </table>

      <!-- ======================= edit button ================= -->

      <input class="btn btn-success" type="submit" name="edit" value="Edit">


    </div>

<!-- ===================== photo part start ======================= -->

    <div class="col-4 mx-auto">
      <img style="width:150px;height:auto;" src="images/<?=$user_row['photo']?>" alt="">


<!-- ================== form under photo ================== -->

      <form class="" action="profile_valid.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="upload">change photo</label>
        <br>
        <input class="form-file-control" type="file" name="photo" value="">
        </div>

        <div class="form-group">
        <input class="btn btn-success" type="submit" name="upload" value="Upload">
        </div>
      </form>

    </div>

  </div>
</div>
</div>

<!-- ================================ footer ==================== -->


<?php
require_once 'footer.php';
} ?>
