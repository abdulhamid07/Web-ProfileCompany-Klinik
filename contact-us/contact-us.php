    <div class="breadcrumb">
        <a href="#"><i class="fa fa-home"></i> Home / <?php echo  ucwords(str_replace("-", " ", $_GET['module']))?></a>
    </div>    
    <section id="contact-info">
        <div class="center">                
            <h2>HEAD OFFICE</h2>
             <?php  if($_GET['module']=='contact-hasil'){ ?>
                                <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Terima kasih atas pesan Anda, kami akan segera membalasnya</div>
                                <?php } ?>
            <p class="lead">Lihat alamat kami pada peta.</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.974276162823!2d110.40770333556563!3d-7.792548122392258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59e18b1c28d1%3A0xe2d750662f2edace!2sSTMIK+Akakom+Yogyakarta!5e0!3m2!1sid!2sid!4v1480920499031" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-6 map-content">
                        <ul class="row">
<?php
$q=autoQuery("contact","id_contact");
$row=mysql_fetch_assoc($q);
?>
                            <li class="col-sm-10">
                                <address>
                                    <h5><?php echo strtoupper($row['judul']) ?></h5>
                                    <?php echo ucfirst($row['ket']) ?>
                                </address>
                            <ul class="social-share">
                            	 <address>
                                    <h5>SOSIAL MEDIA</h5>
<?php
	$q=mysql_query("Select * from contact where id_contact NOT IN(1)");
	while($row=mysql_fetch_assoc($q)){
?>
                                <li><a href="<?php echo 'https://www.'.$row['ket'] ?>"><i class="<?php echo $row['icon'] ?>"></i></a></li>
<?php } ?>
                                </address>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
        <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Kirim kritik atau saran Anda mengenai klinik kami</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="" class="contact-form" name="contact-form" method="post" action="aksiComment.php?act=saveMessage" role="form">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>                      
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success btn-sm" required="required">Submit Message</button>
                             <button type="reset" name="submit" class="btn btn-warning btn-sm" required="required">Reset</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->