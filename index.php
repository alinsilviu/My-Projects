<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<style type="text/css">
		#value1, #value2{
			max-width:130px;
		}
	</style>
</head>
<body>
	<br><br>
	<div class="col-md-4 col-md-offset-4 text-center">
		<div class="panel panel-primary">
		  <div class="panel-heading"><b>Simple Calculator</b></div>
		  <div class="panel-body">
		    <form class="form-inline" action="index.php" method="POST">
			  <div class="form-group">
			    <input type="text" class="form-control" name="value1" id="value1" placeholder="First Number">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" name="value2" id="value2" placeholder="Second Number">
			  </div>
				<select name="action" class="form-control">
				  <option>+</option>
				  <option>-</option>
				  <option>*</option>
				  <option>/</option>
				</select>
			  <button class="btn btn-default" id="button" type="submit" name="submit" disabled="disabled">Calculate</button>
			</form>
			<?php 
		if(isset($_POST['submit'])){
			$value1 = $_POST['value1'];
			$value2 = $_POST['value2'];
			$action = $_POST['action'];

			if($action=='+'){
				$result = $value1 + $value2;
				echo '<h3><span class="label label-primary">Answer: '.$value1.' + '.$value2.' = '.$result.'</span></h3>';
			}

			if($action=='-'){
				$result = $value1 - $value2;
				echo '<h3><span class="label label-primary">Answer: '.$value1.' - '.$value2.' = '.$result.'</span></h3>';
			}
			if($action=='*'){
				$result = $value1 * $value2;
				echo '<h3><span class="label label-primary">Answer: '.$value1.' * '.$value2.' = '.$result.'</span></h3>';
			}
			if($action=='/'){
				$result = $value1 / $value2;
				echo '<h3><span class="label label-primary">Answer: '.$value1.' / '.$value2.' = '.$result.'</span></h3>';
			}
		}
			?></span>
		  </div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
		    $('#button').attr('disabled', true);

		    $('#value1').keyup(function(){
		        if($('#value1').val().length != 0 && $('#value2').val().length != 0)
		            $('#button').attr('disabled', false);
		        else
		            $('#button').attr('disabled', true);     
		    });
		    $('#value2').keyup(function(){
		        if($('#value1').val().length != 0 && $('#value2').val().length != 0)
		            $('#button').attr('disabled', false);
		        else 
		            $('#button').attr('disabled', true);        
		    });
		});
	</script>
</body>
</html>