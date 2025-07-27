<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Team Add Member</title>
	<?php include('css.php'); ?>
</head>

<body>
	<?php include('loader.php'); ?>
	<div id="main-wrapper" class="wallet-open active">
		<?php include('header.php'); ?>
		<?php include('navheader.php') ?>
		<?php include("sidebar.php"); ?>


	</div>
	<?php

	include('connection.php'); ?>
	<?php
	ob_start();
	error_reporting(1);
	?>


	<?php
	$error_message = '';  // Error message holder
	$success_message = '';
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$tname = $fname . " " . $sname;
	$position = $_POST['position'];
	$sarlary = $_POST['sarlary'];
	$image = $_FILES['image']['name'];

	$click = $_POST['click'];

	if (isset($click)) {
		$query = "INSERT INTO team (tname,position,sarlary,image) VALUES('$tname','$position','$sarlary','$image')";
		$connection->query($query);
		mkdir("../image/team/");
		move_uploaded_file($_FILES['image']['tmp_name'], '../image/team/' . $image);
		header('location:team_admin.php');
		ob_end_clean();
	}


	?>

	<!--************Content body start
        ***********************************-->
	<div class="content-body">
		<form action="team_admin.php" method="POST" enctype="multipart/form-data">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header">
								<h5 class="mb-0">Personal Details</h5>
							</div>


							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-sm-6">
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-primary">First
												Name<span class="required">*</span></label>
											<input type="text" class="form-control" name="fname" id="exampleFormControlInput1"
												placeholder="First name" required>
										</div>

										<div class="mb-3">
											<label for="exampleFormControlInput3"
												class="form-label text-primary">Position<span
													class="required">*</span></label>
											<input type="text" class="form-control" name="position" id="exampleFormControlInput3"
												placeholder="job position">
										</div>
									</div>



									<div class="col-xl-6 col-sm-6">
										<div class="mb-3">
											<label for="exampleFormControlInput4" class="form-label text-primary">Last
												Name<span class="required">*</span></label>
											<input type="text" class="form-control" name="sname" id="exampleFormControlInput4"
												placeholder="last name">
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput6" class="form-label text-primary">Sarlary<span class="required">*</span></label>
											<input type="number" class="form-control" name="sarlary" id="exampleFormControlInput6"
												placeholder="sarlary">
										</div>
										<div class="mb-6">
											<label class="form-label text-primary">Photo<span
													class="required">*</span></label>
											<div class="avatar-upload">
												<div class="avatar-preview">
													<div id="imagePreview"
														style="background-image: url(images/no-img-avatar.png);">
													</div>
												</div>
												<div class="change-btn mt-1">
													<input type='file' class="form-control d-none" name="image" id="imageUpload"
														accept=".png, .jpg, .jpeg">
													<label for="imageUpload"
														class="dlab-upload mb-0 btn btn-primary btn-sm">Choose
														File</label>
													<a href="javascript:void(0);"
														class="btn btn-danger light remove-img ms-2 btn-sm">Remove</a>
												</div>
											</div>
										</div>
										<div class="float-end">
											<a href="team_admin.php" class="btn btn-outline-primary me-3">Cancel</a>
											<button class="btn btn-primary" type="submit" name="click">Save</button>
											<!-- <input type="submit" value="Save" name="click" class="btn btn-primary me-3"> -->
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</form>
	</div>

	<!--**********************************
            Content body end
            *********************************-->

	<?php include('js.php'); ?>
</body>

</html>