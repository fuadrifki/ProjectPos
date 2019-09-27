              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1><i class="fa fa-users"></i> Pelanggan </h1>
                    <div class="clearfix"></div>
                  </div>
                  
                <div class="row top_tiles">
                <a href="index.php?controller=customers&method=select">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-tasks"></i></div>
                    <div class="count">SELECT</div>
                    <p>Tampilkan Semua Data!</p>
                    </div>
                </div>
                </a>
                <a href="index.php?controller=customers&method=insert">
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
                                <i class="fa fa-tasks"></i> Select Pelanggan
                            </div>

                            <div class="panel-body">
                                <form role="form" method="POST" action="index.php?controller=customers&method=select">
                                    <div class="x_content">
                                    <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th width="10%">No</th>
                                        <th width="30%">Nama Pelanggan</th>
                                        <th width="40%">Alamat</th>
                                        <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $nomor = 1;
                                        if(isset($data_customers)) {
                                            while($row  = mysql_fetch_array($data_customers)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            </td>
                                            <td>
                                                <a href="index.php?controller=customers&method=update&id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs" role="button" data-toggle="tooltip" data-placement="top"> <i class="fa fa-edit"></i> Edit</a>
                                                <a href="index.php?controller=customers&method=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" onClick="return confirm('Yakin hapus?')"> <i class="fa fa-trash fa-fw"></i> Hapus</a>
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