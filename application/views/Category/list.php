

<div class="row" >
    <div class="col-md-12">

<!--        <div id="infoMessage">--><?php //echo $message;?><!--</div>-->
        <div class="col-md-11">
            <!--                <label><input type="text" class="form-control" placeholder="Search Product" ng-model="query"></label>-->
            <div class="portlet-body">
                <div class="table-responsive">
                    <h1 style="margin: auto;">Categories</h1>
                    <a href="<?php base_url('')?>/Categories/save"
                       class="btn btn-primary customBtn"><span class="glyphicon glyphicon-plus"></span>Category</a>
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if(!empty($categories)){?>

                            <?php foreach($categories as $category ){?>

                                <tr>
                                    <td><?php echo $category['id']?> </td>
                                    <td><?php echo $category['name']?> </td>
                                    <td><a href="<?php base_url('')?>/Categories/deleteCategory/<?php echo $category['id']?>"
                                           onclick="return confirm('Are You sure you want to delete this record?')">Delete</a></td>
                                </tr>

                            <?php } ?>

                        <?php } else {?>
                            <tr><td colspan="4">Category Are not available!</td></tr>
                        <?php }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>