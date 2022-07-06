    <section id="hero-event">


    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= event ======= -->
      <section id="services" class="service">
        <div class="container" data-aos="fade-up">
          <div class="section-title" data-aos="fade-up">
            <h2>Daftar</h2>
            <p>From Daftar Event</p>
          </div>
          <div class="card-body">
            <?php echo form_open('DaftarEvent/save', ['action' => 'post']); ?>

            <div class="form-row">
              <div class="name">Nama User</div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="company" value="<?php if ($this->session->has_userdata('USERNAME')) {
                                                                                    echo $this->session->userdata('USERNAME');
                                                                                  } ?>">
                  <input type="hidden" name="user_id" value="<?php if ($this->session->has_userdata('ID')) {
                                                                echo $this->session->userdata('ID');
                                                              } ?>">

                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Alasan</div>
              <div class="value">
                <div class="input-group">
                  <input style="background-color: whitesmoke;" class="input--style-5" type="text" name="alasan" placeholder="Masukan Alasan">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Tanggal Daftar</div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="tanggal" value="<?= date('Y/m/d') ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Nama Kegiatan</div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="email" name="email" value="<?= $view_kgt->judul ?>" readonly>
                  <input class="input--style-5" type="hidden" name="kegiatan_id" value="<?= $view_kgt->id ?>" readonly>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Kategori Peserta</div>
              <div class="value">
                <div class="input-group">
                  <div style="margin-left: 30px ;" class="rs-select2 js-select-simple select--no-search">
                    <select name="kategori_peserta_id">
                      <option value="1">Pelajar</option>
                      <option value="2">Mahasiswa</option>
                      <option value="3">Karyawan Swasta</option>
                      <option value="4">Guru/Dosen</option>
                      <option value="5">Umum</option>
                      <option value="6">ASN</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                </div>
              </div>
            </div>
            <?php $rand = rand(1, 10) ?>
            <input class="input--style-5" type="hidden" name="nosertifikat" value="S-2022-VI-00<?= $rand; ?>" readonly>

            <button style="margin-left:158px ;" class="btn btn-success" type="submit">daftar</button>
          </div>
          <?php echo form_close() ?>
        </div>


        </div>
      </section>
      <!-- End event -->
    </main>