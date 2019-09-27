              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1><i class="fa fa-bar-chart-o"></i> Penjualan </h1>
                    <div class="clearfix"></div>
                  </div>
                  
                <div class="row top_tiles">
                <a href="index.php?controller=sales&method=select">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-tasks"></i></div>
                    <div class="count">SELECT</div>
                    <p>Tampilkan Semua Data!</p>
                    </div>
                </div>
                </a>
                <a href="index.php?controller=sales&method=insert">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-plus-square"></i></div>
                    <div class="count">INSERT</div>
                    <p>Tambahkan Data Baru!</p>
                    </div>
                </div>
                </a>
                </div>
                  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-tasks"></i> Select Penjualan
                            </div>

                            <div class="panel-body">
                                <form role="form" method="POST" action="index.php?controller=sales&method=select">
                                    <div class="x_content">
                                    <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th width="10%">No</th>
                                        <th width="35%">Nama Pelanggan</th>
                                        <th width="20%">Total</th>
                                        <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $nomor = 1;
                                        if(isset($data_sales)) {
                                            while($row  = mysql_fetch_array($data_sales)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php
                                                $x              = $row['customer_id'];
                                                $query_sales    = "SELECT * FROM customers WHERE id = '$x'";
                                                $sql_sales		= mysql_query($query_sales);
                                                $data		    = mysql_fetch_array($sql_sales);
                                                            
                                                echo $data['name'];
                                            ?></td>
                                            <td>Rp<?php echo number_format($row['total'],"2",",",".") ?></td>
                                            <td>
                                                <a href="index.php?controller=sales&method=info&id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs" role="button" data-toggle="tooltip" data-placement="top" > <i class="fa fa-eye"></i> Info </a>
                                                <a href="index.php?controller=sales&method=update&id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs" role="button" data-toggle="tooltip" data-placement="top" > <i class="fa fa-edit"></i> Edit </a>
                                                <a href="index.php?controller=sales&method=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" onClick="return confirm('Yakin hapus?')"> <i class="fa fa-trash fa-fw"></i> Hapus </a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                            }
                                        }
                                    ?>
                                    </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
              </div>