<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_transaksi extends CI_Model {
	function read(){
		
		return $this->db->get('data_transaksi')->result_array();
	}
	
	function create(){
		$id = rand(10000,99999);
		$nama_anggota = $this->input->post('nama_anggota');
        $id_buku = $this->input->post('judul_buku');
		$tgl_pinjam = $this->input->post('tgl_peminjaman');
		$status = 'BELUM';
		$this->db->select('judul_buku');
		
		//
		//
		//THE MOTHER LODE LORD GOD FKIN PROBLEM
		//       VVVVVVVVVVVVVVVVVVVVVV
		$judul = $this->db->get_where('data_buku',['id_buku'=> $id_buku])->row_array();
		//
		//
		//
		//
		
            $data =[
                'id_transaksi' => $id,
                'nama_anggota' => $nama_anggota,
				'id_buku' => $id_buku,
                'judul_buku' => $judul,
				'tgl_peminjaman' => $tgl_pinjam, 
				'status' => $status, 
            ];
        $id_avail = $this->db->get_where('data_transaksi',['id_transaksi'=> $id])->row_array();
		// $this->db->select('id_buku')->where('judul_buku',$judul)->get('data_buku')->result();
		//$id_buku = $this->db->get_where('data_buku',['judul_buku'=> $judul])->row_array();
		
        if($id == $id_avail){
            $this->session->set_flashdata('pesan','Dipinjam');
                redirect('','refresh');
        }else{
			$this->db->insert('data_transaksi', $data);
            $this->session->set_flashdata('pesan','Ditambah');
                redirect('','refresh');
        }	
	}

    function update($id){
		$today = date("Y-m-d");
		$status = 'SUDAH';
		$field1 = ['status' => $status];
		$field2 = ['tgl_pengembalian' => $today];
		$this->db->where('id_transaksi', $id);
		$this->db->update('data_transaksi', $field1);
		$this->db->update('data_transaksi', $field2);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Diubah');
			redirect('perpus_controller/laporan','refresh');
		}
	}

	function hapus($id){
		$this->db->where('id_transaksi', $id);
		$this->db->delete('data_transaksi');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Data Dihapus');
			redirect('perpus_controller/admin','refresh');
		}
	}
}