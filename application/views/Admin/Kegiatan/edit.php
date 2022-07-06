<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Kegiatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kegiatan</h3>
            </div>
            <div class="card-body">

              <?php $hidden =  ['idedit' => $kgt_edit->id]; ?>
              <?php echo form_open_multipart('Kegiatan/save', '', $hidden); ?>
              <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">Judul</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-heading"></i>
                      </div>
                    </div>
                    <input id="id" name="id" type="hidden" value="<?= $kgt_edit->id ?>" class="form-control">
                    <input id="judul" name="judul" value="<?= $kgt_edit->judul ?>" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Kapasitas</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                    <input id="kapasitas" name="kapasitas" type="text" value="<?= $kgt_edit->kapasitas ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Harga Tiket</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-money-check-dollar"></i>
                      </div>
                    </div>
                    <input id="harga_tiket" name="harga_tiket" value="<?= $kgt_edit->harga_tiket ?>" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-form-label" for="tgl_lahir">Tanggal</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                    <input id="tanggal" name="tanggal" value="<?= $kgt_edit->tanggal ?>" type="date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Narasumber</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-user-group"></i>
                      </div>
                    </div>
                    <input id="narasumber" name="narasumber" value="<?= $kgt_edit->narasumber ?>" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-map"></i>
                      </div>
                    </div>
                    <input id="tempat" name="tempat" value="<?= $kgt_edit->tempat ?>" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Pic</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-camera"></i>
                      </div>
                    </div>
                    <input id="pic" name="pic" value="<?= $kgt_edit->pic ?>" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Foto</label>
                <div class="col-8">
                  <?php
                  if ($kgt_edit->foto_flyer != null) { ?>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $kgt_edit->foto_flyer ?>" alt="" width="300" height="250" class="mb-2">
                  <?php  } ?>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa-solid fa-image"></i>
                      </div>
                    </div>

                    <input id="foto" name="foto" value="<?php echo $kgt_edit->foto_flyer ?>" type="file" class="form-control">


                  </div>
                  <small>(Biarkan Kosong jika tidak ingin merubah gambar/foto)</small>
                </div>
              </div>
              <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Jenis Kegiatan</label>
                <div class="col-8">
                  <select id="select" name="jenis_kegiatan" class="custom-select">
                    <option value="1" <?php if ($kgt_edit->jenis_id == 1) echo "selected"; ?>>Seminar</option>
                    <option value="2" <?php if ($kgt_edit->jenis_id == 2) echo "selected"; ?>>Workshop</option>
                    <option value="3" <?php if ($kgt_edit->jenis_id == 3) echo "selected"; ?>>Event Olahraga</option>
                    <option value="4" <?php if ($kgt_edit->jenis_id == 4) echo "selected"; ?>>Bazaar</option>
                    <option value="5" <?php if ($kgt_edit->jenis_id == 5) echo "selected"; ?>>Pelatihan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-success">Ubah Data Kegiatan</button>
                </div>
              </div>
              <?php echo form_close(); ?>


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>