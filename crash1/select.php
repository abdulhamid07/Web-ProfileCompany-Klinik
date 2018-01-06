<?php
	if(empty($_GET['fModule'])){
		include "pages/dashboard/dashboard.php";
	}else{
		switch($_GET['fModule']){
			case ('index'): include("pages/dashboard/dashboard.php");
			break;
			case ('menu'): include ('pages/master_web/menu.php');
			break;
			case ('layanan'): include ('pages/master_web/layanan_total.php');
			break;
			case ('editlayanan'): include ('pages/master_web/editlayanan.php');
			break;
			case ('news'): include ('pages/master_web/news/news.php');
			break;
			case ('addnews'): include ('pages/master_web/news/addnews.php');
			break;
			case ('editnews'):include ('pages/master_web/news/editnews.php');
			break;
			case ('comment'): case('viewallcomment'): include ('pages/master_web/comment/comment.php');
			break;
			case ('jadwal'):include ('pages/master_web/jadwal/view.php');
			break;
			case ('editowner'):include ('pages/dashboard/editowner.php');
			break;
			case ('editslider'):include ('pages/master_web/slider/editslider.php');
			break;
			case ('pesan'):case('viewallmessage'):include ('pages/master_web/pesan/view.php');
			break;
			case ('detailpesan'):include ('pages/master_web/pesan/detailpesan.php');
			break;
			case ('addtestimoni'): case ('edittestimoni'):include ('pages/master_web/testimoni/addtestimoni.php');
			break;
			case ('about'): include ('pages/master_web/about/view.php');
			break;
			case ('editabout'): include ('pages/master_web/about/editabout.php');
			break;
			case ('detailcomment'): include ('pages/master_web/comment/detailcomment.php');
			break;
			case ('pelayanan'): include ('pages/master_web/pelayanan/pelayanan.php');
			break;
			case ('adddokter'): include ('pages/master_web/jadwal/adddokter.php');
			break;
		}

	}
?>