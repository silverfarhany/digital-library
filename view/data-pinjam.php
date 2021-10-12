<?php require_once('header-admin.php')?>
            <div id="layoutSidenav_content">
                 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pinjaman</h1>                
                        <div class="card mb-4">                            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data E-book yang dipinjaman
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class='bg-success'>
                                        <tr>
                                            <th>Nama User</th>                                           
                                            <th>NIS / NIP</th>                                           
                                            <th>Judul E-book </th>
                                            <th>Kategori E-book</th> 
                                            <th>Mulai Pinjam</th>  
                                            <th>Akhir Pinjam</th>                                                                                                                           
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    <tr>
                                        <?php while ($ebook = $result->fetch_assoc()): ?>
                                            <td> <?= $ebook["nama"] ?></td>
                                            <td> <?= $ebook["nis_nip"]  ?> </td>
                                            <td> <?= $ebook["judul"]  ?> </td>                                           
                                            <td> <?= $ebook["kategori_buku"]==1?"Buku Paket":($ebook["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah") ?> </td>
                                            <td> <?= $ebook["start_pinjam"]  ?> </td>  
                                            <td> <?= $ebook["end_pinjam"]  ?> </td>                                                                                                                       
                                        </tr>
                                        <?php endwhile;?>                                       
                                    </tbody>
                                </table>
                                <a href="cetak_peminjaman.php" class="btn btn-success" style="float:right"> <i class="fa fa-print"></i> </a>
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

