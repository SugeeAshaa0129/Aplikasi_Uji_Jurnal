<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(1) == 'admin' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/admin/dashboard') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Akun</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products/new') ?>">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Tambah Produk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>List Produk</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products/tentang')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Tentang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/invoice/index/')?>">
            <i class="fas fa-fw fa-truck"></i>
            <span>Daftar Pesanan</span></a>
    </li>
</ul>


 