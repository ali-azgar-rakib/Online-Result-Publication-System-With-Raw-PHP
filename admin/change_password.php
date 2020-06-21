<?php
session_start();
require_once('dbcon.php');
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}
$title = "change password";
require "header.php";
?>

<!-- ================================= template  ======================== -->
  <!-- Start Page content -->
  <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

    <!-- =================== page code start =================== -->


<div class="container">
	<div class="row">
		<div class="col-6 m-auto">
			
			<form action="change_password_val.php" method="post">

				<div class="form-group">
					<label for="old_password">Old Password</label>
					<input type="password" class="form-control" name="old_password" id="old_password">

					<!-- error alert -->
					<label for="old_password">
						<?php 
						if(isset($_SESSION['wrong_password'])){
							echo "<p class='text-danger'>" .$_SESSION['wrong_password']."</p>";
						}
						unset($_SESSION['wrong_password']);
						?>
					</label>

				</div>	

				<div class="form-group">
					<label for="old_password">New Password</label>
					<input type="password" class="form-control" name="new_password">

					<!-- error alert -->
					<label for="old_password">
						<?php 
						if(isset($_SESSION['new_old_match_err'])){
							echo "<p class='text-danger'>" .$_SESSION['new_old_match_err']."</p>";
						}
						unset($_SESSION['new_old_match_err']);

						?>
					</label>

					<!-- error alert -->
					<label for="old_password">
						<?php 
						if(isset($_SESSION['new_pass_val'])){
							echo "<p class='text-danger'>" .$_SESSION['new_pass_val']."</p>";

						}
						unset($_SESSION['new_pass_val']);
						?>
					</label>
					

				</div>

				<div class="form-group">
					<label for="old_password">Confirm New Password</label>
					<input type="password" class="form-control" name="confirm_password">

						<!-- error alert -->
					<label for="old_password">
						<?php 
						if(isset($_SESSION['new_con_not_match'])){
							echo "<p class='text-danger'>" .$_SESSION['new_con_not_match']."</p>";

						}
						unset($_SESSION['new_con_not_match']);
						?>
					</label>


				</div>	

				
					<input type="submit" value="Submit" class="btn btn-success" name="submit">

			</form>

		</div>
	</div>
</div>



<!-- ============================== template ====================== -->

            </div>
          </div>
      </div>
  </div> <!-- container -->
</div> <!-- content -->

<!-- ========================= footer part ================== -->

<?php
require_once 'footer.php';
?> class="form-group"