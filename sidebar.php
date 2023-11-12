<div class="brand-link bg-dark p-0 m-0">
    <h1 class="text-center">AIMS</h1>
</div>
<?php $isAdmin = $_SESSION['userInfo']['isAdmin']; ?>
<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="./index.php" class="nav-link active"><i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>



            
            <!-- Services -->
            <li class="nav-item">
                <a href="./ubwoko.php" class="nav-link">
                    <i class="fa fa-bookmark nav-icon"></i>
                    <p>Ubwoko bw'ibirego</p>
                </a>
            </li>
            <?php if($isAdmin != 0){?>
            <li class="nav-item">
                <a href="./data.php" class="nav-link">
                    <i class="fa fa-file nav-icon"></i>
                    <p>Ibirego</p>
                </a>
            </li>
            <?php } ?>
            <?php if($isAdmin == 0){?>
            <li class="nav-item">
                <a href="./users.php" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>Abakozi</p>
                </a>
            </li>
            <?php } ?>
            
            <!-- Settings -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>
                        Igenamiterere
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./profileSetting.php" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>Umwirondoro</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Sohokamo</p>
                        </a>
                    </li>
                </ul>
            </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->