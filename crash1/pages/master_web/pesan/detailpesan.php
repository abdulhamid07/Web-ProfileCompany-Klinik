<?php
	//include "../config/koneksi.php";
	$id=$_GET['id'];
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Detail Pesan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                                $q=mysql_query("update pesan set status='R' where no='$id'");
                                
                                $q=mysql_query("select * from pesan where no='$id'");
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
                                    <label>Subjek : </label>
                                    <input type="text" name="subjek" class="form-control input-sm" readonly="readonly" value="<?php echo $dl['subjek'] ?>">
					                <hr>
                                    <label>Pesan : </label>
                                    <textarea name="pesan" class="form-control" readonly="readonly"><?php echo $dl['pesan'] ?></textarea>
                                    <hr>
                                    <label>Tanggal : </label>
                                    <input type="text" name="tgl" class="form-control input-sm" readonly="readonly" value="<?php echo tgl_indo($dl['tgl']) ?>">
                                    <hr>
                            <div class="box-footer">
                                <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
					            <a href="#" onclick="javascript:balas('<?php echo $id ?>','<?php echo $dl['email'] ?>')" class="btn btn-success"><i class="fa fa-reply-all"> Balas</i></a>
					            </form>
					        </div>
	                            </div>
	                        </div>
                    	</div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->
<div class="modal fade" id="ReplyModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Balas Pesan</h4>
          </div>
          <div class="modal-body">
            <form name="replypesan" method="post" action="pages/master_web/pesan/aksipesan.php?aksi=reply">
                <input type="hidden" name="no">
                <label>From : </label>
                <input type="text" class="form-control input-sm" name="email" readonly="readonly">
                <hr>
                <label>Subjek : </label>
                <input type="text" class="form-control input-sm" required name="subjek">
                <hr>
                <label>Message : </label>
                <textarea name="pesan" class="form-control"required></textarea>
                <hr>
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
        function balas(no,email){
            var replyid=no;
            var replyemail=email;
            document.replypesan.no.value=replyid;
            document.replypesan.email.value=replyemail;
             $('#ReplyModal').modal('show');
        }
    </script>