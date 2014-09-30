    

  <div class="container">
    <div class="col-md-12">
      <h1 class="margin-bottom-15">Login Form</h1>
      <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="<?php echo base_url('do_login');?>" method="post">       
            <div class="form-group">
              <div class="col-xs-12">               
                <div class="control-wrapper">
                  <label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                  <?php echo $this->session->flashdata('login_msg'); ?>
                  <input type="text" name='username' class="form-control" id="username" placeholder="Username">
                </div>                              
              </div>              
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="control-wrapper">
                  <label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
                  <input type="password"  name='password' class="form-control" id="password" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="checkbox control-wrapper">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="control-wrapper">
                  <input type="submit" value="Log in" class="btn btn-info">
                  <a href="<?php echo base_url('forgot_password');?>" class="text-right pull-right">Forgot password?</a>
                </div>
              </div>
            </div>
            <hr>
            <!-- <div class="form-group">
              <div class="col-md-12">
                <label>Login with: </label>
                <div class="inline-block">
                  <a href="#"><i class="fa fa-facebook-square login-with"></i></a>
                  <a href="#"><i class="fa fa-twitter-square login-with"></i></a>
                  <a href="#"><i class="fa fa-google-plus-square login-with"></i></a>
                  <a href="#"><i class="fa fa-tumblr-square login-with"></i></a>
                  <a href="#"><i class="fa fa-github-square login-with"></i></a>
                </div>                
              </div>
            </div> -->
          </form>
          <div class="text-center">
            <a href="<?php echo base_url('signup');?>" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a> 
          </div>
    </div>
  </div>





<!--     <div id='login_form'>
        <form action="<?php echo base_url('do_login');?>" method='post' name='process'>
            <h2>User Login</h2>
            <p><br />
              <?php echo $this->session->flashdata('login_msg'); ?>          
              <label for='username'>Username</label>
              <input type='text' name='username' id='username' size='25' /><br />
              
              <label for='password'>Password</label>
              <input type='password' name='password' id='password' size='25' /><br />                            
              
              <input type='Submit' value='Login' />            
            </p>
            <p><a href="<?php echo base_url('signup');?>">Signup</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo base_url('forgot_password');?>">Forgot Password</a></p>
        </form>
    </div> -->