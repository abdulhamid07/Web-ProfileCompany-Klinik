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
                        <li class="active">Edit Owner</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                                $q=mysql_query("select * from owner where no='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                       
                                <div class="box-body">
                                
                                 <form name="editmenu" method="post" action="pages/dashboard/aksidashboard.php?aksi=editowner" onSubmit="return ValYm()" enctype="multipart/form-data">
					                <input type="hidden" name="no" value="<?php echo $id ?>">
					                <label>Gambar :</label>
					                <img src="../images/<?php echo $dl['img'] ?>" alt="Gambar owner" width="80px" height="100px">
					                <input type="file" name="image" >
					                <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
					                <hr>
					                <label>Nama : </label>
					                <input type="text" name="nama" class="form-control input-sm" required value="<?php echo $dl['nama'] ?>">
					                <hr>
					                <label>Deskripsi : </label>
					                <textarea id="editor1" class="form-control input-sm" required name="desc" rows="10" cols="80"><?php echo $dl['ket'] ?></textarea>
					          
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
