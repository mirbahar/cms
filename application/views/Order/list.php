

<div class="row" >
    <div class="col-md-12">

<!--        <div id="infoMessage">--><?php //echo $message;?><!--</div>-->
        <div class="col-md-11">
            <!--                <label><input type="text" class="form-control" placeholder="Search Product" ng-model="query"></label>-->
            <div class="portlet-body">
                <div class="table-responsive">
                    <h1 style="margin: auto;">Order</h1>
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th  style="width: 15%">Id</th>
                            <th  style="width: 15%">Date</th>
                            <th  style="width: 15%">Name</th>
                            <th style="width: 15%;">Quantity</th>
                            <th style="width: 15%;">Price</th>
                            <th style="width: 15%;">Product</th>
                            <th style="width: 25%;">Address</th>
<!--                            <th style="width: 25%;">status</th>-->
                        </tr>
                        </thead>

                        <tbody>
                        <?php if(!empty($orders)){?>

                            <?php foreach($orders as $order ){?>

                                <tr>
                                    <td><?php echo $order['serial']?> </td>
                                    <td><?php echo $order['date']?> </td>
                                    <td><?php echo $order['first_name']?> </td>
                                    <td><?php echo $order['quantity']?> </td>
                                    <td><?php echo $order['price']?> </td>
                                    <td><?php echo $order['name']?> </td>
                                    <td><?php echo $order['address']?> </td>


<!--                                    <td>--><?php //echo $order['status_name']?><!-- </td>-->
                                </tr>

                            <?php } ?>

                        <?php } else {?>
                            <tr><td colspan="8">Order Are not available!</td></tr>
                        <?php }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>