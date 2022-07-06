	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Kegiatan</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Data Kegiatan</li>
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
						<h3 class="card-title">Kelola Data Kegiatan</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('Kegiatan/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>kapasistas</th>
									<th>Harga Tiket</th>
									<th>Tanggal</th>
									<th>Narasumber</th>
									<th>Tempat</th>
									<th>pic</th>
									<th>Foto flyer</th>
									<th>Jenis Kegiatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_kgt as $kgt) : ?>
									<tr>
										<td> <?= $no++; ?> </td>
										<td> <?= $kgt->judul ?> </td>
										<td> <?= $kgt->kapasitas; ?> </td>
										<td> <?= $kgt->harga_tiket; ?> </td>
										<td> <?= $kgt->tanggal; ?> </td>
										<td> <?= $kgt->narasumber; ?> </td>
										<td> <?= $kgt->tempat; ?> </td>
										<td> <?= $kgt->pic; ?> </td>
										<td>
											<img src="<?php echo base_url(); ?>assets/foto/<?php echo $kgt->foto_flyer ?>" width="100">
										</td>
										<td> <?= $kgt->nama; ?> </td>
										<td width="200px">
											<a href="view?id=<?= $kgt->id ?>">Detail</a> |
											<a href="edit?id=<?= $kgt->id ?>">Update</a> |
											<a href="delete?id=<?= $kgt->id ?>" onclick="return confirm('Apakah Anda Yakin');">Hapus</a>
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