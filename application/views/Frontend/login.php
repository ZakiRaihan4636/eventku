<!-- ======= Hero Section ======= -->
<section id="hero-login">

</section><!-- End Hero -->

<main id="main">
  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Login</h2>
        <p>Login EventKu</p>
      </div>
    </div>

    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-md-6 offset-md-3">
          <div class="card my-0">
            <div class="card-body cardbody-color p-lg-5">
              <?php echo form_open('login/otentikasi', ['action' => 'post']); ?>

              <div class="text-center">
                <img src="https://i.ibb.co/yVGxFPR/2.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
              </div>

              <div class="mb-3">
                <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
              </div>
              <div class="text-center"><button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
              <div id="emailHelp" class="form-text text-center mb-5 text-dark">Belum daftar akun? <a href="<?php echo base_url('DaftarAkun') ?>" class="text-dark fw-bold"> Daftar Akun</a>
              </div>
            </div>
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>