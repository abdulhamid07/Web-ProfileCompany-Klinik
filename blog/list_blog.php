<?php
$md=$_GET['module'];
if($md=="hasil-pencarian"){

  $judul=$_POST['search'];
}

$paging_blog=3;
$dataPerhalaman = $paging_blog;
       $cetak="";
        if(isset($_GET['halaman'])){
          $nohalaman = $_GET['halaman'];
        }else{ 
          $nohalaman = 1;
        }
            // perhitungan offset
          $offset = ($nohalaman - 1) * $dataPerhalaman;
        
        if($md=="hasil-pencarian"){
          $q  = mysql_query("SELECT COUNT(*) AS jumData FROM blog where judul LIKE '%$judul%'");
          $data = mysql_fetch_array($q);

          $qBlog=mysql_query("SELECT b.no,b.img,b.judul,b.judul_seo,b.desk,b.tgl,a.nama FROM blog b join admin a on a.id_admin=b.admin WHERE b.judul LIKE '%$judul%' LIMIT $offset, $dataPerhalaman");
          
        }else if($md=="blog"){         
          $q  = mysql_query("SELECT COUNT(*) AS jumData FROM blog");
          $data = mysql_fetch_array($q);

          $qBlog=mysql_query("select b.no,b.img,b.judul,b.judul_seo,b.desk,b.tgl,a.nama from blog b join admin a on a.id_admin=b.admin LIMIT $offset, $dataPerhalaman");
        }
          while($row=mysql_fetch_assoc($qBlog)){

        if($md=="hasil-pencarian"){
          $qComment=mysql_query("select count(id_article) as total from comment_blog where id_article='".$row['no']."' AND b.judul LIKE '%$judul%'");

        }else{
          $qComment=mysql_query("select count(id_article) as total from comment_blog where id_article='".$row['no']."'");
        }
          $jml=mysql_fetch_array($qComment);

          $tgl=tgl_indo($row['tgl']);
        
        
?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $tgl ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo ucwords($row['nama']) ?></a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><?php echo $jml['total'] ?> Comments</a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="images/blog/<?php echo $row['img'] ?>" width="600px" alt="<?php echo $row['img'] ?>" /></a>
                                <h2><a href="blog-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html"><?php echo strtoupper($row['judul']) ?></a></h2>
                                <h3><?php echo ucfirst(substr($row['desk'],0,250)) ?></h3>
                                <a class="btn btn-primary readmore" href="blog-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
<?php } ?>
                   
  <?php
    $jumData = $data['jumData'];

      // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
    $jumhalaman = ceil($jumData/$dataPerhalaman);
  ?>
  
  <ul class="pagination pagination-lg">
  <?php
    
      // menampilkan link previous
    if ($nohalaman > 1){
      
      echo  "<li><a href='blog-halaman-".($nohalaman-1).".html'><i class='fa fa-long-arrow-left'></i>Prev</a></li>";
    }
    else
    {
      echo  "<li class='disabled'><a href='#'><i class='fa fa-long-arrow-left'></i> Prev</a></li>";
      }



          // memunculkan nomor halaman dan linknya
    for($halaman = 1; $halaman <= $jumhalaman; $halaman++)
    {
         if ((($halaman >= $nohalaman - 3) && ($halaman <= $nohalaman + 3)) || ($halaman == 1) || ($halaman == $jumhalaman)) 
         {   
          
          if ($halaman == $nohalaman){ 
            echo " <li class='active'><a href='#'>".$halaman."</a></li> ";
          }else{ 
            echo " <li><a href='blog-halaman-".$halaman.".html'>".$halaman."</a></li> ";
          }
          $showhalaman = $halaman;          
         }
    }

          // menampilkan link next
    if ($nohalaman < $jumhalaman){ 
      echo "<li><a href='blog-halaman-".($nohalaman+1).".html'>Next <i class='fa fa-long-arrow-right'></i></a></li>";
    }
    else
    {
      echo "<li class='disabled'><a href='#'>Next<i class='fa fa-long-arrow-right'></i></a></li>";
    }
  ?>

    </ul>