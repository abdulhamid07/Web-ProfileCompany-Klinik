<?php
                                        $q=mysql_query("select * from testimoni");
                                       
                                        $offset=0;
                                    getMessage(); ?>
                                    <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Testimoni</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){ ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo strtoupper($result['nama']); ?></td>
                                        <td><?php echo $result['pesan']; ?></td>
                                        <td><?php echo tgl_indo($result['tgl']); ?></td>
                                        <td><center><a href="media.php?fModule=edittestimoni&id=<?php echo $result['no'] ?>" title="Detail Pesan"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/testimoni/aksitestimoni.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Testimoni akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </p>
                            </div>
