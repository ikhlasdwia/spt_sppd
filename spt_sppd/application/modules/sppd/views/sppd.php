<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP Makassar - Surat Perintah Perjalanan Dinas </title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Data Surat Perjalanan Dinas</h1>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" id="inputnya" onkeyup="fungsiCari()" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> 
              </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                      <a href="<?php
                          echo base_url('sppd/tambah_sppd');?>" button type="submit" class="btn btn-success"> Tambah Surat Perjalanan Dinas</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Surat Perintah Perjalanan Dinas</p>
                    <div class="table-responsive">
                      <table id="tabelku" class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Nomor Surat </th>
                            <th class="column-title">Nama Pegawai </th>
                            <th class="column-title">Biaya </th>
                            <th class="column-title">Maksud </th>
                            <th class="column-title">Tempat Berangkat </th>
                            <th class="column-title">Tempat Tujuan </th>
                            <th class="column-title">Tanggal Berangkat </th>
                            <th class="column-title">Tanggal Kembali </th>
                            <th class="column-title">Anggaran dari  </th>
                            <th class="column-title">Aksi</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no=1;
                            foreach ($sppd as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->nomor_surat</td>
                                <td>$index->nama_pegawai</td>
                                <td>$index->biaya</td>
                                <td>$index->isi_perintah</td>
                                <td>$index->tempat_berangkat</td>
                                <td>$index->tempat_tujuan</td>
                                <td>$index->tgl_berangkat</td>
                                <td>$index->tgl_kembali</td>
                                <td>$index->anggaran_dari</td>
                                <td>
                                  <a href=".base_url('sppd/detail_sppd?no='.$index->nomor_surat)."><button><i class=\"fa fa-folder\"></i></button></a>
                                  <a href=".base_url('sppd/edit_sppd/'.$index->nomor_surat)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                                  <a href=".base_url('sppd/hapus_sppd?no='.$index->nomor_surat)."><button><i class=\"fa fa-trash\"></i></button></a>
                                </td>
                              <tr>";
                            $no++;
                            }
                            ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        <script type="text/javascript" src="http://127.0.0.1/spt_sppd/assets/js/jquery-3.2.1.min.js"></script>   
        <script type="text/javascript">
          function fungsiCari(){
            var input, filter, table, tr, td, i, nilai;
            input=document.getElementById("inputnya");
            filter=input.value.toUpperCase();
            table=document.getElementById("tabelku");
            tr =table.getElementsByTagName("tr");

            for (var i = 0; i < tr.length; i++) {
              td=tr[i].getElementsByTagName("td")[1];
              if (td){
                nilai=td.textContent || td.innerText;
                if (nilai.toUpperCase().indexOf(filter)>-1){
                  tr[i].style.display="";
                }else{
                  tr[i].style.display="none";
                }
              }
            }
          }
        </script>
    </body>
    </html>