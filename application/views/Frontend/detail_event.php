    <!-- ======= Hero Section ======= -->
    <section id="hero-event">


    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= event ======= -->
      <section id="services" class="service">
        <div class="container" data-aos="fade-up">
          <div class="section-title" data-aos="fade-up">
            <h2>Detail</h2>
            <p>Detail Event</p>
          </div>

          <!-- ======= About ======= -->
          <section id="about" class="detailes">
            <div class="container">

              <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                  <img src="<?php echo base_url(); ?>assets/foto/<?php echo $view_kgt->foto_flyer ?>" class="" width="320" height="250" alt="">
                </div>
                <div class="col-md-8 " data-aos="fade-up">
                  <h3><?= $view_kgt->judul; ?></h3>
                  <p class="fst-italic">
                    <span>Tanggal Event : </span><?= $view_kgt->tanggal; ?><br>
                    <span>Kapasitas : </span><?= $view_kgt->kapasitas; ?><br>
                    <span>Harga Tiket : </span><?= $view_kgt->harga_tiket; ?><br>
                    <span>Narsumber : </span><?= $view_kgt->narasumber; ?><br>
                    <span>Tempat : </span><?= $view_kgt->tempat; ?><br><span>Jenis Kegiatan : </span><?= $view_kgt->nama; ?><br>
                  </p>
                  <?php if (!$this->session->has_userdata('USERNAME')) { ?>
                    <div class="btn btn-outline-success"><a href="<?= base_url('Login') ?>">Daftar Event</a></div>
                  <?php } ?>
                  <?php if ($this->session->has_userdata('USERNAME')) { ?>
                    <div class="btn btn-outline-success"><a href="<?= base_url('DaftarEvent') ?>?id=<?= $view_kgt->id ?>">Daftar Event</a></div>
                  <?php } ?>
                </div>

              </div>
            </div>
          </section><!-- End about -->


        </div>
      </section>
      <!-- End event -->
    </main>