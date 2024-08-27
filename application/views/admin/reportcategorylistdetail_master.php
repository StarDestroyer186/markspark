<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report Category List Detail
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Report Category List Detail</a></li>
        <!-- <li class="breadcrumb-item active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
			<div class="box">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                Add Report Category List Detail
              </button>
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped table-hover display nowrap margin-top-10 table-responsive">
				<thead>
					<tr>
						<th>Sr</th>
						<th>Report Category List Name</th>
						<th>Report Category Detail title</th>
						<th>Report Category Detail description</th>
            <th>Report Category Detail Download</th>
            <th>Report Category Detail Image</th>
            <th>Report Category Detail Text</th>
						<th>Status</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					    <?php 
						  $i=1;
                          if(!empty($reportcategorieslistdetail)) {
                          foreach($reportcategorieslistdetail as $row) {
                         ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row["report_category_list_name"];?></td>
						<td><?php echo $row["report_category_detail_title"];?></td>
						<td><?php echo $row["report_category_detail_description"];?></td>
            <td><?php echo $row["report_category_detail_download"];?></td>
            <td><img src="<?php echo $row['report_category_detail_image'];?>" width="70" height="50"></td>
            <td><?php echo $row["report_category_detail_download_txt"];?></td>
						<td><?php echo $row["status"];?></td>
						<td><?php $created_date = strtotime($row["created"]);
	                            $formattedcreateddate = date('Y/m/d', $created_date);
	                            echo $date = date('M j, Y', strtotime($formattedcreateddate));?></td>
						<td><button class="btn btn-social-icon btn-circle btn-tumblr editreportcategoryListDetail" id="<?php echo $row["report_category_detail_id"]; ?>"><i class="fa fa-edit" data-toggle="modal" data-target="#editreportcategoryListDetail"></i></button>
						<button class="btn btn-social-icon btn-circle btn-danger delete_category_list_detail" id="<?php echo $row["report_category_detail_id"]; ?>"><i class="fa fa-trash"></i></button>
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
	<form method="post" action="<?php echo base_url('admin/reportcategorylistdetail/add');?>" data-toggle="validator"  enctype="multipart/form-data">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Add Report Category List Detail</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body" id="dynamic_field">
			<div class="row">
				<div class="col-sm-6">
              <div class="form-group">
                  <label for="recipient-name-2" class="col-form-label">Select Report Category List</label>
                  <select class="form-control select2" name="report_category_list_id" id="report_category_list_id" data-error="Select Report Category List" required style="width:100%;">
                    <option value="">---</option>
                      <?php 
                      if(!empty($reportcategorieslist)) {
                      foreach ($reportcategorieslist as $row) { ?>
                      <option value="<?php echo $row["report_category_list_id"];?>" id="<?php echo $row["report_category_list_id"];?>">
                      <?php echo $row["report_category_list_name"];?>
                      </option>
                      <?php } } ?>
                  </select>
                  <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category Detail Title</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="report_category_detail_title" 
              name="report_category_detail_title" data-error="Enter Report Category List Detail Title" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category Detail Description</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="report_category_detail_description" 
              name="report_category_detail_description" data-error="Enter Report Category List Detail Descrption" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
                    <label>Report Category List Download</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="report_category_detail_download" 
                    id="report_category_detail_download" data-error="Enter Report Category Download" required>
                    <span class="help-block with-errors"></span>
                    </div>
                </div>


          <div class="col-sm-6">
              <label>Report Category Detail Download Text</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="report_category_detail_download_txt" 
              name="report_category_detail_download_txt" data-error="Enter Report Category List Detail Download Text" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
                    <label>Report Category Detail Image</label>
                    <div class="form-group">
                    <input type="file" id="report_category_detail_image" name="report_category_detail_image" data-error="Select Report Category Detail Image" required>
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

<div class="modal modal-primary fade" id="editreportcategoryListDetail">
  <form method="post" action="<?php echo base_url('admin/reportcategorylistdetail/update');?>" data-toggle="validator"  enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Edit Report Category List Detail</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" id="dynamic_field">
      <div class="row">
        <div class="col-sm-6">
              <div class="form-group">
                  <label for="recipient-name-2" class="col-form-label">Select Report Category List</label>
                  <select class="form-control" name="report_category_list_id" id="creport_category_list_id" data-error="Select Report Category List" required style="width:100%;">
                    <?php 
                      if(!empty($reportcategorieslist)) {
                      foreach ($reportcategorieslist as $row) { ?>
                      <option value="<?php echo $row["report_category_list_id"];?>" id="<?php echo $row["report_category_list_id"];?>">
                      <?php echo $row["report_category_list_name"];?>
                      </option>
                      <?php } } ?>
                  </select>
                  <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category Detail Title</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="creport_category_detail_title" 
              name="report_category_detail_title" data-error="Enter Report Category List Detail Title" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
              <label>Report Category Detail Description</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="creport_category_detail_description" 
              name="report_category_detail_description" data-error="Enter Report Category List Detail Descrption" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          <div class="col-sm-6">
                    <label>Report Category List Download</label>
                    <div class="form-group">
                    <input class="form-control" type="text" name="report_category_detail_download" 
                    id="creport_category_detail_download" data-error="Enter Report Category Download" required>
                    <span class="help-block with-errors"></span>
                    </div>
                </div>


          <div class="col-sm-6">
              <label>Report Category Detail Download Text</label>
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="" id="creport_category_detail_download_txt" 
              name="report_category_detail_download_txt" data-error="Enter Report Category List Detail Download Text" required></textarea>
              <span class="help-block with-errors"></span>
              </div>
          </div>

          

                <div class="col-sm-6">
                    <label>Report Category Detail Image</label>
                    <div class="form-group">
                    <input type="file" name="report_category_detail_image" id="" class="form-control" onchange='readcatimg(this);' accept=".png, .jpg, .jpeg">
                    <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="cstatus" data-error="Select Status" required>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                    </select>
                    <span class="help-block with-errors"></span>
                  </div>
              </div>
                <div class="col-sm-6">
                  <img src="" id="creport_category_detail_image" class="displaycatimg" width="100" height="100">
                </div>

                

              <input type="hidden" name="report_category_detail_id" id="creport_category_detail_id">

          
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