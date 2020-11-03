<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome'); ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SEPATUKU</div>
      </a>

      <!-- Divider -->
     <!-- <hr class="sidebar-divider my-0">-->

      <!-- Nav Item - Dashboard -->
      <!--
      <li class="nav-item active">
        <a class="nav-link" href="<?php // echo base_url('dashboard'); ?>">
          <i class="fas fa-fw fa-quote-right"></i>
          <span>Semua Produk</span></a>
      </li>
-->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        KATEGORI PRODUK
      </div>

    

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/aksesoris');?>">
          <i class="fas fa-fw fa-shoe-prints"></i>
          <span>Aksesoris Sepatu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/sepatu_pria');?>">
          <i class="fas fa-fw fa-running"></i>
          <span>Sepatu Pria</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/sepatu_wanita');?>">
          <i class="fas fa-fw fa-female"></i>
          <span>Sepatu Wanita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/sepatu_anak');?>">
          <i class="fas fa-fw fa-baby"></i>
          <span>Sepatu Anak-Anak</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/peralatan_olahraga');?>">
          <i class="fas fa-fw fa-futbol"></i>
          <span>Peralatan Olahraga</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <?php echo form_open('welcome/cari');?>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" name="katakunci" placeholder="Ketik yang anda cari..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-warning" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        <?php echo form_close();?>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

        
  <div class="navbar">
    <ul class="nav navbar-nav navbar-right ">
      <li>
        
        <?php 
          $keranjang='<i class="fas fa-shopping-cart text-success"></i> : '.$this->cart->total_items().' Items';
          echo anchor('dashboard/detail_keranjang', $keranjang);  
        ?>
       
      </li>
    </ul>
    <div class="topbar-divider d-none d-sm-block"></div>

            <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->userdata('username')){;?>
              <li>
                <div>Selamat Datang : <?php echo $this->session->userdata('username');?></div>
              </li>
              
              <li>
                <?php echo anchor('auth/logout_user','<i class="fa fa-sign-out-alt ml-2"></i> Logout');?>
              </li>
                <?php }else{ ;?>
                  <li>
                    <?php echo anchor('auth/login','<i class="fa fa-user text-secondary mr-2"></i>Login');?>
                  </li>
                  <?php } ;?>
            </ul>
  </div>
          

            

          </ul>

        </nav>
        <!-- End of Topbar -->