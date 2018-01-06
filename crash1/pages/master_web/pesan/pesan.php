                                    <?php
                                        if($_GET['fModule']=='viewallmessage'){
                                            $q=mysql_query("select * from pesan where status='D' order by tgl desc");
                                        }else{
                                            $q=mysql_query("select * from pesan order by tgl desc");
                                        }
                                       
                                        $offset=0;
                                    ?>
                                    <?php getMessage() ?>
                                    <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Subjek</center></th>
                                            <th><center>Pesan</center></th>
                                            <th><center>Tanggal</center></th>
                                            <th colspan="3"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                                 $qlc=mysql_query("select be.no as be_no, be.id_pesan, be.subjek as be_subjek, be.pesan as be_pesan,be.tgl as be_tgl,
                                                                    p.no as p_no, p.nama as p_nama, p.email as p_email from bls_email be, pesan p
                                                                    where be.id_pesan=p.no AND p.no='$result[no]'");
                                                    $dlc=mysql_fetch_assoc($qlc);
                                                $qp=mysql_query("select * from bls_email be,pesan p where be.id_pesan=p.no AND be.id_pesan='$result[no]' AND p.status='R'");
                                            ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo ucwords($result['nama']); ?></td>
                                        <td><?php echo $result['subjek']; ?></td>
                                        <td><?php echo substr($result['pesan'],0,50); ?></td>
                                        <td><?php echo tgl_indo($result['tgl']); ?></td>
                                        <td>
                                        <?php if(mysql_num_rows($qp)>0){ ?>
                                        <center><a href="#" onclick="javascript:seemessage('<?php echo $dlc['be_no'] ?>','<?php echo strtoupper($dlc['p_nama']) ?>','<?php echo $dlc['p_email'] ?>','<?php echo $dlc['be_subjek'] ?>','<?php echo $dlc['be_pesan'] ?>','<?php echo tgl_indo($dlc['be_tgl']) ?>')" title="Lihat Balasan"><i class="fa fa-reply-all"></i></a></center>
                                        <?php }else{} ?>
                                        </td>
                                        <td><center><a href="media.php?fModule=detailpesan&id=<?php echo $result['no'] ?>" title="Detail Pesan"><i class="fa fa-eye"></i></a></center></td>
                                        <td><center><a href="pages/master_web/pesan/aksipesan.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Menghapus pesan akan menghapus balasannya juga!')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
        <div class="modal fade" id="lihatbalas" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"></h4><span>Dibalas Tanggal :</span> <span id="tgl" style="color:red"></span>
          </div>
          <div class="modal-body">
            <form name="seemess" method="post" action="pages/master_web/pesan/aksipesan.php?aksi=updatereply" onSubmit="return ValMenu()">
                <input type="hidden" name="no">
                <label>To : </label>
                <input type="text" name="email" class="form-control input-sm" readonly="readonly">
                <hr>
                <label>Subjek : </label>
                <input type="text" name="subjek" class="form-control input-sm">
                <hr>
                <label>Message : </label>
                <textarea name="pesan" class="form-control"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Update</button>
          </div>
            </form>
        </div>
      </div>
    </div>
    <script>
        function seemessage(no,nama,email,subjek,pesan,tgl){
            var messid=no;
            var messnama=document.getElementById("myModalLabel");
            var mnama=nama;
            var messemail=email;
            var messsubjek=subjek;
            var messpesan=pesan;
            var messtgl=document.getElementById("tgl");;
            var mtgl=tgl;
            document.seemess.no.value=messid;
            messnama.innerHTML=mnama;
            messtgl.innerHTML=mtgl;
            document.seemess.email.value=messemail;
            document.seemess.subjek.value=messsubjek;
            document.seemess.pesan.value=messpesan;
             $('#lihatbalas').modal('show');
        }
    </script>