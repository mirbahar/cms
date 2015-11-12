<div class="row" >
    <div class="col-md-12">

        <div class="col-md-11">

            <div class="portlet-body form">
                <form action="/Products/save" data-toggle="validator" method="post" enctype="multipart/form-data">
                <div class="form-body">

                    <div class="form-group">
                        <label>Product Name</label>
                        <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
                            <input name="name" class="form-control" placeholder="Product Name" value="<?php echo set_value('name'); ?>" type="text"/>
                        </div>
                        <span class="help-block with-errors error"><?php echo form_error('name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
                            <input name="price" class="form-control" value="<?php echo set_value('price'); ?>" placeholder="Price" type="text"/>

                        </div>
                        <span class="help-block with-errors error"><?php echo form_error('price'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Manufacture</label>
                        <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
                            <input name="manufacture" class="form-control" placeholder="manufacture" type="text"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <div class="input-group">

                            <textarea rows="5" cols="140" id="description" name="description"
                                      class="span5" placeholder="Description"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <div class="input-group">

                                <select name="category_id[]" multiple>
                                    <option value="">&lt;Please Select Category&gt;</option>
                                    <?php
                                    foreach ($categories as $category) {
                                        ?>
                                        <option
                                            value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                    <?php } ?>
                                </select>
                        </div>
                        <span class="help-block with-errors error"><?php echo form_error('category_id[]'); ?></span>
                    </div>
                    <div class="form-group">
                        <span class="btn btn-default btn-file">
    Image <input type="file" name="image">
</span>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn default">Save</button>
                    </div>

                </div>
                </form>
            </div>

        </div>
    </div>
</div>