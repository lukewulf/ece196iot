<!DOCTYPE html>
<html>
<head>
	<title>AmbiLamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
</head>
<body>

<?php 
	include "header.php";
?>

<!-- BUTTONS AND CANVAS -->
<input type="button" id="temp-btn" class="btn" value="View Temperature Chart" onclick="drawTemp()">
<canvas id="temp-chart-long" class="chart" width="900" height="350" hidden></canvas>
<input type="button" id="sound-btn" class="btn" value="View Sound Chart" onClick="drawSound()">
<canvas id="sound-chart-long" class="chart" width="900" height="350" hidden></canvas>

<!-- TABLES -->
<div id="tables-container">
	<div class="table">
		<table id="temp-table">
			<tr>
				<th>Time</th>
				<th>Temperature</th>
				<th>R</th>
			</tr>
			<tr>
				<td>Some Time</td>
				<td>Cold</td>
				<td>Lots</td>
			</tr>	
			<tr>
				<td>Another Time</td>
				<td>Hot</td>
				<td>A Little</td>
			</tr>
			<tr>
				<td>Some Time</td>
				<td>Cold</td>
				<td>Lots</td>
			</tr>	
			<tr>
				<td>Another Time</td>
				<td>Hot</td>
				<td>A Little</td>
			</tr>	
			<tr>
				<td>Some Time</td>
				<td>Cold</td>
				<td>Lots</td>
			</tr>	
			<tr>
				<td>Another Time</td>
				<td>Hot</td>
				<td>A Little</td>
			</tr>	
			<tr>
				<td>Some Time</td>
				<td>Cold</td>
				<td>Lots</td>
			</tr>	
			<tr>
				<td>Another Time</td>
				<td>Hot</td>
				<td>A Little</td>
			</tr>		
		</table>
	</div>
	<div class="table">
		<table id="sound-table">
			<tr>
				<th>Time</th>
				<th>Sound</th>
				<th>R</th>
			</tr>
			<tr>
				<td>Some Time</td>
				<td>Loud AF</td>
				<td>Lots</td>
			</tr>
			<tr>
				<td>Another Time</td>
				<td>Quiet Boi</td>
				<td>Little</td>
			</tr>
			<tr>
				<td>Some Time</td>
				<td>Loud AF</td>
				<td>Lots</td>
			</tr>
			<tr>
				<td>Another Time</td>
				<td>Quiet Boi</td>
				<td>Little</td>
			</tr>
			
		</table>
	</div>
</div>
<script type="text/javascript" src="assets/js/details.js"></script>

</body>
</html>
