<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Tables' ) ):

/**
 * Screen helper for "Tables" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Tables {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns-tables';

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
	 * @var Screen_Tables $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Tables
	 */
	public static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Tables ) ) {
			self::$instance = new Screen_Tables();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'Tables', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'Tables', WP_Style_Guide::PLUGIN_SLUG );
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
	 * @internal
	 * @since 1.0.1
	 * @var string $hookname
	 */
	public function set_hookname( $hookname ) {
		$this->hookname = $hookname;
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public static function admin_menu() {
		$self = self::get_instance();

		$self->set_hookname( add_submenu_page( 'wp-patterns', $self->get_page_title(), $self->get_menu_title(), 'read', Screen_Tables::SLUG, array( self, 'render' ) ) );

		if ( method_exists( self, 'create_help_screen' ) ) {
			add_action( 'load-' . $self->get_hookname(), array( 'Screen_Tables', 'create_help_screen' ) );
		}
	}

	/**
	 * Enqueue required scripts and CSS styles.
	 * @static
	 * @since 1.0.1
	 * @uses get_current_screen()
	 * @uses wp_register_script()
	 * @uses wp_enqueue_script()
	 */
	public static function enqueue_scripts_and_styles() {
		$screen = get_current_screen();

		if ( $screen->base != WP_Style_Guide::$screens[self::SLUG]['hookname']) {
			return;
		}

		wp_register_script( 'wp_patterns_tables', plugins_url( 'js/patterns-tables.js', dirname( __FILE__ ) ), array( 'jquery' ), false, true );
		wp_enqueue_script( 'wp_patterns_tables' );
	}

	/**
	 * Add help.
	 * @static
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id != WP_Style_Guide::$screens[self::SLUG]['hookname']) {
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
				'id'      => 'wpsg_tables_help_tab',
				'title'   => __( 'Tables', WP_Style_Guide::PLUGIN_SLUG ),
				'content' => __( '<p style"colof: #f30;"><code>XXX</code> Fill this screen help!<p>', WP_Style_Guide::PLUGIN_SLUG ),
			)
		);
		$screen->set_help_sidebar(
			sprintf(
				__( '<b>Usefull links</b><p><a href="%1$s" target="blank"><code>WP_List_Table</code></a> on <b>WordPress Codex</b>.</p><p><a href="%2$s" target="blank"><code>WP_List_Table</code></a> on <b>WordPress Code Reference</b>.</a></p><!-- <p><a href="%3$s" target="blank">Link 3</a> is the third link.</p> -->', WP_Style_Guide::PLUGIN_SLUG ),
				'http://codex.wordpress.org/Class_Reference/WP_List_Table',
				'https://developer.wordpress.org/reference/classes/wp_list_table/',
				'#'
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
		add_filter( 'screen_layout_columns', array( 'Screen_Tables', 'screen_options' ) );

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
		$_display_description = WP_Style_Guide::get_option( 'display_detail_description', true );

		// Note: By default (the first usage, for example) are description shown.
		if ( is_null( $_display_description ) ) {
			$_display_description = true;
			// Set default value and save it.
			$options = WP_Style_Guide::get_options();
			$options['display_detail_description'] = true;
			update_option( WP_Style_Guide::PLUGIN_SLUG . '-options', $options );
		}

		$display_description = ( bool ) $_display_description;

		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/screen_options-tables.php' );
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
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/tables.php' );
	}
}

endif;
