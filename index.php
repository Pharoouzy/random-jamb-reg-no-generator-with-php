<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jamb Registration Number Generator</title>
	<style type="text/css">
		.container{
			margin: 0 auto 0 auto;
		}
		table{
			margin: 260px auto 0 auto;
		}
		input[type="text"]{
			width: 300px;
			height: 30px;
			padding: 5px;
			font-size: 28px;
			text-align: center;
		}
		input[type="submit"]{
			background: #40c4ff;
			width: 315px;
			height: 50px;
			padding: 10px;
			font-size: 25px;
			cursor: pointer;
			border: none;
			border-radius: 5px;
			color: #FFFFFF;
		}
	</style>
</head>
<body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<div class="container">
		<form method="POST" id="myform">
			<table>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input disabled type="text" name="jambreg" id="output" placeholder="Output" readonly><br></td>
				</tr>
				<tr>
					<td><input type="submit" id="generate" name="generate" value="Generate"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	$(() => { // short form for $(document).ready();
		$('#generate').click((e) =>{
			e.preventDefault();// preventing default submission
			$('#output').val('Please wait...').fadeIn();
			// sending ajax request to script.php
			$.ajax({
				url: 'script.php',
				type: 'POST',
				data: $('#myform').serialize(),
				success: function(data) {
					$('#output').val(data).fadeIn();
  				},
	 			error: function(e) {
					$('#msg').html(e).fadeIn();
				}
			});
		});
	});
</script>