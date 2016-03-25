<?php
/*
Plugin Name: WordPress Admin Pattern Library
Plugin URI: https://github.com/helenhousandi/wp-style-guide
Description: Because it's horrible that we don't have one.
Version: 1.0
Author: The WordPress Team
Author URI: http://wordpress.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * @todo Add options page.
 */
class WP_Style_Guide {
	const PLUGIN_SLUG = 'wp-patterns';
	const PLUGIN_VERSION = '1.0.1';

	/**
	 * Main slug.
	 * @var string
	 */
	private $slug;

	/**
	 * Screens added.
	 * @var array
	 */
	private $screens;

	/**
	 * Hook name of the top level page.
	 * @var string
	 */
	private $hookname;

	/**
	* Default options of the plugin.
	* @var array
	*/
	private $default_options = array(
		'default_install_text' => "1. Upload plugin folder to the `/wp-content/plugins/` directory\n2. Activate the plugin through the 'Plugins' menu in WordPress\n",
		'default_faq_text' => "= Question #1 =\n\nAnswer #1 ...\n",
		'default_changelog_text' => "= 0.0.1 =\n* initial version\n",
		'default_include_license_file' => true,
		'default_has_dependency' => false,
		'default_has_administration' => true,
		'default_has_options' => true,
		'default_has_own_dbtables' => false,
		'default_has_localization' => true
	);

	/**
	 * Set up hooks.
	 */
	public function __construct() {
		$this->slug = self::PLUGIN_SLUG;

		// define our screens
		$this->screens = array(
			'wp-patterns-wizards' => array(
				'page_title' => __( 'Wizards' ),
				'menu_title' => __( 'Wizards' ),
				'callback' => 'wizards', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-forms' => array(
				'page_title' => __( 'Forms' ),
				'menu_title' => __( 'Forms' ),
				'callback' => 'forms_page', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-jquery-ui' => array(
				'page_title' => __( 'jQuery UI Components' ),
				'menu_title' => __( 'jQuery UI Components' ),
				'callback' => 'jquery_ui', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-helper-classes' => array(
				'page_title' => __( 'Helper Classes' ),
				'menu_title' => __( 'Helper Classes' ),
				'callback' => 'helper_classes', // note that this has to be a class method
				'hookname' => null,
			),
		);

		add_action( 'init', array( $this, 'init' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Initialize plugin.
	 * @return void
	 */
	public function init() {
		// Ensure that plugin's options are initialized
		$this->get_options();
	}

	/**
	 * Returns plugin's options
	 * @return array
	 * @since 0.0.1
	 * @uses get_option()
	 * @uses update_option()
	 */
	public function get_options() {
		$options = get_option( self::PLUGIN_SLUG . '-options' );
		$need_update = false;

		if ( $options === false ) {
			$need_update = true;
			$options = array();
		}

		foreach ( $this->default_options as $key => $value ) {
			if ( !array_key_exists( $key, $options ) ) {
				$options[$key] = $value;
				$need_update = true;
			}
		}

		if ( !array_key_exists( 'latest_used_version', $options ) ) {
			$options['latest_used_version'] = self::PLUGIN_VERSION;
			$need_update = true;
		}

		if ( $need_update === true ) {
			update_option( self::PLUGIN_SLUG . '-options', $options );
		}

		return $options;
	} // end get_options()

	/**
	 * Returns value of option with given key.
	 * @param string $key
	 * @return mixed Returns empty string if option with given key was not found.
	 * @static
	 * @uses get_option()
	 */
	public static function get_option($key) {
		$options = get_option( self::PLUGIN_SLUG . '-options' );

		if ( array_key_exists( $key, $options ) ) {
			return $options[$key];
		}

		return '';
	}

	/**
	 * Enqueue scripts and styles as needed.
	 * @return void
	 * @uses get_current_screen()
	 * @uses plugins_url()
	 * @uses wp_enqueue_script()
	 * @uses wp_enqueue_style()
	 * @uses wp_register_script()
	 */
	public function admin_enqueue_scripts() {
		$screen = get_current_screen();

		if ( $screen->base === $this->screens['wp-patterns-jquery-ui']['hookname'] ) {
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'jquery-ui-dialog' );
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_script( 'jquery-ui-datepicker' );
			wp_enqueue_script( 'jquery-ui-progressbar' );
			wp_enqueue_script( 'jquery-ui-button' );

			wp_enqueue_style( 'wp-jquery-ui', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );
		}
		elseif ( $screen->base === $this->screens['wp-patterns-wizards']['hookname'] ) {
			$wizard = filter_input( INPUT_GET, 'wizard' );

			if ( in_array( $wizard, array( 'plugin', 'theme' ) ) ) {
				wp_register_script( self::PLUGIN_SLUG . '_wizards_' . $wizard . '_js', plugins_url( 'js/wizards-' . $wizard . '.js', __FILE__ ), array( 'jquery', 'jquery-ui-core' ), false, true );

				wp_enqueue_script( self::PLUGIN_SLUG . '_wizards_' . $wizard . '_js' );
			}
		}

		wp_enqueue_style( 'wp-style-guide', plugins_url( 'css/wp-style-guide.css', __FILE__ ), false );
		
		wp_enqueue_style( 'dashicons-guide', plugins_url( 'css/dashicons.css', __FILE__ ), false );

		wp_enqueue_script( 'prism-js', plugins_url( 'js/prism.js', __FILE__ ), false );
		wp_enqueue_style( 'prism-css', plugins_url( 'css/prism.css', __FILE__ ), false );
	}

	public function admin_head() {
?>
<style>
	.mp6 #adminmenu .<?php echo $this->hookname; ?> .wp-menu-image:before {
		content: '\f309';
	}
</style>
<?php
	}

	/**
	 * Add admin screens
	 * @return void
	 * @uses add_action()
	 * @uses add_menu_page()
	 * @uses add_submenu_page()
	 */
	public function admin_menu() {
		$this->hookname = add_menu_page( 'WordPress Admin Pattern Library', 'Pattern Library', 'read', $this->slug, array( $this, 'toc' ) );
		add_action( 'load-' . $this->hookname, array( $this, 'create_help_screen' ) );

		foreach ( $this->screens as $slug => $args ) {
			$this->screens[$slug]['hookname'] = add_submenu_page( 'wp-patterns', $args['page_title'], $args['menu_title'], 'read', $slug, array( $this, $args['callback'] ) );
			add_action( 'load-' . $this->screens[$slug]['hookname'], array( $this, 'create_help_screen' ) );
		}
	}

	/**
	 * Add help.
	 * @return void
	 * @uses get_current_screen()
	 * @todo Finish this!
	 */
	public function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id == $this->hookname ) {
			return;
		}

