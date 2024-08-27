<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Mordorintelligence </b>Admin</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <p><?php if($this->session->flashdata('login_failed')) : ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?><?php endif; ?></p>
    <form class="form-element" name="loginform" action="<?php echo base_url('admin/login');?>"  method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="user_login" placeholder="Username">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="user_pass" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
        </div>
      </div>
    </form>

    <div class="margin-top-30 text-center">
      
    </div>

  </div>
  
</div>