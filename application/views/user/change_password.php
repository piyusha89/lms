<p><h2>Change Password-</h2></p>
<?php echo $this->session->flashdata('change_password_msg'); ?>
<form id="form1" name="form1" method="post" action="<?php echo base_url('change_password') ?>">
  <p>
    <label for="new_password">Old Password</label>
    <input type="password" name="old_password" id="textfield2" />
  </p>
  <p>
    <label for="confirm_password">New Password</label>
    <input type="password" name="new_password" id="textfield3" />
  </p>
  <p>
    <label for="textfield4">Confirm Password</label>
    <input type="password" name="confirm_password" id="textfield4" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
    <input type="reset" name="button2" id="button2" value="Reset" />
  </p>
</form>
<p>&nbsp;</p>
