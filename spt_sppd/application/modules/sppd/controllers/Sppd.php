<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sppd extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_sppd');
      $this->load->database('spt_sppd');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['sppd'] = $this->Model_sppd->tampil_sppd();
      $this->template->load('template/main','sppd',$data);
    }

    function tambah_sppd()
    {
        $data['kode_surat']=$this->Model_sppd->tampil_kd_sppd();
        $this->template->load('template/main','tambah_sppd',$data);
    }

    function aksi_tambah_sppd()
    {
        $data = array(
        'nomor_surat' => $this->input->post('nomor_surat'),
        'pejabat_pk'  => $this->input->post('pejabat_pk'),
        'nama_pegawai'  => $this->input->post('nama_pegawai'),
        'nip'  => $this->input->post('nip'),
        'pangkat'  => $this->input->post('pangkat'),
        'jabatan' => $this->input->post('jabatan'),
        'biaya' => $this->input->post('biaya'),
        'isi_perintah'  => $this->input->post('isi_perintah'),
        'angkutan'  => $this->input->post('angkutan'),
        'tempat_berangkat' => $this->input->post('tempat_berangkat'),
        'tempat_tujuan' => $this->input->post('tempat_tujuan'),
        'lama_dinas' => $this->input->post('lama_dinas'),
        'satuan' => $this->input->post('satuan'),
        'tgl_berangkat'  => $this->input->post('tgl_berangkat'),
        'tgl_kembali' => $this->input->post('tgl_kembali'),
        'pengikut' => $this->input->post('pengikut'),
        'anggaran_dari' => $this->input->post('anggaran_dari'),
        'kd_surat' => $this->input->post('kd_surat')
        );
        $this->Model_sppd->save('tb_sppd',$data);
        redirect(base_url().'Sppd');
    }

    public function detail_sppd()
    {   
        $no_surat=$this->input->get('no');
        $data['sppd'] = $this->Model_sppd->tampil_detail_sppd($no_surat)->row_array();
        $this->template->load('template/main','detail_sppd', $data);
    }

    function edit_sppd($kd_surat)
    {
      $data['sppd'] = $this->Model_sppd->tampil_edit_sppd($kd_surat)->row_array();
      $this->template->load('template/main','edit_sppd',$data);
    }

    function aksi_edit_sppd()
    {
       $data = array(
        'pejabat_pk'  => $this->input->post('pejabat_pk'),
        'nama_pegawai'  => $this->input->post('nama_pegawai'),
        'nip'  => $this->input->post('nip'),
        'pangkat'  => $this->input->post('pangkat'),
        'jabatan' => $this->input->post('jabatan'),
        'biaya' => $this->input->post('biaya'),
        'isi_perintah'  => $this->input->post('isi_perintah'),
        'angkutan'  => $this->input->post('angkutan'),
        'tempat_berangkat' => $this->input->post('tempat_berangkat'),
        'tempat_tujuan' => $this->input->post('tempat_tujuan'),
        'lama_dinas' => $this->input->post('lama_dinas'),
        'satuan' => $this->input->post('satuan'),
        'tgl_berangkat'  => $this->input->post('tgl_berangkat'),
        'tgl_kembali' => $this->input->post('tgl_kembali'),
        'pengikut' => $this->input->post('pengikut'),
        'anggaran_dari' => $this->input->post('anggaran_dari'),
        'kd_surat' => $this->input->post('kd_surat')
        );
        $kd=$this->input->post('nomor_surat');
        $this->Model_sppd->save_update('tb_sppd',$kd,$data);
        redirect('sppd');
    }

    function tampil_sppd()
    {
        $sppd=$this->Model_sppd->tampil_sppd();
      $data['sppd']=$sppd;
      $this->template->load('template/main','sppd',$data);
    }

    function tampil_nip()
    {
      $nama=$this->input->post('nama');
      //$data['nip']=$this->Model_spt->tampil_nip($nama);
      $data=$this->Model_spt->tampil_nip($nama);
      //echo json_encode(array('nip'=>$data['nip'], 'pangkat'=>$data['pangkat'],'jabatan'=>$data['jabatan']));
      echo json_encode($data);
    }
    function tampil_spt(){
        $kd_surat=$this->input->post('kode');
       $data=$this->Model_sppd->tampil_data_spt($kd_surat);
       echo json_encode($data);
    }
        
    public function hapus_sppd()
    {   
        $no_surat=$this->input->get('no');
        $this->Model_sppd->hapus_sppd($no_surat);
        $data['sppd'] = $this->Model_sppd->tampil_sppd();
      $this->template->load('template/main','sppd',$data);
    }
}