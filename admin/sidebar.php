{% load static %}

<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Dashboard -->
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/myadmin/dashboard/">Home</a></li>
                </ul>
            </li>
            <!-- LearnPress -->
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">LearnPress</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/myadmin/courses/">Courses</a></li>
                    <li><a href="/myadmin/lessons/">Lessons</a></li>
                    <li><a href="/myadmin/course_categories/">Categories</a></li>
                    <li><a href="/myadmin/orders/">Orders</a></li>
                    <li><a href="/myadmin/payments/">Payments</a></li>
                </ul>

            </li>
            <!-- Knowledge -->
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">post_add</i>
                    <span class="nav-text">Team</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="team_admin.php">All Team Member</a></li>
                    <li><a href="team_add.php">Add New Team Member</a></li>
                    <li><a href="/myadmin/knowledge_categories/">Categories</a></li>

                </ul>

            </li>
            <!-- Users -->
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">person</i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="user.php">All Users</a></li>
                    <li><a href="/myadmin/subscribers/">All Subscribers</a></li>
                </ul>

            </li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->