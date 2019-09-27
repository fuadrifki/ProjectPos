<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1><i class="fa fa-cubes"></i> Produk </h1>
                    <div class="clearfix"></div>
                  </div>
                  
                <div class="row top_tiles">
                <a href="index.php?controller=products&method=select">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-tasks"></i></div>
                    <div class="count">SELECT</div>
                    <p>Tampilkan Semua Data!</p>
                    </div>
                </div>
                </a>
                <a href="index.php?controller=products&method=insert">
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
                                <i class="fa fa-plus-square"></i> Insert Produk
                            </div>

                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                    <div class="x_content">
                                        <br />
                                        <form data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="index.php?controller=products&method=insert_data">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Produk <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="price" id="first-name" onkeypress="return hanya_angka(event)" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Produk</label>
                                            <div class="col-md-6 col-sm-9 col-xs-12">
                                            <select class="select2_single form-control" tabindex="-1" name="category_id" required="required">
                                                <option></option>
                                                <?php
                                                    if(isset($data_categories)) {
                                                        while($row = mysql_fetch_array($data_categories)) {     

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