<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            <form class="form-horizontal" method="post" action="<?php echo BASEURL.'siswa/siswaadd' ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">nisn</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="nisn" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">nis</label>
                    <div class="col-sm-10">
                      <input type="number" name="nis" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NoTlp</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="telp" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">kelas</label>
                    <div class="col-sm-10">
                      <select name="kelas" class="form-control">
                      <?php
                            foreach($data['kelas'] as $kelas){
                                echo '<option value="'.$kelas['id_kelas'].'">'.$kelas['nama_kelas'].'</option>';
                            }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Spp</label>
                    <div class="col-sm-10">
                    <select name="spp" class="form-control">
                        <?php
                            foreach($data['spp'] as $spp){
                                echo '<option value="'.$spp['id_spp'].'">Rp. '.number_format($spp['nominal']).'( Ta : '.$spp['tahun'].')</option>';
                            }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>