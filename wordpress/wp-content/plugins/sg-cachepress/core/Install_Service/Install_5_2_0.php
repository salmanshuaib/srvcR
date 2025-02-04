<?php
namespace SiteGround_Optimizer\Install_Service;

use SiteGround_Optimizer\Options\Options;
use SiteGround_Optimizer\Htaccess\Htaccess;

class Install_5_2_0 extends Install {
	/**
	 * Local variables
	 *
	 * @var mixed
	 */
	public $htaccess;
	public $options;

	/**
	 * The default install version. Overridden by the installation packages.
	 *
	 * @since 5.2.0
	 *
	 * @access protected
	 *
	 * @var string $version The install version.
	 */
	protected static $version = '5.2.0';

	public function __construct() {
		$this->htaccess = new Htaccess();
		$this->options = new Options();
	}
	/**
	 * Run the install procedure.
	 *
	 * @since 5.2.0
	 */
	public function install() {

		if ( $this->htaccess->is_enabled( 'gzip' ) ) {
			$this->options->enable_option( 'siteground_optimizer_enable_gzip_compression' );
		}

		if ( $this->htaccess->is_enabled( 'browser-caching' ) ) {
			$this->options->enable_option( 'siteground_optimizer_enable_browser_caching' );
		}

		if ( $this->htaccess->is_enabled( 'ssl' ) ) {
			$this->options->enable_option( 'siteground_optimizer_ssl_enabled' );
		}
	}

}