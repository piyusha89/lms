<h1 class="margin-bottom-15">Create Account</h1>
  <div class="container">
    <div class="col-md-12">    
      <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="<?php echo base_url('signup');?>" method="post">
        <div class="form-inner">
          <div class="form-group">
            <?php echo $this->session->flashdata('signup_msg'); ?>
                <div class="col-md-6">                
                  <label for="first_name" class="control-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="">                                               
                </div>  
                <div class="col-md-6">                
                  <label for="last_name" class="control-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="">                                                
                </div>             
              </div>
              <div class="form-group">
                <div class="col-md-12">               
                  <label for="username" class="control-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="">                                               
                </div>              
              </div>      
              <div class="form-group">
                <div class="col-md-6">                
                  <label for="username" class="control-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="">                                               
                </div>
                <div class="col-md-6 templatemo-radio-group">
                  <label class="radio-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Male
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Female
                  </label>
                </div>             
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="col-md-6">
                  <label for="password" class="control-label">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" id="password_confirm" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" value="Create account" class="btn btn-info">
                  <a href="<?php echo base_url('home') ?>" class="pull-right">Login</a>
                </div>
              </div>  
        </div>              
          </form>         
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
        </div>
        <div class="modal-body">
          <p>This form is provided by <a rel="nofollow" href="http://www.templatemo.com/page/1">Free HTML5 Templates</a> that can be used for your websites. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>






<!-- <h2>Signup Form-</h2>
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
 -->