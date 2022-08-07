<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Perputakaan</h5>
  <h5 class="my-1 mr-md-auto font-weight-normal">Laporan</h5>
 
  <a class="mx-3 btn btn-outline-primary" href="/perpusLSP">Home</a>
  <a class="mx-3 btn btn-outline-primary" href="<?=base_url('perpus_controller/logout')?>">LogOut</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Daftar Transaksi</h1>
</div>

<?php if($this->session->flashdata('Diubah')): ?>
						<div class="alert alert-danger" role="alert">
							Data diubah!
						</div>
<?php endif ?>

<div class="container">
	<table class="table table-hover mb-1">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
		<th rowspan="2" class="align-middle text-center">ID Transaksi</th>
        <th rowspan="2" class="align-middle text-center">Nama Anggota</th>
        
        <th rowspan="2" class="align-middle text-center">ID Buku</th>
		<th rowspan="2" class="align-middle text-center">Judul Buku</th>
		<th rowspan="2" class="align-middle text-center">Tanggal Peminjaman</th>
		<th rowspan="2" class="align-middle text-center">Tanggal Pengembalian</th>
		<th rowspan="2" class="align-middle text-center">Status pengembalian</th>
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
				<td class="align-middle"><?=$data['nama_anggota']?></td>
				<td class="align-middle"><?=$data['id_buku']?></td>
				<td class="align-middle text-center"><?=$data['judul_buku']?></td>
				<td class="align-middle"><?=$data['tgl_peminjaman']?></td>
				<td class="align-middle"><?=$data['tgl_pengembalian']?></td>
				<td class="align-middle"><?=$data['status']?></td>
				<td class="align-middle text-center">
				  <a <?php if($data['status'] == 'BELUM') { ?> 
					href="<?=base_url('perpus_controller/laporanUpdate/'.$data['id_transaksi'])?>" 
					<?php } ?>onclick="return confirm('Konfirmasi Pengembalian?')"	class="align-middle btn btn-success">
					Konfirmasi Pengembalian
					</a>
				</td>
			  </tr>
			  
		<?php endforeach?> 
    </tbody>
  </table>
</div>