<?php
include 'mainheader.php';
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.ico">
    <title>Cryptocurrency - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>




</style>

<!-- Content -->
        <div class="page-wrapper bg-wrapper">
           <div class="content">
				<div class="buy-form">
				 <h4 class="page-title">OVERDUE LISTINGS REPORT</h4>
					<div class="row filter-row">
							<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label class="focus-label">From</label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label class="focus-label">To</label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
					</div>
						<div class="form-group" align="right" style="margin-top:1.0rem;">
							<a href="#" class="btn btn-success"> Search </a>
						</div>
					</div>
			<p>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0  cstable">
									<thead>
										<tr>
											<th >Group</th>
											<th >Visit 1</th>
											<th >Visit 2</th>
											<th >Visit 3</th>
											<th >Visit 4</th>
											<th >Visit 5</th>
											<th >Visit 6</th>
											<th >Visit 7</th>
											<th >Visit 8</th>
											<th >Visit 9</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>DTP</td>
											<td>50</td>
											<td>50</td>
											<td>50</td>
											<td>50</td>
											<td>50</td>
										</tr>
										<tr>
											<td>Catch up</td>
											<td>20</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
										</tr>
										<tr>
											<td>Hospital</td>
											<td>20</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
            </div>
        </p>

</body>

</html>

<script> 
$(document). ready(function(){

 var table = $('.cstable').DataTable();



});


</script>