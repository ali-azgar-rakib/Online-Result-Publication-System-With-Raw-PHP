<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
else{
require "header.php";
?>


<!-- ======================= approve user ============================== -->

<div class="col-8 mx-auto mt-3">
  <div class="content">

    <h2 class="text-primary"><i class="fas fa-users"></i> All Users</h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-plus"></i> approve user</li>
    </ol>
  </div>

<h3>Users Table</h3>
<table id="example" class="table table-bordered table-striped table-hover text-center" style="width:100%;">
  <thead >
    <tr>
      <th>Name</th>
      <th>User name</th>
      <th>emial</th>
      <th>status</th>
      <th>photo</th>
      <th>action</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $student_query = "SELECT * FROM users";
    $student_data = $dbcon->query($student_query);
    foreach($student_data as $row ){
        if($_SESSION['user_login']!=$row['username']){


    ?>
    <tr>
      <td><?=$row['name'] ?></td>
      <td><?=$row['username'] ?></td>
      <td><?=$row['email'] ?></td>
      <td><?=$row['status']==1?"id active <i style='font-size:11px;color:green;' class='fa fa-circle' aria-hidden='true'></i>":"id deactive <i style='font-size:11px;color:red;' class='fa fa-circle' aria-hidden='true'></i>"?></td>
      <td> <img style="width:30px;height:auto;" src="images/<?=$row['photo'] ?>" alt=""> </td>
      <td>
          <div class="btn-group">
              <?php if($row['status']==1){ ?>
              <a class="btn btn-sm btn-warning" href="deactive.php?id=<?php echo base64_encode($row['id']); ?>">deactive</a>
              <?php }else{ ?>
              <a class="btn btn-sm btn-success" href="active.php?id=<?php echo base64_encode($row['id']); ?>">active</a>
              <?php } ?>
          </div>
      </td>

    </tr>
  <?php 
    } 
 }
  ?>
  </tbody>
</table>
</div>
</div>


<!-- ========================== footer part ====================== -->
<?php
require_once 'footer.php';
} ?>