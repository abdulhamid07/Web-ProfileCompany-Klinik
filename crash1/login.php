<?php
include "../config/notify.php";
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Log in Administrator</title>
        <link rel="shortcut icon" href="../images/ico/favicon.png">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Welcome Back Admin</div>
            <form action="cek_login.php" method="post">

                <div class="body bg-gray">
                    <div class="form-group">
                    <label>Username</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                        <input type="text" name="username" class="form-control"required autocomplete="off"  placeholder="Username"/>
                    </div>
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </div>
                        <input type="password" name="password" class="form-control"required autocomplete="off"  placeholder="Password"/>
                    </div>   
                    </div>       
                </div>
                <div class="footer">    
                    <button type="submit" class="btn bg-olive btn-block">Sign in</button>
                    <?php getMessage(); ?>                                                            
                </div>
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>   
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>     

    </body>
</html>