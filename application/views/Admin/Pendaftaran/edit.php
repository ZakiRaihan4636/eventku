<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Pendaftaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-body">
          <?php $hidden =  ['idedit' => $pdft_edit->id]; ?>
          <?php echo form_open('Pendaftaran/save', '', $hidden); ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Alasan</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-user-alt"></i>
                  </div>
                </div>
                <input id="nama" name="nama" type="text" value="<?= $pdft_edit->alasan ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label" for="tgl_lahir">Nama User</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="<?= $pdft_edit->username ?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Kegiatan</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-paper-plane"></i>
                  </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="<?= $pdft_edit->judul ?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">Kategori Peserta</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-text-height"></i>
                  </div>
                </div>
                <input id="ipk" name="ipk" type="text" value="<?= $pdft_edit->nama ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">No Sertifikat</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-text-height"></i>
                  </div>
                </div>
                <input id="ipk" name="ipk" type="text" value="<?= $pdft_edit->nosertifikat ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <?php echo form_close(); ?>
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