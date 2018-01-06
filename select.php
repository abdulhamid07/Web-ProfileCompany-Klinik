<?php
	if(empty($_GET['module'])){
		include "home/home.php";
	}else{
		switch ($_GET['module']) {
			case ('index'):
				include ("home/home.php");
				break;
			case ('about'):
				include ("about/about.php");
				break;
			case ('gallery'):
				include ("gallery/gallery.php");
				break;		
			case('blog'): case('hasil-pencarian'):
				include ("blog/blog.php");
			break;
			case ('searchpage'):
				include ("blog/blog.php");
			break;
			case('detail-blog'):
				include ("blog/blog.php");
			break;	
			case('contact-us'):case ('contact-hasil'):
				include("contact-us/contact-us.php");
			break;
		}
	}
?>