		if ( $screen->id == $this->screens['wp-patterns-wizards']['hookname'] ) {
			$wizard = filter_input( INPUT_GET, 'wizard' );

			if ( $wizard == 'plugin' ) {
				// ...
			}
			elseif ( $wizard == 'theme' ) {
				// ...
			}
			else {
				$screen->add_help_tab( array(
					'id'      => 'my_help_tab',
					'title'   => __( 'Wizards' ),
					'content' => __( '<p>On this page are shown all available wizards. The main are wizards for <b>plugins</b> and <b>themes</b>. These two wizards help you to start new plugin/theme projects quickly and easily. An advantage is the same structure accross your projects.</p><p>Other wizards generating code snippets for various parts of development of WordPress plugins or themes.<p>' ),
				));
				$screen->set_help_sidebar(
					sprintf(
						__( '<b>Usefull links</b><p><a href="%s" target="blank">Options</a> where you can change code templates.</p><p><a href="%s" target="blank">Examples</a> of generated code with this plugin.' ),
						'#',
						'#'
					)
				);
			}
			
			/*$screen->add_option(
				'show_descriptions', 
				array(
					'label' => __( 'Show descriptions' ), 
					'default' => 1, 
					'option' => 'edit_show_descriptions'
				)
			);*/
		}
	}

	/**
	 * Output for our top level screen
	 * @return void
	 */
	public function toc() {
?>
<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php _e( 'WordPress Admin Pattern Library' ); ?></h2>

	<h3><?php _e( 'Table of Contents' ); ?></h3>

	<ul class="ul-disc">
	<?php foreach( $this->screens as $slug => $args ) : ?>
		<li><a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $slug ) ); ?>"><?php echo esc_html( $args['page_title'] ); ?></a></li>
	<?php endforeach; ?>
	</ul>

	<h3><?php _e( 'Usefull links' ); ?></h3>
	<ul class="ul-disc">
		<li><a href="https://developer.wordpress.org/resource/dashicons" target="blank"><?php _e( 'Developer Resources: Dashicons' ); ?></a></li>
		<li><a href="https://codex.wordpress.org/Database_Description" target="blank"><?php _e( 'WordPress Database Description' ); ?></a></li>
	</ul>

</div><!-- .wrap -->
<?php
	}

	/**
	 * Output jQuery UI components admin page using jQuery UI's theme visual test
	 * @return void
	 */
	public function jquery_ui() {
		include_once( 'pages/jquery-ui.php' );
	}

	/**
	 * Output form component admin page
	 * @return void
	 */
	public function forms_page() {
		include_once( 'pages/forms-page.php' );
	}

	public function helper_classes() {
		include_once( 'pages/helper-classes.php' );
	}

	public function wizards() {
		include_once( 'pages/wizards.php' );
	}
}

$wp_style_guide = new WP_Style_Guide;
