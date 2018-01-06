<?php
    $id=$_GET['id'];
    $q=mysql_query("select * from blog where no='$id' limit 0,1");
    $dn=mysql_fetch_assoc($q);
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">News And Info</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-warning">
                       
                                <div class="box-header">
                                    <h3 class="box-title">Edit Artikel</h3>
                                </div>
                                <div class="box-body table-responsive">
	                                <form name="addnews" method="post" action="pages/master_web/news/aksinews.php?aksi=edit" enctype="multipart/form-data">
	                                <input type="hidden" name="id" value="<?php echo $dn['no'] ?>">
                                    <label>Gambar : </label>
                                    <img src="../images/blog/<?php echo $dn['img'] ?>" width="300px" height="160px">
	                                <input type="file" name="image2">
                                    <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
	                                <hr>
	                                <label>Judul: </label>
	                                <input type="text" name="judul" class="form-control input-sm" required maxlength="100" width="300px" value="<?php echo $dn['judul'] ?>">
	                                <hr>
					                <label>Deskripsi : </label>
					                <textarea id="editor1" class="form-control input-sm" required name="desk" rows="10"><?php echo $dn['desk'] ?></textarea>
                                    </select>
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
  <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>