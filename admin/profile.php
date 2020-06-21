<div class="col-9 my-3">
  <div class="content">
    <h2 class="text-primary"><i class="fas fa-user"></i> profile</h2>
    <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
      <li  class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> user</li>
    </ol>
  </div>

  <?php
  $user_name = $_SESSION['user_login'];
  $user_data = $dbcon->query("SELECT * FROM users WHERE username='$user_name'");
  $user_row = $user_data->fetch_assoc();

   ?>

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
          <td><?=$user_row['status']?></td>
        </tr>
        <tr>
          <td>SignUp Date</td>
          <td><?=$user_row['datetime']?></td>
        </tr>
      </table>
      <input class="btn btn-success" type="submit" name="edit" value="Edit">


    </div>
    <div class="col-4 mx-auto">
      <img style="width:150px;height:auto;" src="images/<?=$user_row['photo']?>" alt="">

      <?php
      if(isset($_POST['upload'])){
        $photo= $_FILES['photo']['name'];


        $photo_ext = explode('.',$photo);
        $photo_temp = end($photo_ext);
        $photo_name = $user_name.'.'.$photo_temp;
        $photo_query = $dbcon->query("UPDATE users SET photo='$photo_name' WHERE username='$user_name'");
        if($photo_query){
          move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
          header('location: index.php?page=profile');
        }
      }
      ?>

      <form class="" action="" method="post" enctype="multipart/form-data">
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
