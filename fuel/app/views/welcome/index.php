<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/csstrat.css">
<script type="text/javascript" src="js/csstrat.js"></script>
  <head>
		<style type='text/css'>
			#mainTitle{font-size:25px;}#allContent {width:50%;margin-left: auto;margin-right: auto;text-align: center;}
		</style>
	</head>
	<body>
	<div class="row" id="allContent">
	<br>
	<h1>CS Strategy Builder v1.0</h1>
  	<div class="well">
		<div id='mainTitle'>Choose a map</div>
			<div id='mainContent'>
				<div class="form-group">
					<form id="make_room" method="post" action="/test">
						<select name="map" form="make_room" class="form-control">
							<option value="dust2">Dust 2</option>
							<option value="inferno">Inferno</option>
							<option value="dust">Dust</option>
							<option value="train">Train</option>
							<option value="vertigo">Vertigo</option>
						</select>
						<br>
						<input class="btn btn-info" type="submit">
					</form>
				</div>
			</div>
		</div>
		<p class="text-primary">Developed by: evilduky666</p>
</div>
		</body>
</html>
