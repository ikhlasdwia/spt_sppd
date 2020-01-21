<?php
Class laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $tipe=$this->uri->segment(3);
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'Laporan Inventaris Gudang',0,1,'C');
        $pdf->SetFont('Arial','B',12);

        if($tipe=='tahun'){
            $pdf->Cell(190,7,'Laporan Tahunan',0,1,'C');
            $sql="SELECT * FROM view_transaksi where year(tanggal)='2018'";
            $data=$this->db->query($sql)->result();

            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',9);
            $pdf->Cell(32,6,'Kode Barang',1,0);
            $pdf->Cell(15,6,'Merek',1,0);
            $pdf->Cell(27,6,'Model',1,0);
            $pdf->Cell(18,6,'Warna',1,0);
            $pdf->Cell(13,6,'Jumlah',1,0);
            $pdf->Cell(25,6,'Keterangan',1,0);
            $pdf->Cell(25,6,'Tanggal',1,0);
            $pdf->Cell(32,6,'Pemasok',1,1);
            $pdf->SetFont('Arial','',9);

            foreach ($data as $row){
                $pdf->Cell(32,6,$row->kode_barang,1,0);
                $pdf->Cell(15,6,$row->merek,1,0);
                $pdf->Cell(27,6,$row->nama,1,0);
                $pdf->Cell(18,6,$row->warna,1,0); 
                $pdf->Cell(13,6,$row->jumlah,1,0); 
                $pdf->Cell(25,6,$row->keterangan,1,0); 
                $pdf->Cell(25,6,$row->tanggal,1,0); 
                $pdf->Cell(32,6,$row->nama_suplier,1,1); 
            }
        
        }
        else if($tipe=='bulan'){
            $pdf->Cell(190,7,'Laporan Bulanan',0,1,'C');

            for ($i=1; $i<13; $i++){
                $sql="SELECT * FROM view_transaksi where month(tanggal)=".$i;
                $data=$this->db->query($sql)->result();
                if($this->db->query($sql)->num_rows()>0){
        
                    $pdf->Cell(10,7,'',0,1);
                    $pdf->SetFont('Arial','B',9);
                    $pdf->Cell(32,6,'Kode Barang',1,0);
                    $pdf->Cell(15,6,'Merek',1,0);
                    $pdf->Cell(27,6,'Model',1,0);
                    $pdf->Cell(18,6,'Warna',1,0);
                    $pdf->Cell(13,6,'Jumlah',1,0);
                    $pdf->Cell(25,6,'Keterangan',1,0);
                    $pdf->Cell(25,6,'Tanggal',1,0);
                    $pdf->Cell(32,6,'Pemasok',1,1);
                    $pdf->SetFont('Arial','',9);}
        
                foreach ($data as $row){
                    $pdf->Cell(32,6,$row->kode_barang,1,0);
                    $pdf->Cell(15,6,$row->merek,1,0);
                    $pdf->Cell(27,6,$row->nama,1,0);
                    $pdf->Cell(18,6,$row->warna,1,0); 
                    $pdf->Cell(13,6,$row->jumlah,1,0); 
                    $pdf->Cell(25,6,$row->keterangan,1,0); 
                    $pdf->Cell(25,6,$row->tanggal,1,0); 
                    $pdf->Cell(32,6,$row->nama_suplier,1,1); 
                }
            }
        }
        else{
            $pdf->Cell(190,7,'Laporan Harian',0,1,'C');
            for ($i=1; $i<32; $i++){
                $sql="SELECT * FROM view_transaksi where day(tanggal)=".$i;
                $data=$this->db->query($sql)->result();
                if($this->db->query($sql)->num_rows()>0){
                    $pdf->Cell(10,7,'',0,1);
                    $pdf->SetFont('Arial','B',9);
                    $pdf->Cell(32,6,'Kode Barang',1,0);
                    $pdf->Cell(15,6,'Merek',1,0);
                    $pdf->Cell(27,6,'Model',1,0);
                    $pdf->Cell(18,6,'Warna',1,0);
                    $pdf->Cell(13,6,'Jumlah',1,0);
                    $pdf->Cell(25,6,'Keterangan',1,0);
                    $pdf->Cell(25,6,'Tanggal',1,0);
                    $pdf->Cell(32,6,'Pemasok',1,1);
                    $pdf->SetFont('Arial','',9);
                }
        
                foreach ($data as $row){
                    $pdf->Cell(32,6,$row->kode_barang,1,0);
                    $pdf->Cell(15,6,$row->merek,1,0);
                    $pdf->Cell(27,6,$row->nama,1,0);
                    $pdf->Cell(18,6,$row->warna,1,0); 
                    $pdf->Cell(13,6,$row->jumlah,1,0); 
                    $pdf->Cell(25,6,$row->keterangan,1,0); 
                    $pdf->Cell(25,6,$row->tanggal,1,0); 
                    $pdf->Cell(32,6,$row->nama_suplier,1,1); 
                }
            }
        }
        $pdf->Output();
    }
}