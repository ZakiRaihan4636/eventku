<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Kategori Peserta</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Kategori Peserta</li>
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
          <?php $hidden =  ['idedit' => $kgtpst_edit->id]; ?>
          <?php echo form_open('KategoriPeserta/save', '', $hidden); ?>
          <div class="form-group row">
            <label for="nama" class="col-2 col-form-label">Kategori Peserta</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-tasks"></i>
                  </div>
                </div>
                <input id="id" name="id" type="hidden" value="<?= $kgtpst_edit->id ?>" class="form-control">
                <input id="nama" name="nama" type="text" value="<?= $kgtpst_edit->nama ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-2 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Ubah Data</button>
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