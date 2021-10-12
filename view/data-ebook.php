<?php require_once('header-admin.php')?>
            <div id="layoutSidenav_content">
                 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data E-book</h1>                
                        <div class="card mb-4">                            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class='bg-success text-white'>
                                        <tr>
                                            <th>Judul</th>                                           
                                            <th>Penerbit</th>
                                            <th>Lisensi</th> 
                                            <th>file</th>  
                                            <th>Kategori</th> 
                                            <th colspan="2"> </th>                                                                                    
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    <tr>
                                        <?php while ($ebook = $result->fetch_assoc()): ?>
                                            <td> <?= $ebook["judul"] ?></td>
                                            <td> <?= $ebook["penerbit"]==""?"-":$ebook["penerbit"]  ?> </td>
                                            <td> <?= $ebook["lisensi"]==""?"-":$ebook["lisensi"]  ?> </td>
                                            <td><a href="ebook/<?= $ebook["file"]?>"><?= $ebook["file"]?></a></td>
                                            <td> <?= $ebook["kategori_buku"]==1?"Buku Paket":($ebook["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah")  ?> </td>                                                                               
                                            <td> 
                                            <a class="btn btn-warning" name="ubah" href ="ubah-ebook.php?id=<?php echo $ebook['id_ebook']?>"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td> 
                                            <a class="btn btn-danger" name="hapus" href ="hapus_ebook.php?id=<?php echo $ebook['id_ebook']?>"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>                                       
                                    </tbody>                                    
                                </table>    
                                <a href="cetak_dataBuku.php" class="btn btn-success" style="float:right"> <i class="fa fa-print"></i> </a>                            
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

