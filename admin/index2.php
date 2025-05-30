
    <?php include('loader.php'); ?>
    <div id="main-wrapper" class="wallet-open active">
        <?php include('header.php'); ?>
        <?php include('navheader.php') ?>
        <?php include("sidebar.php"); ?>
        <?php
        error_reporting(1);
        include('connection.php');
        ?>
    </div>

    <!-- total from database -->
    <?php

    $query = "SELECT * FROM user";
    $rawdata = $connection->query($query);
    $users = 0;
    while (list($id, $tname, $position, $sarlary, $image) = mysqli_fetch_array($rawdata)) {
        $users += 1;
    }

    $tquery = "SELECT * FROM team";
    $tdata = $connection->query($tquery);
    $teams = 0;
    while (list($id, $tname, $position, $sarlary, $image) = mysqli_fetch_array($tdata)) {
        $teams += 1;
    }

    $pquery = "SELECT * FROM product";
    $pdata = $connection->query($pquery);
    $products = 0;
    while (list($id, $name, $price, $star, $image, $category) = mysqli_fetch_array($pdata)) {
        $products += 1;
    }

    $bquery = "SELECT * FROM blog";
    $bdata = $connection->query($bquery);
    $blogs = 0;
    while (list($id, $name, $image, $description, $currentdate, $postuser) = mysqli_fetch_array($bdata)) {
        $blogs += 1;
    }

    ?>

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-xl-4 pb-sm-3 pb-0">
                            <div class="row">
                                <div class="col-xl-3 col-6">
                                    <div class="content-box">
                                        <div class="icon-box icon-box-xl std-data">
                                            <svg width="25" height="25" viewBox="0 0 30 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9288 37.75H3.75C1.67875 37.75 0 36.0713 0 34V23.5863C0 21.7738 1.29625 20.2213 3.07875 19.8975C5.72125 19.4163 10.2775 18.5875 12.855 18.12C14.2737 17.8612 15.7263 17.8612 17.145 18.12C19.7225 18.5875 24.2788 19.4163 26.9213 19.8975C28.7038 20.2213 30 21.7738 30 23.5863C30 26.3125 30 31.0825 30 34C30 36.0713 28.3212 37.75 26.25 37.75H12.9288ZM24.785 22.05L24.79 22.0563C25.0088 22.3838 25.06 22.795 24.9287 23.1662L24.0462 25.6662C23.9312 25.9925 23.685 26.2575 23.3675 26.3963L21.7075 27.12L22.3675 28.4412C22.5525 28.81 22.5425 29.2462 22.3425 29.6075L19.2075 35.25H26.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L24.785 22.05ZM21.3663 21.4275L16.6975 20.5788C15.575 20.375 14.425 20.375 13.3025 20.5788L8.63375 21.4275L7.63625 22.9238L8.13 24.3213L10.5 25.3537C10.8138 25.4912 11.0575 25.7512 11.175 26.0737C11.2925 26.3962 11.2712 26.7525 11.1175 27.0588L10.1625 28.9688L13.6525 35.25H16.3475L19.8375 28.9688L18.8825 27.0588C18.7288 26.7525 18.7075 26.3962 18.825 26.0737C18.9425 25.7512 19.1862 25.4912 19.5 25.3537L21.87 24.3213L22.3638 22.9238L21.3663 21.4275ZM5.215 22.05L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25H10.7925L7.6575 29.6075C7.4575 29.2462 7.4475 28.81 7.6325 28.4412L8.2925 27.12L6.6325 26.3963C6.315 26.2575 6.06875 25.9925 5.95375 25.6662L5.07125 23.1662C4.94 22.795 4.99125 22.3838 5.21 22.0563L5.215 22.05ZM23.75 29V31.5C23.75 32.19 24.31 32.75 25 32.75C25.69 32.75 26.25 32.19 26.25 31.5V29C26.25 28.31 25.69 27.75 25 27.75C24.31 27.75 23.75 28.31 23.75 29ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <p>Users</p>
                                            <h2 class="font-w700 mb-0"><?php echo $users; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-6">
                                    <div class="content-box">
                                        <div class="teach-data icon-box icon-box-xl">
                                            <svg width="25" height="25" viewBox="0 0 30 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 34C0 36.0713 1.67875 37.75 3.75 37.75H26.25C28.3212 37.75 30 36.0713 30 34C30 31.0825 30 26.3125 30 23.5863C30 21.7738 28.7038 20.2213 26.9213 19.8975C24.2788 19.4163 19.7225 18.5875 17.145 18.12C15.7263 17.8612 14.2737 17.8612 12.855 18.12C10.2775 18.5875 5.72125 19.4163 3.07875 19.8975C1.29625 20.2213 0 21.7738 0 23.5863V34ZM17.885 20.795L19.7612 27.9288C20.0075 28.865 19.6775 29.8588 18.92 30.4638C18.28 30.9738 17.2713 31.7788 16.5713 32.3388C15.6525 33.0713 14.3475 33.0713 13.4287 32.3388C12.7287 31.7788 11.72 30.9738 11.08 30.4638C10.3225 29.8588 9.9925 28.865 10.2388 27.9288L12.115 20.795L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25C8.98 35.25 21.02 35.25 26.25 35.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L17.885 20.795ZM15.2038 20.4288C15.0675 20.425 14.9325 20.425 14.7962 20.4288L12.6663 28.5312L14.9887 30.3837C14.995 30.39 15.005 30.39 15.0113 30.3837L17.3337 28.5312L15.2038 20.4288ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <p>Teams</p>
                                            <h2 class="font-w700 mb-0"><?php echo $teams; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-6">
                                    <div class="content-box">
                                        <div class="event-data icon-box icon-box-xl">
                                            <svg width="20" height="20" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24 2.75H21.5V1.5C21.5 1.16848 21.3683 0.850537 21.1339 0.616117C20.8995 0.381696 20.5815 0.25 20.25 0.25C19.9185 0.25 19.6005 0.381696 19.3661 0.616117C19.1317 0.850537 19 1.16848 19 1.5V2.75H15.25V1.5C15.25 1.16848 15.1183 0.850537 14.8839 0.616117C14.6495 0.381696 14.3315 0.25 14 0.25C13.6685 0.25 13.3505 0.381696 13.1161 0.616117C12.8817 0.850537 12.75 1.16848 12.75 1.5V2.75H9V1.5C9 1.16848 8.8683 0.850537 8.63388 0.616117C8.39946 0.381696 8.08152 0.25 7.75 0.25C7.41848 0.25 7.10054 0.381696 6.86612 0.616117C6.6317 0.850537 6.5 1.16848 6.5 1.5V2.75H4C3.00544 2.75 2.05161 3.14509 1.34835 3.84835C0.645088 4.55161 0.25 5.50544 0.25 6.5V24C0.25 24.9946 0.645088 25.9484 1.34835 26.6517C2.05161 27.3549 3.00544 27.75 4 27.75H24C24.9946 27.75 25.9484 27.3549 26.6517 26.6517C27.3549 25.9484 27.75 24.9946 27.75 24V6.5C27.75 5.50544 27.3549 4.55161 26.6517 3.84835C25.9484 3.14509 24.9946 2.75 24 2.75ZM2.75 6.5C2.75 6.16848 2.8817 5.85054 3.11612 5.61612C3.35054 5.3817 3.66848 5.25 4 5.25H6.5V6.5C6.5 6.83152 6.6317 7.14946 6.86612 7.38388C7.10054 7.6183 7.41848 7.75 7.75 7.75C8.08152 7.75 8.39946 7.6183 8.63388 7.38388C8.8683 7.14946 9 6.83152 9 6.5V5.25H12.75V6.5C12.75 6.83152 12.8817 7.14946 13.1161 7.38388C13.3505 7.6183 13.6685 7.75 14 7.75C14.3315 7.75 14.6495 7.6183 14.8839 7.38388C15.1183 7.14946 15.25 6.83152 15.25 6.5V5.25H19V6.5C19 6.83152 19.1317 7.14946 19.3661 7.38388C19.6005 7.6183 19.9185 7.75 20.25 7.75C20.5815 7.75 20.8995 7.6183 21.1339 7.38388C21.3683 7.14946 21.5 6.83152 21.5 6.5V5.25H24C24.3315 5.25 24.6495 5.3817 24.8839 5.61612C25.1183 5.85054 25.25 6.16848 25.25 6.5V10.25H2.75V6.5ZM25.25 24C25.25 24.3315 25.1183 24.6495 24.8839 24.8839C24.6495 25.1183 24.3315 25.25 24 25.25H4C3.66848 25.25 3.35054 25.1183 3.11612 24.8839C2.8817 24.6495 2.75 24.3315 2.75 24V12.75H25.25V24Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <p>Blogs</p>
                                            <h2 class="font-w700 mb-0"><?php echo $blogs; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-6">
                                    <div class="content-box">
                                        <div class="food-data icon-box icon-box-xl bg-dark">
                                            <svg width="23" height="23" viewBox="0 0 28 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.25448 0.509167C5.96882 1.64226 4.0464 3.39315 2.70524 5.56327C1.36408 7.7334 0.657848 10.2359 0.666646 12.787V18.7167C0.667705 19.5871 1.01397 20.4216 1.62948 21.0372C2.245 21.6527 3.07951 21.9989 3.94998 22H7.33331V32C7.33331 32.442 7.50891 32.866 7.82147 33.1785C8.13403 33.4911 8.55795 33.6667 8.99998 33.6667C9.44201 33.6667 9.86593 33.4911 10.1785 33.1785C10.4911 32.866 10.6666 32.442 10.6666 32V2C10.6664 1.71598 10.5936 1.43673 10.4552 1.18872C10.3168 0.940703 10.1173 0.732152 9.87574 0.582831C9.63414 0.43351 9.3584 0.348368 9.07467 0.335477C8.79095 0.322585 8.50863 0.382371 8.25448 0.509167ZM7.33331 18.6833L3.99998 18.7167V12.787C3.99498 11.3525 4.28878 9.93273 4.86268 8.61805C5.43658 7.30336 6.27798 6.12261 7.33331 5.151V18.6833ZM24 2V8.66667C23.9994 9.10852 23.8236 9.53211 23.5112 9.84455C23.1988 10.157 22.7752 10.3328 22.3333 10.3333V2C22.3333 1.55797 22.1577 1.13405 21.8452 0.821489C21.5326 0.508929 21.1087 0.333334 20.6666 0.333334C20.2246 0.333334 19.8007 0.508929 19.4881 0.821489C19.1756 1.13405 19 1.55797 19 2V10.3333C18.5581 10.3328 18.1345 10.157 17.8221 9.84455C17.5097 9.53211 17.3339 9.10852 17.3333 8.66667V2C17.3333 1.55797 17.1577 1.13405 16.8452 0.821489C16.5326 0.508929 16.1087 0.333334 15.6666 0.333334C15.2246 0.333334 14.8007 0.508929 14.4881 0.821489C14.1756 1.13405 14 1.55797 14 2V8.66667C14.0014 9.9923 14.5287 11.2632 15.4661 12.2006C16.4034 13.138 17.6743 13.6652 19 13.6667V32C19 32.442 19.1756 32.866 19.4881 33.1785C19.8007 33.4911 20.2246 33.6667 20.6666 33.6667C21.1087 33.6667 21.5326 33.4911 21.8452 33.1785C22.1577 32.866 22.3333 32.442 22.3333 32V13.6667C23.6589 13.6652 24.9299 13.138 25.8672 12.2006C26.8046 11.2632 27.3319 9.9923 27.3333 8.66667V2C27.3333 1.55797 27.1577 1.13405 26.8452 0.821489C26.5326 0.508929 26.1087 0.333334 25.6666 0.333334C25.2246 0.333334 24.8007 0.508929 24.4881 0.821489C24.1756 1.13405 24 1.55797 24 2Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <p>Products</p>
                                            <h2 class="font-w700 mb-0"><?php echo $products; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="card">
                    <div class="card-header py-3 border-0 px-3">
                            <h4 class="heading m-0">Users</h4>
                        </div>
                <div class="table-responsive full-data">
										<table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
											<thead>
												<tr>
													<th>
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
													</th>
													<!-- <th>Id</th> -->
													<th>Username</th>
													<th>Email</th>

													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>

												<?php
												include('connection.php');
												$query = "SELECT * FROM user";
												$rawdata = $connection->query($query);
												$x = 0;
												while (list($username, $email, $password) = mysqli_fetch_array($rawdata)) {

												?>

													<!-- <tr>
												<td>
													<div class="checkbox me-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check8" required="">
															<label class="custom-control-label" for="check8"></label>
														</div>
													</div>
												</td>
												<td>
													<div class="trans-list">
														<img src="images/trans/1.jpg" alt="" class="avatar avatar-sm me-3">
														<h4>Samantha William</h4>
													</div>
												</td>
												<td><span class="text-primary font-w600">ID 123456789</span></td>
												<td>
													<div class="date">March 25, 2021</div>
												</td>
												<td><h6 class="mb-0">Mana William </h6></td>
												<td><h6 class="mb-0">Jakarta</h6></td>
												<td>
													<div class="d-flex">
														<div class="icon-box icon-box-sm bg-light me-2">
															<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.4401 11C18.2201 11 17.9901 10.93 17.7701 10.88C17.3246 10.7818 16.8868 10.6515 16.4601 10.49C15.9962 10.3212 15.4862 10.33 15.0284 10.5146C14.5706 10.6992 14.1972 11.0466 13.9801 11.49L13.7601 11.94C12.7861 11.3982 11.8911 10.7252 11.1001 9.94001C10.3149 9.14902 9.64192 8.254 9.1001 7.28L9.5201 7.00001C9.96347 6.78292 10.3109 6.40954 10.4955 5.9517C10.6801 5.49386 10.6889 4.98392 10.5201 4.52001C10.3613 4.09243 10.231 3.6548 10.1301 3.21001C10.0801 2.99001 10.0401 2.76001 10.0101 2.53001C9.88867 1.82563 9.51973 1.18775 8.96972 0.731245C8.41972 0.274742 7.7248 0.0296143 7.0101 0.0400054H4.0101C3.57913 0.0359589 3.15235 0.124819 2.75881 0.300536C2.36527 0.476253 2.01421 0.734701 1.72953 1.05829C1.44485 1.38187 1.23324 1.763 1.10909 2.17572C0.984942 2.58844 0.95118 3.02306 1.0101 3.45001C1.54284 7.63939 3.45613 11.5319 6.44775 14.5126C9.43938 17.4934 13.3388 19.3925 17.5301 19.91H17.9101C18.6475 19.9111 19.3595 19.6405 19.9101 19.15C20.2265 18.867 20.4792 18.5202 20.6516 18.1323C20.8239 17.7445 20.9121 17.3244 20.9101 16.9V13.9C20.8979 13.2054 20.6449 12.5366 20.1944 12.0077C19.744 11.4788 19.1239 11.1226 18.4401 11ZM18.9401 17C18.9399 17.142 18.9095 17.2823 18.8509 17.4116C18.7923 17.5409 18.7068 17.6563 18.6001 17.75C18.4884 17.8465 18.3577 17.9185 18.2165 17.9616C18.0753 18.0047 17.9267 18.0177 17.7801 18C14.035 17.5198 10.5563 15.8065 7.89282 13.1303C5.2293 10.4541 3.53251 6.96734 3.0701 3.22001C3.05419 3.07352 3.06813 2.92534 3.1111 2.7844C3.15407 2.64346 3.22517 2.51269 3.3201 2.40001C3.41381 2.29334 3.52916 2.20785 3.65848 2.14922C3.7878 2.0906 3.92812 2.06019 4.0701 2.06001H7.0701C7.30265 2.05483 7.52972 2.13088 7.71224 2.27508C7.89476 2.41927 8.02131 2.62258 8.0701 2.85001C8.1101 3.12334 8.1601 3.39334 8.2201 3.66001C8.33562 4.18715 8.48936 4.70518 8.6801 5.21001L7.2801 5.86001C7.1604 5.91493 7.05272 5.99295 6.96326 6.0896C6.87379 6.18625 6.8043 6.29962 6.75877 6.4232C6.71324 6.54678 6.69257 6.67814 6.69795 6.80973C6.70332 6.94132 6.73464 7.07055 6.7901 7.19C8.2293 10.2728 10.7073 12.7508 13.7901 14.19C14.0336 14.29 14.3066 14.29 14.5501 14.19C14.6748 14.1454 14.7894 14.0765 14.8873 13.9872C14.9851 13.8979 15.0643 13.7901 15.1201 13.67L15.7401 12.27C16.2571 12.4549 16.7847 12.6085 17.3201 12.73C17.5868 12.79 17.8568 12.84 18.1301 12.88C18.3575 12.9288 18.5608 13.0553 18.705 13.2379C18.8492 13.4204 18.9253 13.6475 18.9201 13.88L18.9401 17Z" fill="var(--primary)"/>
															</svg>
														</div>
														<div class="icon-box icon-box-sm bg-light">
															<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3V13C0 13.7956 0.31607 14.5587 0.87868 15.1213C1.44129 15.6839 2.20435 16 3 16H19C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V3C22 2.20435 21.6839 1.44129 21.1213 0.87868C20.5587 0.316071 19.7956 0 19 0ZM20 12.75L15.1 8.35L20 4.92V12.75ZM2 4.92L6.9 8.35L2 12.75V4.92ZM8.58 9.53L10.43 10.82C10.5974 10.9361 10.7963 10.9984 11 10.9984C11.2037 10.9984 11.4026 10.9361 11.57 10.82L13.42 9.53L18.42 14H3.6L8.58 9.53ZM3 2H19C19.1857 2.00149 19.3674 2.05467 19.5245 2.15358C19.6817 2.25249 19.8083 2.39322 19.89 2.56L11 8.78L2.11 2.56C2.19171 2.39322 2.31826 2.25249 2.47545 2.15358C2.63265 2.05467 2.81428 2.00149 3 2Z" fill="var(--primary)"/>
															</svg>
														</div>
													</div>
												</td>
												<td>
													<div class="badge bg-secondary">
														VII A
													</div>
												</td>
												<td>
													<div class="dropdown custom-dropdown float-end">
														<div class="btn sharp tp-btn " data-bs-toggle="dropdown">
															<svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
															<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
															<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
														</div>
													</div>
												</td>
											</tr> -->
													<tr>
														<td>
															<div class="checkbox me-0 align-self-center">
																<div class="custom-control custom-checkbox ">
																	<input type="checkbox" class="form-check-input" id="check81" required="">
																	<label class="custom-control-label" for="check81"></label>
																</div>
															</div>
														</td>
														
														<td>
															<div class="trans-list">
																<!-- <img src="images/trans/2.jpg" alt="" class="avatar me-3"> -->
																<h4><?php echo $username; ?></h4>
															</div>
														</td>
														<td><span class="text-primary font-w600"><?php echo $email; ?></span></td>

														<td>
															<div class="dropdown custom-dropdown float-end">
																<div class="btn sharp tp-btn " data-bs-toggle="dropdown">
																	<svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE" />
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
																	<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
																	<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
																</div>
															</div>
														</td>
													</tr>

												<?php } ?>
											</tbody>
										</table>
									</div>
                </div>
                </div>
                <!--column-->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header py-3 border-0 px-3">
                            <h4 class="heading m-0">Team Details</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive basic-tbl">
                                <table id="teacher-table" class="tech-data" style="min-width: 798px">
                                    <thead>
                                        <tr>
                                            <th>Team Member</th>
                                            <th>Position</th>
                                            <th>Sarlary</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tquery = "SELECT * FROM team";
                                        $tdata = $connection->query($tquery);
                                        while (list($id, $tname, $position, $sarlary, $image) = mysqli_fetch_array($tdata)) {

                                            echo "<tr>";
                                            echo "<td>$tname</td>";
                                            echo    "<td>$position</td>";
                                            echo    "<td>$ $sarlary</td>";
                                            echo "</tr>";
                                        } ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/column-->
            </div>


           
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pb-0 flex-wrap">
                    <h4 class="mb-0">Product</h4>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <?php
                                        include('connection.php');
                                        $query = "SELECT * FROM product";
                                        $rawdata = $connection->query($query);
                                        while (list($id, $name, $price, $star, $image, $category) = mysqli_fetch_array($rawdata)) {
                                            $timage = '../image/product/' . $category . '/' . $image;
                                        ?>
                                            <tr>
                                                <td Style="width:100px;">
                                                    <div class="food-menu">
                                                        <?php
                                                        echo "<img class='me-3 rounded avatar avatar-xl'  src='$timage' alt='DexignZone'>";
                                                        ?>
                                                        <div class="food-info">
                                                            <span class=" badge badge-sm badge-primary mb-2"><?php echo $category; ?></span>
                                                            <h5><a href="javascript:void(0);"><?php echo $name; ?></a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="food-review">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li>
                                                            <h5 class="font-w700"><?php echo $star; ?></h5>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td>
                                                    <ul class="d-flex">
                                                        <li><svg class="me-3" width="62" height="53" viewBox="0 0 62 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z" fill="var(--primary)" />
                                                                <path d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z" fill="var(--primary)" />
                                                                <path d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z" fill="var(--primary)" />
                                                                <path d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z" fill="var(--primary)" />
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <h3 class="mb-0 font-w500 fs-22">$ <?php echo $price; ?></h3>
                                                            <span>Price</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul class="d-flex align-items-center">
                                                        <li><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z" fill="var(--primary)" />
                                                            </svg>
                                                        </li>
                                                        <li class="ms-3">
                                                            <h3 class="mb-0 font-w500 fs-22"><?php echo $star*20; ?>%</h3>
                                                            <span>Interest</span>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown">
                                                        <div class="btn sharp  btn-light" data-bs-toggle="dropdown">
                                                            <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE" />
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <?php
                                                            echo "<a class='dropdown-item' href='../product_update.php?id=$id'>Edit product</a>";
                                                            echo "<a class='dropdown-item' href='product_delete.php?id=$id&image=$image'>Delete</a>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <?php include('js.php'); ?>
