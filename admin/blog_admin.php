<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog_admin</title>
    <?php include('css.php'); ?>
</head>

<body>
    <?php include('loader.php'); ?>
    <div id="main-wrapper" class="wallet-open active">
        <?php include('header.php'); ?>
        <?php include('navheader.php') ?>
        <?php include("sidebar.php"); ?>
   
    <?php error_reporting(1); ?>
    <!-- product -->
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pb-0 flex-wrap">
                    <h4 class="mb-0">Blog</h4>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <?php
                                        include('connection.php');
                                        $query = "SELECT * FROM blog";
                                        $rawdata = $connection->query($query);
                                        while (list($id, $name, $image, $description, $currentdate, $postuser) = mysqli_fetch_array($rawdata)) {
                                            $timage = '../image/blog/' . $postuser . '/' . $image;
                                        ?>
                                            <tr>
                                                <td Style="width:100px;">
                                                    <div class="food-menu">
                                                        <?php
                                                        echo "<img class='me-3 rounded avatar avatar-xl'  src='$timage' alt='DexignZone'>";
                                                        ?>
                                                        <div class="food-info">
                                                            <span class=" badge badge-sm badge-primary mb-2"><?php echo $postuser; ?></span>
                                                            <h5><a href="javascript:void(0);"><?php echo $name; ?></a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="box" >
                                                    <ul class="food-review" >
                                                        <!-- <li><i class="fa fa-star"></i></li> -->
                                                        <li>
                                                            <p class="font-w500 fs-14"><span><?php echo substr($description, 0, 30)."..."; ?></span></p>
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
                                                            <h3 class="mb-0 font-w500 fs-22"><?php echo $currentdate; ?></h3>
                                                            <span>Updated date</span>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <td class="text-end">
                                                    <div pass="dropdown custom-dropdown">
                                                        <div class="btn sharp  btn-light" data-bs-toggle="dropdown">
                                                            <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE" />
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <?php echo "<a class='dropdown-item' href='blog_delete.php?id=$id'>Delete</a>"; ?>
                                                            <!-- <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Option 3</a> -->
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
     </div>
    <!-- product end -->
    <?php include('js.php'); ?>
</body>

</html>