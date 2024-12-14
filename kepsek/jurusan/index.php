<?php
include('../../layouts/header.php');
?>
<div id="app">
    <?php
    include('../layouts/aside.php');
    ?>
    <div id="main">
        <?php
        include('../layouts/nav.php');
        ?>
        <div class="main-content container-fluid">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Daftar Jurusan
                    </div>
                    <div class="card-body">

                        <div class="row justify-content-end">
                            <div class="col-md-6 mb-1">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Jurusan . . ." aria-label="Recipient's username" aria-describedby="button-addon2" autofocus>
                                    <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </div>
                        <table class='table table-striped' id="table1">
                            <thead>
                                <tr>
                                    <th>Nisn</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Graiden</td>
                                    <td>vehicula.aliquet@semconsequat.co.uk</td>
                                    <td>076 4820 8838</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dale</td>
                                    <td>fringilla.euismod.enim@quam.ca</td>
                                    <td>0500 527693</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nathaniel</td>
                                    <td>mi.Duis@diam.edu</td>
                                    <td>(012165) 76278</td>
                                    <td>
                                        <span class="badge bg-danger">Inactive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Darius</td>
                                    <td>velit@nec.com</td>
                                    <td>0309 690 7871</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
<?php
include('../../layouts/footer.php');
?>