<?php
if(isset($_SESSION['login_check'])){
?>


<div class="col-8 mx-auto mt-3">
  <div class="content">

    <h2 class="text-primary"><i class="fas fa-users"></i> All Users</h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> all user</li>
    </ol>
  </div>

<h3>Users Table</h3>
<table id="example" class="table table-bordered table-striped table-hover" style="width:100%;">
  <thead >
    <tr>
      <th>Name</th>
      <th>User name</th>
      <th>emial</th>
      <th>photo</th>
      <th>status</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $student_query = "SELECT * FROM users";
    $student_data = $dbcon->query($student_query);
    while($row = $student_data->fetch_assoc()){


    ?>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td> <img style="width:30px;height:auto;" src="images/<?php echo $row['photo'] ?>" alt=""> </td>

    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
</div>
<?php
}
else{
  header('location: login.php');
}
 ?>
