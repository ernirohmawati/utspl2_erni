<div class="content">
      <div class="container-fluid">
      <div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();
			?>
		</div>
	</div>
        <div class="row">
          <div class="col-lg-12">
              
            <div class="card">
            <div class="card-header">
                <a class="btn btn-info" href="<?php echo BASEURL."Siswa/Add" ?>"> Add siswa</a>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nisn</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $no=1;
                    foreach($data['siswa'] as $siswa){ 
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $siswa['nisn'] ?></td>
                        <td><?php echo $siswa['nis'] ?></td>
                        <td><?php echo $siswa['nama'] ?></td>
                        <td>X</td>
                    </tr>
                <?php 
                    $no++;
                    }
                ?>
            </tbody>
</table>
              </div>
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