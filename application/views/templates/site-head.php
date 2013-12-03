<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>img/website_v3.png">-->
		<noscript>
			&lt;link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/noscript.css" /&gt;
		</noscript>
		<!-- Styles -->
		<?php 
			foreach($styles as $style) {
				?>
				<link href="<?php echo base_url().'css/'.$style; ?>.css" rel="stylesheet">
				<?php
			}
		?>

	</head>
	
	<body >
