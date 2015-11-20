
<section class="signuppage">
	
	<div class="container signupc">
		<div class="row">
	    
	        <div class="col-sm-3"></div>
	        <div class="col-sm-6 marginaround signupmaincon">
	        	<br/>
	        	<h2 class="properties"><span class="mif-enter"></span>&nbsp;&nbsp;<?php echo lang('change_pass')?> </h2>
	        	<div class="signup_form tac">
	        		<form action="/auth/front_change_password" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
	        		<table>
	        			<tr>
	        				<td><label><?php echo lang('pass_mode')?></label></td>
	        				<td><input type="password" name="new_password" placeholder="<?php echo lang('pass_mode')?>"/></td>
	        			</tr>
	        			<tr>
	        				<td><label><?php echo lang('pass_mode_cfm')?></label></td>
	        				<td><input type="password" name="new_password_confirm" placeholder="<?php echo lang('pass_mode_cfm')?>"/></td>
	        			</tr>
	        			<tr>
	        				<td></td>
	        				<td class="lostpass">
	        				<input type="submit" class="btn" value="SUBMIT" /></td>
	        			</tr>
	        		</table>
					
					
					

					<br/>
					<br/>

					

				</form>
	        	</div>
				

	        </div>
	        <div class="col-sm-3"></div>
	        
	    </div>
	</div>
	    
	

</section>