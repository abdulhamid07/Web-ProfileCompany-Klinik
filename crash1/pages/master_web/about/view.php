                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">About & Clients</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li  class="active"><a href="#about" data-toggle="tab"><i class="fa fa-info-circle"></i> About</a></li>
                                    <li><a href="#sc" data-toggle="tab"><i class="fa fa-heart"></i> Central Service</a></li>
                                    <!-- <li><a href="#client" data-toggle="tab"><i class="fa fa-users"></i> Clients</a></li>-->
                                </ul>
                                
                                <div class="tab-content">
                                    <!-- Font Awesome icons -->
                                    <div class="tab-pane active" id="about" >
                                    <?php include "pages/master_web/about/about.php"; ?>
                                    </div><!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="sc">
                                    <?php include "pages/master_web/about/cs_profile.php"; ?>
                                    </div><!-- /#ion-icons -->
                                     <!--<div class="tab-pane" id="client">
                                    <?php //include "pages/master_web/pesan/pesan.php"; ?>
                                    </div>-->

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        