<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Hi.. <?php echo $this->session->userdata("usaha"); ?></h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<h4>Profil Usaha Anda</h4>
          		</div>
          	</div>
              <form action="<?php echo base_url()?>/index.php/page/edit_profil" method="post">
              <div class="row">
              <div class="col-md-3">
              <img src="<?php echo base_url()?>assets/style/img/<?php echo $model->gbr ?>" class="img-rounded" alt="Cinque Terre" width="270" height="200"><br><br>
                  <input type="file" name="gbr">
              </div>
              
              <div class="col-md-4">
                  <input type="hidden" class="form-control" name="kode" value="<?php echo $model->kode ?>">
                Nama Usaha : <input type="text" class="form-control" name="usaha" value="<?php echo $model->usaha ?>"><br>
                   No Hp Usaha:<input type="text" class="form-control" name="hp" value="<?php echo $model->hp ?>"><br>
                   Alamat :<input type="text" class="form-control" name="alamat" value="<?php echo $model->alamat ?>"><br>
                 
              </div>
                  <div class="col-md-4">
                      Pemilik :<input type="text" class="form-control" name="nama" value="<?php echo $model->nama ?>"><br>
                  Email :<input type="text" class="form-control" name="email" value="<?php echo $model->email ?>"><br>
                  </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-sm-5">
                    <h4>Deskripsi</h4>
                    <textarea class="form-control" name="desk"><?php echo $model->desk ?></textarea>
                </div>
                <div class="col-sm-7">
                    <h4>Rekening</h4>
                    <table>
                    <tr>
                        <td><input type="text" name="bank" class="form-control" value="<?php echo $model->bank ?>"></td><td>&nbsp;-&nbsp;</td><td><input type="text" name="rek" class="form-control" value="<?php echo $model->rek ?>"></td>
                        </tr>
                    </table>
                </div>
              </div><br><br>
              <div class="row">
                  <div class="col-sm-5"></div>
                  <div class="col-sm-7">
                      <button class="btn btn-success " name="edit" type="submit"><i class="fa fa-pencil"></i> &nbsp; Simpan Perubahan</button></div>
              </div>
                  </form>
		</section>
      </section>