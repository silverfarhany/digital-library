<!DOCTYPE html>
<html lang="en">
<?php require_once('header-admin.php') ?>
<div class="container">
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h3 class="text-center font-weight-light my-4">Edit data E-book</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="lisensi" type="text" value="<?php echo $ubah['lisensi'] ?>" placeholder="Lisensi">
                                    <label for="nama">Lisensi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="penerbit" type="text" value="<?php echo $ubah['penerbit'] ?>" placeholder="Penerbit" />
                                    <label for="username">Label Penerbit</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="judul" type="text" required="" value="<?php echo $ubah['judul'] ?>" placeholder="Judul E-book" />
                            <label for="email">Judul E-book</label>
                        </div>
                        <div class="row mb-3">
                            <div class="form-floating mb-3">
                                <textarea name="tags" rows="4" cols="114" required="" placeholder="Insert some Tags or Comment"><?php echo $ubah['tags'] ?> </textarea>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="uploadedfile" type="file" accept=".pdf" />
                        </div>
                        <div>
                            <br>
                            <div class="form-group inline">
                                <label for="kategori" class="col-forms-label">Kategori</label>
                                <div class="col-sm-5">
                                    <select id="kategori" name="kategori" class="form-control" value="<?php echo $ubah['nama_kategori'] ?>" placeholder="Kategori">
                                        <?php $query_kategori = mysqli_query($conn, "SELECT * FROM kategori_ebook");
                                        while ($kategori = mysqli_fetch_assoc($query_kategori)) {
                                        ?>
                                            <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <label for="kategori Detail" class="col-forms-label">Detail Kategori</label>
                                <div class="col-sm-5">
                                    <select id="detail" name="detail" class="form-control" value="<?php echo $ubah['id_detail'] ?>" placeholder="Detail Kategori">
                                        <?php $query_detail = mysqli_query($conn, "SELECT * FROM detail_kategori");
                                        while ($detail = mysqli_fetch_assoc($query_detail)) {
                                        ?>
                                            <option value="<?= $detail['id_detail'] ?>"><?= $detail['nama_detail'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 mb-0">
                                <div class="d-md-3"><button class="btn btn-primary btn-block" type="submit" name="edit">Edit E-book</button></div>
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