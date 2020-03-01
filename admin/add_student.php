<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
else{
require "header.php";

// ========================  add student page ===========================


if(isset($_POST['add_student'])){
$name = $_POST['name'];
$roll = $_POST['roll'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$cgpa = $_POST['cgpa'];
$photo = $_FILES['photo']['name'];
$photo_ext = explode('.',$photo);
$photo_name = $roll.'.'.end($photo_ext);

$input_error = [];
if(empty($name)){
  $input_error['name'] = "*Enter a name";
}
else if(preg_match('@[0-9]@',$name)){
  $input_error['name']="*Name not allow number";
}
if(empty($roll)){
  $input_error['roll'] = "*Enter a roll";
}
else if(!is_numeric($roll)){
  $input_error['roll']="Enter a number";
}
if(empty($department)){
  $input_error['department'] = "*Enter department";
}
if(empty($semester)){
  $input_error['semester'] = "*Enter a semester";
}
if(empty($cgpa)){
  $input_error['cgpa'] = "*Enter cgpa";
}
else if(!is_numeric($cgpa)){
  $input_error['cgpa']="Enter a number";
}
else if($cgpa<0 || $cgpa>4){
  $input_error['cgpa'] = "*You enter a wrong cgpa";
}
if(empty($photo)){
  $input_error['photo']="*Attached a photo";
}
if(count($input_error)==0){
  $check_roll_query = "SELECT * FROM students WHERE roll=$roll AND department='$department'";
  $check_roll = $dbcon->query($check_roll_query);
  if($check_roll->num_rows==0){
    
    // insert query code

    $sql = "INSERT INTO students (name, roll, department, semester, cgpa, photo) VALUES('$name',$roll,'$department',$semester,$cgpa,'$photo_name')";
    $result=$dbcon->query($sql);
    if($result){
      move_uploaded_file($_FILES['photo']['tmp_name'],'student_image/'.$photo_name);
      header('location: all_student.php');
    }

  }
  else{
    $_SESSION['add_std_message'] = "department: $department and roll: $roll student data already added";
    header('location: add_student.php');
  }
}


} //isset close
?>



<div class="col-8 mx-auto my-3">
  <div class="content">
    <h2 class="text-primary"><i class="fas fa-user-plus"></i> Add student </h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"> <a href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-plus"></i> add student result</li>
    </ol>
  </div>

  <div class="">

  <!-- ============================== alert message ================ -->
  <?php if(isset($_SESSION['add_std_message'])){ ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <?php
      echo $_SESSION['add_std_message'];
      
      ?> 
      
    </div>
  <?php } 
  unset($_SESSION['add_std_message']);

  ?>
  
   

    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="name" id='name' value="" placeholder="Enter a name">
<!-- ================= name error 1 ================== -->

      <p style="color:red;font-style:italic;"><?php if(isset($input_error['name'])){
        echo $input_error['name'];
      } ?></p>



      <div class="form-group">
        <label for="roll">Roll</label>
        <input class="form-control" type="text" name="roll" id='roll' value="" placeholder="Enter roll number">

<!-- ===================roll error 1 ==========================       -->
        <p style="color:red;font-style:italic;"><?php if(isset($input_error['roll'])){
          echo $input_error['roll'];
      } ?></p>


      </div>

      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" name="department" id="department">
          <option disabled>select one</option>
          <option value="computer">Computer</option>
          <option value="electrical">Electrical</option>
          <option value="electronics">Electronics</option>

      </select>
      <p style="color:red;font-style:italic;"><?php if(isset($input_error['department'])){
        echo $input_error['department'];
      } ?></p>
      </div>

      <div class="form-group">
      <label for="semester">Semester</label>
      <select class="form-control" name="semester" id="semester">
        <option disabled>Select semester</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
        <option value="6">6th</option>
        <option value="7">7th</option>
        <option value="8">8th</option>

      </select>
      <p style="color:red;font-style:italic;"><?php if(isset($input_error['semester'])){
        echo $input_error['semester'];
      } ?></p>
      </div>

      <div class="form-group">
        <label for="cgpa">CGPA</label>
        <input class="form-control" type="text" name="cgpa" id='cgpa' value="" placeholder="Enter CGPA">

<!-- ==================== CGPA error one ======================= -->

        <p style="color:red;font-style:italic;"><?php if(isset($input_error['cgpa'])){
          echo $input_error['cgpa'];
        } ?></p>


      </div>


      <div class="form-group">
        <label for="photo">Attached Photo</label>
        <br>

      <input class="form-file-control" type="file" name="photo" id='photo' value="">
      <p style="color:red;font-style:italic;"><?php if(isset($input_error['photo'])){
        echo $input_error['photo'];
      } ?></p>
      </div>

      <div class="form-group">
      <input class="btn btn-success" type="submit" name="add_student" value="Add Result">
    </div>
    </form>
  </div>
  </div>
</div>


<!-- ========================= footer part ================== -->

<?php
require_once 'footer.php';
} ?>