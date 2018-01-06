
                                    <?php
                                        $q=mysql_query("select * from cs_profile");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                <div class="box-body table-responsive">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AddCs">Tambah</button>
                                    <p>
                                    <table id="example" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Gambar</center></th>
                                                <th><center>Judul Atas</center></th>
                                                <th><center>Judul Bawah</center></th>
                                                <th colspan="2"><center>Aksi</center></th>
                                            </tr>
                                        </thead>    
                                        <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){ ?> 
                                            <tr>
                                                <td><?php echo $offset = $offset+1; ?></td>
                                                <td><img src="../images/cs_profile/<?php echo $result['img'] ?>" alt="Gambar pelayanan" width="100px" height="60px"></td>
                                                <td><?php echo strtoupper($result['judul_atas']); ?></td>
                                                <td><?php echo strtoupper($result['judul_bawah']); ?></td>
                                                <td><center><a href="#" onclick="javascript:editcs('<?php echo $result['no'] ?>','<?php echo $result['judul_atas'] ?>','<?php echo $result['judul_bawah'] ?>')" title="Edit" ><i class="fa fa-edit"></i></a></center></td>
                                                <td><center><a href="pages/master_web/about/aksiabout.php?aksi=hapuscs&id=<?php echo $result['no'] ?>" title="Hapus" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
 <div class="modal fade" id="AddCs" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Central Service Profile</h4>
          </div>
          <div class="modal-body">
            <form name="addcs" method="post" action="pages/master_web/about/aksiabout.php?aksi=tambahcs" enctype="multipart/form-data">
                <label>Gambar :</label>
                <input type="file" name="image1" required>

                <hr>
                <label>Judul Atas : </label>
                <input type="text" class="form-control input-sm" required name="j_atas" placeholder="Isikan judul atas">
                <hr>
                <label>Judul Bawah : </label>
                <input type="text" class="form-control input-sm" required name="j_bawah" placeholder="Isikan judul bawah">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div> 

     <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Central Service Profile</h4>
          </div>
          <div class="modal-body">
            <form name="editc" method="post" action="pages/master_web/about/aksiabout.php?aksi=editcs" enctype="multipart/form-data">
                <input type="hidden" name="id">
                <label>Gambar :</label>
                <input type="file" name="image1" >
                <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
                <hr>
                <label>Judul Atas : </label>
                <input type="text" class="form-control input-sm" required name="j_atas" placeholder="Isikan judul atas">
                <hr>
                <label>Judul Bawah : </label>
                <input type="text" class="form-control input-sm"required name="j_bawah" placeholder="Isikan judul bawah">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>   
<script type="text/javascript">
    function editcs(no,atas,bawah){
        var csid=no;
        var csatas=atas;
        var csbawah=bawah;
        document.editc.id.value=csid;
        document.editc.j_atas.value=csatas;
        document.editc.j_bawah.value=csbawah;
        $('#ModalEdit').modal('show');
           
    }
</script>
