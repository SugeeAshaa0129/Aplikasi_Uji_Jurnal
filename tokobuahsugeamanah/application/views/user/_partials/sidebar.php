<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(1) == 'user' ? 'active': '1' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/user/dashboard') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Akun</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'products' ? 'active': '2' ?>">
        <a class="nav-link " href="<?php echo site_url('user/products/Dashboard_produk')?>">
            <i class="fas fa-fw fa-boxes"></i>

            <span>Produk</span>
        </a>
    </li>

    </li>
    

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('user/products/tentang')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Tentang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('user/products/pesanan')?>">
            <i class="fas fa-fw fa-truck"></i>
            <span>Pesanan Saya</span></a>
    </li>

    <li class="nav-item">
            <?php 
            $keranjang = '<i class="fas fa-fw fa-shopping-cart"></i> <span> Keranjang :  </span>' .$this->cart->total_items()
             ?>
         <a class="nav-link" <?php echo anchor('user/Products/Detail_krj', $keranjang) ?>>
    </li>
</ul>


 