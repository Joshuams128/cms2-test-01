<?php
/**
 * Cap checker.
 *
 * @package VideoPressUploader
 **/

namespace VideoPressUploader;

// Avoid direct calls to this file.
if ( ! defined( 'ABSPATH' ) ) {
	die( 0 );
}

/**
 * Unauthorized_Exception class.
 *
 * @package VideoPressUploader
 **/
class File_Exception extends \Exception {
}
