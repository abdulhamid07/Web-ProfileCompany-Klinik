                                    <?php
                                        $q=mysql_query("select * from socmed");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                <div class="box-body table-responsive">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModalLayanan">Tambah</button>
                                    <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Gambar</center></th>
                                                <th><center>Socmed</center></th>
                                                <th><center>Link</center></th>
                                                <th colspan="2"><center>Aksi</center></th>
                                            </tr>
                                        </thead>    
                                        <tbody> 
                                            <?php while($result = mysql_fetch_assoc($q)){ ?>
                                            <tr>
                                                <td><?php echo $offset = $offset+1; ?></td>
                                                <td><img src="../images/socmed/<?php echo $result['img']; ?>" width="35" height="35" alt="gambar Socmed"></td>
                                                <td><?php echo ucwords($result['n_socmed']); ?></td>
                                                <td><?php echo $result['link']; ?></td>
                                                <td><center><a href="#" onclick="javascript:editSocmed('<?php echo $result['no'] ?>','<?php echo $result['n_socmed'] ?>','<?php echo $result['link'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                                <td><center><a href="pages/master_web/socmed/aksisocmed.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>

<div class="modal fade" id="addModalLayanan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Socmed</h4>
          </div>
          <div class="modal-body">
            <form name="add" method="post" action="pages/master_web/socmed/aksisocmed.php?aksi=tambahsocmed" enctype="multipart/form-data">
                <label>Gambar :</label>
                <input type="file" name="image2" required>
                <hr>
                <label>Nama Socmed : </label>
                <input type="text" name="nama" class="form-control input-sm" required placholder="Nama Social Media"/>
                <hr>
                <label>Link</label>
                <input type="text" name="link" class="form-control input-sm" required onFocus="if (this.value == 'Link') this.value = 'https://www.';" onBlur="if (this.value == '') this.value = 'Link';"/>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>  
    <div class="modal fade" id="EditSoc" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Socmed</h4>
          </div>
          <div class="modal-body">
            <form name="ESocmed" method="post" action="pages/master_web/socmed/aksisocmed.php?aksi=editsocmed" enctype="multipart/form-data">
                <input type="hidden" name="no">
                <label>Gambar :</label>
                 <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
                <input type="file" name="image2" >

                <hr>
                <label>Nama Socmed : </label>
                <input type="text" name="nama" class="form-control input-sm" required placholder="Nama Social Media"/>
                <hr>
                <label>Link</label>
                <input type="text" name="link" class="form-control input-sm" required onFocus="if (this.value == 'Link') this.value = 'https://www.';" onBlur="if (this.value == '') this.value = 'Link';"/>
                
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
    function editSocmed(no,nama,link){
        var socmedid=no;
        var socmednama=nama;
        var socmedlink=link;
        
        document.ESocmed.no.value=socmedid;
        document.ESocmed.nama.value=socmednama;
        document.ESocmed.link.value=socmedlink;
        $("#EditSoc").modal('show');
    }   
</script>