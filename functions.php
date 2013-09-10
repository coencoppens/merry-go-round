<?php
	/**
	 * Is the file an image?
	 * 
	 * @param  string  $sFilename [description]
	 * @return boolean            [description]
	 */
	function is_valid_image( $sFilePath = '' ) {

		$aImageTypes = array(
				'image/jpeg'
			,	'image/png'
			,	'image/bmp'
			,	'image/gif'
		);

		// Try to get the image details. If it fails it probably isn't an image :)
		if( !$aImageSize = getimagesize( $sFilePath ) ) {

			return false;

		} else {

			// Is the image of a valid mime type?
			if( in_array( $aImageSize['mime'], $aImageTypes ) ) {
				return true;
			}

		}

		return false;

	}