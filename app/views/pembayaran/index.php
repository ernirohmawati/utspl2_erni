<?php
$arrNamaBulan = array("01"=>"Januari", "02"=>"Februari", "03"=>"Maret", "04"=>"April", "05"=>"Mei", "06"=>"Juni", "07"=>"Juli", "08"=>"Agustus", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");
?>
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
          <form class="form-horizontal" method="post" action="<?php echo BASEURL.'pembayaran' ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">nisn</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" value="<?php echo $data['nisn'] ?>" name="nisn" id="inputEmail3">
                    </div>
                    <button type="submit" name="cari" class="btn btn-info">Cari</button>
                  </div>
                 
</div>
</form>
</div>
<?php if(isset($data['pembayaran'])){
    
    ?>
            <div class="card">
            <div class="card-header">
                <a class="btn btn-info" href="<?php echo BASEURL."Pembayaran/Add&nisn=".$data['nisn'] ?>">Bayar</a>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nisn</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Spp</th>
                  <th>Tgl bayar</th>
                  <th>Nominal</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    $nomial=0;
                    $jmlbayar=0;
                        foreach( $data['pembayaran'] as  $bayar){
                            $nomial = $bayar['nominal'];
                            $jmlbayar += $bayar['jumlah_bayar'];
                            ?>
                            <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $bayar['nisn'] ?></td>
                                    <td><?php echo $bayar['nama'] ?></td>
                                    <td><?php echo $bayar['nama_kelas'] ?></td>
                                    <td>Rp. <?php echo number_format($bayar['nominal']) ?></td>
                                    <td><?php echo $bayar['tgl_bayar']." ".$arrNamaBulan[$bayar['bulan_bayar']]." ".$bayar['tahun_bayar'] ?></td>
                                    <td>Rp. <?php echo number_format($bayar['jumlah_bayar']) ?></td>
                            </tr>
                            <?php
                            $no++;
                        }
                    ?>
            </tbody>
            <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Sisa</th>
                  <th><?php echo number_format($nomial-$jmlbayar)?></th>
                </tr>
                </tfoot>
</table>
              </div>
            </div>
            <?php
            }?>
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