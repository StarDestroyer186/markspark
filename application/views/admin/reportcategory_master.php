<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report Category
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Report Category</a></li>
        <!-- <li class="breadcrumb-item active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
			<div class="box">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                Add Report Category
              </button>
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped table-hover display nowrap margin-top-10 table-responsive">
				<thead>
					<tr>
						<th>Sr</th>
						<th>Report Category Name</th>
						<th>Status</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					    <?php 
						  $i=1;
                          if(!empty($reportcategories)) {
                          foreach($reportcategories as $row) {
                         ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row["report_category_name"];?></td>
						<td><?php echo $row["status"];?></td>
						<td><?php $created_date = strtotime($row["created"]);
	                            $formattedcreateddate = date('Y/m/d', $created_date);
	                            echo $date = date('M j, Y', strtotime($formattedcreateddate));?></td>
						<td><button class="btn btn-social-icon btn-circle btn-tumblr editCategory" id="<?php echo $row["report_category_id"]; ?>"><i class="fa fa-edit" data-toggle="modal" data-target="#editCategory"></i></button>
						<button class="btn btn-social-icon btn-circle btn-danger delete_category" id="<?php echo $row["report_category_id"]; ?>"><i class="fa fa-trash"></i></button>
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
	<form method="post" action="<?php echo base_url('admin/reportcategory/add');?>" data-toggle="validator"  enctype="multipart/form-data">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Add Report Category</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-sm-6">
                    <label>Report Category Name</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="reportcategory_name" 
                    id="reportcategory_name" data-error="Enter Report Category Name" required>
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

<div class="modal modal-primary fade" id="editCategory">
	<form method="post" action="<?php echo base_url('admin/reportcategory/update');?>" data-toggle="validator" enctype="multipart/form-data">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Edit Report Category</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="window.location.reload();">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-sm-6">
                    <label>Report Category Name</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="reportcategory_name" 
                    id="ccategory_name" data-error="Enter Report Category Name" required>
                    <span class="help-block with-errors"></span>
                    </div>
                </div>

				
				
				<div class="col-sm-6">
	                <div class="form-group">
	                  <label>Status</label>
	                  <select class="form-control" id="cstatus" name="status" data-error="Select Gender" required>
	                    <option value="Active">Active</option>
	                    <option value="Inactive">Inactive</option>
	                  </select>
	                  <span class="help-block with-errors"></span>
	                </div>
           		</div>

           		<input type="hidden" name="reportcategory_id" id="ccategory_id">

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