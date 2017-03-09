<div id="screen-options-wrap" class="hidden" aria-label="<?php esc_html_e( 'Screen Options Tab', WP_Style_Guide::PLUGIN_SLUG ); ?>">
	<form name="tables_screen_options-form" method="post">
		<?php echo wp_nonce_field( -1, WP_Style_Guide::PLUGIN_SLUG . '-nonce', true, false); ?>
		<input type="hidden" name="screen_name" value="<?php echo $screen->id; ?>" />
		<fieldset>
			<legend><?php esc_html_e( 'Display detail description', WP_Style_Guide::PLUGIN_SLUG ); ?></legend>
			<label for="<?php echo WP_Style_Guide::PLUGIN_SLUG; ?>-display_detail_description" title="<?php esc_html_e( 'Show detail description by default.', WP_Style_Guide::PLUGIN_SLUG ); ?>">
				<input type="checkbox" name="display_detail_description" id="<?php echo WP_Style_Guide::PLUGIN_SLUG; ?>-display_detail_description" <?php echo checked( $display_description ); ?>/>
				<?php esc_html_e( 'Check if you want detail description for each part of wizard be visible by default.', WP_Style_Guide::PLUGIN_SLUG ); ?>
			</label>
		</fieldset>
		<p class="submit">
			<input type="submit" name="<?= WP_Style_Guide::PLUGIN_SLUG ?>-submit_tables_screen_options" value="<?php esc_html_e( 'Apply', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button button-primary" />
		</p>
	</form>
</div>