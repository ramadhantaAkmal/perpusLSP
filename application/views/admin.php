<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Perputakaan</h5>
  <h5 class="my-1 mr-md-auto font-weight-normal">Admin</h5>
 
  <a class="mx-3 btn btn-outline-primary" href="/perpusLSP">Home</a>
  <a class="mx-3 btn btn-outline-primary" href="<?=base_url('perpus_controller/logout')?>">LogOut</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Buku</h1>
</div>

<div class="container-xxl">
 <div class="row justify-content-center">
 <div class="col-4">
  <table class="table table-hover mb-1">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
		<th rowspan="2" class="align-middle text-center">ID</th>
        <th rowspan="2" class="align-middle text-center">Judul Buku</th>
        <th rowspan="2" class="align-middle text-center">Penulis Buku</th>
        <th rowspan="2" class="align-middle text-center">Tahun Terbit</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
     <tbody>
		<?php 
		$no = 1;
		foreach($buku as $data) : ?>
			  <tr>
				<th class="align-middle text-center"><?=$no++?></th>
				<td class="align-middle"><?=$data['id_buku']?></td>
				<td class="align-middle"><?=$data['judul_buku']?></td>
				<td class="align-middle text-center"><?=$data['penulis_buku']?></td>
				<td class="align-middle text-center"><?=$data['tahun_buku']?></td>

				<td class="align-middle text-center">
				  <a href="<?=base_url('perpus_controller/editBuku/'.$data['id_buku'])?>" class="align-middle btn btn-success">Edit</a>
				  <a href="<?=base_url('perpus_controller/bukuHapus/'.$data['id_buku'])?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')"class="align-middle btn btn-danger">Hapus</a>
				</td>
			  </tr>
		<?php endforeach ?> 
    </tbody>
  </table>
  </div>
  
  <div class="col-4">
  	<div class="row justify-content-md-left">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center"><b>Input Data Buku</b></div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="judul_bk">Judul Buku</label>
							<input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Masukan judul buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan judul buku.
							</div>
						</div>
						<div class="form-group">
							<label for="penulis_bk">Penulis Buku</label>
							<input type="text" class="form-control" name="penulis_buku" id="penulis_buku" placeholder="Masukan penulis buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan penulis buku.
							</div>
						</div>

						<div class="form-group">
							<label for="tahun">Tahun Terbit Buku</label>
							<input type="text" class="form-control" name="tahun_buku" id="tahun_buku" placeholder="Masukan tahun terbit buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan tahun terbit buku.
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah_buku">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
  </div>
</div>
</div>

<!--*************************************************divider -->
<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Petugas</h1>
</div>

<div class="container">
  <table class="table table-hover mb-1 mx-1">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">ID</th>
		<th rowspan="2" class="align-middle text-center">Username</th>
        <th rowspan="2" class="align-middle text-center">Nama Petugas</th>
        <th rowspan="2" class="align-middle text-center">NIK Petugas</th>
		<th rowspan="2" class="align-middle text-center">Jabatan</th>
		<th rowspan="2" class="align-middle text-center">Alamat</th>
		<th rowspan="2" class="align-middle text-center">No Telp/HP</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
     <tbody>
		<?php 
		$no = 1;
		foreach($petugas as $data) : ?>
			  <tr>
				<th class="align-middle text-center"><?=$no++?></th>
				<td class="align-middle"><?=$data['id_petugas']?></td>
				<td class="align-middle text-center"><?=$data['username']?></td>
				<td class="align-middle text-center"><?=$data['nama_petugas']?></td>
				<td class="align-middle text-center"><?=$data['nik_petugas']?></td>
				<td class="align-middle text-center"><?=$data['jabatan_petugas']?></td>
				<td class="align-middle text-center"><?=$data['alamat_petugas']?></td>
				<td class="align-middle text-center"><?=$data['no_telp_petugas']?></td>

				<td class="align-middle text-center">
				  <a href="<?=base_url('perpus_controller/editPetugas/'.$data['id_petugas'])?>" class="align-middle btn btn-success">Edit</a>
				  <a href="<?=base_url('perpus_controller/petugasHapus/'.$data['id_petugas'])?>"" onclick="return confirm('Data ini akan dihapus. Anda yakin?')"class="align-middle btn btn-danger">Hapus</a>
				</td>
			  </tr>
		<?php endforeach ?> 
    </tbody>
  </table>

  	<div class="row justify-content-md-left">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center"><b>Input Data Petugas</b></div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						
						<div class="form-group">
							<label for="judul_bk">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Masukan username" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan username.
							</div>
						</div>
						<div class="form-group">
							<label for="judul_bk">Password</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Masukan password" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan password.
							</div>
						</div>
						<div class="form-group">
							<label for="judul_bk">Nama</label>
							<input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Masukan nama" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama.
							</div>
						</div>
						<div class="form-group">
							<label for="penulis_bk">NIK</label>
							<input type="text" class="form-control" name="nik_petugas" id="nik_petugas" placeholder="Masukan NIK" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan penulis buku.
							</div>
						</div>

						<div class="form-group">
							<label for="tahun">Jabatan</label>
							<input type="text" class="form-control" name="jabatan_petugas" id="jabatan_petugas" placeholder="Masukan jabatan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan jabatan.
							</div>
						</div>
						<div class="form-group">
							<label for="tahun">Alamat</label>
							<input type="text" class="form-control" name="alamat_petugas" id="alamat_petugas" placeholder="Masukan alamat" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan tahun terbit buku.
							</div>
						</div>
						<div class="form-group">
							<label for="tahun">No Telp/HP</label>
							<input type="text" class="form-control" name="no_telp_petugas" id="no_telp_petugas" placeholder="Masukan no telp/hp" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan no telp/hp.
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah_petugas">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>


