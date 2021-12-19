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
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    #container {
        height: 100%;
        width: 100%;
        font-size: 0;
    }

    #left,
    #middle,
    #right {
        display: inline-block;
        *display: inline;
        zoom: 1;
        vertical-align: top;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Home Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Hi, <?php echo $_SESSION['username'] ?></li>
            </ol>
            <div class="col-xl-5 col-md-6" id="left">
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
            <div class="col-xl-5 col-md-6" id="middle">
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
            <div class="col-xl-5 col-md-6" id="middle">
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
        <table id="datatablesSimple">
            <thead class='center; bg-success text-white md-3'>
                <br></br>
                <h4 style="text-align:center"> Ebook Paling Banyak Dipinjam</h4>
                <tr style="height:20px">
                    <th>Judul</th>
                    <th>Penerbit</th>                                                       
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php while ($ebook = $result->fetch_assoc()) : ?>
                        <td> <?= $ebook["judul"]== "" ? "-" : $ebook["judul"] ?></td>
                        <td> <?= $ebook["penerbit"] == "" ? "-" : $ebook["penerbit"]  ?> </td>                                                 
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
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