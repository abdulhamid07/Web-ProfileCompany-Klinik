<?php
                                        $q=mysql_query("select * from about");
                                       
                                        $offset=0;
                                    ?>
                                    <?php getMessage() ?>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Judul</center></th>
                                            <th><center>Isi</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){ ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo strtoupper($result['judul']); ?></td>
                                        <?php
                                                $isi_blog = htmlentities(strip_tags($result['ket'])); // membuat paragraf pada isi blog dan mengabaikan tag html
                                                $isi = substr($isi_blog,0,130); // ambil karakter
                                                $isi = substr($isi_blog,0,strrpos($isi," "));
                                        ?>
                                        <td><?php echo $isi ?>...</td>
                                        <td><center><a href="media.php?fModule=editabout&id=<?php echo $result['no'] ?>" title="Edit About"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/about/aksiabout.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Menghapus pesan akan menghapus balasannya juga!')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>