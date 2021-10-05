<!DOCTYPE html>
<html lang="en">
<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><? echo $title; ?></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">                   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="edit-profil.php">Edit Profil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link <?php echo strpos($url, 'index-admin.php') == true ? "active" : "" ?>" href="index-admin.php">                            
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Administrasi</div>
                            <a class="nav-link <?php echo strpos($url, 'data-ebook.php') == true ? "active" : "" ?>" href="data-ebook.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data E-book
                            </a>
                            </a>                     
                            <a class="nav-link <?php echo strpos($url, 'data-pinjam.php') == true ? "active" : "" ?>" href="data-pinjam.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                                Data Peminjaman                            
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">                               
                            </div>     
                            <div class="sb-sidenav-menu-heading">Fitur</div>                                     
                            <a class="nav-link collapsed <?php echo strpos($url, 'upload-ebook.php') == true ? "active" : "" ?>" href="upload-ebook.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                                Upload E-book                                
                            </a>                                                      
                            <a class="nav-link <?php echo strpos($url, 'logout.php') == true ? "active" : "" ?>" href="logout.php"> 
                            <div class="sb-nav-link-icon"><i class="fas fa-unlock-alt"></i></div>                              
                                Logout 
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['username'] ?>
                    </div>
                </nav>
            </div>