<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report Category List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Report Category List</a></li>
        <!-- <li class="breadcrumb-item active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
			<div class="box">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                Add Report Category List
              </button>
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped table-hover display nowrap margin-top-10 table-responsive">
				<thead>
					<tr>
						<th>Sr</th>
						<th>Report Category Name</th>
						<th>Report Category List</th>
						<th>Report Category Download</th>
						<th>Status</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					    <?php 
						  $i=1;
                          if(!empty($reportcategorieslist)) {
                          foreach($reportcategorieslist as $row) {
                         ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row["report_category_name"];?></td>
						<td><?php echo $row["report_category_list_name"];?></td>
						<td><?php echo $row["report_category_list_download"];?></td>
						<td><?php echo $row["status"];?></td>
						<td><?php $created_date = strtotime($row["created"]);
	                            $formattedcreateddate = date('Y/m/d', $created_date);
	                            echo $date = date('M j, Y', strtotime($formattedcreateddate));?></td>
						<td><button class="btn btn-social-icon btn-circle btn-tumblr editreportcategoryList" id="<?php echo $row["report_category_list_id"]; ?>"><i class="fa fa-edit" data-toggle="modal" data-target="#editreportcategoryList"></i></button>
						<button class="btn btn-social-icon btn-circle btn-danger delete_category_list" id="<?php echo $row["report_category_list_id"]; ?>"><i class="fa fa-trash"></i></button>
					    </td>

					</tr>
						<?php $i++; } } ?>
				</tbody>
			</table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div class="modal modal-primary fade" id="modal-primary">
	<form method="post" action="<?php echo base_url('admin/reportcategorylist/add');?>" data-toggle="validator"  enctype="multipart/form-data">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Add Report Category List</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body" id="dynamic_field">
			<div class="row">
				<div class="col-sm-6">
              <div class="form-group">
                  <label for="recipient-name-2" class="col-form-label">Select Report Category</label>
                  <select class="form-control select2" name="report_category_id" id="report_category_id" data-error="Select Report Category" required style="width:100%;">
                    <option value="">---</option>
                      <?php 
                      if(!empty($reportcategories)) {
                      foreach ($reportcategories as $row) { ?>
                      <option value="<?php echo $row["report_category_id"];?>" id="<?php echo $row["report_category_id"];?>">
                      <?php echo $row["report_category_name"];?>
                      </option>
                      <?php } } ?>
                  </select>
                  <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category List Name</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="report_category_list_name" 
              name="report_category_list_name" data-error="Enter Report Category List Name" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
                    <label>Report Category Download</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="report_category_list_download" 
                    id="report_category_list_download" data-error="Enter Report Category Download" required>
                    <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="col-sm-6">
	                <div class="form-group">
	                  <label>Status</label>
	                  <select class="form-control" name="status" data-error="Select Status" required>
	                  	<option value="">---</option>
	                    <option value="Active">Active</option>
	                    <option value="Inactive">Inactive</option>
	                  </select>
	                  <span class="help-block with-errors"></span>
	                </div>
           		</div>

          
      </div>

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-outline float-right">Add</button>
		  </div>
		</div>
	</div>
</form>
</div>

<div class="modal modal-primary fade" id="editreportcategoryList">
	<form method="post" action="<?php echo base_url('admin/reportcategorylist/update');?>" data-toggle="validator"  enctype="multipart/form-data">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Edit Report Category List</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body" id="dynamic_field">
			<div class="row">
				<div class="col-sm-6">
              <div class="form-group">
                  <label for="recipient-name-2" class="col-form-label">Select Report Category</label>
                  <select class="form-control" name="report_category_id" id="creport_category_id" data-error="Select Report Category" required style="width:100%;">
                    <?php 
                      if(!empty($reportcategories)) {
                      foreach ($reportcategories as $row) { ?>
                      <option value="<?php echo $row["report_category_id"];?>" id="<?php echo $row["report_category_id"];?>">
                      <?php echo $row["report_category_name"];?>
                      </option>
                      <?php } } ?>
                  </select>
                  <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category List Name</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="creport_category_list_name" 
              name="report_category_list_name" data-error="Enter Report Category List Name" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
                    <label>Report Category Download</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="report_category_list_download" 
                    id="creport_category_list_download" data-error="Enter Report Category Download" required>
                    <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="col-sm-6">
	                <div class="form-group">
	                  <label>Status</label>
	                  <select class="form-control" id="cstatus" name="status" data-error="Select Status" required>
	                  	<option value="Active">Active</option>
	                    <option value="Inactive">Inactive</option>
	                  </select>
	                  <span class="help-block with-errors"></span>
	                </div>
           		</div>

           		<input type="hidden" name="report_category_list_id" id="creport_category_list_id">

          
      </div>

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-outline float-right">Update</button>
		  </div>
		</div>
	</div>
</form>
</div>