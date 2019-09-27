<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph">

    <div class="row x_title">
        <div class="col-md-6">
        <h1><i class="fa fa-home"></i> Beranda</h1>
        </div>
    </div>

    <div class="col-md-9 col-sm-9 col-xs-12">
        <?php
            if(isset($data)) {
        ?>
            <p class="lead"><?php echo $data; ?></p>
        <?php
            }
        ?>
    </div>

    <div class="clearfix"></div>
    </div>
</div>
</div>