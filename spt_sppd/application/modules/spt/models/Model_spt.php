<?php

class Model_spt extends CI_Model {
	
	public $table="tb_spt";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_spt()
	{
		$query=$this->db->order_by('kd_surat','DESC')->get('tb_spt');
		return $query->result();
	}
	function tampil_nip($nama)
	{
		//return $this->db->get_where('tb_pegawai', array('nama_pegawai' => $nama));
		$query=$this->db->query("SELECT * from tb_pegawai where nama_pegawai=?",$nama);
		return $query->row();
	}
	function save_update($table,$kd,$data)
	{
		$this->db->where('kd_surat',$kd);
		$this->db->update($table,$data);
	}

	function tampil_edit_spt($kd)
	{
		return $this->db->get_where('tb_spt',array('kd_surat' => $kd));
	}

	function tampil_edit_nip($nama)
	{
		//return $this->db->get_where('tb_pegawai', array('nama_pegawai' => $nama));
		$query=$this->db->query("SELECT * from tb_pegawai where nama_pegawai=?",$nama);
		return $query->row();
	}

	function tampil_detail_spt($kd)
	{
		return $this->db->get_where('tb_spt',array('kd_surat' => $kd));
	}

	
	function hapus_spt($table,$kd){
		$this->db->where('kd_surat',$kd);
		$this->db->delete($table);
	}	
	function tampil_nm_pgw()
	{
		$query=$this->db->order_by('nama_pegawai','ASC')->get('tb_pegawai');
		return $query->result();
	}
	function tampil_data_pgw($nm_pgw)
	{
		$query=$this->db->query("SELECT * from tb_pegawai where nama_pegawai=?",$nm_pgw);
		return $query->row(); 
	}
}
?>