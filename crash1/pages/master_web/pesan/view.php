                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Pesan & Testimoni</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li  class="active"><a href="#pesan" data-toggle="tab"><i class="fa fa-envelope"></i> Pesan</a></li>
                                    <li><a href="#test" data-toggle="tab"><i class="fa fa-comments-o"></i> Testimoni</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <!-- Font Awesome icons -->
                                    <div class="tab-pane active" id="pesan" >
                                    <?php include "pages/master_web/pesan/pesan.php"; ?>
                                    </div><!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="test">
                                    <?php include "pages/master_web/testimoni/testimoni.php"; ?>
                                    
                                    </div><!-- /#ion-icons -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        