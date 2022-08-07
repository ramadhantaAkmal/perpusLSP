<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Perpustakaan</h5>
	<h5 class="my-1 mr-md-auto font-weight-normal">Register</h5>
	
	<a class="btn btn-outline-primary" href="/perpusLSP">Home</a>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Registrasi Keanggotaan</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="nik_anggota">NIK</label>
							<input type="text" class="form-control" name="nik_anggota" id="nama_anggota" placeholder="Masukan NIK " autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan NIK.
							</div>
						</div>
						<div class="form-group">
							<label for="nama_anggota">Nama</label>
							<input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="Masukan nama" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama.
							</div>
						</div>
						<div class="form-group">
							<label for="alamat_anggota">Alamat</label>
							<input type="text" class="form-control" name="alamat_anggota" id="alamat_anggota" placeholder="Masukan alamat" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nilai Alamat.
							</div>
						</div>
						<div class="form-group">
							<label for="no_telp_anggota">No HP/Telepon</label>
							<input type="text" class="form-control" name="no_telp_anggota" id="no_telp_anggota" placeholder="Masukan No Telp/HP" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan No HP/Telepon.
							</div>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="register">Register</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>