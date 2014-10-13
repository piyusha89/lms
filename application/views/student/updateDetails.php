<p><h2>Update Student details-</h2></p>
<?php echo $this->session->flashdata('change_password_msg'); ?>
<form id="form1" name="form1" method="post" action="<?php echo base_url('admin_change_password') ?>">
    <label >First Name</label>
    <input type="text" name="firstname" id="textfield2" />
    </br>
    <label >Last Name</label>
    <input type="text" name="lastname" id="textfield3" />
    </br>
    <label >Mobile</label>
    <input type="tel" name="mobile" />
    </br>
    <label >username</label>
    <input type="text" value="" readonly/>
    </br>
    <label >email</label>
    <input type="email" value="" readonly/>
    </br>
    
    <input type="submit"/>
    <input type="reset"  />
  
</form>