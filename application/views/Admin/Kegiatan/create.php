  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Kegiatan</li>
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
          <?php echo form_open_multipart('Kegiatan/save', ['action' => 'post']); ?>
          <input type="hidden" name="id" id="id" value="default">
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">Judul</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa-solid fa-heading"></i>
                  </div>
                </div>
                <input id="judul" name="judul" type="text" class="form-control">
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
                <input id="kapasitas" name="kapasitas" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Harga Tiket</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa-solid fa-money-check-dollar"></i>
                  </div>
                </div>
                <input id="harga_tiket" name="harga_tiket" type="number" class="form-control">
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
                <input id="tanggal" name="tanggal" type="date" class="form-control">
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
                <input id="narasumber" name="narasumber" type="text" class="form-control">
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
                <input id="tempat" name="tempat" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">pic</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa-solid fa-camera"></i>
                  </div>
                </div>
                <input id="pic" name="pic" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Foto Flyer</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="foto" name="foto" type="file" class="form-control-file">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Jenis Kegiatan</label>
            <div class="col-8">
              <select id="select" name="jenis_kegiatan" class="custom-select" required="required">
                <option value="1">Seminar</option>
                <option value="2">Workshop</option>
                <option value="3">Event Olah Raga</option>
                <option value="4">Bazaar</option>
                <option value="5">Pelatihan</option>
              </select>
            </div>
          </div>


          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>