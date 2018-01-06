
<?php 
   
        $id=$_GET['id'];
        $q=mysql_query("select * from testimoni where no='$id'");
        $dt=mysql_fetch_assoc($q);
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Testimoni & Pesan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Edit Testimoni</h3>
                            </div>
                                <div class="box-body">
                                <form name="test" method="post" action="pages/master_web/testimoni/aksitestimoni.php?aksi=<?php if($md=='edittestimoni'){ ?>edittest<?php }else{ ?>tambahtest<?php } ?>" onsubmit="return ValTest()" enctype="multipart/form-data">
	                                
                                    <input type="hidden" name="no" value="<?php echo $id ?>">
	                                <label>Nama : </label>
	                                <input type="text" name="nama" class="form-control input-sm"required placeholder="Nama Anda" value="<?php echo $dt['nama'] ?>">
	                                <hr>
                                    <label>Email : </label>
                                    <input type="text" name="jabatan" class="form-control input-sm"required placeholder="Email" value="<?php echo $dt['email'] ?>">
                                    <hr>
					                <label>Testimoni : </label>
					                <textarea id="editor1" class="form-control input-sm"required name="pesan" rows="10"><?php echo $dt['pesan'] ?></textarea>
						        <div class="box-footer">
						            <button type="reset" class="btn btn-default">Reset</button>
						            <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
	            					<button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Simpan</button>
						            </form>
						        </div>
	                            </div>
	                        </div>
                    	</div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->