<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Spt extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_spt');
      $this->load->database('spt_sppd');
        $this->load->helper('url');
        $this->load->helper('date');

    }

    public function index()
    {
      $data['spt'] = $this->Model_spt->tampil_spt();
      $this->template->load('template/main','spt',$data);
    }

    function tambah_spt()
    {
      $data['data'] = $this->Model_spt->tampil_nm_pgw();
      $this->template->load('template/main','tambah_spt', $data);
    }

    function aksi_tambah_spt()
    {
        //$datestring='%Y-%m-%d'; $time=$this->input->post('tgl');
        $date=$this->input->post('tgl'); //$date=date($datestring, $time);
        $data = array(
        'kd_surat'  => $this->input->post('kd_surat'),
        'no_surat'  => $this->input->post('no_surat'),
        'tgl' => $date,
        'nip' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
        'pangkat' => $this->input->post('pangkat'),
        'nama_pegawai' => $this->input->post('nama_pegawai'),
        'isi_perintah' => $this->input->post('isi_perintah'),
        'pengirim' => $this->input->post('pengirim')
        );
        $this->Model_spt->save('tb_spt',$data);
        redirect(base_url().'Spt');
    }

    public function detail_spt($kd_surat)
    {
        $data['spt'] = $this->Model_spt->tampil_detail_spt($kd_surat)->row_array();
        $this->template->load('template/main','detail_spt', $data);
    }

    function edit_spt($kd_surat)
    {
      $data['spt'] = $this->Model_spt->tampil_edit_spt($kd_surat)->row_array();
      $this->template->load('template/main','edit_spt',$data);
    }

    function aksi_edit_spt()
    {
        $data = array(
        'kd_surat'  => $this->input->post('kd_surat'),
        'no_surat'  => $this->input->post('no_surat'),
        'tgl' => $this->input->post('tgl'),
        'nip' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
        'pangkat' => $this->input->post('pangkat'),
        'nama_pegawai' => $this->input->post('nama_pegawai'),
        'isi_perintah' => $this->input->post('isi_perintah'),
        'pengirim' => $this->input->post('pengirim')
        );
        $kd=$this->input->post('kd_surat');
        $this->Model_spt->save_update('tb_spt',$kd,$data);
        redirect('spt');
    }

    function tampil_spt()
    {
        $spt=$this->Model_spt->tampil_spt();
      $data['spt']=$spt;
      $this->template->load('template/main','spt',$data);
    }
    function tampil_nip()
    {
      $nama=$this->input->post('nama');
      //$data['nip']=$this->Model_spt->tampil_nip($nama);
      $data=$this->Model_spt->tampil_nip($nama);
      //echo json_encode(array('nip'=>$data['nip'], 'pangkat'=>$data['pangkat'],'jabatan'=>$data['jabatan']));
      echo json_encode($data);
    }

    function hapus_spt($kd_surat)
    {
      $this->Model_spt->hapus_spt('tb_spt',$kd_surat);  //spt nama table
      redirect('spt');
    }
    function tampil_pgw(){
      $nm_pgw=$this->input->post('kode');
      $data=$this->Model_spt->tampil_data_pgw($nm_pgw);
      echo json_encode($data);
    }
}