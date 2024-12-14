    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <img src="<?= BASE_URL ?>/assets/images/logo.svg" alt="" srcset="">
            </div>
            <div class="sidebar-menu">
                <ul class="menu">


                    <li class='sidebar-title'>Home</li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/dashboard" class='sidebar-link'>
                            <i data-feather="info" width="20"></i>
                            <span>Info PPDB</span>
                        </a>
                    </li>

                    <li class='sidebar-title'>Menu</li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'data-formulir') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/data-formulir" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Data Formulir</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'berkas') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/berkas" class='sidebar-link'>
                            <i data-feather="upload-cloud" width="20"></i>
                            <span>Upload Berkas</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'pembayaran') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/pembayaran" class='sidebar-link'>
                            <i data-feather="dollar-sign" width="20"></i>
                            <span>Pembayaran</span>
                        </a>

                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
