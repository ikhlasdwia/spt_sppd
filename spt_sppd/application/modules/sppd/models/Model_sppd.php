<?php

class Model_sppd extends CI_Model {
	
	public $table="tb_sppd";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_sppd()
	{
		$query=$this->db->order_by('nomor_surat','DESC')->get('tb_sppd');
		return $query->result();
	}

	function tampil_data_spt($kd_surat)
	{
		$query=$this->db->query("SELECT * from tb_spt where no_surat=?",$kd_surat);
		return $query->row(); 
	}
	function tampil_kd_sppd(){
		$query=$this->db->get('tb_spt');
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('nomor_surat',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_sppd($kd)
	{
		return $this->db->get_where('tb_sppd',array('kd_surat' => $kd));
	}

	function tampil_detail_sppd($kd)
	{
		return $this->db->get_where('tb_sppd',array('nomor_surat' => $kd));
	}

	function hapus_sppd($kd){
		$this->db->where('kd_surat',$kd);
		$this->db->delete('tb_sppd');
		}	
	}


?>