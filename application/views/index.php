<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Driven Charts Demo | Daniel Drave</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url()?>assets/Chart.js"></script>	
</head>
<body>

<div id="wrapper">
	<div id="credits">
		<div class="row">
			<div class="col-sm-6">
				<h1>Demo ChartJS - Live Demo</h1>			
			</div>

			<div class="col-sm-6 links">
				<a class="btn btn-info" href="#">Download .ZIP <i class="fa fa-file-archive-o"> </i></a>
				<a class="btn btn-info" target="_blank" href="https://github.com/danieldrave/Demo-ChartJS">View on GitHub <i class="fa fa-github"> </i></a>
			</div>
		</div>
	</div>

	<div id="forms"> 
		<div class="row">
			<div class="col-sm-12">
				<form method="post" action="<?php echo base_url()?>tampilkan/showchart">
					<label>Select first year</label>
					<select class="form-control" name="yearOne"> 
						<?php
							foreach ($tahun as $th) {
								echo "<option value='" .$th->year. "'>" . $th->year . "</option>";
							}
						?>
					</select>
					<label>Select second year</label>
					<select class="form-control" name="yearTwo">
						<?php
							foreach ($tahun as $th) {
								echo "<option value='" .$th->year. "'>" . $th->year . "</option>";
							}
						?>				
					</select>
					<input class="btn btn-success" type="submit" value="Compare" />
				</form>
			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>