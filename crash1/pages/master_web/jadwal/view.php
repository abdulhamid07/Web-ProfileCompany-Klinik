                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Jadwal & Dokter</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li  class="active"><a href="#pesan" data-toggle="tab"><i class="fa fa-calendar"></i> Jadwal</a></li>
                                    <li><a href="#test" data-toggle="tab"><i class="fa fa-user-md"></i> Dokter</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <!-- Font Awesome icons -->
                                    <div class="tab-pane active" id="pesan" >
                                    <?php echo getMessage(); ?>
                                    <?php include "pages/master_web/jadwal/jadwal.php"; ?>
                                    </div><!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="test">
                                    <?php include "pages/master_web/jadwal/dokter.php"; ?>
                                    
                                    </div><!-- /#ion-icons -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div>
                    </div>
                </section>
                        