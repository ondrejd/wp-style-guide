<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Admin_Ui' ) ):

/**
 * Screen helper for "Admin UI" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Admin_Ui {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns-adminui';

	/**
	 * Title of the page that screen represents.
	 * @since 1.0.1
	 * @var string $page_title
	 */
	public $page_title;

	/**
	 * Title of the menu item that screen represents.
	 * @since 1.0.1
	 * @var string $menu_title
	 */
	public $menu_title;

	/**
	 * @internal
	 * @since 1.0.1
	 * @var string $hookname
	 */
	public $hookname;

	/**
	 * Holds instance of self (part of singleton implementation).
	 * @static
	 * @since 1.0.1
	 * @var Screen_Admin_Ui $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Admin_Ui
	 */
	public static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Admin_Ui ) ) {
			self::$instance = new Screen_Admin_Ui();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'Other Admin Widgets', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'Other Widgets', WP_Style_Guide::PLUGIN_SLUG );
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public static function admin_menu() {
		$self = self::get_instance();

		$self->hookname = add_submenu_page( 'wp-patterns', $self->page_title, $self->menu_title, 'read', Screen_Admin_Ui::SLUG, array( 'Screen_Admin_Ui', 'render' ) );

		if ( method_exists( 'Screen_Admin_Ui', 'create_help_screen' ) ) {
			add_action( 'load-' . $self->hookname, array( 'Screen_Admin_Ui', 'create_help_screen' ) );
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

		wp_register_script( 'wp_patterns_adminui', plugins_url( 'js/patterns-adminui.js', dirname( __FILE__ ) ), array( 'jquery' ), false, true );
		wp_enqueue_script( 'wp_patterns_adminui' );
	}

	/**
	 * Add help.
	 * @static
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id != WP_Style_Guide::$screens['wp-patterns-adminui']['hookname']) {
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
		// TODO Finish help tabs for "Other Widgets" page!
		/*
		$screen->add_help_tab(
			array(
				'id'      => 'wpsg_wizards_help_tab',
				'title'   => __( 'Wizards', self::PLUGIN_SLUG ),
				'content' => __( '<p>On this page are shown all available wizards. The main are wizards for <b>plugins</b> and <b>themes</b>. These two wizards help you to start new plugin/theme projects quickly and easily. An advantage is the same structure accross your projects.</p><p>Other wizards generating code snippets for various parts of development of WordPress plugins or themes.<p>', self::PLUGIN_SLUG ),
			)
		);
		$screen->set_help_sidebar(
			sprintf(
				__( '<b>Usefull links</b><p><a href="%s" target="blank">Options</a> where you can change code templates.</p><p><a href="%s" target="blank">Examples</a> of generated code with this plugin.</p>', self::PLUGIN_SLUG ),
				'#',
				'#'
			)
		);
		*/
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
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/adminui.php' );
	}
}

endif;
