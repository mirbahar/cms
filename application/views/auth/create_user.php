<section class="signuppage">

    <div class="container signupc">
        <div class="row">

            <div class="col-sm-3"></div>
            <div class="col-sm-6 signupmaincon">
                <a href="#" class="mykc"><?php echo lang('account_creation')?></a><br/><br/><br/><br/><br/>
                <h2 class="properties"><span class="mif-users"></span><?php echo lang('Owner');?></h2>

                <div id="infoMessage"><?php echo $message;?></div>
                <div class="signup_form tac">

                <?php echo form_open("auth/sign_up");?>

                <p>
                    <?php echo lang('name', 'first_name');?> <br />
                    <?php echo form_input($first_name);?>

                </p>

                <p>
                    <?php echo lang('first_name', 'first_name');?> <br />
                    <?php echo form_input($last_name);?>
                </p>

                <p>
                    <?php echo lang('email', 'email');?> <br />
                    <?php echo form_input($email);?>
                </p>


                <p>
                    <?php echo lang('password', 'password');?> <br />
                    <?php echo form_input($password);?>
                </p>

                <p>
                    <?php echo lang('confirm_password', 'password_confirm');?> <br />
                    <?php echo form_input($password_confirm);?>
                </p>


                    <a href="#" class="mykc"><?php echo lang('billing_address')?></a><br/><br/><br/>
                    <h2 class="properties"></h2>
                    <br/><br/>
                    <p>
                        <?php echo lang('socialite', 'socialite');?> <br />
                        <?php echo form_input($sociality);?>
                    </p>
                    <p>
                        <?php echo lang('address', 'address');?> <br />
                        <?php echo form_input($address);?>
                    </p>

                    <label><?php echo lang('vill')?></label>

                    <p>
                        <?php echo form_input($postal_code);?>
                        <?php echo form_input($city);?>
                        <?php echo form_input($country);?>
                    </p>

                <p><?php echo form_submit('submit', lang('create_user'),'class = btn btn_red');?></p>

                <?php echo form_close();?>
                    </div>
            </div>
            <div class="col-sm-3"></div>

        </div>
    </div>



</section>