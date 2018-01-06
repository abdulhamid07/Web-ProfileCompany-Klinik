
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                <p class="lead">Beberapa pelayanan yang kami sediakan</p>
            </div>

            <div class="row">
                <div class="features">
<?php

	$qService=mysql_query("select * from service where aktif='y' order by id_service");
	$pos=1;
  $jumlah=mysql_num_rows($qService);
  while($row=mysql_fetch_assoc($qService)){
?>
 <div class="<?php if($jumlah>=4){ ?>col-md-3<?php } else{ ?>col-md-4<?php } ?> col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    
                        <div class="feature-wrap">
                            <i class="<?php echo $row['icon'] ?>"></i>
                            <h2><?php  echo strtoupper($row['nama_pel']) ?></h2>
                            <h3><?php  echo $row['ket'] ?></h3>
                        </div>
          </div>
<?php }  ?>

				</div>
            </div> 
        </div>
    </section>


<section id="about-us" class="transparent-bg">
          <div class="container">
            <div class="center wow fadeInDown">
                <h2>Doctor Schedule</h2>
            </div>
			<?php
				$qDokter=mysql_query("select * from dokter");
				while($row=mysql_fetch_assoc($qDokter)){
			?>
                <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="clients-comments text-center">
					
                        <img src="images/dokter/<?php  echo ($row['foto']) ?>" class="img-circle" alt="">						
                        <h3>
      <?php
        $jadwal=mysql_query("select jp.id_dokter,j.hari,j.jam from jadwal j join jadwal_praktek jp on jp.id_jadwal=j.id_jadwal where jp.id_dokter='".$row['id_dokter']."'");

        while($rowJ=mysql_fetch_assoc($jadwal)){
          $bHari=mysql_query("select count(id_dokter) as jumlah from jadwal_praktek group by id_dokter having id_dokter='".$rowJ['id_dokter']."'");
          $dt=mysql_fetch_array($bHari);
        if($dt['jumlah']>1){
        
            $hari=substr($rowJ['hari'], 0,6);
            $jam1=substr($rowJ['jam'], 0,5);

        }else{
          $hari=$rowJ['hari'];
          $jam1=$rowJ['jam'];
        }
      ?>
                         <?php echo strtoupper($rowJ['hari']) ?> <br><b><?php echo $rowJ['jam'] ?> WIB</b>
      <?php } ?></h3>
          
      <?php
        if($dt['jumlah']<=1){
          echo "<br><br>";
        }
        ?>
                        <h4><span><?php  echo strtoupper($row['nama']) ?></span></h4>
                    </div>
           </div>
			  	<?php } ?>
    </section>
    <section id="services" class="service-item">
       <div class="container">
            <div class="row">
            <div class="col-sm-6 plan price-two wow fadeInDown">
                <div class="accordion">
                        <h2>Schedule</h2>
               <div class="pricing-area text-center">
                        <ul>
                            <li class="heading-two">
                                <h1>Schedule Practice</h1>
								<?php
									$qJadwal=autoQuery("jadwal","id_jadwal");
									while($row=mysql_fetch_assoc($qJadwal)){
								?>
                            </li>
                            <li><?php  echo strtoupper($row['hari']) ?> <b><?php  echo ($row['jam']) ?></b></li>
                            <?php } ?>
							<li>HARI NASIONAL <b>LIBUR</b></li>
                        </ul>
                    </div>
                    </div>
              </div>
                 <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Testimonial</h2>
						  <div class="breadcrumb">
                        <div class="listticker">
            <?php
							$qTestimonial=autoQuery("testimoni","no");
							while($row=mysql_fetch_assoc($qTestimonial)){
              $tgl=tgl_indo($row['tgl']);
						?>
                       
                        <ul>
                          <li class="lticker">   
                           <div class="media testimonial-inner alert alert-warning alert-dismissable">
                              <div class="pull-left">
                                  <img class="img-responsive img-circle" src="images/blog/avatar3.png">
                              </div>
                              <div class="media-body">
                                  <p><?php  echo ucfirst($row['pesan']) ?> </p>
                                  <span><strong><?php  echo strtoupper($row['nama']) ?></strong> | <font color="red"><?php echo $tgl ?></font> </span>
                              </div>
                           </div>
                          </li>   
                        </ul>
                        
					  <?php } ?>
                        </div>
                      </div> 
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Anda mempunyai pertanyaan tentang klinik Kami?</h2>
                            <p>Silahkan hubungi layanan customer service kami yang selalu siap melayani anda +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->