<?php require_once('header.php')?> 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 bg-pink">
                        <h1 class="mt-4">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Hi, <?php echo $_SESSION['username'] ?></li>
                        </ol>     
                        <br></br>                        
                        <h2>Daftar E-book yang tersedia </h2>
                            <table id="datatablesSimple" class="table-stripped">
                                    <thead class='bg-success text-white'>
                                        <tr>
                                            <th>Judul</th>                                           
                                            <th>Penerbit</th>
                                            <th>Lisensi</th>                                               
                                            <th>Kategori</th> 
                                            <th>Pinjam</th>                                                                                   
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    <tr>
                                        <?php while ($ebook = $result->fetch_assoc()): ?>
                                            <td> <?= $ebook["judul"] ?></td>
                                            <td> <?= $ebook["penerbit"]==""?"-":$ebook["penerbit"]  ?> </td>
                                            <td> <?= $ebook["lisensi"]==""?"-":$ebook["lisensi"]  ?> </td>                                          
                                            <td> <?= $ebook["kategori_buku"]==1?"Buku Paket":($ebook["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah")  ?> </td>                                                                               
                                            <td>
                                                <form method="post">
                                                    <?php 
                                                        $id_verif = $_SESSION["id"];
                                                        $ebook_verif = $ebook["id_ebook"];                                                        
                                                        $hasil_verif = $conn->query("SELECT * FROM data_pinjaman WHERE id_user = '$id_verif' AND id_ebook = '$ebook_verif' ");
                                                        if(mysqli_num_rows($hasil_verif) > 0){
                                                            while($verif = $hasil_verif->fetch_assoc()):                                                                
                                                                $tanggal_pinjam = date_create($verif['end_pinjam']);
                                                                $tanggal_test = date("Y-m-d");
                                                                $tangga_sekarang = date_create($tanggal_test);                                                                
                                                                // $selisih = date_diff($tangga_sekarang, $tanggal_pinjam);
                                                                // $selisih_string = $selisih ->format('%a');
                                                            
                                                            if($tanggal_pinjam > $tangga_sekarang){     

                                                                echo ("Sedang Dipinjam");
                                                            }
                                                    else{
                                                    ?>
                                                    <input type="hidden" name="id_ebook" value="<?= $ebook["id_ebook"] ?>">                                                                                   
                                                    <button class="btn btn-primary btn-block" type="submit" name="pinjam"> Pinjam</button>
                                                    <?php }endwhile;}else{
                                                        ?>
                                                    <input type="hidden" name="id_ebook" value="<?= $ebook["id_ebook"] ?>">                                                                                   
                                                    <button class="btn btn-primary btn-block" type="submit" name="pinjam"> Pinjam</button>
                                                    <?php }?>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>                                   
                                    </tbody>
                                </table>
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
