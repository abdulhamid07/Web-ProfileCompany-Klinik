<?php
	$id=$_GET['id'];
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Services</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <?php
                                $q=mysql_query("select * from service where id_service='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Service</h3>                                
                                </div>
                                    <div class="box-body table-responsive">
                                        <form name="addlayanan" method="post" action="pages/master_web/aksilayanan.php?aksi=edit">
					                       <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <label>Judul : </label>
					                           <input type="text" name="judul" required class="form-control input-sm" value="<?php echo $dl['nama_pel'] ?>">
                                            <hr>   
                                               <label>Deskripsi : </label>
					                       <textarea id="editor1" class="form-control" required name="desc" rows="10" cols="80" ><?php echo $dl['ket'] ?></textarea>
					                       <hr>
        					                <div class="box-footer">
        					                   <button type="reset" class="btn btn-default">Reset</button>
        					                   <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
                    					       <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Edit</button>
                                            </div>
					                   </form>
					               </div>
	                        </div>
	                    </div>
                    </div><!-- /.row (main row) -->
                </section><!-- /.content -->