    <!-- ======= Hero Section ======= -->
    <section id="hero-daftar">

    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Registrasi</h2>
            <p>Registrasi EventKu</p>
          </div>
        </div>

        <div class="mask d-flex align-items-center h-100 gradient-custom-3" data-aos="fade-up">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Registrasi Akun</h2>

                    <?php echo form_open('DaftarAkun/save', ['action' => 'post']); ?>


                    <div class="form-outline mb-4">
                      <input type="text" name="username" id=" form3Example1cg" class="form-control form-control-lg" />
                      <label class="form-label" " for=" form3Example1cg">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example3cg"> Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cg">Password</label>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="tanggal" value="<?= date("Y/m/d") ?>">
                    <input type="hidden" name="last_login" value="<?= date("Y/m/d") ?>">
                    <input type="hidden" name="role" value="public">
                    <div class="d-flex justify-content-center">
                      <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="<?php echo base_url('Login') ?>" class="fw-bold text-body"><u>Login here</u></a></p>

                    <?php echo form_close(); ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>