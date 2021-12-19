<?php require_once('header-admin.php') ?>
<div class="container">
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-body">
                    <h3 class="text-center font-weight-light my-4">Tambah Admin</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="nama" type="text" required="" placeholder="Enter your Name" />
                                    <label for="nama">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="username" type="text" required="" placeholder="Enter your Username" />
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" required="" placeholder="name@example.com" />
                            <label for="email">Email address</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Create a password" />
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="confirm" type="password" required="" placeholder="Confirm password" />
                                    <label for="confirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="Nis_Nip" type="text" required="" placeholder="Enter your NIS / NIP" />
                            <label for="Nis_Nip"> NIP</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-mt-4"><button class="btn btn-primary btn-block" type="submit" name="tambah">Add Admin</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
<div id="layoutAuthentication_footer">
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
</body>

</html>