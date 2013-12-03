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

		<!-- Scripts -->
		<?php 
			foreach($scripts as $script) {
					
				?>
				<script type="text/javascript" src="<?php echo base_url().'js/'.$script; ?>.js"></script>
				<?php
			}
		?>

	<style>	
      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
 		height: 100%;
		margin:0;
		padding:0;  
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color:none;
      }

		.verticalLine {
		    border-right: thin solid #333e4f;
		    margin-top:7%;
		    margin-bottom: 7%;
		    height:90px;
		    box-shadow: 1px 0px -0px #000000;
		}      

		.horizontallines{
			border-top: thin solid #333e4f;
			box-shadow: 1px 1px -0px #000000;
		}

		.verticalLines{ 
		    border-right: thin solid #333e4f;
		    margin-top:7%;
		    margin-bottom: 7%;
		    height:130px;
		    margin-right:2%;
		    box-shadow: 1px 0px -0px #000000;
		}    

		.tablet-view{
			/*margin-left:15%;*/
			text-shadow: 0px -1px 0px #000000;color:#323b4d
		}

		.desktop-view{
			/*margin-left:15%;*/
			text-shadow: 0px -1px 0px #000000;color:#323b4d
		}		

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
	</head>
	
	<body >
