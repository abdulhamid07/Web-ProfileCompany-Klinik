        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
             <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><i class="fa fa-tags"></i> Other Pages</h3>
                        <ul>
                            <li><a href="blog.html"><i class="fa fa-folder-open-o"></i> Blogs</li>
                            <li><a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</li>
                            <li><a href="about.html"><i class="fa fa-question-circle"></i> About Us</li>
                            <li><a href="index.html"><i class="fa fa-user-md"></i> Doctor</li>
                            <li><a href="contact-us.html"><i class="fa fa-phone-square"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><i class="fa fa-bar-chart-o"></i> Statistik User</h3>
                        <ul>
                            <li>
                                <?php
  // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
       $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

  echo "<p align='left'><font color='white'>
      <p><img src='counter/hariini.png'> Pengunjung hari ini : $pengunjung <p>
      <p><img src='counter/total.png'> Total pengunjung    : $totalpengunjung <p>
      <p><img src='counter/hariini.png'> Hits hari ini    : $hits[hitstoday] <p>
      <p><img src='counter/total.png'> Total Hits       : $totalhits <p>
      <p><img src='counter/online.png'> Pengunjung Online: $pengunjungonline<br /> </p>
      <p align='left'>$tothitsgbr </font></p></p>";
?>                                 
                            </li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                <h3><i class="fa fa-bullhorn"></i> Blogs</h3>
                    <div id="listticker">
                             <ul>
  <?php            
  $sebelum=mysql_query( "SELECT * FROM blog ORDER BY no DESC LIMIT 10");      
  while($t=mysql_fetch_array($sebelum)){
  $tgl = tgl_indo($t['tgl']);
  echo "<li class='lticker'><a href=news-$t[no]-$t[judul_seo].html>
  <div class=judul>".strtoupper($t['judul'])."</div></a>";          
  // Tampilkan hanya sebagian isi blog
  $isi_blog = htmlentities(strip_tags($t['desk'])); // membuat paragraf pada isi blog dan mengabaikan tag html
  $isi = substr($isi_blog,0,130); // ambil karakter
  $isi = substr($isi_blog,0,strrpos($isi," ")); // potong per spasi kalimat
  echo " <div class=isib>$isi ... <a href=blog-$t[no]-$t[judul_seo].html>
  <span class=lengkap>[selengkapnya] &nbsp;</span></a></div></li>
  ";} 
  ?>
  </ul></div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><i class="fa fa-comments"></i> Testimonial</h3>
                        <ul>
                        <form id="" class="contact-form" name="contact-form" method="post" action="aksiComment.php?act=saveTestimoni" role="form">
                            <li>
                            <input type="text" name="name" class="form-control" required="required" placeholder="Nama*">
                            </li>
                            <li>
                             <input type="email" name="email" class="form-control" required="required" placeholder="Email*">
                            </li>
                            <li>
                            <textarea name="message" id="message" required="required" class="form-control input-sm" rows="3" placeholder="Pesan*"></textarea>
                            </li>
                            <li>
                            <button type="submit" class="btn btn-success btn-sm">Kirim</button> <button type="reset" class="btn btn-warning btn-sm">Rest</button>
                            </li>
                        </form>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>