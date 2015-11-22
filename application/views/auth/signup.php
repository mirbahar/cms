<section class="signuppage">
	
	<div class="container signupc">
		<div class="row">
	    
	        <div class="col-sm-3"></div>
	        <div class="col-sm-6 signupmaincon">
	        	<a href="#" class="mykc"><?php echo lang('account_creation')?></a><br/><br/><br/><br/><br/>
	        	<h2 class="properties"><span class="mif-users"></span><?php echo lang('Owner');?></h2>
	        	<div class="signup_form tac">

	        		<form action="" method="post">
					<label><?php echo lang('name')?></label><input type="text" name="name" placeholder="<?php echo lang('name')?>" required/><br/>
					<label><?php echo lang('first_name')?></label><input type="text" placeholder="<?php echo lang('first_name')?>"/><br/>
					<div class="sada"></div>

					<label><?php echo lang('email')?></label><input type="email" name="identity" placeholder="<?php echo lang('email')?>"/><br/>
                        <span class="help-block with-errors error"><?php echo form_error('identity'); ?></span>
					<label><?php echo lang('password')?></label><input type="password" name="password" placeholder="<?php echo lang('password')?>" required/><br/>
					<label><?php echo lang('confirm_password')?></label><input type="password" name="confirm_password" placeholder="<?php echo lang('confirm_password')?>" required/><br/>

					<a href="#" class="mykc"><?php echo lang('billing_address')?></a><br/><br/><br/>
					<h2 class="properties"></h2>
					<br/><br/>
					<label><?php echo lang('socialite')?></label><input type="text"name="sociality" placeholder="<?php echo lang('socialite')?>" required/><br/>
					<label><?php echo lang('billing_addr')?></label><input type="text" name="address" placeholder="<?php echo lang('Country')?>" required/><br/><br/><br/>
					<div class="smsada"></div>
					<br/><br/>
					<label><?php echo lang('vill')?></label>
                        <input class="inputone" type="text" name="postal_code" placeholder="<?php echo lang('postal_code')?>" required/>
                        <input class="inputone" type="text" name="city" placeholder="<?php echo lang('city')?>" required/>
                        <input class="inputone" type="text" name="country" placeholder="<?php echo lang('pays')?>" required/><br/>
					<br/>
					<input type="submit" class="btn btn_red" value="SUBMIT" />

					<br/>
					<br/>

					

				</form>
	        	</div>


	        </div>
	        <div class="col-sm-3"></div>
	        
	    </div>
	</div>
	    
	

</section>
