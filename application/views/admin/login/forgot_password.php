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
