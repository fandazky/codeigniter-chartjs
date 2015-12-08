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

	Showing comparative earnings for <strong> <?php echo $one;?> </strong> and <strong><?php echo $two;?> </strong><br/>
    <?php
        // $one = null;
        // $two = null;

        //     if(!empty($_POST['yearOne']) && !empty($_POST['yearTwo'])) {
        //         $one = $_POST['yearOne'];
        //         $two = $_POST['yearTwo'];
                
        //         echo "Showing comparative earnings for <strong>" .$one. "</strong> and <strong>" .$two. "</strong> <br />";			
        //     }

        //     else if(empty($_POST['yearOne']) && empty($_POST['yearTwo'])) {
        //         $one = "2014";
        //         $two = "2015";
     
        //         echo "Showing latest earning years for <strong>" .$one. "</strong> and <strong>" .$two. "</strong>. <br />";
        //     }

        //     if($one == $two) {
        //         echo "<br />Warning: Values shouldn't be the same! It's not worth comparing!";
        //     }

        //     else {
        //         //DO NOTHING
        //     }
    ?>
    <script type="text/javascript">
    $(document).ready(function(){

        var data = {
            labels: <?php echo $label; ?>,
            datasets: [
                {
                    label: "Select earnings: " + <?php echo $one;?>,
                    fillColor: 	"rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor:  "rgba(220,220,220,1)",
                    pointStrokeColor: "#FFF",
                    pointHighlightFill: "#FFF",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: <?php echo $result1; ?>
                },
                {
                    label: "Select earnings: " + <?php echo $two;?>,
                    fillColor: 	"rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor:  "rgba(151,187,205,1)",
                    pointStrokeColor: "#FFF",
                    pointHighlightFill: "#FFF",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: <?php echo $result2; ?>
                }
            ]
        };

        var ctx = document.getElementById("demoChart").getContext("2d");
        var chart = new Chart(ctx).Line(data);
        document.getElementById("demoLegend").innerHTML = chart.generateLegend();
    });
    </script>

	<div class="row">
		<div class="col-sm-9">
			<canvas id="demoChart" width="600" height="350"> </canvas>
		</div>

		<div class="col-sm-3">
			<div id="demoLegend"> </div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>