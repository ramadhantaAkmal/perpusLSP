

<div class="d-flex align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Perputakaan</h5>
  
	<a class="mx-3 btn btn-outline-primary" href="perpus_controller/register">Register</a>
	
	<a class="mx-3 btn btn-outline-primary" href="perpus_controller/laporan">Report</a>
	
	<a class="mx-3 btn btn-outline-primary" href="perpus_controller/admin">Admin</a>
	
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Buku</h1>
</div>

<?php if($this->session->flashdata('Dipinjam')): ?>
						<div class="alert alert-danger" role="alert">
							Buku Sudah Dipinjam!
						</div>
					
<?php elseif($this->session->flashdata('Ditambah')): ?>
						<div class="alert alert-danger" role="alert">
							Peminjaman Dipesan!
						</div>
<?php endif ?>

<div class="container-xxl">
<div class="row justify-content-center">
<div class="col-4">
  <table class="table " style="width: 40rem;">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">Judul Buku</th>
        <th rowspan="2" class="align-middle text-center">Penulis Buku</th>
        <th rowspan="2" class="align-middle text-center">Tahun Terbit</th>
      </tr>
    </thead>
     <tbody>
		<?php 
		$no = 1;
		foreach($buku as $data) : ?>
			  <tr>
				<th class="align-middle text-center"><?=$no++?></th>
				<td class="align-middle"><?=$data['judul_buku']?></td>
				<td class="align-middle text-center"><?=$data['penulis_buku']?></td>
				<td class="align-middle text-center"><?=$data['tahun_buku']?></td>
			  </tr>
		<?php endforeach ?> 
    </tbody>
  </table>
  </div>
  
  <div class="col-4">
  <div class="row justify-content-md-left">
		<div class="col-md-6">
			<div class="card bg-light my-5" style="width: 32rem;">
				<div class="card-header text-center"><b>Peminjaman</b></div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="judul_bk">Nama Anggota</label>
							<input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="Masukan Nama Anggota" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan Nama Anggota.
							</div>
						</div>
						<div class="form-group">
							<label for="judul_bk">Judul Buku</label>
							<select name="judul_buku" id="judul_buku" class="form-control">
								<?php 
									$no = 1;
									foreach($buku as $data) : ?>
										  <option value=<?=$data['id_buku']?>><?=$data['judul_buku']?></option>
								<?php endforeach ?> 
							</select>
							<div class="invalid-feedback">
								Anda belum memasukan Judul Buku.
							</div>
						</div>
											
						<div class="form-group">
							<label for="tgl_peminjaman">Tanggal Peminjaman</label>
							<input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman" placeholder="Masukan Tanggal Peminjaman" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan Tanggal Peminjaman.
							</div>
						</div>
					<!--
						<div class="form-group">
							<label for="tgl_pengembalian">Tanggal Pengembalian</label>
							<input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" placeholder="Masukan Tanggal Pengembalian" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan Tanggal Pengembalian.
							</div>
						</div>
					-->
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah">KIRIM</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
	</div>
	</div>
</div>
