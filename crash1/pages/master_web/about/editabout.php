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
                        <li class="active">Edit About</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                                $q=mysql_query("select * from about where no='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                       
                                <div class="box box-body">
                                
                                 <form name="addlayanan" method="post" action="pages/master_web/about/aksiabout.php?aksi=edit" enctype="multipart/form-data">
					                <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <label>Judul :</label>
                                    <input type="text" name="judul" class="form-control input-sm" required readonly="readonly" value="<?php  echo $dl['judul'] ?>" placeholder="Judul">
                                    <hr>
					                <label>Deskripsi : </label>
					                <textarea id="editor1" class="form-control" required name="ket" rows="10" cols="80" ><?php echo $dl['ket'] ?></textarea>
					                <hr>
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
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>