    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
      <!-- page content -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Surat Perintah Perjalanan Dinas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url('Sppd/aksi_edit_sppd');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="kd_surat" required="required" type="auto_increament" value="<?php echo $sppd['kd_surat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nomor_surat" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $sppd['nomor_surat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pejabat Pembuat Komitmen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pejabat_pk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['pejabat_pk']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['nama_pegawai']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['nip']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pangkat" class="form-control">
                            <option value="IV/a" <?php echo ($sppd['pangkat'] == 'IV/a') ? 'selected="selected"': ''; ?>>IV/a</option>
                            <option value="IV/b" <?php echo ($sppd['pangkat'] == 'IV/b') ? 'selected="selected"': ''; ?>>IV/b</option>
                            <option value="IV/c" <?php echo ($sppd['pangkat'] == 'IV/c') ? 'selected="selected"': ''; ?>>IV/c</option>
                            <option value="IV/d" <?php echo ($sppd['pangkat'] == 'IV/d') ? 'selected="selected"': ''; ?>>IV/d</option>
                            <option value="III/a" <?php echo ($sppd['pangkat'] == 'III/a') ? 'selected="selected"': ''; ?>>III/a</option>
                            <option value="III/b" <?php echo ($sppd['pangkat'] == 'III/b') ? 'selected="selected"': ''; ?>>III/b</option>
                            <option value="III/c" <?php echo ($sppd['pangkat'] == 'III/c') ? 'selected="selected"': ''; ?>>III/c</option>
                            <option value="III/d" <?php echo ($sppd['pangkat'] == 'III/d') ? 'selected="selected"': ''; ?>>III/d</option>
                            <option value="II/a" <?php echo ($sppd['pangkat'] == 'II/a') ? 'selected="selected"': ''; ?>>II/a</option>
                            <option value="II/b" <?php echo ($sppd['pangkat'] == 'II/b') ? 'selected="selected"': ''; ?>>II/b</option>
                            <option value="II/c" <?php echo ($sppd['pangkat'] == 'II/c') ? 'selected="selected"': ''; ?>>II/c</option>
                            <option value="II/d" <?php echo ($sppd['pangkat'] == 'II/d') ? 'selected="selected"': ''; ?>>II/d</option>
                            option value="I/a" <?php echo ($sppd['pangkat'] == 'I/a') ? 'selected="selected"': ''; ?>>I/a</option>
                            <option value="I/b" <?php echo ($sppd['pangkat'] == 'I/b') ? 'selected="selected"': ''; ?>>I/b</option>
                            <option value="I/c" <?php echo ($sppd['pangkat'] == 'I/c') ? 'selected="selected"': ''; ?>>I/c</option>
                            <option value="I/d" <?php echo ($sppd['pangkat'] == 'I/d') ? 'selected="selected"': ''; ?>>I/d</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['jabatan']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Biaya <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="biaya" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['biaya']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Maksud <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="isi_perintah" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['isi_perintah']?>"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Angkutan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="angkutan" class="form-control">
                            <option value="mobil" <?php echo ($sppd['angkutan'] == 'mobil') ? 'selected="selected"': ''; ?>>Mobil</option>
                            <option value="kapal" <?php echo ($sppd['angkutan'] == 'kapal') ? 'selected="selected"': ''; ?>>Kapal</option>
                            <option value="pesawat" <?php echo ($sppd['angkutan'] == 'pesawat') ? 'selected="selected"': ''; ?>>Pesawat</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Berangkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tempat_berangkat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['tempat_berangkat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tujuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tempat_tujuan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['tempat_tujuan']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lama Dinas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="lama_dinas" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['lama_dinas']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="satuan" class="form-control">
                            <option value="hari" <?php echo ($sppd['satuan'] == 'hari') ? 'selected="selected"': ''; ?>>Hari</option>
                            <option value="minggu" <?php echo ($sppd['satuan'] == 'minggu') ? 'selected="selected"': ''; ?>>Minggu</option>
                            <option value="bulan" <?php echo ($sppd['satuan'] == 'bulan') ? 'selected="selected"': ''; ?>>Bulan</option>
                            <option value="tahun" <?php echo ($sppd['satuan'] == 'tahun') ? 'selected="selected"': ''; ?>>Tahun</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Berangkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="tgl_berangkat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['tgl_berangkat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kembali <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="tgl_kembali" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['tgl_kembali']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengikut <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pengikut" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['jabatan']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anggaran Dari <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="anggaran_dari" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sppd['anggaran_dari']?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name="simpan" class="btn btn-success" value="simpan">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </body>
    </html>