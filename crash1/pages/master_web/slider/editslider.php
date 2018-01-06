<?php
	include "../config/koneksi.php";
	$id=$_GET['id'];
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Comment & Slider</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                                $q=mysql_query("select * from slider where no='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Edit Slider</h3>
                            </div>
                                <div class="box-body">
                                
                                 <form name="addlayanan" method="post" action="pages/master_web/slider/aksislider.php?aksi=editslider" enctype="multipart/form-data">
					                <input type="hidden" name="id" value="<?php echo $id ?>">
					                <label>Gambar :</label>
					                <img src="../images/slider/<?php echo $dl['img'] ?>" alt="Gambar Slider" width="119px" height="88px">
					                <input type="file" name="image1" >
					                <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
					                <hr>
					                <label>Deskripsi Silder : </label>
					                <textarea id="editor1" class="form-control" required name="cap" rows="10" cols="80"><?php echo $dl['cap'] ?></textarea>					             
					        <div class="box-footer">
					            <button type="reset" class="btn btn-default">Reset</button>
					            <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
            					<button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Edit</button>
					            </form>
					        </div>
	                            </div>
	                        </div>
                    	</div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->
