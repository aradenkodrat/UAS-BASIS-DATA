<?php
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Kelola Dokter</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">klinik_312010271</a>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>


	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<a class="nav-link" href="index.php">
							<div class="sb-nav-link-icon"><i class="fas fa-tv" style="font-size:40px;color:hotpink;"></i></div>
							Dasboard
						</a>
						<a class="nav-link" href="dokter.php">
							<div class="sb-nav-link-icon"><i class="fas fa-user-md" style="font-size:40px;color:greenyellow;"></i></div>
							Dokter
						</a>
						<a class="nav-link" href="pasien.php">
							<div class="sb-nav-link-icon"><i class="fas fa-user-injured" style="font-size:40px;color:red"></i></div>
							Pasien
						</a>
						<a class="nav-link" href="obat.php">
							<div class="sb-nav-link-icon"><i class="fas fa-capsules" style="font-size:40px;color:whitesmoke;"></i></div>
							Obat
						</a>
						<a class="nav-link" href="rekammedis.php">
							<div class="sb-nav-link-icon"><i class="fas fa-cannabis" style="font-size:40px;color:purple;"></i></div>
							Rekam Medis
						</a>
						<a class="nav-link" href="user.php">
							<div class="sb-nav-link-icon"><i class="fas fa-poo" style="font-size:40px;color:rosybrown;"></i></div>
							User 
						</a>
						<a class="nav-link" href="Logout.php">
							<div class="sb-nav-link-icon"><i class="fas fa-swimmer" style="font-size:40px;color:yellow;"></i></div>
							Logout
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Kelola Dokter</h1>
					<div class="card mb-4">
						<div class="card-header">
							<!-- Button to Open the Modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								Tambah Dokter
							</button>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Dokter</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody> 

										<?php
										$ambilsemuadatadokter = mysqli_query($conn,"SELECT * from dokter");
										$i = 1;
										while($data=mysqli_fetch_array($ambilsemuadatadokter)){
											$nama = $data['nama_dokter'];
											$idd = $data['id_dokter'];
											
											
											?>
											<tr>
												<td><?=$i++;?></td>
												<td><?=$nama;?></td>
												
												
												<td>
													<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idd;?>">
														Edit
													</button>
													<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idd;?>">
														Delete
													</button>
												</td>
											</tr>

											<!-- EDIT Modal -->
											<div class="modal fade" id="edit<?=$idd;?>">
												<div class="modal-dialog">
													<div class="modal-content">

														<!-- Modal Header -->
														<div class="modal-header">
															<h4 class="modal-title">Ubah Dokter</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>

														<!-- Modal body -->
														<form method="post">
															<div class="modal-body">
																<input type="text" name="namadokter" value="<?=$nama;?>" class="form-control" placeholder="Nama Dokter" required>
																<br>
																
																<input type="hidden" name="id" value="<?=$idd;?>">
																<button type="submit" class="btn btn-primary" name="updatdokter">Submit</button>
															</div>
														</form>
													</div>
												</div>
											</div>


											<!-- DELETE Modal -->
											<div class="modal fade" id="delete<?=$idd;?>">
												<div class="modal-dialog">
													<div class="modal-content">

														<!-- Modal Header -->
														<div class="modal-header">
															<h4 class="modal-title">Hapus?</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>

														<!-- Modal body -->
														<form method="post">
															<div class="modal-body">
																Apakah Anda yakin ingin menghapus <?=$nama;?> ?
																<input type="hidden" name="id" value="<?=$idd;?>">
																
																<br>
																<button type="submit" class="btn btn-danger" name="hapusdokter">Hapus</button>
															</div>
														</form>
													</div>
												</div>



												<?php
											};
											?>

										</tbody>
									</table>
								</div>
							</div>
						</div>


						<!-- doker_log -->
						<div class="card-header">
							<!-- Button to Open the Modal -->
							Log Dokter
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Keterangan</th>
											<th>Tanggal</th>
											<th>Nama Dokter</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody> 

										<?php
										$a = mysqli_query($conn,"SELECT * from logdokter");
										$i = 1;
										while($b=mysqli_fetch_array($a)){
											$keterangan = $b['keterangan'];
											$tgl = $b['tgl'];
											$nama = $b['nama_dokter'];
											$idd = $b['id_log_dokter'];
											
				
											?>
											<tr>
												<td><?=$i++;?></td>
												<td><?=$keterangan;?></td>
												<td><?=$tgl;?></td>
												<td><?=$nama;?></td>
												<td>
													<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idd;?>">
														Delete
													</button>
												</td>
											</tr>

											<!-- DELETE Modal -->
											<div class="modal fade" id="delete<?=$idd;?>">
												<div class="modal-dialog">
													<div class="modal-content">

														<!-- Modal Header -->
														<div class="modal-header">
															<h4 class="modal-title">Hapus?</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>

														<!-- Modal body -->
														<form method="post">
															<div class="modal-body">
																Apakah Anda yakin ingin menghapus <?=$nama;?> ?
																<input type="hidden" name="id" value="<?=$idd;?>">
																
																<br>
																<button type="submit" class="btn btn-danger" name="hapuslogdokter">Hapus</button>
															</div>
														</form>
													</div>
												</div>
												<?php
											};
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
				</main>
				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
							
						</div>
					</footer>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
			<script src="js/scripts.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
			<script src="assets/demo/chart-area-demo.js"></script>
			<script src="assets/demo/chart-bar-demo.js"></script>
			<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
			<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
			<script src="assets/demo/datatables-demo.js"></script>
		</body>


		<!-- The Modal -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Tambah dokter</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<form method="post">
						<div class="modal-body">
							<input type="text" name="namadokter" placeholder="Nama" class="form-control" required>
							<br>
							
							<button type="submit" class="btn btn-primary" name="adddokter">Submit</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>

		</html>
