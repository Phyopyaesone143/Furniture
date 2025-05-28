<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include('css.php'); ?>
</head>

<body>
	<?php include('loader.php'); ?>
	<div id="main-wrapper" class="wallet-open active">
		<?php include('header.php'); ?>
		<?php include('navheader.php') ?>
		<?php include("sidebar.php"); ?>
		<?php error_reporting(1); ?>
	
	<!-- User Start -->
	<div class="content-body">
		<div class="container-fluid">
			<!-- Row -->
			<div class="row">
				<div class="col-xl-12">
					<!-- Row -->
					<div class="row">
						<!--column-->
						<div class="col-xl-12">
							<div class="page-title flex-wrap">
								<div class="input-group search-area mb-md-0 mb-3">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)">
											<svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF" />
											</svg>
										</a>
									</span>
								</div>

								<div>
									<select class="default-select me-3" aria-label="Default">
										<option selected>Newest</option>
										<option value="1">Oldest</option>
										<option value="2">Recent</option>
									</select>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
										+ New User
									</button>
								</div>
							</div>
						</div>
						<!--/column-->
						<!--column-->
						<div class="col-xl-12">
							<!-- Row -->
							<div class="row">
								<!--column-->
								<?php
								include('connection.php');
								$query = "SELECT * FROM team";
								$rawdata = $connection->query($query);
								while (list($id, $tname, $position, $sarlary, $image) = mysqli_fetch_array($rawdata)) {
									$timage = '../image/team/' . $image;
								?>
									<div class="col-xl-3 col-lg-4 col-sm-6">
										<div class="card contact_list text-center">
											<div class="card-body">
												<div class="user-content">
													<div class="user-info">
														<div class="user-img">
															<?php
															echo "<img src='$timage' alt='$tname' class='avatar avatar-xl'>";
															?>
														</div>
														<div class="user-details">
															<h4 class="user-name mb-0"><?php echo $tname; ?></h4>
															<p><?php echo $position; ?></p>
															<p>sarlary : $ <?php echo $sarlary; ?></p>
														</div>
													</div>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn sharp btn-light" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE" />
															</svg>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<?php
															echo "<a class='dropdown-item' href='team_delete.php?id=$id&image=$image'>Delete</a>";

															echo "<a class='dropdown-item' href='../team_upadmin.php?id=$id&image=$image'>Edit</a>";
															?>
															<!-- <button class="dropdown-item" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2_<?php echo $id; ?>">Edit</button> -->
														</div>
													</div>
												</div>
												<!-- <div class="contact-icon">
                                                   <span class="badge badge-success light">Mathematics</span>
												   <span class="badge badge-secondary light mx-2">Science</span> 
												   <span class="badge badge-danger light">Art</span>
                                                </div> -->
												<!-- <div class="d-flex align-items-center">
													<a href="team.html" class="btn  btn-primary btn-sm w-50 me-2"><i class="fa-solid fa-user me-2"></i>Profile</a>
													<a href="chat.html" class="btn  btn-light btn-sm w-50"><i class="fa-sharp fa-regular fa-envelope me-2"></i>Chat</a>
												</div> -->
											</div>
										</div>
									</div>
								<?php } ?>
								<!--/column-->

							</div>

							<!--/Row -->
						</div>

						<div class="table-pagenation teach">
							<small>Showing <span>1-5</span>from <span>100</span>data</small>
							<nav>
								<ul class="pagination pagination-gutter pagination-primary no-bg">
									<li class="page-item page-indicator">
										<a class="page-link" href="javascript:void(0)">
											<i class="fa-solid fa-chevron-left"></i></a>
									</li>
									<li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
									</li>
									<li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
									<li class="page-item page-indicator">
										<a class="page-link" href="javascript:void(0)">
											<i class="fa-solid fa-chevron-right"></i></a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- User End -->

		<!-- Modal -->
		<?php
		$tname = $_POST['tname'];
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
		}

		?>

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Team Member Details</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="team_admin.php" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="row">
								<div class="col-xl-6">
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label">Team member's Name</label>
										<input type="text" name="tname" class="form-control" id="exampleFormControlInput1" placeholder="name" required>
									</div>

									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label">Position</label>
										<input type="text" name="position" class="form-control" id="exampleFormControlInput1" placeholder="position" required>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="mb-3">
										<label for="exampleFormControlInput5" class="form-label">Team member's picture</label>
										<input type="file" class="form-control" name="image" id="exampleFormControlInput5" placeholder="" required>
									</div>
									<div class="mb-3">
										<label for="exampleFormControlInput3" class="form-label">Sarlary</label>
										<input type="number" class="form-control" name="sarlary" id="exampleFormControlInput3" placeholder="" required>
									</div>


								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
							<button type="submit" name="click" class="btn btn-primary">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
		<?php include('js.php'); ?>
</body>

</html>