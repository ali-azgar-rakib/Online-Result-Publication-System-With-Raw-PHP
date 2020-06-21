<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
$title="approve user";
require "header.php";
?>

<!-- ================================= template  ======================== -->
  <!-- Start Page content -->
  <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                              





<!-- ======================= approve user ============================== -->

<div class="col-10 mx-auto mt-3">
  <div class="content">


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

<!-- ============================== template ====================== -->

</div>
          </div>
      </div>
  </div> <!-- container -->
</div> <!-- content -->




<!-- ========================== footer part ====================== -->
<?php
require_once 'footer.php';
 ?>