<script language="javascript">

        function ValLayanan()
{
    if(addlayanan.img.value=="")
    {
        alert("Pilih Gambar")
        addlayanan.img.focus()
        return false
    }
   
    
        return true;
}
</script>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Comment</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="box box-primary">
                        <?php
                                        if($_GET['fModule']=='viewallcomment'){
                                        $q=mysql_query("select *,n.judul,c.id_comment as id_komen,c.tanggal_komen as tgl_komen from comment_blog c
                                                        left join blog n on n.no=c.id_article where status='D' order by c.tanggal_komen desc");
                                        }else{
                                            $q=mysql_query("select *,n.judul,c.id_comment as id_komen,c.tanggal_komen as tgl_komen from comment_blog c
                                                        left join blog n on n.no=c.id_article order by c.tanggal_komen desc");
                                        }
                                       
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                 
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Komentar</center></th>
                                            <th><center>Tanggal</center></th>
                                            <th><center>Artikel</center></th>
                                            <th colspan="4"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                            $qlc=mysql_query("select *,u.nama,bc.no as id_reply from bls_comment bc 
                                                          left join admin u on id_admin=bc.id_penulis where id_comment='$result[id_komen]'");
                                            $dlc=mysql_fetch_assoc($qlc);
                                            $qd=mysql_query("select * from bls_comment bc,comment_blog c where bc.id_comment=c.id_comment AND bc.id_comment='$result[id_komen]' AND c.status='R'");
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo ucwords($result['nama']); ?></td>
                                        <td><?php echo substr($result['komentar'],0,50); ?></td>
                                        <td><?php echo tgl_indo($result['tgl_komen']); ?></td>
                                        <td><?php echo ucwords($result['judul']); ?></td>
                                       
                                        <td>
                                        <?php if(mysql_num_rows($qd)>0){ ?>
                                        <center><a href="#" onclick="javascript:seecom('<?php echo $dlc['id_reply'] ?>','<?php echo $dlc['nama'] ?>','<?php echo $dlc['pesan'] ?>','<?php echo $dlc['tgl'] ?>')" title="Lihat Balasan"><i class="fa fa-reply-all"></i></a></center>
                                        <?php }else{} ?>
                                        </td>
                                        <td><center><a href="media.php?fModule=detailcomment&id=<?php echo $result['id_komen'] ?>" title="Detail Comment"><i class="fa fa-eye"></i></a></center></td>
                                        <td><center><a href="pages/master_web/comment/aksicomment.php?aksi=hapus&id=<?php echo $result['id_komen'] ?>" onClick="return confirm('Menghapus komentar akan menghapus balasannya juga!')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
    <div class="modal fade" id="seecomment" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Balasan Komentar</h4>
          </div>
          <div class="modal-body">
            <form name="seekom" method="post" action="pages/master_web/comment/aksicomment.php?aksi=updatereply">
                <input type="hidden" name="no">
                <label>Di Balas Oleh : </label>
                <input type="text" name="reply" class="form-control input-sm" readonly="readonly">
                <hr>
                <label>Pesan : </label>
                <textarea name="balas" class="form-control" required></textarea>
                <hr>
                <label>Tanggal : </label>
                <input type="text" name="tgl" class="form-control" readonly="readonly">
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Update</button>
          </div>
            </form>
        </div>
      </div>
    </div>
    </div>
    <script>
        function seecom(no,nama,pesan,tgl){
            var comid=no;
            var comnama=nama;
            var compesan=pesan;
            var comtgl=tgl;
            document.seekom.no.value=comid;
            document.seekom.reply.value=comnama;
            document.seekom.balas.value=compesan;
            document.seekom.tgl.value=comtgl;
             $('#seecomment').modal('show');
        }
    </script>


                        </div>
                    </div>
                </section>
                        