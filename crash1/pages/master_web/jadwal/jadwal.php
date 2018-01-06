
                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                                                    <div class="col-xs-4">
                            <div class="box box-warning">
                            
                                <?php
                                    $q=mysql_query("select * from jadwal order by id_jadwal");
                                     $offset=0;
                                ?>
                                <div class="box-header">
                                    <h3 class="box-title">Jadwal Praktik</h3>
                                </div>
                                <div class="box-body table-responsive">
                                 <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Hari</center></th>
                                            <th><center>Jam</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo ucwords($result['hari']); ?></td>
                                        <td><?php echo $result['jam']; ?></td>
                                        <td><center><a href="#" onclick="javascript:edit('<?php echo $result['no'] ?>','<?php echo $result['nama'] ?>','<?php echo $result['username'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/dashboard/aksidashboard.php?aksi=hapusym&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </br></br></br>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="box box-success">
                            
                                <?php
                                    $q=mysql_query("select *,d.nama from jadwal_praktek jp
                                                    join dokter d on d.id_dokter=jp.id_dokter
                                                    join jadwal j on j.id_jadwal=jp.id_jadwal order by jp.id_jadwal");
                                     $offset=0;
                                ?>
                                <div class="box-header">
                                    <h3 class="box-title">Jadwal Dokter</h3>
                                </div>
                                <div class="box-body table-responsive">
                                 <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Hari</center></th>
                                            <th><center>Jam</center></th>
                                            <th colspan="3"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo strtoupper($result['nama']); ?></td>
                                        <td><?php echo ucwords($result['hari']) ?></td>
                                        <td><?php echo $result['jam']; ?></td>
                                        <td><center><a href="media.php?fModule=editowner&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/aksidashboard.php?aksi=hapusowner&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>