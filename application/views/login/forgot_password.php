		<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Password Reset</h1>
			<form class="form-horizontal templatemo-forgot-password-form templatemo-container" role="form" action="<?php echo base_url('forgot_password');?>" method="post">	
				<div class="form-group">
		          <div class="col-md-12">
		          	Please enter your email address that you registered in our website.
		          </div>
		        </div>		
		        <div class="form-group">
		          <div class="col-md-12">
		          	<?php echo $this->session->flashdata('forgot_msg'); ?> 
		            <input type="text" name="email" class="form-control" id="email" placeholder="Your email">	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="Submit" class="btn btn-danger">
                    <br><br>
                    <a href="<?php echo base_url('home') ?>">Login</a> |
		          </div>
		        </div>
		      </form>
		</div>
	</div>
<!-- 
	<h2>Forgot Password-</h2>
	<?php echo $this->session->flashdata('forgot_msg'); ?> 
	<form id="form1" name="form1" method="post" action="<?php echo base_url('forgot_password');?>">
	  <p>
	    <label for="textfield">Email</label>
	    <input type="text" name="email" />
	&nbsp;&nbsp; </p>
	  <p>
	    <input type="submit" name="button" id="button" value="Submit" />
	  &nbsp;&nbsp;
	  <input type="reset" name="button2" id="button2" value="Reset" />
	  </p>
	</form>
	<p>&nbsp;</p>
 -->