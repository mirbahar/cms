<div class="row bgc">
    <div class="col-sm-6 tac">
        <a href="#" class="button success">Button for&nbsp;&nbsp;<i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;I found keys&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
    </div>
    <div class="col-sm-6 tac">
        <a href="#" class="button success">Button for&nbsp;&nbsp;<i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;I found keys&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
    </div>
</div>

<div class="row bgc">
    <div class="col-sm-12 tac para">
        <h1>Here just text for&nbsp;&nbsp;<i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; Fist Page&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></h1>

        <h2>I will complete this page later.</h2>
    </div>
</div>
<div class="row bgc">

    <?php foreach ($products as $product){ ?>
        <?php
        $id = $product['product_id'];
        $name = $product['product_name'];
        $price = $product['product_price'];

        ?>
        <div class="col-sm-3 tac">
            <div class="viewc">

                <h3><?php  if($name){ echo $name ; }else {echo 'No Name';} ?></h3>
                <ins><span class="amount">$ <?php echo $price ; ?></span></ins><br><br>

                <?php
                echo form_open('shopping/add');
                echo form_hidden('id', $id);
                echo form_hidden('name', $name);
                echo form_hidden('price', $price);

                ?>
                <button type="submit" class="button success">
                    <i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; <?php echo lang('buy_item')?> <?php echo $id;?>&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i>
                </button>
                <?php echo form_close()?>
            </div>

        </div>
    <?php } ?>
</div>

