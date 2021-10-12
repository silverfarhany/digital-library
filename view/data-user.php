<?php require_once('header-admin.php')?>
            <div id="layoutSidenav_content">
                 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data User</h1>                
                        <div class="card mb-4">                            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead class='bg-success'>
                                        <tr>
                                            <th>Id User</th>                                           
                                            <th>Nama</th>
                                            <th>Username</th> 
                                            <th>Email</th>  
                                            <th>NIS / NIP</th> 
                                            <th>Kategori User</th> 
                                            <th> </th>                                                                                    
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    <tr>
                                        <?php while ($user = $result->fetch_assoc()): ?>
                                            <td> <?= $user["id_user"] ?></td>
                                            <td> <?= $user["nama"] ?> </td>
                                            <td> <?= $user["username"]  ?> </td>                                    
                                            <td> <?= $user["email"]  ?> </td> 
                                            <td> <?= $user["nis_nip"]  ?> </td> 
                                            <td> <?= $user["who"]==1?"Admin":($user["who"]==2?"User":"Super Admin") ?></td>                                                                
                                            <td> 
                                            <a class="btn btn-danger" name="block" href ="block-user.php?id=<?php echo $user['id_user']?>"><i class="fa fa-times-circle"></i></button>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>                                       
                                    </tbody>                                    
                                </table>    
                                <a href="cetak_dataUser.php" class="btn btn-success" style="float:right"> <i class="fa fa-print"></i> </a>                            
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

