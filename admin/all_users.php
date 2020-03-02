<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
$title="all users";
require "header.php";
?>

<!-- ================================= template  ======================== -->
  <!-- Start Page content -->
  <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                              




<!-- ========================== all user code start ==================== -->

<div class="col-10 mx-auto mt-3">
  <div class="content">



<h3>Users Table</h3>
<table id="example" class="table table-bordered table-striped table-hover" style="width:100%;">
  <thead >
    <tr>
      <th>Name</th>
      <th>User name</th>
      <th>emial</th>
      <th>status</th>
      <th>photo</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $student_query = "SELECT * FROM users";
    $student_data = $dbcon->query($student_query);
    while($row = $student_data->fetch_assoc()){


    ?>
    <tr>
      <td><?=$row['name'] ?></td>
      <td><?=$row['username'] ?></td>
      <td><?=$row['email'] ?></td>
      <td><?=$row['status']==1?"id active <i style='font-size:11px;color:green;' class='fa fa-circle' aria-hidden='true'></i>":"id deactive <i style='font-size:11px;color:red;' class='fa fa-circle' aria-hidden='true'></i>"?></td>
      <td> <img style="width:30px;height:auto;" src="images/<?php echo $row['photo'] ?>" alt=""> </td>

    </tr>
  <?php } ?>
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


<!-- ========================= footer part ========================== -->

<?php
require_once 'footer.php';
 ?>