    <div id='login_form'>
        <form action="<?php echo base_url('admin_do_login');?>" method='post' name='process'>
            <h2>User Login</h2>
            <p><br />
              <?php echo $this->session->flashdata('login_msg'); ?>          
              <label for='username'>Username</label>
              <input type='text' name='username' id='username' size='25' /><br autofocus />
              
              <label for='password'>Password</label>
              <input type='password' name='password' id='password' size='25' /><br />                            
              
              <input type='Submit' value='Login' />            
            </p>
        </form>
    </div>