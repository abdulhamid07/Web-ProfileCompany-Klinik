<?php
    include "config/connection.php";
    include "config/functionQuery.php";
    include "config/fungsi_indotgl.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Klinik Cepat Sembuh</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/testimoni.css" rel="stylesheet">
    <link href="css/ticker.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<script type="text/javascript">
function SearchArtikel(){
    //var cariku=document.getElementById("carijudul");
    if(cariJudul.search.value.length<4){
        //cariku.innerHTML='Pencarian minimal 3 huruf';
        alert("Pencarian minimal 3 huruf");
        cariJudul.search.focus();
        return false
    }
    return true
    
}
</script>
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 80</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                        <font color="white">Follow Us :</font>
                            <ul class="social-share">
<?php
    $q=mysql_query("Select * from contact where id_contact NOT IN(1)");
    while($row=mysql_fetch_assoc($q)){
?>
                                <li><a href="<?php echo 'https://www.'.$row['ket'] ?>"><i class="<?php echo $row['icon'] ?>"></i></a></li>
<?php } ?>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" width="120px" height="90px"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                   <?php include "includeIndex/topMenu.php"; ?>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <?php if($_GET['module']=='index'){ ?>
    <section id="main-slider" class="no-margin">
        <?php include "includeIndex/slider.php"; ?>
    </section><!--/#main-slider-->
    <?php } ?>
    <?php include "select.php"; ?>

    <section id="bottom">
        <?php include "includeIndex/topFooter.php"; ?>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
       <?php include "includeIndex/bottomFooter.php"; ?>
    </footer><!--/#footer-->
    <div class="gototop"></div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/testticker.js"></script>
    <script src="js/newsticker.js"></script>
</body>
</html>