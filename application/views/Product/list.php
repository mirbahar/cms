

<div class="row" >
    <div class="col-md-12">

<!--        <div id="infoMessage">--><?php //echo $message;?><!--</div>-->
        <div class="col-md-11">
            <!--                <label><input type="text" class="form-control" placeholder="Search Product" ng-model="query"></label>-->
            <div class="portlet-body">
                <div class="table-responsive">
                    <h1 style="margin: auto;">Products</h1>
                    <a href="<?php base_url('')?>/Products/save"
                       class="btn btn-primary customBtn"><span class="glyphicon glyphicon-plus"></span>Product</a>
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th style="width: 15%;">created Date</th>
                            <th  style="width: 15%">name</th>
                            <th style="width: 15%;">price</th>
                            <th style="width: 15%;">description</th>
                            <th style="width: 25%;">Created By</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if(!empty($products)){?>

                            <?php foreach($products as $product ){?>

                                <tr>
                                    <td><?php echo $product['product_name']?> </td>
                                    <td><?php echo $product['created_date']?> </td>
                                    <td><?php echo $product['product_price']?> </td>
                                    <td><?php echo $product['description']?> </td>
                                    <td><?php echo $product['username']?> </td>
                                    <td><a href="<?php base_url('')?>/Products/deleteByProductId/<?php echo $product['product_id']?>"
                                           onclick="return confirm('Are You sure you want to delete this record?')">Delete</a></td>
                                </tr>
                            <?php } ?>

                        <?php } else {?>
                            <tr><td colspan="4">Product Are not available!</td></tr>
                        <?php }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>