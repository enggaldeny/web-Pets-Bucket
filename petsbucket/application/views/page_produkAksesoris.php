<section id="main-content">
    <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> List Aksesoris Hewan&nbsp;<i class="fa fa-paw"></i></h3>
				<div class="row">
				
    <div class="col-md-12">
	   <div class="content-panel">
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		<tr>
            <th>No</th>
			<th >Nama</th>
            <th >Stok</th>
            <th >Satuan</th>
            <th >@Harga</th>
            <th >Gambar</th>
            <th colspan="3">Opsi</th>
		</tr>
        </thead>
		                          <tbody>
		                          <?php
								  $no = 0;
			foreach($rows as $row) {
				$no++;
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->prd_nama; ?></td>
			<td><?php echo $row->prd_stok; ?></td>
			<td><?php echo $row->prd_satuan; ?></td>
			<td><?php echo $row->prd_harga; ?></td>
			<td><?php echo $row->prd_gambar; ?></td>
			<td><a href="page/update/<?php echo $row->prd_id; ?>">Ubah</a>
			<a href="delete/<?php echo $row->prd_id; ?>">Hapus</a></td>
		</tr>
			<?php
				}
			?>
		                          </tbody>
		                      </table>
	                  	  </div>
	                  </div>
        </div>
        </section>
</section>
