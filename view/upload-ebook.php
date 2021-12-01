<?php require_once('header-admin.php')?>
            <div class="container">
            <div id="layoutSidenav_content">        
            <div class="row justify-content-center">
                            <div class="col-lg-5">
                                   <h3 class="text-center font-weight-light my-4">Upload E-book</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="lisensi" type="text" placeholder="Lisensi" />
                                                        <label for="nama">Lisensi (Jika ada)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="penerbit" type="text" placeholder="Penerbit" />
                                                        <label for="username">Label Penerbit (Jika ada)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="judul" type="text" placeholder="Judul E-book" />
                                                <label for="email">Judul E-book</label>
                                            </div>
                                            <div class="row mb-3">                                            
                                                    <div class="form-floating mb-3">
                                                        <textarea  name="tags" rows="4" cols="121" required="" placeholder="Insert some Tags or Comment"> </textarea>                                        
                                                    </div>
                                                </div>                                
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="uploadedfile" type="file"   accept=".pdf" required="" />                                        
                                                </div>
                                                 <div>
                                                <br>
                                                    <input type="radio" id="guru" name="tipebuku" required="" value=1>
                                                    <label for="guru">Buku Paket</label>
                                                    <br></br>
                                                    <input type="radio" id="siswa" name="tipebuku" required="" value=2>
                                                    <label for="siswa">Buku non-Paket</label>
                                                    <br></br>
                                                    <input type="radio" id="admin"  name="tipebuku" required="" value=3>
                                                    <label for="admin">Ilmu Pengetahuan</label>
                                                </br>
                                                </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit" name="upload">Upload E-book</button></div>
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

