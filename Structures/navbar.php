<nav class="sb-topnav navbar navbar-expand navbar-dark " style="background: #0D6EFD">
    <!-- Navbar Brand-->
    <img src="../assets/img/logo.jpg"alt="Logo" style="border-radius:100%;height: 40px;width:40px;margin-left: 5px ">
    <a class="navbar-brand ps-3" href="index.html" >Focep Micro Finance</a>
    <!-- Sidebar Toggle-->
    <button style="color: white" class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button style="background: White; color: darkblue" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
        <li class="nav-item dropdown" >
            <a style="color: white"class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
                <b>
                    <?php
                        if(isset($_GET['admin'])){
                            include "../controls/db.php";
                            $matricule=$_GET['admin'];
                            $stmt=$pdo->prepare("Select * From administrateurs where matriculeAdm=?");
                            $stmt->execute([$matricule]);
                            $admin=$stmt->fetch();
                            $result=$admin['nomAdm'];
                            echo $result;
                        }else if(isset($_GET['agent'])){
                            include "../controls/db.php";
                            $matricule=$_GET['agent'];
                            $stmt=$pdo->prepare("Select * From agent where matriculeAgt=?");
                            $stmt->execute([$matricule]);
                            $agent=$stmt->fetch();
                            $result=$agent['nomAgt'];
                            echo $result; 
                        }

                        
                    ?>
                </b>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../controls/Logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>