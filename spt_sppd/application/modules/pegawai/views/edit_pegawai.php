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
                    <h2>Edit Pegawai</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url('Pegawai/aksi_edit_pegawai');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Pegawai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id_pegawai" required="required" type="auto_increament" value="<?php echo $pegawai['id_pegawai']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nip" required="required" type="text" value="<?php echo $pegawai['nip']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $pegawai['nama_pegawai']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pangkat" class="form-control">
                            <option value="IV/a" <?php echo ($pegawai['pangkat'] == 'IV/a') ? 'selected="selected"': ''; ?>>IV/a</option>
                            <option value="IV/b" <?php echo ($pegawai['pangkat'] == 'IV/b') ? 'selected="selected"': ''; ?>>IV/b</option>
                            <option value="IV/c" <?php echo ($pegawai['pangkat'] == 'IV/c') ? 'selected="selected"': ''; ?>>IV/c</option>
                            <option value="IV/d" <?php echo ($pegawai['pangkat'] == 'IV/d') ? 'selected="selected"': ''; ?>>IV/d</option>
                            <option value="III/a" <?php echo ($pegawai['pangkat'] == 'III/a') ? 'selected="selected"': ''; ?>>III/a</option>
                            <option value="III/b" <?php echo ($pegawai['pangkat'] == 'III/b') ? 'selected="selected"': ''; ?>>III/b</option>
                            <option value="III/c" <?php echo ($pegawai['pangkat'] == 'III/c') ? 'selected="selected"': ''; ?>>III/c</option>
                            <option value="III/d" <?php echo ($pegawai['pangkat'] == 'III/d') ? 'selected="selected"': ''; ?>>III/d</option>
                            <option value="II/a" <?php echo ($pegawai['pangkat'] == 'II/a') ? 'selected="selected"': ''; ?>>II/a</option>
                            <option value="II/b" <?php echo ($pegawai['pangkat'] == 'II/b') ? 'selected="selected"': ''; ?>>II/b</option>
                            <option value="II/c" <?php echo ($pegawai['pangkat'] == 'II/c') ? 'selected="selected"': ''; ?>>II/c</option>
                            <option value="II/d" <?php echo ($pegawai['pangkat'] == 'II/d') ? 'selected="selected"': ''; ?>>II/d</option>
                            option value="I/a" <?php echo ($pegawai['pangkat'] == 'I/a') ? 'selected="selected"': ''; ?>>I/a</option>
                            <option value="I/b" <?php echo ($pegawai['pangkat'] == 'I/b') ? 'selected="selected"': ''; ?>>I/b</option>
                            <option value="I/c" <?php echo ($pegawai['pangkat'] == 'I/c') ? 'selected="selected"': ''; ?>>I/c</option>
                            <option value="I/d" <?php echo ($pegawai['pangkat'] == 'I/d') ? 'selected="selected"': ''; ?>>I/d</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $pegawai['jabatan']?>">
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