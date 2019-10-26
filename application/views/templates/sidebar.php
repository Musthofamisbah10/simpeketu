<!-- sidebar -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">          
                    <li class="nav-item ">
                        <a class="nav-link active" href="<?= base_url('dashboard') ?>" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kategori') ?>" aria-expanded="false"><i class="fa fa-fw fa-rocket"></i>Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penjualan') ?>" aria-expanded="false"><i class="fas fa-fw fa-chart-pie"></i>Data Penjualan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('peramalan') ?>" aria-expanded="false"><i class="fab fa-fw fa-wpforms"></i>Peramalan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>