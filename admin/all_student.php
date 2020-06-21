
<div class="col-9 mx-auto mt-3">
  <div class="content">

    <h2 class="text-primary"><i class="fas fa-users"></i> All student </h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> all student result</li>
    </ol>
  </div>

<h3>Student Table</h3>
<table id="example" class="table table-bordered table-striped table-hover" style="width:100%;">
  <thead >
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>ROLL</th>
      <th>DEPARTMENT</th>
      <th>SEMESTER</th>
      <th>CGPA</th>
      <th>PHOTO</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>

<!-- ===================== query for student data from database===== -->

    <?php
    $student_query = "SELECT * FROM students";
    $student_data = $dbcon->query($student_query);

    ?>
    <?php foreach ($student_data as $row): ?>
    <tr>


      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['roll'] ?></td>
      <td><?php echo $row['department'] ?></td>
      <td><?php echo $row['semester'] ?></td>
      <td><?php echo $row['cgpa'] ?></td>
      <td> <img style="width:30px;height:auto;" src="student_image/<?php echo $row['photo'] ?>" alt=""> </td>
      <td>
        <div class="btn-group">

        <a style="font-size:10px;" class="btn btn-xs btn-warning" href="index.php?page=std_update&id=<?php echo base64_encode($row['id']) ?>"> <i class="fas fa-user-edit"></i> edit </a>
        <a style="font-size:10px;" class="btn btn-xs btn-danger" href="delete_st_info.php?id=<?php echo base64_encode($row['id']) ?>"> <i class="fas fa-user-slash"></i> delete </a>
      </div>

      </td>



    </tr>
    <?php endforeach; ?>

  </tbody>
</table>
</div>
</div>
