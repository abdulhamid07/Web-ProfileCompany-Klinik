<?php
    error_reporting();
    require_once "../config/functionSession.php";
        if (empty($_SESSION['id'])){
                header('location:logout.php?tanda=sess');
                } else {
        if (ISSET($_SESSION['id']))
            {
        if (!login_check()) {
            header("Location: logout.php?tanda=time");
        exit(0);
            }else {
include "../config/connection.php";
include "../config/notify.php";
include "../config/fungsi_indotgl.php";
$qc=mysql_query("select * from comment_blog where status='D' order by tanggal_komen desc");
$qp=mysql_query("select * from pesan where status='D' order by tgl desc");
$jmlp=mysql_num_rows($qp);
$jmlc=mysql_num_rows($qc);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator | CLINIC</title>
        <link rel="shortcut icon" href="../images/ico/favicon.png">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
         <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/check_browser_close.js"></script>
        <meta charset="UTF-8">
        <title>Administrator</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

<script language="javascript">
        var nama=/^[a-zA-Z\\ \\.\\]+$/;
        
        function EditdataUser(){
            if (EditU.adminpsw1.value.length<3){
            alert("Password minimal 3 karakter");
            EditU.adminpsw1.focus()
            return false
        }
            if (EditU.adminpsw1.value !=EditU.pass.value){
            alert("Kedua password harus sama");
            EditU.pass.focus();
            return false
        }    
            if(! nama.EditU(EditU.nama.value)){
            alert('Hanya isikan huruf pada nama');
            EditU.nama.focus();
            return false
        }
        return true
    }
        function ValTest(){ 
            if(! nama.test(test.nama.value)){
            alert('Hanya isikan huruf pada nama');
            test.nama.focus();
            return false
        }

        return true
    }
        function ValCabang(){ 
            if(! nama.test(test.kota.value)){
            alert('Hanya isikan huruf pada nama kota');
            test.kota.focus();
            return false
        }
        return true
    }
        function ValAddUser(){
            if(! nama.adduser(adduser.nama.value)){
            alert('Hanya isikan huruf pada nama');
            adduser.nama.focus();
            return false
        }
            if (adduser.pass.value.length<3)
        {
            alert("Password minimal 3 karakter");
            adduser.pass.focus()
            return false
        }
        return true
    }
        function ValEditUser(){
            if(! nama.editusr(editusr.nama.value)){
            alert('Hanya isikan huruf pada nama');
            editusr.nama.focus();
            return false
        }
            if (editusr.pass.value.length<3){
            alert("Password minimal 3 karakter");
            editusr.pass.focus()
            return false
        }
            return true
    }
</script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CLINIC
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                <?php if($jmlc>0){ ?>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-comments"></i>
                                <span class="label label-warning"><?php echo $jmlc; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Anda punya <?php echo $jmlc ?> komentar belum dibaca</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    <?php while($dc=mysql_fetch_assoc($qc)){ ?>
                                        <li><!-- start message -->
                                            <a href="media.php?fModule=detailcomment&id=<?php echo $dc['no'] ?>">
                                                <div class="pull-left">
                                                    <img src="img/avatar5.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    <?php echo ucwords($dc['nama']); ?><small><i class="fa fa-calendar"> <?php echo tgl_indo($dc['tanggal_komen']) ?></i></small>
                                                </h4>
                                                <p><?php echo substr($dc['komentar'],0,22) ?></p>
                                            </a>
                                        </li><!-- end message -->
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="media.php?fModule=viewallcomment">See All Messages</a></li>
                            </ul>
                        </li>
                    <?php }else{}
                        if($jmlp>0){ 
                    ?>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-danger"><?php echo $jmlp; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Anda punya <?php echo $jmlp ?> pesan belum dibaca</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    <?php while($dp=mysql_fetch_assoc($qp)){ ?>
                                        <li><!-- start message -->
                                            <a href="media.php?fModule=detailpesan&id=<?php echo $dp['no'] ?>">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    <?php echo ucwords($dp['nama']); ?><small><i class="fa fa-calendar"> <?php echo tgl_indo($dp['tgl']) ?></i></small>
                                                </h4>
                                                <p><?php echo substr($dp['subjek'],0,22) ?></p>
                                            </a>
                                        </li><!-- end message -->
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="media.php?fModule=viewallmessage">See All Messages</a></li>
                            </ul>
                        </li>
                    <?php }else{}?>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo ucwords($_SESSION['username']) ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo strtoupper($_SESSION['username']) ?>
                                        <small><?php echo tgl_indo($_SESSION['lastlogin']) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                    <?php
                                        $qu=mysql_query("select * from admin where id_admin='{$_SESSION['kd_user']}'");
                                        $du=mysql_fetch_array($qu);
                                    ?>
                                        <a href="#" onclick="javascript:editadmin('<?php echo $du['id_admin'] ?>','<?php echo $du['nama'] ?>','<?php echo $du['username'] ?>')" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php?tanda=oke" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo ucwords($_SESSION['username']); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                <?php include "includeIndex/leftmenu.php"; ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
        <?php include "select.php"; ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
<div class="modal fade" id="ModalEditUserAktif" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
          </div>
          <div class="modal-body">
                        <form  name="EditU" method="post" action="pages/dashboard/aksidashboard.php?aksi=edituser" onSubmit="return EditdataUser()">                      
                            <input type="hidden" name="adminno"/>
                            <label>Nama</label>
                                <input class="form-control input-sm" required type="text" name="nama" placeholder="Nama Lengkap"/>
                            <hr>
                            <label>Username</label>
                                <input class="form-control input-sm" required type="text" name="usr" placeholder="Username"/>
                            <hr>                  
                            <label>Password Baru</label>
                                <input class="form-control input-sm" required type="password" name="adminpsw1" placeholder="Password"/>
                            <hr>
                            <label>Ulangi Password</label>
                                <input class="form-control input-sm" required type="password" name="pass" placeholder="Ulangi Password"/>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Update</button>
                       </div>
            </form>
        </div>
      </div>
    </div>
    <script>
    function editadmin(no,nama,username){
        var iduser=no;
        var namauser=nama;
        var penggunauser=username;
       //var userpwd=psw;
        document.EditU.adminno.value=iduser;
        document.EditU.nama.value=namauser;
        document.EditU.usr.value=penggunauser;
        //document.EditU.psw1.value=userpwd;
        $('#ModalEditUserAktif').modal('show');
    }
    </script>
        <!-- add new calendar event modal -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
         <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
        <script src="js/selectimage.js" type="text/javascript"></script>




    </body>
</html>
<?php }}} ?>