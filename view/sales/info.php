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
                                <i class="fa fa-plus-square"></i> Info Detail Produk
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
                                                <table width="60%">
                                                    <th>Nama Pelanggan</th>
                                                    <th>:</th>
                                                    <th><?php
                                                        $a = $row_sales['customer_id'];
                                                        $query_sales    = "SELECT * FROM customers WHERE id = '$a'";
                                                        $sql_sales		= mysql_query($query_sales);
                                                        $data_sales		= mysql_fetch_array($sql_sales);
                                                        
                                                        echo $data_sales['name'];
                                                    ?></th>
                                                </table>
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
                                    <td>Rp<?php echo number_format($row_sales['subtotal'],"2",",",".") ?></td>
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