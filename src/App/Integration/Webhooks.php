<?php
/**
 * Events Manager - Debt Collective Add-on
 *
 * @package   DC_Events_Manager
 */
namespace DCEventsManager\App\Integration;

use DCEventsManager\Common\Abstracts\Base;

/**
 * Class Webhooks
 *
 * @package DCEventsManager\App\Integration
 * @since 1.0.0
 */
class Webhooks extends Base {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct( $version, $plugin_name ) {
		parent::__construct( $version, $plugin_name );
		$this->init();
	}

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		/**
		 * This general class is always being instantiated as requested in the Bootstrap class
		 *
		 * @see Bootstrap::__construct
		 *
		 * Add plugin code here
		 */
	}

}
