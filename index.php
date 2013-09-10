<?php
	include_once( 'config.php' );
	include_once( 'functions.php' );
?>

<html>
	<head>
		<title>Carousel</title>

		<link href="/css/style.css" rel="stylesheet" type="text/css" />
		<script src="/js/jquery-1.10.2.min.js"></script>
		<script src="/js/unslider.min.js"></script>

	</head>
	<body>

		<div class="panoramas">
			<ul>
				<?php
					if ( $handle = opendir( $sAppPath . $sImageSubPath ) ) {

						while ( false !== ( $sImage = readdir( $handle ) ) ) {

							$sFullImagePath = $sAppPath . $sImageSubPath . $sImage;

							if( is_valid_image( $sFullImagePath ) ) { ?>
								<li><img src="<?php echo $sImageSubPath . $sImage; ?>"/></li>
							<?php }

						}

					}
				?>
			</ul>
		</div>

		<script>
			var unslider = $( '.panoramas' ).unslider( {
				speed: <?php echo $iSpeed; ?>,
				delay: <?php echo $iDelay; ?>,
				keys: <?php echo $sKeys; ?>,
				dots: <?php echo $sDots; ?>
			});
		</script>

	</body>
</html>