</div>
<!--*************************************************divider -->
<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Anggota</h1>
</div>

<div class="container-xxl">
 <div class="row justify-content-center">
 <div class="col-4">
  <table class="table table-hover mb-1">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">ID</th>
		
        <th rowspan="2" class="align-middle text-center">Nama</th>
        <th rowspan="2" class="align-middle text-center">NIK</th>
		<th rowspan="2" class="align-middle text-center">Alamat</th>
		<th rowspan="2" class="align-middle text-center">No Telp/HP</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
     <tbody>
		<?php 
		$no = 1;
		foreach($anggota as $data) : ?>
			  <tr>
				<th class="align-middle text-center"><?=$no++?></th>
				<td class="align-middle"><?=$data['id_anggota']?></td>
				<td class="align-middle text-center"><?=$data['nama_anggota']?></td>
				<td class="align-middle text-center"><?=$data['nik_anggota']?></td>
				<td class="align-middle text-center"><?=$data['alamat_anggota']?></td>
				<td class="align-middle text-center"><?=$data['no_telp_anggota']?></td>

				<td class="align-middle text-center">
				  <a href="<?=base_url('perpus_controller/editAnggota/'.$data['id_anggota'])?>" class="align-middle btn btn-success">Edit</a>
				  <a href="<?=base_url('perpus_controller/anggotaHapus/'.$data['id_anggota'])?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')"class="align-middle btn btn-danger">Hapus</a>
				</td>
			  </tr>
		<?php endforeach ?> 
    </tbody>
  </table>
  </div>
</div>
</div>

<!--*************************************************divider -->
<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Data Transaksi</h1>
</div>

<div class="container-xxl">
 <div class="row justify-content-center">
 <div class="col-4">
  <table class="table table-hover mb-1">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">ID Transaksi</th>
        <th rowspan="2" class="align-middle text-center">Nama anggota</th>
        <th rowspan="2" class="align-middle text-center">Judul Buku</th>
		<th rowspan="2" class="align-middle text-center">Tanggal Pinjam</th>
		<th rowspan="2" class="align-middle text-center">Tanggal Kembali</th>
		<th rowspan="2" class="align-middle text-center">Status Pengembalian</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
     <tbody>
		<?php 
		$no = 1;
		foreach($transaksi as $data) : ?>
			  <tr>
				<th class="align-middle text-center"><?=$no++?></th>
				<td class="align-middle"><?=$data['id_transaksi']?></td>
				<td class="align-middle text-center"><?=$data['nama_anggota']?></td>
				<td class="align-middle text-center"><?=$data['judul_buku']?></td>
				<td class="align-middle text-center"><?=$data['tgl_peminjaman']?></td>
				<td class="align-middle text-center"><?=$data['tgl_pengembalian']?></td>
				<td class="align-middle"><?=$data['status']?></td>

				<td class="align-middle text-center">
				  <a href="<?=base_url('perpus_controller/transaksiHapus/'.$data['id_transaksi'])?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')"class="align-middle btn btn-danger">Hapus</a>
				</td>
			  </tr>
		<?php endforeach ?> 
    </tbody>
  </table>
  </div>

</div>
</div>
