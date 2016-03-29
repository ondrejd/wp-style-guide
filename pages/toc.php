<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php _e( 'WordPress Admin Pattern Library', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>

	<h3><?php _e( 'Table of Contents', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>

	<ul class="ul-disc">
	<?php foreach( $screens as $slug => $args ) : ?>
		<li><a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $slug ) ); ?>"><?php esc_html_e( $args['page_title'] ); ?></a></li>
	<?php endforeach; ?>
	</ul>

	<h3><?php _e( 'Usefull links', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>
	<ul class="ul-disc">
		<li><a href="https://developer.wordpress.org/resource/dashicons" target="blank"><?php esc_html_e( 'Developer Resources: Dashicons', WP_Style_Guide::PLUGIN_SLUG ); ?></a></li>
		<li><a href="https://codex.wordpress.org/Database_Description" target="blank"><?php esc_html_e( 'WordPress Database Description', WP_Style_Guide::PLUGIN_SLUG ); ?></a></li>
		<li><a href="https://developer.wordpress.org/plugins/the-basics/best-practices/" target="blank"><?php esc_html_e( 'Plugin Handbook', WP_Style_Guide::PLUGIN_SLUG ); ?>
	</ul>

</div>