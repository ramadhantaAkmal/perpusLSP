<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Perpustakaan</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="/perpusLSP/perpus_controller/admin">Back</a>
	</nav>
</div>

<div class="container">
  	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center"><b>Edit Data Buku</b></div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<input type="hidden" name="id_buku" value="<?= $buku['id_buku']?>">
							<label for="judul_buku">Judul Buku</label>
							<input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Masukan judul buku" autocomplete="off" required value="<?= $buku['judul_buku']?>">
							<div class="invalid-feedback">
								Anda belum memasukan judul buku.
							</div>
						</div>
						<div class="form-group">
							<label for="penulis_buku">Penulis Buku</label>
							<input type="text" class="form-control" name="penulis_buku" id="penulis_buku" placeholder="Masukan penulis buku" autocomplete="off" required value="<?= $buku['penulis_buku']?>">
							<div class="invalid-feedback">
								Anda belum memasukan penulis buku.
							</div>
						</div>

						<div class="form-group">
							<label for="tahun_buku">Tahun Terbit Buku</label>
							<input type="text" class="form-control" name="tahun_buku" id="tahun_buku" placeholder="Masukan tahun terbit buku" autocomplete="off" required value="<?= $buku['tahun_buku']?>">
							<div class="invalid-feedback">
								Anda belum memasukan tahun terbit buku.
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