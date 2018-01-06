
                <aside class="col-md-4">
                    <div class="widget search">
                        <form name="cariJudul" method="post" action="searching.html">
                                <input type="text" class="form-control search_box" required="required" name="search" autocomplete="off" placeholder="Search Here" onsubmit="return SearchArtikel()" >
                        </form>
                    </div><!--/.search-->
    				
    				<div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            
                            <?php 
                                $q=mysql_query("select * from comment_blog order by id_comment desc limit 3"); 
                                while($row=mysql_fetch_assoc($q)){
                                    $tgl=tgl_indo($row['tanggal_komen']);
                            ?>
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" width="40px" height="40px" alt=""  />
                                    <p><?php echo $row['komentar'] ?></p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#"><?php echo ucwords($row['nama']) ?></a></span <span>On <a href="#"><?php echo $tgl ?></a></span>
                                    </div>
                                </div>
                                 </div>
                            <?php } ?>
                                
                           
                        </div>                     
                    </div><!--/.recent comments-->
    				
    				<div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                <?php
                                    $qArchive=mysql_query("select tgl,count(tgl) as jumlah from blog group by tgl");
                                    while($row=mysql_fetch_assoc($qArchive)){
                                        $tgl=tgl_indo(substr($row['tgl'],0,7));
                                ?>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i><?php echo $tgl ?><span class="pull-right">(<?php echo $row['jumlah'] ?>)</span></a></li>
                                <?php } ?>    
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    				
    				<div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
<?php
    $qGallery=mysql_query("select * from gallery order by rand() limit 0,6");
    while($row=mysql_fetch_assoc($qGallery)){
?>
                            <li><a href="gallery.html"><img src="images/gallery/<?php echo $row['gambar'] ?>" style="width:100px; height:60px; border-radius:5px;" alt="" /></a></li>
<?php } ?>
                        </ul>
                    </div><!--/.blog_gallery-->
    			</aside>  