<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP Makassar </title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Data Admin</h1>
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
                          echo base_url('admin/tambah_admin');?>" button type="submit" class="btn btn-success"> Tambah Admin</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Admin</p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Username </th>
                            <th class="column-title">Password </th>
                            <th class="column-title">Nama </th>
                            <th class="column-title">E-Mail</th>
                            <th class="column-title">Aksi</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $no=1;
                            foreach ($admin as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->username</td>
                                <td>$index->password</td>
                                <td>$index->nama</td>
                                <td>$index->email</td>
                                <td>
                                  <a href=".base_url('admin/detail_admin/'.$index->id_admin)."><button><i class=\"fa fa-folder\"></i></button></a>
                                  <a href=".base_url('admin/edit_admin/'.$index->id_admin)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                                  <a href=".base_url('admin/hapus_admin/'.$index->id_admin)."><button><i class=\"fa fa-trash\"></i></button></a>
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