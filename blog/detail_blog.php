<?php
    $id=$_GET['id'];
    $qDetail=mysql_query("select b.no,b.img,b.judul,b.desk,b.tgl,a.nama from blog b join admin a on a.id_admin=b.admin where b.no='$id'");
    $row=mysql_fetch_assoc($qDetail);
    
    $qComment=mysql_query("select * from comment_blog where id_article='".$row['no']."'");
    //$jml=mysql_fetch_array($qComment);
    
    $tgl=tgl_indo($row['tgl']);
?>
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="images/blog/<?php echo $row['img'] ?>" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo $tgl ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><?php echo ucwords($row['nama']) ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><?php echo mysql_num_rows($qComment) ?> Comments</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><?php echo strtoupper($row['judul']) ?></h2>
                                    <p align="justify"><?php echo $row['desk'] ?></p>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <h1 id="comments_title"><?php echo mysql_num_rows($qComment) ?> Comments</h1>
<?php
    while($komentar =mysql_fetch_assoc($qComment)){
        $tglC=tgl_indo($komentar['tanggal_komen']);
?>
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/avatar3.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3><?php echo strtoupper($komentar['nama']) ?></h3>
                                <h4><?php echo $tglC ?></h4>
                                <p><?php echo $komentar['komentar'] ?></p>
                            </div>
                        </div>
<?php } ?> 

                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Leave a Replay</h4>
                                <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                            </div> 
      
                            <form id="" class="contact-form" name="contact-form" method="post" action="aksiComment.php?id=<?php echo $row['no'] ?>&act=saveComment" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <input type="hidden" value="<?php echo $id ?>" name="id">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control" required="required" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="email" class="form-control" required="required" name="email">
                                        </div>                 
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            <label>Message *</label>
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->

            <!-- <h2 class="breadcrumb"><font color="black">.:See Also:.</font></h2>
            <div class="col-md-12 wow fadeInDown">
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>
               <div class="carousel-inner">
<?php
    /*$counter=0;
              $qBlog=mysql_query("select b.no,b.img,b.judul,b.judul_seo,b.desk,b.tgl,a.nama from blog b join admin a on a.id_admin=b.admin");
            while($row=mysql_fetch_assoc($qBlog)){
?>
     
                        <div class="item <?php if($counter==0){ ?>active<?php }else{} ?>">
                           <h2><?php echo strtoupper($row['judul']) ?></h2>
                           <p><?php echo substr($row['desk'],0,100) ?></p>
                       </div>
  <?php } */ ?> 
                    </div>
                 
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div>
            </div>
            </div>-->