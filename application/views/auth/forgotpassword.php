
<section class="signuppage">
	
	<div class="container signupc">
		<div class="row">
	    
	        <div class="col-sm-3"></div>
	        <div class="col-sm-6 marginaround signupmaincon">
	        	<br/>
	        	<h2 class="properties"><span class="mif-enter"></span>&nbsp;&nbsp;Renitialiser votre mote de passe</h2>	
	        	<div class="signup_form tac">
                    <form action="/auth/forgot_password" method="get">

                        <p>
                            <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
                            <?php echo form_input($email);?>
                        </p>

                        <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

                        <?php //echo form_close();?>
                    </form>
	        	</div>
				

	        </div>
	        <div class="col-sm-3"></div>
	        
	    </div>
	</div>
</section>