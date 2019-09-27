<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1><i class="fa fa-cubes"></i> Pelanggan </h1>
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
                                <i class="fa fa-plus-square"></i> Insert Pelanggan
                            </div>

                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                    <div class="x_content">
                                        <br />
                                        <form data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="index.php?controller=customers&method=update_data">
                                        <?php
											$row  = mysql_fetch_array($data_customers);
										?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id Pelanggan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="id" id="first-name" value="<?php echo $row['id']; ?>" readonly class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Pelanggan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" id="first-name" value="<?php echo $row['name']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-9 col-xs-12">
                                            <textarea class="resizable_textarea form-control" name="address" required="required"><?php echo $row['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="created_at" id="first-name" value="<?php echo $row['created_at']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>

                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                
                  </div>
                </div>
              </div>