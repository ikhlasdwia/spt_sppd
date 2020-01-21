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
                    <h2>Edit Surat Perintah Tugas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url('Spt/aksi_edit_spt');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="kd_surat" required="required" type="auto_increament" value="<?php echo $spt['kd_surat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="no_surat" required="required" type="text" value="<?php echo $spt['no_surat']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tgl" required="required" type="date" value="<?php echo $spt['tgl']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $spt['nama_pegawai']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $spt['nip']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pangkat" class="form-control">
                            <option value="IV/a" <?php echo ($spt['pangkat'] == 'IV/a') ? 'selected="selected"': ''; ?>>IV/a</option>
                            <option value="IV/b" <?php echo ($spt['pangkat'] == 'IV/b') ? 'selected="selected"': ''; ?>>IV/b</option>
                            <option value="IV/c" <?php echo ($spt['pangkat'] == 'IV/c') ? 'selected="selected"': ''; ?>>IV/c</option>
                            <option value="IV/d" <?php echo ($spt['pangkat'] == 'IV/d') ? 'selected="selected"': ''; ?>>IV/d</option>
                            <option value="III/a" <?php echo ($spt['pangkat'] == 'III/a') ? 'selected="selected"': ''; ?>>III/a</option>
                            <option value="III/b" <?php echo ($spt['pangkat'] == 'III/b') ? 'selected="selected"': ''; ?>>III/b</option>
                            <option value="III/c" <?php echo ($spt['pangkat'] == 'III/c') ? 'selected="selected"': ''; ?>>III/c</option>
                            <option value="III/d" <?php echo ($spt['pangkat'] == 'III/d') ? 'selected="selected"': ''; ?>>III/d</option>
                            <option value="II/a" <?php echo ($spt['pangkat'] == 'II/a') ? 'selected="selected"': ''; ?>>II/a</option>
                            <option value="II/b" <?php echo ($spt['pangkat'] == 'II/b') ? 'selected="selected"': ''; ?>>II/b</option>
                            <option value="II/c" <?php echo ($spt['pangkat'] == 'II/c') ? 'selected="selected"': ''; ?>>II/c</option>
                            <option value="II/d" <?php echo ($spt['pangkat'] == 'II/d') ? 'selected="selected"': ''; ?>>II/d</option>
                            option value="I/a" <?php echo ($spt['pangkat'] == 'I/a') ? 'selected="selected"': ''; ?>>I/a</option>
                            <option value="I/b" <?php echo ($spt['pangkat'] == 'I/b') ? 'selected="selected"': ''; ?>>I/b</option>
                            <option value="I/c" <?php echo ($spt['pangkat'] == 'I/c') ? 'selected="selected"': ''; ?>>I/c</option>
                            <option value="I/d" <?php echo ($spt['pangkat'] == 'I/d') ? 'selected="selected"': ''; ?>>I/d</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $spt['jabatan']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Isi Perintah <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="isi_perintah" class="form-control col-md-7 col-xs-12" value="<?php echo $spt['isi_perintah']?>"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengirim<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pengirim" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $spt['pengirim']?>">
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
            
        <script type="text/javascript" src="http://127.0.0.1/spt_sppd/assets/js/jquery-3.2.1.min.js"></script>   
        <script src="http://127.0.0.1/spt_sppd/assets/js/jquery-3.2.1.min.js"></script>
         <script type="text/javascript">
          function isi_otomatis(){
            var nama = $("#nama").val();
            var data={nama:nama};
            $.ajax({
              type: "POST",
              url: 'tampil_nip',
              data:data 
            })
            .success(function (data){
            console.log(data);
            if (data=='null'){
              $('#nip').val("");  
              $('#pangkat').val("");
              $('#jabatan').val("");  
            } else {
            var json = data,
            obj = JSON.parse(json);
            $('#nip').val(obj.nip);  
            $('#pangkat').val(obj.pangkat);
            $('#jabatan').val(obj.jabatan);}
            });
          }
          
        </script>
    </body>
    </html>