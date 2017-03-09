<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?= __( 'Wizards - WordPress Widget', WP_Style_Guide::PLUGIN_SLUG )?></h1>

	<p class="description">
		<?php sprintf( __( 'Generate new <a href="%s" target="blank">widgets</a> (using <a href="%s" target="blank">Widget API</a>).', WP_Style_Guide::PLUGIN_SLUG ), 'https://codex.wordpress.org/WordPress_Widgets', 'https://codex.wordpress.org/Widgets_API' ); ?>
	</p>

	<form id="wizard-dashboard_widget">
		<table class="form-table">
			<tbody>
				<!-- Name -->
				<tr>
					<th scope="row">
						<label for="widget-classname"><?= __( 'Class name', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-classname" id="plugin-classname" class="regular-text" placeholder="<?= __( 'My_Widget', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
							<p class="description"><?php printf( __( 'Name of class which will extends <a href="%s" target="blank"><code>WP_Widget</code></a>', WP_Style_Guide::PLUGIN_SLUG ), 'https://developer.wordpress.org/reference/classes/wp_widget/' ); ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Identifier -->
				<tr>
					<th scope="row">
						<label for="plugin-identifier"><?= __( 'Identifier', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-identifier" id="plugin-identifier" class="regular-text" placeholder="<?= __( 'Enter identifier of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>">
							</p>
							<p class="description"><?= __( '<b>Identifier</b> could be derrived from plugin\'s name and can NOT contains spaces, tabs and other control or special characters.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
				<!-- Description -->
				<tr>
					<th scope="row">
						<label for="plugin-description"><?= __( 'Description', WP_Style_Guide::PLUGIN_SLUG ) ?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<label for="plugin-description"><?= __( 'Short description:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-description" id="plugin-description" class="long-text" placeholder="<?= __( 'Enter short description of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="5"></textarea>
							</p>
							<p>
								<label for="plugin-description_full"><?= __( 'Full description:', WP_Style_Guide::PLUGIN_SLUG ) ?></label><br>
								<textarea name="plugin-description_full" id="plugin-description_full" class="long-text" placeholder="<?= __( 'Enter full description of your plugin', WP_Style_Guide::PLUGIN_SLUG ) ?>" cols="72" rows="10"></textarea>
							</p>
							<p class="description"><?= __( 'Both descriptions are used in <code>readme.txt</code> file.', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
						</fieldset>
					</td>
				</tr>
		</table>
		<input type="submit" name="submit-dashboard_widget" value="<?= __( 'Generate code', WP_Style_Guide::PLUGIN_SLUG )?>" class="button-primary">
	</form>
</div>