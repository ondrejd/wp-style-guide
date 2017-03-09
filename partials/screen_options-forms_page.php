<div id="screen-options-wrap" class="hidden" aria-label="<?php esc_html_e( 'Screen Options Tab', WP_Style_Guide::PLUGIN_SLUG ); ?>">
	<form name="forms_screen_options-form" method="post">
		<?php echo wp_nonce_field( -1, WP_Style_Guide::PLUGIN_SLUG . '-nonce', true, false); ?>
		<input type="hidden" name="screen_name" value="<?php echo $screen->id; ?>" />
		<fieldset>
			<legend><?php esc_html_e( 'Source code examples', WP_Style_Guide::PLUGIN_SLUG ); ?></legend>
			<label for="<?php echo WP_Style_Guide::PLUGIN_SLUG; ?>-display_source_code_examples" title="<?php esc_html_e( 'Show source code examples by default.', WP_Style_Guide::PLUGIN_SLUG ); ?>">
				<input type="checkbox" name="display_source_code_examples" id="<?php echo WP_Style_Guide::PLUGIN_SLUG; ?>-display_source_code_examples" <?php echo checked( $display_examples ); ?>/>
				<?php esc_html_e( 'Check if you want source code examples be visible by default.', WP_Style_Guide::PLUGIN_SLUG ); ?>
			</label>
		</fieldset>
		<p class="submit">
			<input type="submit" name="<?= WP_Style_Guide::PLUGIN_SLUG ?>-submit_forms_screen_options" value="<?php esc_html_e( 'Apply', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button button-primary" />
		</p>
	</form>
</div>