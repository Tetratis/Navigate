<html>
	<head>
	<title>Navigate</title>
	<style>
	</style>
	</head>
	<body>
		<?php
			$ds = disk_free_space("/");
			$cool = $ds / 1000000000;
			if ($ds == false){
				$win = disk_free_space(":C");
				$wincool = $win / 1000000000;
				echo '<center><b>'.(round($wincool)).'</b></center>';
			}else{
				echo '<center><b>'.(round($cool)).'</b></center>';
			}
			echo '<center>Ok</center>';
		?>
	</body>
</html>