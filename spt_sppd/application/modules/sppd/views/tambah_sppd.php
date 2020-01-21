    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
     
    </head>
    <body >
      <!-- page content -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Surat Perinah Perjalanan Dinas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url().'Sppd/aksi_tambah_sppd';?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode SPT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="nomor_surat" onchange="load_c($(this).find('option:selected').attr('value'))" id="kode_surat" class="form-control" required="">
                            <?php
                            foreach ($kode_surat as $kd) {?>
                              <option value="<?php echo $kd->no_surat;?>"><?php echo $kd->no_surat;?></option>
                          <?php  }
                          ?>
                          </select>
                          
                          <!--input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="kd_sppd" required="required" type="auto_increament"-->
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pejabat Pembuat Komitmen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pejabat_pk" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" readonly="" id="nama_pegawai" name="nama_pegawai" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  readonly="" id="nip" name="nip" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pangkat" id="pangkat"  class="form-control">
                            <option value="IV/a">IV/a</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/d">IV/d</option>
                            <option value="III/a">III/a</option>
                            <option value="III/b">III/b</option>
                            <option value="III/c">III/c</option>
                            <option value="III/d">III/d</option>
                            <option value="II/a">II/a</option>
                            <option value="II/b">II/b</option>
                            <option value="II/c">II/c</option>
                            <option value="II/d">II/d</option>
                            <option value="I/a">I/a</option>
                            <option value="I/b">I/b</option>
                            <option value="I/c">I/c</option>
                            <option value="I/d">I/d</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" id="jabatan" name="jabatan" readonly="" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Biaya <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="biaya" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Maksud <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="isi_perintah" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Angkutan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="angkutan" class="form-control">
                            <option value="mobil">Mobil</option>
                            <option value="kapal">Kapal</option>
                            <option value="pesawat">Pesawat</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Berangkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tempat_berangkat" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tujuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tempat_tujuan" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lama Dinas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="lama_dinas" required="required" type="number">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="satuan" class="form-control">
                            <option value="hari">Hari</option>
                            <option value="minggu">Minggu</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Berangkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" id="tgl" name="tgl_berangkat" required="required" type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Harus Kembali <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tgl_kembali" required="required" type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengikut <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pengikut" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anggaran Dari <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="anggaran_dari" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" id="kd_surat" name="kd_surat" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input id="send" type="submit" class="btn btn-success" name="simpan" value="Simpan" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    <script src="http://127.0.0.1/spt_sppd/assets/js/jquery-3.2.1.min.js"></script>  
    <script  type="text/javascript">
          function load_c(x){
            console.log("berhasil di load");
            var y={kode:x};
            $.ajax({
              type:"POST",
              url: 'tampil_spt',
              data:y
            })
            .success(function (data){
            console.log(data);
            if (data=='null'){
              $('#nama_pegawai').val("");
              $('#nip').val("");  
              $('#pangkat').val("");
              $('#jabatan').val("");  
            } else {
            var json = data,
            obj = JSON.parse(json);
            $('#nama_pegawai').val(obj.nama_pegawai);
            $('#nip').val(obj.nip);  
            $('#pangkat').val(obj.pangkat);
            $('#jabatan').val(obj.jabatan);}
            });
          }
    </script>    
    </body>
    </html>