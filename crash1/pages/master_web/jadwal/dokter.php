 <div class="box box-primary">
                                <div class="box-body table-responsive">
                                   <a href="media.php?fModule=adddokter" class="btn btn-sm btn-primary">Tambah</a>
                                   <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Gambar</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Alamat</center></th>
                                            <th><center>No Telepon</center></th>
                                            <th><center>Spesialis</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php
                                         $q=mysql_query("select * from dokter order by id_dokter");   
                                        while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><img src="../images/dokter/<?php echo $result['foto'] ?>" alt="Gambar news" width="119px" height="88px"></td>
                                        <td><?php echo ucwords($result['nama']); ?></td>
                                        <td><?php echo $result['alamat']; ?></td>
                                        <td><?php echo $result['no_telp']; ?></td>
                                        <td><?php echo $result['spesialis']; ?></td>
                                        <td><center><a href="media.php?fModule=editnews&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/news/aksinews.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>