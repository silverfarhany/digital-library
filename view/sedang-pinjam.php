<?php require_once('header.php')?> 
            <div id="layoutSidenav_content">
                 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sedang Dipinjam</h1>                
                        <div class="card mb-4">                            
                        <div class="card mb-4">
                            <div class="card-header bg-dark text-light">
                                <i class="fas fa-table me-1"></i>
                                Data E-book yang sedang anda pinjam
                            </div>
                            <div class="card-body bg-secondary">
                                <table id="datatablesSimple" class="bg-white">
                                    <thead class ="bg-dark text-white">                                      
                                            <th>Judul E-book </th>
                                            <th>Kategori E-book</th> 
                                            <th>Mulai Pinjam</th>  
                                            <th>Akhir Pinjam</th>
                                            <th>File</th>                                                                                                                           
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    <tr>
                                        <?php while ($ebook = $result->fetch_assoc()): ?>                                           
                                            <td> <?= $ebook["judul"]  ?> </td>                                           
                                            <td> <?= $ebook["kategori_buku"]==1?"Buku Paket":($ebook["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah") ?> </td>
                                            <td> <?= $ebook["start_pinjam"]  ?> </td>  
                                            <td> <?= date('Y-m-d', strtotime($ebook['end_pinjam']. '- 1 days'));  ?> </td> 
                                            <td><a target="_blank"href="tampil-ebook.php?id=<?= $ebook["id_pinjam"]?>"><?= $ebook["file"]?></a></td>                                                                                                                     
                                        </tr>
                                        <?php endwhile;?>                  
                                   
                                    </tbody>
                                </table>
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

