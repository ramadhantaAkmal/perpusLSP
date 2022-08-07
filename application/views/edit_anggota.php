<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Praktikum PWEB</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="/perpusLSP/perpus_controller/admin">Back</a>
	</nav>
</div>

<div class="container">
  	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center"><b>Edit Data Anggota</b></div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']?>">
							<label for="nama_anggota">Nama</label>
							<input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="Masukan nama" autocomplete="off" required value="<?= $anggota['nama_anggota']?>">
							<div class="invalid-feedback">
								Anda belum memasukan nama.
							</div>
						</div>
						<div class="form-group">
							<label for="nik_anggota">NIK</label>
							<input type="text" class="form-control" name="nik_anggota" id="nik_anggota" placeholder="Masukan NIK" autocomplete="off" required value="<?= $anggota['nik_anggota']?>">
							<div class="invalid-feedback">
								Anda belum memasukan NIK.
							</div>
						</div>
						<div class="form-group">
							<label for="tahun">Alamat</label>
							<input type="text" class="form-control" name="alamat_anggota" id="alamat_anggota" placeholder="Masukan alamat" autocomplete="off" required value="<?= $anggota['alamat_anggota']?>">
							<div class="invalid-feedback">
								Anda belum memasukan alamat.
							</div>
						</div>
						<div class="form-group">
							<label for="tahun">No Telp/HP</label>
							<input type="text" class="form-control" name="no_telp_anggota" id="no_telp_anggota placeholder="Masukan no telp/hp" autocomplete="off" required value="<?= $anggota['no_telp_anggota']?>">
							<div class="invalid-feedback">
								Anda belum memasukan no telp/hp.
							</div>
						</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="edit">Edit</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

 </div>