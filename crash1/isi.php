                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box box-header">
                                    
                                </div>
                            <?php
                                $q=mysql_query("select * from user");
                                 $offset=0;
                            ?>
                                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Username</center></th>
                                <th><center>Login</center></th>
                                <th><center>Logout</center></th>
                                <th><center>Browser</center></th>
                                <th><center>Ip</center></th>
                                <th><center>Status</center></th>
                            </tr>
                        </thead>    
                        <tbody> 
                            <?php while($result = mysql_fetch_array($q)){
                            $tanggal = tgl_indo($result['lastlogin']);
                           
                            ?>
                            
                            <tr>
                            <td><?php echo $offset = $offset+1; ?></td>
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo $result['logout']; ?></td>
                            <td><?php echo ucwords($result['browser']); ?></td>
                            <td><?php echo $result['ip']; ?></td>
                            <?php
                            if ($result['status']== 'on')
                            { 
                            echo
                            "<td><center><button class='btn btn-default btn-flat btn-xs disabled'><i class='fa fa-smile-o text-success'> <small>Online</small></i></td></button></center></td>";
                            }
                            else { 
                            echo
                            "<td><center><button class='btn btn-default btn-flat btn-xs disabled'><i class='fa fa-meh-o text-danger'> <small>Offline</small></i></button></center></td>";
                             } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                                <div class="box box-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->