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
                        <li class="active">Detail Komentar</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                                $q=mysql_query("update comment_blog set status='R' where id_comment='$id'");
                                
                                $q=mysql_query("select *,n.judul from comment_blog c
                                                left join blog n on n.no=c.id_article where c.id_comment='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                       
                                <div class="box box-body">
                                
                                 <form name="addlayanan" method="post" action="pages/master_web/aksilayanan.php?aksi=edit" onSubmit="return ValLayanan()" enctype="multipart/form-data">
					                <input type="hidden" name="id" value="<?php echo $id ?>">
					                <label>Nama :</label>
                                    <input type="text" name="nama" class="form-control input-sm" readonly="readonly" value="<?php echo ucwords($dl['nama']) ?>">
					                <hr>
					                <label>Email : </label>
                                    <input type="text" name="email" class="form-control input-sm" readonly="readonly" value="<?php echo $dl['email'] ?>" >
					                <hr>
                                    <label>Pesan : </label>
                                    <textarea name="pesan" class="form-control" readonly="readonly"><?php echo $dl['komentar'] ?></textarea>
                                    <hr>
                                    <label>Tanggal : </label>
                                    <input type="text" name="tgl" class="form-control input-sm" readonly="readonly" value="<?php echo tgl_indo($dl['tgl']) ?>">
                                    <hr>
                                    <label>Berita : </label>
                                    <input type="text" name="tgl" class="form-control input-sm" readonly="readonly" value="<?php echo strtoupper($dl['judul']) ?>">

                            <div class="box-footer">
                                <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
					            <a href="#" onclick="javascript:bslC('<?php echo $id ?>','<?php echo strtoupper($dl['nama']) ?>')" class="btn btn-success"><i class="fa fa-reply-all"> Balas</i></a>
					            </form>
					        </div>
	                            </div>
	                        </div>
                    	</div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->
<div class="modal fade" id="ReplyComment" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Balas Komentar</h4>
          </div>
          <div class="modal-body">
            <form name="replypesan" method="post" action="pages/master_web/comment/aksicomment.php?aksi=reply" onSubmit="return ValComment()">
                <input type="hidden" name="nokomen">
                <label>Komentar Dari :</label>
                <input type="text" name="nama" class="form-control input-sm" readonly="readonly">
                <hr> 
                <label>Balas Komentar : </label>
                <textarea name="balas" class="form-control input-sm" required wrap="on"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="fa fa-reply"></i> Balas</button>
          </div>
            </form>
        </div>
      </div>
    </div>
<script>
        function bslC(no,nama){
            var replyid=no;
            var replynama=nama;
            document.replypesan.nokomen.value=replyid;
            document.replypesan.nama.value=replynama;
             $('#ReplyComment').modal('show');
        }
    </script>
