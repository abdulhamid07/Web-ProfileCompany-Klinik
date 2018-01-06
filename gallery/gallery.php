    <div class="breadcrumb">
        <a href="#"><i class="fa fa-home"></i> Home / <?php echo ucwords($_GET['module']) ?></a>
    </div>      
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Gallery</h2>
               <p class="lead">Berikut beberapa kegiatan dari klinik<br>
                                <b>CEPAT SEMBUH YOGYAKARTA</b></p>
            </div>
        

           
            <div class="row">
                <div class="portfolio-items">
<?php
    $qGallery=autoQuery("gallery","id_gallery");
    while($row=mysql_fetch_assoc($qGallery)){
?>
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/gallery/<?php echo $row['gambar'] ?>" alt="<?php echo $row['gambar'] ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <p><?php echo $row['ket'] ?></p>
                                    <a class="preview" href="images/gallery/<?php echo $row['gambar'] ?>" rel="prettyPhoto"><i class="fa fa-eye" ></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
<?php } ?>
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->