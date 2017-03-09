<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Toc' ) ):

/**
 * Screen helper for "Tables" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Toc {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns';

	/**
	 * Title of the page that screen represents.
	 * @since 1.0.1
	 * @var string $page_title
	 */
	protected $page_title;

	/**
	 * Title of the menu item that screen represents.
	 * @since 1.0.1
	 * @var string $menu_title
	 */
	protected $menu_title;

	/**
	 * @since 1.0.1
	 * @var string $hookname
	 */
	protected $hookname;

	/**
	 * Holds instance of self (part of singleton implementation).
	 * @static
	 * @since 1.0.1
	 * @var Screen_Toc $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Toc
	 */
	public static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Toc ) ) {
			self::$instance = new Screen_Toc();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'WordPress Admin Pattern Library', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'Pattern Library', WP_Style_Guide::PLUGIN_SLUG );
	}

	/**
	 * Return title of the page that screen represents.
	 * @since 1.0.1
	 * @return string
	 */
	public function get_page_title() {
		return $this->page_title;
	}

	/**
	 * Return title of the menu item that screen represents.
	 * @since 1.0.1
	 * @return string
	 */
	public function get_menu_title() {
		return $this->menu_title;
	}

	/**
	 * @internal
	 * @since 1.0.1
	 * @return string
	 */
	public function get_hookname() {
		return $this->hookname;
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public function admin_menu() {
		$this->hookname = add_menu_page( $this->page_title, $this->menu_title, 'read', self::SLUG, array( 'Screen_Toc', 'render' ) );
	}

	/**
	 * Add help.
	 * @static
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id != self::get_instance()->get_hookname() ) {
			return;
		}

		self::register_screen_options( $screen );
		self::screen_help( $screen );
	}

	/**
	 * Create screen help.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function screen_help( $screen ) {
		$screen->add_help_tab(
			array(
				'id'      => 'wpsg_toc_help_tab',
				'title'   => __( 'Patterns Library', WP_Style_Guide::PLUGIN_SLUG ),
				'content' => __( '<p style"colof: #f30;"><code>XXX</code> Fill this screen help!<p>', WP_Style_Guide::PLUGIN_SLUG ),
			)
		);
	}

	/**
	 * Register screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 * @uses add_filter()
	 */
	public static function register_screen_options( $screen ) {
		add_filter( 'screen_layout_columns', array( 'Screen_Toc', 'screen_options' ) );

		$screen->add_option( 'display_detail_description', '' );
	}

	/**
	 * Render screen options form.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 * @uses plugin_dir_path()
	 * @uses update_option()
	 */
	public static function screen_options( $screen ) {
		// ...
	}

	/**
	 * Save screen options.
	 * @static
	 * @since 1.0.1
	 */
	public static function save_screen_options() {
		// ...
	}

	/**
	 * Render page self.
	 * @static
	 * @since 1.0.1
	 * @uses plugin_dir_path()
	 */
	public static function render() {
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/toc.php' );
	}
}

endif;
