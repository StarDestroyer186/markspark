<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sample Report
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Sample Report</a></li>
        <!-- <li class="breadcrumb-item active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
			<div class="box">
            <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                Add Report Category
              </button> -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped table-hover display nowrap margin-top-10 table-responsive">
				<thead>
					<tr>
						<th>Sr</th>
						<th>Full Name</th>
						<th>Bussiness Emailid</th>
						<th>Contact No.</th>
						<th>Job Title</th>
						<th>Company Name</th>
						<th>Special Requirement</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					    <?php 
						  $i=1;
                          if(!empty($samplereportinfo)) {
                          foreach($samplereportinfo as $row) {
                         ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row["full_name"];?></td>
						<td><?php echo $row["bussiness_emailid"];?></td>
						<td><?php echo $row["contact_no"];?></td>
						<td><?php echo $row["job_title"];?></td>
						<td><?php echo $row["company_name"];?></td>
						<td><?php echo $row["special_requirement"];?></td>
						<td><?php $created_date = strtotime($row["created"]);
	                            $formattedcreateddate = date('Y/m/d', $created_date);
	                            echo $date = date('M j, Y', strtotime($formattedcreateddate));?></td>
					
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