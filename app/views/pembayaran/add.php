<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            <form class="form-horizontal" method="post" action="<?php echo BASEURL.'pembayaran/bayar' ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">nisn</label>
                    <div class="col-sm-10">
                      <input type="number" value="<?php echo $_GET['nisn'] ?>" readonly class="form-control" name="nisn" id="inputEmail3">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TglBayar</label>
                    <div class="col-sm-10">
                      <input type="date"  class="form-control" name="tglbayar" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nominal</label>
                    <div class="col-sm-10">
                      <input type="number"  class="form-control" name="nominal" id="inputEmail3">
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