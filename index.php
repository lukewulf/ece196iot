<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Team6b Intro to IoT</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="jscolor.js"></script>
</head>
<body>

<h1 id="banner">Color Picker</h1>

<?php
	include "header.php";
?>


<!-- JSCOLOR PICKER -->
<input type="button" class="jscolor" id="picker" value="7BD1FC">

<!-- FORM -->
<form>
	<input type="text" id="color">
	<input type="submit" value="Set as Default" id="set_default">
</form>

<!-- CHARTS -->
<div id="chartsContainer">
	<canvas id="temp_chart" class="chart" height="350" width="550"></canvas>
	<canvas id="sound_chart" class="chart" height="350" width="550"></canvas>
</div>

<script type="text/javascript" src="index.js"></script>

<!-- ABOUT -->


<h1 id="about_banner"> About </h1>

<div id="about">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget libero leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate tortor ultrices sem vulputate, vitae finibus mauris vulputate. Ut sollicitudin turpis felis, eget luctus dolor vestibulum quis. Integer elit quam, mollis a accumsan eu, dignissim vitae nulla. Vestibulum suscipit dignissim quam id sollicitudin. Morbi id euismod nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan rutrum tempus. Integer turpis velit, ornare sed rutrum quis, posuere vitae libero. Nulla ultrices sem suscipit, luctus odio vel, feugiat sem. Ut gravida lectus vitae nibh bibendum, ut lacinia arcu varius. In sit amet lorem mauris. Quisque non purus gravida, lobortis orci a, luctus justo.</p>

	<p>Aliquam consequat nulla non blandit tempus. Nulla feugiat lobortis odio, sed cursus erat facilisis nec. Mauris blandit nisi sit amet blandit euismod. Curabitur quis nisi a lacus vestibulum varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque enim nisi, sodales aliquam faucibus eu, cursus ac lacus. Maecenas ut condimentum magna. Proin euismod pharetra leo quis interdum. Vivamus malesuada elit a ex fermentum porttitor. Pellentesque sagittis nisi euismod dolor posuere ultricies. Proin in magna quis nisi feugiat vestibulum vitae quis ante.</p>

	<p>Mauris lacinia massa sed leo sagittis aliquam. Maecenas consequat, lectus sit amet lacinia semper, arcu nibh luctus metus, non condimentum risus eros non massa. Curabitur tincidunt varius augue ut eleifend. Curabitur vehicula id massa at vestibulum. Maecenas blandit mi in mattis accumsan. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque sit amet elit nec urna varius tincidunt id non velit.</p>

	<p>Donec eleifend elit tortor, sed ullamcorper ex iaculis sit amet. Nunc justo tellus, mollis a ante ac, porttitor fermentum nisi. Donec consequat est aliquam sem mattis, id hendrerit dolor hendrerit. Nulla quis risus vitae erat auctor congue. Aliquam rutrum diam lectus, vitae gravida quam egestas quis. Donec dignissim dignissim ligula et pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

	<p>Aenean porttitor dui sit amet lectus pretium pretium. Proin posuere nibh in velit placerat efficitur. Sed ac feugiat purus. Donec aliquet dui odio, vel molestie lectus lacinia vel. Pellentesque a mattis lorem, sed condimentum tortor. Morbi nec facilisis risus. Nullam placerat vestibulum lectus sit amet suscipit. Donec tristique sem quis dui finibus malesuada.</p>

</div>

</body>

</html>
