<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP Makassar - Surat Perintah Tugas</title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Data Surat Perintah Tugas</h1>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" onkeyup="fungsiCari()" id="inputnya" class="form-control" placeholder="Search for...">
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
                          echo base_url('spt/tambah_spt');?>" button type="submit" class="btn btn-success"> Tambah Surat Perintah Tugas</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Surat Perintah Tugas ATKP MAKASSAR</p>
                    <div class="table-responsive">
                      <table id="tabelku" class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Nomor Surat </th>
                            <th class="column-title">Nama Pegawai </th>
                            <th class="column-title">NIP </th>
                            <th class="column-title">Pangkat </th>
                            <th class="column-title">Jabatan </th>
                            <th class="column-title">Isi Perintah </th>
                            <th class="column-title">Aksi</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $no=1;
                            foreach ($spt as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->no_surat</td>
                                <td>$index->nama_pegawai</td>
                                <td>$index->nip</td>
                                <td>$index->pangkat</td>
                                <td>$index->jabatan</td>
                                <td>$index->isi_perintah</td>
                                <td>
                                  <a href=".base_url('spt/detail_spt/'.$index->kd_surat)."><button><i class=\"fa fa-folder\"></i></button></a>
                                  <a href=".base_url('spt/edit_spt/'.$index->kd_surat)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                                  <a href=".base_url('spt/hapus_spt/'.$index->kd_surat)."><button><i class=\"fa fa-trash\"></i></button></a>
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