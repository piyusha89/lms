<h2>Signup Form-</h2>
<?php echo $this->session->flashdata('signup_msg'); ?> 
<form id="form1" name="form1" method="post" action="<?php echo base_url('signup');?>">
  <p>
    <label for="textfield">First Name</label>
    <input type="text" name="first_name" id="textfield" />
  </p>
  <p>
    <label for="textfield2">Last Name</label>
    <input type="text" name="last_name" id="textfield2" />
  </p>
  <p>
    <label for="textfield3">Usename</label>
    <input type="text" name="username" id="textfield3" />
  </p>
  <p>
    <label for="textfield4">Password</label>
    <input type="password" name="password" id="textfield4" />
  </p>
  <p>
    <label for="textfield5">Confirm Password</label>
    <input type="password" name="confirm_password" id="textfield5" />
  </p>
  <p>
    <label for="textfield6">Email Id</label>
    <input type="text" name="email" id="textfield6" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  &nbsp;&nbsp;
  <input type="reset" name="button2" id="button2" value="Reset" />
  </p>
</form>
<p>&nbsp;</p>
