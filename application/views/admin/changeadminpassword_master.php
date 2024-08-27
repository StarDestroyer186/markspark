<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Admin Password
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Change Admin Password</a></li>
        <!-- <li class="breadcrumb-item active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">

   	<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Change Admin Password</h3>

          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
            	
				<form class="formValidateChangepassword" id="formChangepasswordValidate" method="POST" action="<?php echo base_url('admin/changeadminpassword/changecustomerpassword'); ?>" data-toggle="validator">
				
				<div class="form-group row">
				  <label for="example-password-input" class="col-sm-2 col-form-label">New Password</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" value="" name="new_password" id="new_password" data-error="Enter New Password" minlength="8" required>
					<span class="help-block with-errors"></span>
					<span style="color:red;">Minimum 8 characters Required</span>
					<!-- <p id="warning" style="color:red; display:none;">Minimum 8 characters required</p> -->
				  </div>
				</div>

				<div class="form-group row">
				  <label for="example-password-input" class="col-sm-2 col-form-label">Confirm New Password</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" value="" name="confirm_new_password" id="confirm_new_password" data-error="Enter Confirm New Password"  minlength="8" required onkeyup='check_password();'>
					<span class="help-block with-errors"></span>
					<span id='message' class="error-msg"></span>
				  </div>
				</div>

				
				<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
				
				</form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>