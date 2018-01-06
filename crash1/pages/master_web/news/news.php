                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Blogs</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <?php
                               $pag_news=10;
                               $dataPerhalaman = $pag_news;
                               $cetak="";
                                if(isset($_GET['halaman'])){
                                  $nohalaman = $_GET['halaman'];
                                }else{ 
                                  $nohalaman = 1;
                                }
                                    // perhitungan offset
                                  $offset = ($nohalaman - 1) * $dataPerhalaman;
                                  $q  = mysql_query("SELECT COUNT(*) AS jumData FROM blog");
                                  $data = mysql_fetch_array($q);
                                  $q=mysql_query("select *,u.nama from blog n
                                                left join admin u on u.id_admin=n.admin order by tgl desc $cetak LIMIT $offset, $dataPerhalaman");
                                $offset=0;
                            ?>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Blogs</h3>
                                </div>
                                <div class="box-body table-responsive">
                                 <?php echo getMessage(); ?>
                                   <a href="media.php?fModule=addnews" class="btn btn-sm btn-primary">Tambah</a>
                                   <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Gambar</center></th>
                                            <th><center>Judul</center></th>
                                            <th><center>Deskripsi</center></th>
                                            <th><center>Diperbarui</center></th>
                                            <th><center>Penulis</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><img src="../images/blog/<?php echo $result['img'] ?>" alt="Gambar news" width="119px" height="88px"></td>
                                        <td><?php echo ucwords($result['judul']); ?></td>
                                        <td><?php echo substr($result['desk'],0,150); ?></td>
                                        <td><?php echo tgl_indo($result['tgl']); ?></td>
                                        <td><?php echo ucwords($result['nama']); ?></td>
                                        <td><center><a href="media.php?fModule=editnews&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/news/aksinews.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Diperbarui</th>
                                                <th>Penulis</th>
                                                <th colspan="2"><center>Aksi</center></th>
                                            </tr>
                                        </tfoot>
                                </table>
                                </p>
                            </div>
                                                                 <?php
    $jumData = $data['jumData'];

      // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
    $jumhalaman = ceil($jumData/$dataPerhalaman);
  ?>
  
  <ul class="pagination">
  <?php
  
    echo "<li class='disabled'><a href='#'>Jumlah Record : $jumData </a></li>";

      // menampilkan link previous
    if ($nohalaman > 1){
      
      echo  "<li><a href='media.php?fModule=news&halaman=".($nohalaman-1)."'>&lt;&lt; Prev</a></li>";
    }
    else
    {
      echo  "<li class='disabled'><a href='#'>&lt;&lt; Prev</a></li>";
      }



          // memunculkan nomor halaman dan linknya
    for($halaman = 1; $halaman <= $jumhalaman; $halaman++)
    {
         if ((($halaman >= $nohalaman - 3) && ($halaman <= $nohalaman + 3)) || ($halaman == 1) || ($halaman == $jumhalaman)) 
         {   
          
          if ($halaman == $nohalaman){ 
            echo " <li class='active'><a href='#'>".$halaman."</a></li> ";
          }else{ 
            echo " <li><a href='media.php?fModule=news&halaman=".$halaman."'>".$halaman."</a></li> ";
          }
          $showhalaman = $halaman;          
         }
    }

          // menampilkan link next
    if ($nohalaman < $jumhalaman){ 
      echo "<li><a href='media.php?fModule=news&halaman=".($nohalaman+1)."'>Next &gt;&gt;</a></li>";
    }
    else
    {
      echo "<li class='disabled'><a href='#'>Next &gt;&gt;</a></li>";
    }
    echo "<li class='disabled'><a href='#'>Page $nohalaman Of $jumhalaman</a></li>";
  ?>

    </ul>
                        </div>
                      </div>
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
<script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
   