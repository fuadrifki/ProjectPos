<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1><i class="fa fa-cubes"></i> Penjualan </h1>
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
                                <i class="fa fa-plus-square"></i> Insert Penjualan
                            </div>

                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                    <div class="x_content">
                                        <br />
                                        <form data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="index.php?controller=sales&method=insert_data">

                                        <?php
                                            $query	 		= "SELECT max(id) as maxCode FROM sales";
                                            $sql	 		= mysql_query($query);
                                            $data	 		= mysql_fetch_array($sql);
                                            $id				= $data['maxCode'];
                                            $id++;
                                        ?>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>" readonly class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelanggan</label>
                                            <div class="col-md-6 col-sm-9 col-xs-12">
                                            <select class="select2_single form-control" tabindex="-1" name="customer_id" required="required">
                                                <option></option>
                                                <?php
                                                    if(isset($data_customers)) {
                                                        while($row = mysql_fetch_array($data_customers)) {     

                                                        echo "<option value='$row[id]'>$row[name]</option>";

                                                        }
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Save</button>
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

              <script>
					function hanya_angka(n){
						var hp = (n.which) ? n.which : event.keyCode
						if(hp > 31 && (hp < 48 || hp > 57 ))
						return false;
						return true;
					}
				</script>