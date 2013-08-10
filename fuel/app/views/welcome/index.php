<!DOCTYPE html>
<html> 

	<head>
		<title>CSGO: Strategy Builder</title>
		<link rel="stylesheet" type="text/css" href="css/csstrat.css">
		<script type="text/javascript" src="js/csstrat.js"></script>
		<link rel="icon" href="assets/img/favicon.ico">
		<meta name="description" content="CounterStrike: Global Offensive Strategy Painter">
		<meta name="keywords" content="CSGO CounterStrike Global Offensive Strat Painter Strategy">
		<meta name="author" content="evilduky666 * g0ddish">
		<meta charset="UTF-8">
		<style type='text/css'>
			#mainTitle{font-size:25px;}#allContent {width:50%;margin-left: auto;margin-right: auto;text-align: center;}
		</style>
	</head>

	<body>
		<div class="row" id="allContent">
		<br>
		<h1>CS Strategy Builder v1.0</h1>
		<div class="alert alert-info">
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
							<input class="btn btn-success" type="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
		<footer>
			<div id='allContent'>
				<div class="row alert">
					<div class="col-lg-6">
					<div class="text-primary">Developed by: evilduky666<br><div class="text-muted">Rendered in {exec_time}s using {mem_usage}mb of memory.</div></div>
					</div>
				<div class="text-right col-lg-6">
					<a  href="http://www.w3.org/html/logo/">
					<img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered">
					</a>
					<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">
					<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" />
					</a>
								</div>
			</div>
		  </div>
		</footer>
</html>
