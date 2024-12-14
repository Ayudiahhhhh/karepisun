<?php
include('../layouts/header.php');
include('../../database/koneksi.php');
?>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="../../assets/images/favicon.svg" height="48" class='mb-4'>
                                <h3>Sign Up</h3>
                                <p>Please fill the form to register.</p>
                            </div>
                            <form action="../function/register.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" id="first-name-column" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Telepon</label>
                                            <input type="number" id="last-name-column" class="form-control" name="no_hp" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="username-column">Username</label>
                                            <input type="text" id="username-column" class="form-control" name="username" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Password</label>
                                            <input type="password" id="country-floating" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Email</label>
                                            <input type="email" id="company-column" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Level</label>
                                            <select class="form-select" name="level" required>
                                                <option value="admin">Admin</option>
                                                <option value="kepsek">Kepsek</option>
                                                <option value="guru">Guru</option>
                                                <option value="panitia">Panitia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <a href="../login">Have an account? Login</a>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right">Register</button>
                                </div>
                            </form>

                            <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('../layouts/footer.php');
        ?>