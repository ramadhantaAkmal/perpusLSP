<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_anggota extends CI_Model {
	function read(){
		$this->db->order_by('nama_anggota', 'desc');
		return $this->db->get('data_anggota')->result_array();
	}
	
	function create(){
		$id = rand(10000,99999);
		$nik = $this->input->post('nik_anggota');
		$nama = $this->input->post('nama_anggota');
        $alamat = $this->input->post('alamat_anggota');
		$notelp = $this->input->post('no_telp_anggota');
            $data =[
                'id_anggota' => $id,
                'nik_anggota' => $nik,
                'nama_anggota' => $nama,
                'alamat_anggota' => $alamat,
                'no_telp_anggota' => $notelp, 
            ];
        
		$id_avail = $this->db->get_where('data_anggota',['id_anggota'=> $id])->row_array();
		
        if($id == $id_avail){
            $this->session->set_flashdata('pesan','Sudahada');
            redirect('perpusLSP','refresh');
        }else{
            $this->db->insert('data_anggota', $data);
            $this->session->set_flashdata('pesan','Ditambah');
            redirect('perpus_controller/register','refresh');
        }	
	}
	
	function get_row($id){
		return $this->db->get_where('data_anggota',['id_anggota'=>$id])->row_array();
	}
	
    function update(){
		$data = [
			'nik_anggota' => $nik,
            'nama_anggota' => $nama,
            'alamat_anggota' => $alamat,
            'no_telp_anggota' => $notelp, 
		];
		$this->db->where('id_petugas', $this->input->post('id_petugas'));
		$this->db->update('data_buku', $data);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Data Diubah');
			redirect('perpus_controller/admin','refresh');
		}
	}

	function hapus($id){
		$this->db->where('id_anggota', $id);
		$this->db->delete('data_anggota');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Data Dihapus');
			redirect('perpus_controller/admin','refresh');
		}
	}
}