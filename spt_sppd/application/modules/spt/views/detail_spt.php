<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP Makassar - Surat Perintah Tugas</title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Surat Perintah Tugas</h1>
                
              </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="http://localhost/spt_sppd/laporan/laporan_spt.php?no=<?php echo $spt['no_surat']?>" button type="submit" class="btn btn-success"> Cetak Surat</button></a>
                  <div class="clearfix"></div>
                </div>

                  <div class="x_content">
                    <div class="row">
                      

               <!-- CONTENT ANGGOTA -->
                      <div class="col-sm-9 mail_view">
                          
                                <table>
                                  <thead>
                                    <tr>
                                      <th>Nomor Surat </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['no_surat'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Tanggal Surat </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['tgl'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Nama Pegawai </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['nama_pegawai'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>NIP </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['nip'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Pangkat </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['pangkat'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Jabatan </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['jabatan'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Isi Perintah </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['isi_perintah'] ?></th>
                                    </tr><td>&nbsp;</td>
                                    <tr>
                                      <th>Pengirim </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th>&nbsp;</th>
                                      <th><?php echo $spt['pengirim'] ?></th>
                                    </tr>
                                </thead>
                              </table>

                            </div>
                          </div>
                        </div>
                      </div>
    </html>