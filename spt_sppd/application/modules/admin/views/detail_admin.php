<!DOCTYPE html>
    <html>
    <head>
      <title>Inready Workgroup - Detail Anggota </title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Detail Admin</h1>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div> 
              </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin</h2>
                  <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
                      <img src="<?php echo base_url()."assets/image/".$admin['foto'] ?>" height="300px" width="242px">
                    </div>

               <!-- CONTENT ADMIN -->
                      <div class="col-sm-9 mail_view">
                          <div class="col-md-4 text-right">
                                <table>
                                  <thead>
                                    <tr>
                                      <th>Nama </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $admin['nama'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>E-Mail </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $admin['email'] ?></th>
                                    </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                        </div>
    </html>