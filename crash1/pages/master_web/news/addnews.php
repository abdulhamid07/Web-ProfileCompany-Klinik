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
                                    <h3 class="box-title">Tambah Artikel</h3>
                                </div>
                                <div class="box-body table-responsive">
	                                <form name="addnews" method="post" action="pages/master_web/news/aksinews.php?aksi=tambah" enctype="multipart/form-data">
	                                <label>Gambar : </label>
	                                <input type="file" name="image2" required>
	                                <hr>
	                                <label>Judul: </label>
	                                <input type="text" name="judul" class="form-control input-sm" required maxlength="100" width="300px" placeholder="Judul Artikel">
	                                <hr>
					                <label>Deskripsi : </label>
					                <textarea id="editor1" class="form-control input-sm" required name="desk" rows="10"></textarea>
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
