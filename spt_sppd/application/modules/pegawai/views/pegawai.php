<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP MAKASSAR </title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Data Pegawai</h1>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
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
                          echo base_url('pegawai/tambah_pegawai');?>" button type="submit" class="btn btn-success"> Tambah Pegawai</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Pegawai ATKP Makassar</p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">ID Pegawai </th>
                            <th class="column-title">NIP </th>
                            <th class="column-title">Nama Pegawai </th>
                            <th class="column-title">Pangkat </th>
                            <th class="column-title">Jabtan </th>
                            <th class="column-title">Aksi</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $no=1;
                            foreach ($pegawai as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->id_pegawai</td>
                                <td>$index->nip</td>
                                <td>$index->nama_pegawai</td>
                                <td>$index->pangkat</td>
                                <td>$index->jabatan</td>
                                <td>
                                  <a href=".base_url('pegawai/detail_pegawai/'.$index->id_pegawai)."><button><i class=\"fa fa-folder\"></i></button></a>
                                  <a href=".base_url('pegawai/edit_pegawai/'.$index->id_pegawai)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                                  <a href=".base_url('pegawai/hapus_pegawai/'.$index->id_pegawai)."><button><i class=\"fa fa-trash\"></i></button></a>
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
    </body>
    </html>