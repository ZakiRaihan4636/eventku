    <!-- ======= Hero Section ======= -->
    <section id="hero-event">


    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= event ======= -->
      <section id="services" class="service">
        <div class="container" data-aos="fade-up">
          <div class="section-title" data-aos="fade-up">
            <h2>Daftar</h2>
            <p>Daftar Event</p>
          </div>

          <div class="row gy-4">
            <?php foreach ($list_kgt as $dft) : ?>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div class="icon"> <img src="<?php echo base_url(); ?>assets/foto/<?php echo $dft->foto_flyer ?>" width="200" height="150"></div>
                  <h4><a href=""><?= $dft->judul; ?> </a></h4>
                  </p>
                  <p><?= $dft->tanggal; ?></p>
                  <p><?= $dft->narasumber; ?></p>
                  <a style="margin-left:227px" href="event/view?id=<?php echo $dft->id ?>" class="btn btn-success mt-2">Detail Event</a>

                </div>
              </div>
            <?php endforeach; ?>


          </div>
      </section>
      <!-- End event -->
    </main>