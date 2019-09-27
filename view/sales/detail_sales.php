        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h1><i class="fa fa-bar-chart-o"></i> Penjualan </h1>
                <div class="clearfix"></div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-square"></i> Insert Detail Produk
                            </div>

                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                    <div class="x_content">
                                        <br />
                                        
                                        <?php
											$row_sales  = mysql_fetch_array($detail_sales);
                                        ?>
                                        <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-users"></i> Pelanggan</h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <br />
                                                <form class="form-horizontal form-label-left input_mask" >
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pelanggan</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="name" id="first-name" value="<?php
                                                        $a = $row_sales['customer_id'];
                                                        $query_sales    = "SELECT * FROM customers WHERE id = '$a'";
                                                        $sql_sales		= mysql_query($query_sales);
                                                        $data_sales		= mysql_fetch_array($sql_sales);
                                                        
                                                        echo $data_sales['name'];
                                                    ?>" required="required" readonly class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12">
                                            <div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-cubes"></i> Produk </h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <br />
                                                <form class="form-horizontal form-label-left" name="form_product" method="POST" action="index.php?controller=sale_items&method=insert_data">
                                                
                                                <input type="hidden" name="id" value="<?php echo $row_sales['id']; ?>" class="form-control col-md-7 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Produk</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="select2_single form-control" tabindex="-1" name="product_id" id="product_id" onchange="changeValue(this.value)">
                                                        <option></option>
                                                        <?php    
                                                            if(isset($data_products)) {

                                                                $jsArray = "var hgBrg = new Array();\n";

                                                                while($row_products = mysql_fetch_array($data_products)) { 
                                                                    echo "<option value='$row_products[id]'>$row_products[name]</option>";
                                                                    
                                                                    $jsArray .= "hgBrg['" . $row_products['id'] . "'] = {hrg:'" . addslashes(($row_products['price'])) . "'};\n";
                                                                
                                                                }
                                                            }else{
                                                                echo "<option>Data Kosong</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="price" id="price" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="qty" onkeypress="return hanya_angka(event)" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="reset" class="btn btn-primary">Reset</button>
                                                    <button type="submit" class="btn btn-success">Add</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-cubes"></i> Data Produk</h2>
                                        <div class="clearfix"></div>
                                    </div>      
                                <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $n=1;
                                    if (isset($data_sale_items)){
                                        while($row_sales = mysql_fetch_array($data_sale_items)){
                                ?>
                                <tr>
                                    <td><?php echo $n ?></td>
                                    <td><?php 
                                        $b = $row_sales['product_id'];
                                        $query_product		= "SELECT * FROM products WHERE id = '$b'";
                                        $sql_product			= mysql_query($query_product);
                                        $data_product			= mysql_fetch_array($sql_product);
                                        
                                        echo $data_product['name'];
                                    ?></td>
                                    <td>Rp<?php echo number_format($row_sales['price'],"2",",",".") ?></td>
                                    <td><?php echo $row_sales['qty'] ?></td>
                                    <td>Rp<?php echo number_format($row_sales['subtotal'],"2",",",".") ?>        </td>
                                    <td><a href="index.php?controller=sales&method=delete_detail&id_sales=<?php echo $id; ?>&id=<?php echo $row_sales['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus?')"> <i class="fa fa-trash fa-fw"></i> Delete</a></td>
                                </tr>
                                <?php
                                    $n++;
                                        } 
                                    } 
                                ?>
                                <tr>
                                    <td colspan="4" align="center"><h4><strong>Total</strong></h4></td>
                                    <td colspan="2"><?php
                                        $query      = "SELECT SUM(subtotal) AS jumlah_total FROM sale_items where sale_id='$id'";
                                        $sql        = mysql_query($query);
                                        $t          = mysql_fetch_array($sql);

                                        echo "<h4><strong>Rp".number_format($t['jumlah_total'],"2",",",".")."</strong></h4>";
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                                </table>

                                <form data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST" action="index.php?controller=sales&method=done">
                                <input class="form-control" name="id" type="hidden" value="<?php echo $id; ?>" />
                                <input class="form-control" name="customer_id" type="hidden" value="<?php echo $a; ?>" />
                                <input class="form-control" name="total" type="hidden" value="<?php echo $t['jumlah_total']; ?>" />
                                <input class="form-control" name="created_at" type="hidden" value="<?php echo $data_sales['created_at']; ?>" />
                                
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-10">
                                    <button type="submit" class="btn btn-success btn-lg">Done</button>
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
     
    <?php echo $jsArray; ?>
    function changeValue(id) {
        document.getElementById("price").value = hgBrg[id].hrg;
    };
</script>