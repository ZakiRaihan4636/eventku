	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Pendafaran</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Data Pendafaran</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Kelola Data Pendafaran</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('KategoriPeserta/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Daftar</th>
									<th>Alasan</th>
									<th>Nama User</th>
									<th>Kegiatan</th>
									<th>Kategori Peserta</th>
									<th>No Sertifikat</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_pdft as $pdft) : ?>
									<tr>
										<td> <?= $no++; ?> </td>
										<td> <?= $pdft->tanggal_daftar ?> </td>
										<td> <?= $pdft->alasan ?> </td>
										<td> <?= $pdft->username ?> </td>
										<td> <?= $pdft->judul ?> </td>
										<td> <?= $pdft->nama ?> </td>
										<td> <?= $pdft->nosertifikat ?> </td>
										<td width="200px">
											<a href="view?id=<?= $pdft->id_daftar ?>">Detail</a> |
											<a href="edit?id=<?= $pdft->id_daftar ?>">Update</a> |
											<a href="delete?id=<?= $pdft->id_daftar ?>" onclick="return confirm('Apakah Anda Yakin');">Hapus</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<div class="row">
				</div>
				<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
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