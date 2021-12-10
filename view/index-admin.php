<?php

require_once('konekdb.php');
require_once('header-admin.php');
$dt_user = "SELECT count(id_user) as jumlah_user from data_user"; // query menghitung jumlah data user
$hasil_user = $conn->query($dt_user)->fetch_assoc();
$dt_ebook = "SELECT count(id_ebook) as jumlah_ebook from data_ebook"; //query menghitung jumlah data ebook
$hasil_ebook = $conn->query($dt_ebook)->fetch_assoc();
$dt_pinjaman = "SELECT count(id_pinjam) as jumlah_pinjaman from data_pinjaman"; //query menghitung jumlah data pinjaman
$hasil_pinjaman = $conn->query($dt_pinjaman)->fetch_assoc();

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Home Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Hi, <?php echo $_SESSION['username'] ?></li>
            </ol>
            <!-- <center>
                        <img src="assets/img/o.png" style="" class="card border-0 rounded-lg mt-5" alt="Logo SMA Mekar Arum" >
                        <h2 {text-align: center;}> Sejarah SMA Mekar Arum </h2> 
                        <h5>Nama Sekolah : SMA Mekar Arum</h5>
                        <h5>Alamat Sekolah : Jl. Raya Cinunuk No. 82, Bandung</h5>
                        <h5>Berdiri tahun : 27 Juni 1985</h5>
                        <h5> SMA Mekar Arum adalah sekolah tingkat menengah atas di wilayah Bandung Timur beralamat di Jl. Raya Cinunuk No. 82, Bandung yang didirikan pada tahun 1991 dan berada dibawah naungan Yayasan Pendidikan dan Kebudayaan Mekar Arum (YPK Mekar Arum). 
YPK Mekar Arum sendiri, berdiri sejak 27 Juni 1985 yang dahulu memiliki nama Yayasan Pendidikan Mekar Arum (YAPENMA). Lalu, pada tahun 2006 YAPENAMA merubah kembali nama nya menjadu Yayasan Pendidikan dan Kebudayaan Mekar Arum (YPK Mekar Arum). Pergantian nama tersebut tercatat dalam akta No. 9 tanggal 16 Juni 2006 dan pengesahan dari Dephumkam Republik Indonesia Direktorat Jendral Administrasi Hukum Umum No. C-2847.HT.01-02 Tahun 2006. Pergantian nama ini, menjadi wujud realisasi dari Yayasan untuk bebenah diri dan menjawab tuntutan masyarakat, DU/DI yaitu menyediakan wahana lain untuk lebih meningkatkan kreativitas dan mengembangkan talenta yang dimiliki generasi muda dan pengembangan sarana Pendidikan yang Aman, Respentatif, Kondusif, dan berbudaya lingkungan.</h5>
                        </center> -->
            <div class="col-xl-5 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h3><?php echo $hasil_user['jumlah_user'] . " Data User" ?></h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="data-user.php">Data User</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h3><?php echo $hasil_ebook['jumlah_ebook'] . " Data Ebook" ?></h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="data-user.php">Data Ebook</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h3><?php echo $hasil_pinjaman['jumlah_pinjaman'] . " Data Pinjaman" ?></h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="data-user.php">Data Peminjaman</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</main>
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