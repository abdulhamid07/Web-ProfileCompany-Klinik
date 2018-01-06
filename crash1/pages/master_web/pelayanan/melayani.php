 
                                    <?php
                                        $q=mysql_query("select *,s.no as nourut,m.m_kategori from desc_serve s
                                                        join sub_services m on m.no=s.kd_main_serve");
                                        $qs=mysql_query("select * from sub_services where no NOT IN(7)");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                <div class="box-body table-responsive">
                                        <p>
                                        <table id="example2" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th><center>Service</center></th>
                                                    <th><center>Keterangan</center></th>
                                                    <th colspan="2"><center>Aksi</center></th>
                                                </tr>
                                            </thead>    
                                            <tbody> 
                                            <?php while($result = mysql_fetch_assoc($q)){ ?> 
                                                <tr>
                                                    <td><?php echo $offset = $offset+1; ?></td>
                                                    <td><?php echo strtoupper($result['m_kategori']); ?></td>
                                                    <td><?php echo $result['ket']; ?></td>
                                                    <td><center><a href="#" onclick="javascript:edtLayanan('<?php echo $result['nourut'] ?>','<?php echo $result['kd_main_serve'] ?>','<?php echo $result['ket'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                                    <td><center><a href="pages/master_web/pelayanan/aksipelayanan.php?aksi=delete&id=<?php echo $result['nourut'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        </p>
                                </div>

 <div class="modal fade" id="EditLayanan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Layanan</h4>
          </div>
          <div class="modal-body">
            <form name="Editlyn" method="post" action="pages/master_web/pelayanan/aksipelayanan.php?aksi=edit" onSubmit="return ValCabang()" enctype="multipart/form-data">
                <input type="hidden" name="nolayanan">
                <label>Nama Layanan :</label>
                <select name="layanan" class="form-control input-sm">
                    <?php while($dserve=mysql_fetch_assoc($qs)){ ?>
                    <option value="<?php echo $dserve['no']?>"><?php echo ucwords($dserve['m_kategori']) ?></option>
                    <?php } ?>
                </select>
                <hr>
                <label>Keterangan :</label>
                <textarea name="ket" class="form-control" cols="10" rows="10" ></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>
<script>
    function edtLayanan(no,kd_main,ket){
        var LayananId=no;
        var LayananNama=kd_main;
        var LayananKet=ket;
        
        document.Editlyn.nolayanan.value=LayananId;
        document.Editlyn.layanan.value=LayananNama;
        document.Editlyn.ket.value=LayananKet;
        $("#EditLayanan").modal('show');
    }   
</script>