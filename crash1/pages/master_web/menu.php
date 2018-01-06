                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Menu</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                        <?php echo getMessage();
                         
                                $q=mysql_query("select * from main_menu");
                                $offset=0;
                            ?>
                        <div class="col-xs-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Menu Utama</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModalMenu">Tambah</button>
                                    <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Menu</center></th>
                                            <th><center>Link</center></th>
                                            <th><center>Aktif</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo strtoupper($result['menu']); ?></td>
                                        <td><?php echo $result['link']; ?></td>
                                        <td><center><a href="pages/master_web/aksimenu.php?aksi=aktif&id=<?php echo $result['no'] ?>&st=<?php echo $result['aktif']; ?>"
                                        class="btn btn-flat btn-xs btn-<?php if ($result['aktif']=='y'){ ?>success <?php }else{ ?>default<?php } ?>">
                                        <?php echo ucwords($result['aktif']); ?></a></center></td>
                                        <td><center><a href="#" onclick="javascript:editmain('<?php echo $result['no'] ?>','<?php echo $result['menu'] ?>','<?php echo $result['link'] ?>','<?php echo $result['aktif'] ?>')" ><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/aksimenu.php?aksi=hapusmain&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Sub Menu</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <?php 
                                        $qs=mysql_query("select s.no as sno, s.kd_main,s.m_kategori,s.link,m.menu from sub_services s,main_menu m where s.kd_main=m.no");
                                        $offset=0;
                                    ?>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModalSub">Tambah</button>
                                    <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Main</center></th>
                                                <th><center>Sub Menu</center></th>
                                                <th><center>Link</center></th>
                                                <th colspan="2"><center>Aksi</center></th>
                                            </tr>
                                        </thead>    
                                        <tbody> 
                                        <?php while($row = mysql_fetch_assoc($qs)){
                                       
                                        ?>
                                        
                                            <tr>
                                                <td><?php echo $offset = $offset+1; ?></td>
                                                <td><?php echo strtoupper($row['menu']); ?></td>
                                                <td><?php echo ucwords($row['m_kategori']); ?></td>
                                                <td><?php echo $row['link']; ?></td>
                                                <td><center><a href="#" onclick="javascript:editsub('<?php echo $row['sno'] ?>','<?php echo $row['kd_main'] ?>','<?php echo $row['m_kategori'] ?>','<?php echo $row['link'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                                <td><center><a href="pages/master_web/aksimenu.php?aksi=hapussub&id=<?php echo $row['sno'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->
            <?php
                include "modal_main.php";
                include "modal_sub.php";
            ?>  
    <script>
        function editmain(no,menu,aktif,link){
            var mainid=no;
            var mainmenu=menu;
            var mainakt=aktif;
            var mainlink=link;
            document.editmenu.no.value=mainid;
            document.editmenu.judul.value=mainmenu;
            document.editmenu.ling.value=mainakt;
            document.editmenu.aktif.value=mainlink;
             $('#EditMain').modal('show');
        }
    </script>
    <script>
        function editsub(no,kd_main,m_kategori,link){
            var subid=no;
            var submain=kd_main;
            var submenu=m_kategori;
            var sublink=link;
            document.editsubmenu.no.value=subid;
            document.editsubmenu.main.value=submain;
            document.editsubmenu.submenu.value=submenu;
            document.editsubmenu.link.value=sublink;
             $('#EditSubMenu').modal('show');
        }
    </script>
   