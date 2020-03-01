<?php
session_start();
require_once('dbcon.php');

if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
else{
require "header.php";



if(isset($_GET['id'])){
  $id = base64_decode($_GET['id']);
  $u_sql = "SELECT * FROM students WHERE id=$id";
  $result = $dbcon->query($u_sql);
  $array_result =$result->fetch_assoc();
}



if(isset($_POST['update_student'])){
echo $name = $_POST['name'];
echo $roll = $_POST['roll'];
echo $department = $_POST['department'];
echo $semester = $_POST['semester'];
echo $cgpa = $_POST['cgpa'];


$update_sql = "UPDATE students SET name='$name',roll=$roll,department='$department',semester='$semester',cgpa=$cgpa WHERE id=$id";
$update_result = $dbcon->query($update_sql);
if($update_result){
header('location: all_student.php');
}

}
?>



<div class="col-8 mx-auto my-3">
  <div class="content">
    <h2 class="text-primary"><i class="fas fa-user-edit"></i> Update student Data </h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"> <a href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=all_student" ><i class="fas fa-users"></i> all student</li></a>
      <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit"></i> update student data</li>
    </ol>
  </div>


  <div class="">
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id='name' value="<?php if(isset($array_result['name'])){
        echo $array_result['name'];
      } ?>" placeholder="Enter a name">
      </div>

      <div class="form-group">
      <label for="roll">Roll</label>
      <input class="form-control" type="text" name="roll" id='roll' value="<?php if(isset($array_result['roll'])){
        echo $array_result['roll'];
      } ?>" placeholder="Enter roll number">
      </div>

      <div class="form-group">
        <select class="form-control" name="department">
          <option value="computer"
          <?php echo $array_result['department']=='computer'?'selected':''; ?> >Computer</option>
          <option value="electrical"
          <?php echo $array_result['department']=='electrical'? 'selected':''; ?> >Electrical</option>
          <option value="electronics"           <?php echo $array_result['department']=='electronics'?'selected':''; ?>>Electronics</option>
        </select>

      </div>

      <div class="form-group">
      <label for="class">Semester</label>
      <select class="form-control" name="department" id="class">
        <option disabled >select one</option>
        <option value="1"<?php echo $array_result['semester']==1?'selected':''; ?>
         >1st</option>
        <option value="2" <?php echo $array_result['semester']==2?'selected':''; ?> >2nd</option>
        <option value="3" <?php echo $array_result['semester']==3?'selected':''; ?> >3rd</option>
        <option value="4" <?php echo $array_result['semester']==4?'selected':''; ?> >4th</option>
        <option value="4" <?php echo $array_result['semester']==5?'selected':''; ?> >5th</option>
        <option value="4" <?php echo $array_result['semester']==6?'selected':''; ?> >6th</option>
        <option value="4" <?php echo $array_result['semester']==7?'selected':''; ?> >7th</option>
        <option value="4" <?php echo $array_result['semester']==8?'selected':''; ?> >8th</option>

      </select>
      </div>

      <div class="form-group">
      <label for="city">CGPA</label>
      <input class="form-control" type="text" name="cgpa" id='cgpa' value="<?= $array_result['cgpa']?>" placeholder="Enter CGPA">
      </div>



      <input class="btn btn-success" type="submit" name="update_student" value="Update Student">
    </div>
    </div>

    </form>

  </div>
</div>
</div>

<?php
require_once 'footer.php';
} ?>