<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">


        <!--        <div class="text-center-->
        <!--                brand-text font-weight-light ">-->
        <!--            Kalpataru Charitable Trust-->
        <!--        </div>-->
        <div class="text-center
                brand-text font-weight-light ">
            Student ERP
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <p class="d-block"><?php echo $_SESSION['user_name'] ?></p>
            </div>
        </div>

        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library-->

                <li class="nav-item">
                    <a href="./viewforms.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="./logout.php" class="nav-link">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
