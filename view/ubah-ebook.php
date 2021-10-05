<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Ubah Data E-book</a>
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
                        <li><a class="dropdown-item" href="#!">Edit Profil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="index-admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Administrasi</div>
                            <a class="nav-link" href="data-ebook.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data E-book
                            </a>  
                            <a class="nav-link" href="data-pinjam.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Peminjaman
                            </a>                                                                                             
                            <a class="nav-link collapsed" href="upload-ebook.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Upload E-book                                
                            </a>                                                      
                            <a class="nav-link" href="tables.html">                                
                                Logout 
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

            <div class="row justify-content-center">
                            <div class="col-md-6">
                                   <h3 class="text-center font-weight-light my-4">Edit data E-book</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="lisensi" type="text" value="<?php echo $ubah['lisensi']?>" placeholder="Lisensi">                                                        
                                                        <label for="nama">Lisensi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="penerbit" type="text" value="<?php echo $ubah['penerbit']?>" placeholder="Penerbit" />
                                                        <label for="username">Label Penerbit</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="judul" type="text" required="" value="<?php echo $ubah['judul']?>" placeholder="Judul E-book" />
                                                <label for="email">Judul E-book</label>
                                            </div>
                                            <div class="row mb-3">                                            
                                                    <div class="form-floating mb-3">
                                                        <textarea  name="tags" rows="4" cols="132" required="" placeholder="Insert some Tags or Comment"><?php echo $ubah['tags']?> </textarea>                                        
                                                    </div>
                                                </div>                                
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="uploadedfile" type="file"  accept=".pdf"/>                                        
                                                </div>
                                                 <div>
                                                <br>                                                    
                                                    <input type="radio" id="guru" name="tipebuku" required="" value=1 <?php echo $ubah['kategori_buku']==1?'checked':''?>>
                                                    <label for="guru">Buku Paket</label>
                                                    <br></br>
                                                    <input type="radio" id="siswa" name="tipebuku" required="" value=2 <?php echo $ubah['kategori_buku']==2?'checked':''?>>
                                                    <label for="siswa">Buku Fiksi</label>
                                                    <br></br>
                                                    <input type="radio" id="admin"  name="tipebuku" required="" value=3 <?php echo $ubah['kategori_buku']==3?'checked':''?>>
                                                    <label for="admin">Karya Ilmiah</label>                                                    
                                                </br>
                                                </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit" name="edit">Edit E-book</button></div>
                                            </div>
                                        </form>
                                    </div>

            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Silverfarhany 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

