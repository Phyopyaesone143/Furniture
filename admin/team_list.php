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
                            echo "<a class='dropdown-item' href='javascript:void(0);'>Delete</a>";
                            echo "<button class='dropdown-item' data-bs-toggle='modal' data-bs-target='#updateModal_$id'>Edit</a>";
                            ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="contact-icon">
                                                   <span class="badge badge-success light">Mathematics</span>
												   <span class="badge badge-secondary light mx-2">Science</span> 
												   <span class="badge badge-danger light">Art</span>
                                                </div> -->
                <div class="d-flex align-items-center">
                    <a href="team.html" class="btn  btn-primary btn-sm w-50 me-2"><i class="fa-solid fa-user me-2"></i>Profile</a>
                    <!-- <a href="chat.html" class="btn  btn-light btn-sm w-50"><i class="fa-sharp fa-regular fa-envelope me-2"></i>Chat</a> -->
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!--/column-->



<!-- Update model -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-center">
			<div class="modal-content">
			  <div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Teacher Details</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<div class="row">
					<div class="col-xl-6">
						<div class="mb-3">
						  <label for="exampleFormControlInput1" class="form-label">First Name</label>
						  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dimitres">
						</div>
						<div class="mb-3">
						  <label for="exampleFormControlInput3" class="form-label">Email address</label>
						  <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="hello@example.com">
						</div>
						<div class="mb-3">
						  <label  class="form-label">Subject</label>
							<select class="default-select" aria-label="Default select example">
								  <option selected>Select</option>
								  <option value="1">Mathematics</option>
								  <option value="2">Science</option>
								  <option value="3">Art</option>
								  <option value="4">History</option>
								  <option value="5">Physics</option>
								  <option value="6">Algorithm</option>
								  <option value="7">Engilsh</option>
								  <option value="8">Physics</option>
								</select>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="mb-3">
						  <label for="exampleFormControlInput5" class="form-label">Last Name</label>
						  <input type="text" class="form-control" id="exampleFormControlInput5" placeholder=" Viga">
						</div>
						<div class="mb-3">
						  <label for="exampleFormControlInput6" class="form-label">Contact Number</label>
						  <input type="number" class="form-control" id="exampleFormControlInput6" placeholder="+12345678">
						</div>
						<div class="mb-3">
						  <label  class="form-label">Gender</label>
							<select class="default-select" aria-label="Default select example">
								  <option selected>Select</option>
								  <option value="1">Male</option>
								  <option value="2">Female</option>
								  <option value="3">Other</option>
								</select>
						</div>
						
					</div>
					
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>