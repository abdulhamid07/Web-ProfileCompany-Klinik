                                    <?php
                                        $q=mysql_query("select * from slider");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                 <div class="box-body table-responsive">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalSlider">Tambah</button>
                                    <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Gambar</center></th>
                                            <th><center>Deskripsi</center></th>
                                            <th><center>Aktif</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><img src="../images/slider/<?php echo $result['img'] ?>" alt="Gambar slider" width="119px" height="88px"></td>
                                        <td><?php echo $result['cap']; ?></td>
                                        <td><center><a href="pages/master_web/slider/aksislider.php?aksi=aktif&id=<?php echo $result['no'] ?>&st=<?php echo $result['aktif'] ?>" class="btn btn-xs btn-<?php if ($result['aktif']=='y'){ ?>success <?php }else{ ?>default<?php } ?>"> <?php echo ucwords($result['aktif']); ?></a></center></td>
                                        <td><center><a href="media.php?fModule=editslider&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/slider/aksislider.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                    </p>
                                </div>
                            <?php include "pages/master_web/slider/modal_slider.php"; ?>
                            <script type="text/javascript">