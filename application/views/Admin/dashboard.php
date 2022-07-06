  	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<!-- Content Header (Page header) -->
  		<div class="content-header">
  			<div class="container-fluid">
  				<div class="row mb-2">
  					<div class="col-sm-6">
  						<h1 class="m-0">Dashboard</h1>
  					</div><!-- /.col -->
  					<div class="col-sm-6">
  						<ol class="breadcrumb float-sm-right">
  							<li class="breadcrumb-item"><a href="#">Home</a></li>
  							<li class="breadcrumb-item active">Dashboard</li>
  						</ol>
  					</div><!-- /.col -->
  				</div><!-- /.row -->
  			</div><!-- /.container-fluid -->
  		</div>
  		<!-- /.content-header -->

  		<!-- Main content -->
  		<section class="content">
  			<div class="container-fluid">
  				<!-- Small boxes (Stat box) -->
  				<div class="row">
  					<div class="col-lg-3 col-6">
  						<!-- small box -->
  						<div class="small-box bg-info">
  							<div class="inner">
  								<h3><?= number_format($kegiatan) ?></h3>

  								<p>Kegiatan</p>
  							</div>
  							<div class="icon">
  								<i class="ion fas fa-tasks"></i>
  							</div>
  							<a href="<?php echo base_url('Kegiatan/index') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  						</div>
  					</div>
  					<!-- ./col -->
  					<div class="col-lg-3 col-6">
  						<!-- small box -->
  						<div class="small-box bg-success">
  							<div class="inner">
  								<h3><?= number_format($jenis_kegiatan) ?></h3>

  								<p>Jenis Kegiatan</p>
  							</div>
  							<div class="icon">
  								<i class="ion fa-solid fa-person-chalkboard"></i>
  							</div>
  							<a href="<?php echo base_url('JenisKegiatan/index') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  						</div>
  					</div>
  					<!-- ./col -->
  					<div class="col-lg-3 col-6">
  						<!-- small box -->
  						<div class="small-box bg-warning">
  							<div class="inner">
  								<h3><?= number_format($kategori_peserta) ?></h3>

  								<p>Kategori Peserta</p>
  							</div>
  							<div class="icon">
  								<i class="ion fa-solid fa-users-line"></i>
  							</div>
  							<a href="<?php echo base_url('KategoriPeserta/index') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  						</div>
  					</div>
  					<!-- ./col -->
  					<div class="col-lg-3 col-6">
  						<!-- small box -->
  						<div class="small-box bg-info">
  							<div class="inner">
  								<h3><?= number_format($pendaftaran) ?></h3>

  								<p>Pendaftaran</p>
  							</div>
  							<div class="icon">
  								<i class="ion fa-solid fa-id-card"></i>
  							</div>
  							<a href="<?php echo base_url('Pendaftaran/index') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  						</div>
  					</div>
  					<!-- ./col -->
  					<div class="col-lg-3 col-6">
  						<!-- small box -->
  						<div class="small-box bg-danger">
  							<div class="inner">
  								<h3><?= number_format($users) ?></h3>

  								<p>User</p>
  							</div>
  							<div class="icon">
  								<i class="ion fa-solid fa-users"></i>
  							</div>
  							<a href="<?= base_url('Users/index') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  						</div>
  					</div>
  					<!-- ./col -->

  					<!-- /.row -->
  					<!-- Main row -->
  					<div class="row">
  					</div>
  					<!-- /.row (main row) -->
  				</div><!-- /.container-fluid -->
  		</section>
  		<!-- /.content -->
  	</div>