    <div class="breadcrumb" >
    	<a href="#"><i class="fa fa-home"></i> Home / <?php echo ucwords($_GET['module']) ?></a>
    </div>
    <section id="about-us">
        <div class="container">
        	<div class="row">
<?php
	$counter=0;
	$queryAbout=mysql_query("SELECT * FROM about ORDER BY id_about");
	$row=mysql_fetch_assoc($queryAbout)
	//$temp=$counter;
?>
				<div class="col-sm-5 wow fadeInDown aler alert-info alert dismissable">
				<div class="center wow fadeInDown">
        			<h2><?php echo $row['judul'] ?></h2>
       			</div>
					<p class="lead"><?php echo $row['isi'] ?> </p>
				<br>
				</div>			


			<div class="col-sm-6 wow fadeInDown" style="padding-left:50px;">
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		<div class="col-sm-6 wow fadeInDown aler alert-warning alert dismissable" style="width:500px; font-size:12px;">
<?php
	$queryAbout=mysql_query("SELECT * FROM about WHERE id_about IN(2,3)");
	while($row=mysql_fetch_assoc($queryAbout)){
	//$temp=$counter;
?>
				
				<div class="center wow fadeInDown">
        			<h4><?php echo $row['judul'] ?></h4>
       			</div>
					<p class="lead"><h4> <?php echo $row['isi'] ?></h4 </p>
					
			
<?php } ?>	
	</div>			
	</div>
	</div>

	<hr>
			
			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Our Team</h2>
					<p class="lead">Dalam Klinik kami mempunyai TEAM yang solid yang dapat membangun klinik ini hingga sebesar ini <br> Berikut adalah daftar TEAM dalam klinik kami</p>
				</div>

				<div class="row clearfix">
<?php
	$counter=0;
	$queryTeam=mysql_query("SELECT * FROM our_team ORDER BY id asc limit 3");
	while($row=mysql_fetch_assoc($queryTeam)){
	//$temp=$counter;
?>
					<div class="col-md-3 col-sm-4 <?php if($counter>0){ ?>col-md-offset-1<?php } ?>">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/our_team/<?php echo $row['gambar'] ?>" alt="" height="70px" width="70px"></a>
								</div>
								<div class="media-body">
									<h4><?php echo strtoupper($row['nama']) ?></h4>
									<h5><?php echo strtoupper($row['jabatan']) ?></h5>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p><?php echo $row['ket'] ?></p>
						</div>
					</div><!--/.col-lg-4 -->

<?php $counter++; } ?>	
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="five-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>

				</div> <!--skill_border-->      
				
<?php
	$counter=0;
	$queryTeam=mysql_query("SELECT * FROM our_team ORDER BY id desc limit 2");
	while($row=mysql_fetch_assoc($queryTeam)){
	//$temp=$counter;
?>
				<div class="col-md-3 col-sm-4 <?php if($counter>0){ ?>col-md-offset-2<?php }else{ ?>col-md-offset-2<?php } ?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/our_team/<?php echo $row['gambar'] ?>" alt="" height="70px" width="70px"></a>
								</div>

								<div class="media-body">
									<h4><?php echo strtoupper($row['nama']) ?></h4>
									<h5><?php echo strtoupper($row['jabatan']) ?></h5>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p><?php echo $row['ket'] ?></p>
						</div>
					</div><!--/.col-lg-4 -->

<?php $counter++; } ?>	
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
    