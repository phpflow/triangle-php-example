<!DOCTYPE html>
				<html lang="en">
				<head>
				<meta charset="UTF-8">
				<title>Example of Triangle with PHP</title>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				<script src="dist/jquery.imgareaselect.js" type="text/javascript"></script>
				<script src="dist/jquery.form.js"></script>
				<link rel="stylesheet" href="dist/imgareaselect.css">

				</head>
				<body>
				<div class="container" style="padding:50px">
								<div class="row">
												<div class="col-sm-6"><?php
												/* right tringle */
												for ($i=1; $i<=10; $i++) {
												   for($j=1; $j<=$i; $j++) {
													echo " * ";
												 }
												echo "<br>\n";

												}
								?>
								</div>

								<div class="col-sm-6">
												<?php /* tringle */
												for ($i=9; $i>=1; $i--) {
												   for($j=1; $j<=$i; $j++) {
																	echo '&nbsp;';
																 }
																$j--;
													for ($k=1; $k<=(10-$j); $k++) {
													 echo " # ";
												 }
												echo "<br>\n";

												}
												?>
								</div>
				</div>
				</div>
				</body>
				</html>
