<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'Other Admin Widgets', WP_Style_Guide::PLUGIN_SLUG ); ?></h1>

	<h3 class="screen-reader-text"><?php esc_html_e( 'List of Contents', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>
	<ul class="subsubsub">
		<li><b><?php esc_html_e( 'Contents:', WP_Style_Guide::PLUGIN_SLUG ); ?></b> </li>
		<li><a href="#br-admin_notices"><?php esc_html_e( 'Admin Notices', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#br-bubble_icon"><?php esc_html_e( 'Bubble Icon', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#br-admin_colors"><?php esc_html_e( 'Admin Colors', WP_Style_Guide::PLUGIN_SLUG ); ?></a></li>
	</ul>

	<!-- Admin notices -->
	<br id="br-admin_notices" class="clear" />
	<h2><?php esc_html_e( 'Admin notices', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<div class="wp-pattern-example">
		<p><?php _e( 'When you want to show result of any operation to the user the <b>admin notices</b> are what you looking for. These notifications are allways shown at the top of a page just beneath the main title. Needed markup is simple:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>

		<pre><code class="language-markup">&lt;div class="notice notice-error"&gt;&lt;p&gt;<?php esc_attr_e( 'Error notice', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/p&gt;&lt;/div&gt;
 &lt;div class="notice notice-warning"&gt;&lt;p&gt;<?php esc_attr_e( 'Warning notice', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/p&gt;&lt;/div&gt;
 &lt;div class="notice notice-success"&gt;&lt;p&gt;<?php esc_attr_e( 'Success notice', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/p&gt;&lt;/div&gt;
 &lt;div class="notice notice-info"&gt;&lt;p&gt;<?php esc_attr_e( 'Informational notice', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/p&gt;&lt;/div&gt;</code></pre>

		<p><?php esc_html_e( 'And result looks just fine:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>

		<img src="<?php echo plugins_url( '../images/admin_notices.png', __FILE__ ); ?>" alt="<?php esc_attr_e( 'Example notices', WP_Style_Guide::PLUGIN_SLUG ); ?>"/>
	</div>
	<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>

	<!-- Bubble Icon -->
	<br id="br-bubble_icon" class="clear" />
	<h2><?php esc_html_e( 'Bubble Icon', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<div class="wp-pattern-example">
		<p><?php sprintf( __( 'Sometimes you want to show count of items for an admin menu item (doesn\'t matter if it is your menuitem or <i>WP</i> original). It\'s pretty simple you just need to add hook for action <code>%s</code> and update any menu item you want: ', WP_Style_Guide::PLUGIN_SLUG ), 'add_user_menu_bubble' ); ?></p>
		<pre><code class="language-php">/**
&nbsp; * @global array $menu
&nbsp; * @return void;
&nbsp; */
function add_user_menu_bubble() {
	global $menu;

	foreach ( $menu as $key => $value ) {
		if ( $menu[$key][2] == 'users.php' ) {
			$menu[$key][0] .= sprintf( ' <span class="update-plugins count-%s"><span class="plugin-count">%s</span></span>', 10, 10);
			return;
		}
	}
}
add_action( 'admin_menu', 'add_user_menu_bubble' );
		</code></pre>
		<p><?php esc_html_e( 'If you try previous example you will got something like this:', self::PLUGIN_SLUG ); ?></p>
		<img src="<?php echo plugins_url( '../images/bubble_count.png', __FILE__ ); ?>" alt="<?php esc_attr_e( 'Example bubble icon', WP_Style_Guide::PLUGIN_SLUG ); ?>"/>
	</div>
	<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>

	<!-- Admin Colors -->
	<br id="br-admin_colors" />
	<h2><?php esc_html_e( 'Admin Colors', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<div class="wp-pattern-example">
		<p><?php _e( 'Here are listed color schemas provided by <b>WordPress</b> administration:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
		<table class="form-table admin-colors-table">
			<thead>
				<tr>
					<th class="name-col"><?php esc_html_e( 'Schema name', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
					<th colspan="2"><?php esc_html_e( 'Colors', WP_Style_Guide::PLUGIN_SLUG ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php 
					global $_wp_admin_css_colors;
					$i = 0;
					foreach ( $_wp_admin_css_colors as $color_schema_id => $color_schema ):
						$tr_class =  ( $i % 2 ) ? ' class="alternate"' : '';
				?>
				<tr<?php echo $tr_class; ?>>
					<th rowspan="2" scope="row">
						<span><?php esc_html_e( $color_schema->name ); ?></span>
						<?php if ( get_user_option( 'admin_color' ) == $color_schema_id ):?>
							<br /><small><i>(Currently used)</i></small>
						<?php endif; ?>
					</th>
					<td class="subname-col"><?php esc_html_e( 'Base Colors: ', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
					<td>
						<?php foreach ( $color_schema->colors as $color_id => $color_code ): ?>
						<span title="<?php esc_attr_e( $color_code ); ?>" class="color_example" style="background-color: <?php esc_attr_e( $color_code ); ?>; border: 1px solid <?php esc_attr_e( $color_code ); ?>"></span>
						<?php endforeach;?>
					</td>
				</tr>
				<tr<?php echo $tr_class; ?>>
					<td class="subname-col"><?php esc_html_e( 'Icon Colors: ', WP_Style_Guide::PLUGIN_SLUG ); ?></td>
					<td>
						<?php foreach ( $color_schema->icon_colors as $icon_color_id => $icon_color_code ): ?>
						<span title="<?php esc_attr_e( $icon_color_id . ': ' .$icon_color_code ); ?>" class="color_example color_example-icon" style="background-color: <?php esc_attr_e( $icon_color_code ); ?>; border: 1px solid <?php esc_attr_e( $icon_color_code ); ?>"></span>
						<?php endforeach;?>
					</td>
				</tr>
				<?php $i++; endforeach; ?>
			</tbody>
		</table>
	</div>
	<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>

</div><!-- .wrap -->