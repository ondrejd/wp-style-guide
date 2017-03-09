<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Debug_Dump' ) ):

/**
 * Screen helper for "Debug Dump" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Debug_Dump {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns-debugdump';

	/**
	 * Title of the page that screen represents.
	 * @internal
	 * @since 1.0.1
	 * @var string $page_title
	 */
	protected $page_title;

	/**
	 * Title of the menu item that screen represents.
	 * @internal
	 * @since 1.0.1
	 * @var string $menu_title
	 */
	protected $menu_title;

	/**
	 * @internal
	 * @since 1.0.1
	 * @var string $hookname
	 */
	protected $hookname;

	/**
	 * Holds instance of self (part of singleton implementation).
	 * @static
	 * @since 1.0.1
	 * @var Screen_Debug_Dump $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Debug_Dump
	 */
	protected static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Debug_Dump ) ) {
			self::$instance = new Screen_Debug_Dump();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'Debug Dump', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'Debug Dump', WP_Style_Guide::PLUGIN_SLUG );
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public static function admin_menu() {
		$self = self::get_instance();

		$self->hookname = add_submenu_page( 'wp-patterns', $self->page_title, $self->menu_title, 'read', Screen_Debug_Dump::SLUG, array( 'Screen_Debug_Dump', 'render' ) );

		if ( method_exists( 'Screen_Debug_Dump', 'create_help_screen' ) ) {
			add_action( 'load-' . $self->hookname, array( 'Screen_Debug_Dump', 'create_help_screen' ) );
		}
	}

	/**
	 * Add help.
	 * @static
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		// ...
	}

	/**
	 * Create screen help.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function screen_help( $screen ) {
		// ...
	}

	/**
	 * Register screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function register_screen_options( $screen ) {
		// ...
	}

	/**
	 * Render screen options form.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function screen_options( $screen ) {
		// ...
	}

	/**
	 * Save screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function save_screen_options( $screen ) {
		// ...
	}

	/**
	 * Render page self.
	 * @static
	 * @since 1.0.1
	 */
	public static function render() {
		include_once( plugin_dir_path( dirname( dirname( __FILE__ ) ) ) . 'r-debug.php' );
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/debugdump.php' );
	}
}

endif;
