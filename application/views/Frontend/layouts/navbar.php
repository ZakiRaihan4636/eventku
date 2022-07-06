  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h5 style="color: white;"><a href="index.html"><img src="<?php echo base_url(''); ?>assets/assets/img/logo.png" alt="" class="img-fluid"></a>Event
          Ku
        </h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo base_url('Home') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('event') ?>">Event</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('gallery') ?>">Gallery</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('tim') ?>">Tim Kami</a></li>
          <li>
            <a class="nav-link scrollto" href="#">
              <?php
              if ($this->session->has_userdata('USERNAME')) {
                echo $this->session->userdata('USERNAME');
              }

              ?>
            </a>
          </li>
          <?php if ($this->session->has_userdata('USERNAME')) { ?>
            <li><a class="mx-2 btn btn-outline-success d-flex p-2" onclick="confirm('Apakah Anda Yakin Ingin Keluar');" href="<?php echo base_url('Login/logout') ?> ">Logout</a></li>
          <?php } ?>

          <?php if (!$this->session->has_userdata('USERNAME')) { ?>
            <li><a class="mx-2 btn btn-outline-success d-flex p-2" href="<?php echo base_url('Login/') ?>">Login</a></li>
            <li><a class="mx-2 btn btn-success d-flex p-2" href="<?php echo base_url('DaftarAkun') ?>">Daftar</a></li>
          <?php } ?>





        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->