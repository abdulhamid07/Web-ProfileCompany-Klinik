 
                                    <?php
                                        $q=mysql_query("select * from cabang");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                <div class="box-body table-responsive">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AddCabang">Tambah</button>
                                        <p>
                                        <table id="example2" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th><center>Kota</center></th>
                                                    <th><center>Alamat</center></th>
                                                    <th><center>Telepon</center></th>
                                                    <th colspan="2"><center>Aksi</center></th>
                                                </tr>
                                            </thead>    
                                            <tbody> 
                                            <?php while($result = mysql_fetch_assoc($q)){ ?> 
                                                <tr>
                                                    <td><?php echo $offset = $offset+1; ?></td>
                                                    <td><?php echo strtoupper($result['kota']); ?></td>
                                                    <td><?php echo ucwords($result['alamat']); ?></td>
                                                    <td><?php echo $result['telp']; ?></td>
                                                    <td><center><a href="#" onclick="javascript:EditCabang('<?php echo $result['no'] ?>','<?php echo $result['kota'] ?>','<?php echo $result['alamat'] ?>','<?php echo $result['telp'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                                    <td><center><a href="pages/master_web/cabang/aksicabang.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        </p>
                                </div>
 <div class="modal fade" id="AddCabang" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Cabang</h4>
          </div>
          <div class="modal-body">
            <form name="test" method="post" action="pages/master_web/cabang/aksicabang.php?aksi=tambah" onSubmit="return ValCabang()" enctype="multipart/form-data">
                <label>Kota :</label>
                <input type="text" class="form-control input-sm" required name="kota" placeholder="Kota Cabang">
                <hr>
                <label>Alamat :</label>
                <input type="text" class="form-control input-sm" required name="alamat" placeholder="Alamat Cabang">
                <hr>
                <label>Telepon :</label>
                <input type="text" class="form-control input-sm" required name="telp"  placeholder="No Telepon Cabang" value ="(0    )     -   ">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>

     <div class="modal fade" id="editCabang" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Cabang</h4>
          </div>
          <div class="modal-body">
            <form name="testcabang" method="post" action="pages/master_web/cabang/aksicabang.php?aksi=edit" onSubmit="return ValEditCabang()" enctype="multipart/form-data">
                <input type="hidden" name="no">
                <label>Kota :</label>
                <input type="text" class="form-control input-sm" required name="kota" placeholder="Kota Cabang">
                <hr>
                <label>Alamat :</label>
                <input type="text" class="form-control input-sm" required name="alamat" placeholder="Alamat Cabang">
                <hr>
                <label>Telepon :</label>
                <input type="text" class="form-control input-sm" required name="telp" placeholder="No Telepon Cabang"  value ="(0    )     -   ">
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
    function EditCabang(no,kota,alamat,telp){
        var cabangid=no;
        var cabangkota=kota;
        var cabangalamat=alamat;
        var cabangtelp=telp;
        
        document.testcabang.no.value=cabangid;
        document.testcabang.kota.value=cabangkota;
        document.testcabang.alamat.value=cabangalamat;
        document.testcabang.telp.value=cabangtelp;
        $("#editCabang").modal('show');
    }   
</script>