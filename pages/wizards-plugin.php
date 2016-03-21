<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'Wizards - Plugin Wizard' ); ?></h1>

	<form id="plugin-wizard">
		<!-- <h3>Main options</h3> -->

		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="plugin-name"><?= __( 'Name' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-name" id="plugin-name" class="regular-text" placeholder="<?= __( 'Enter name of your plugin' )?>">
							</p>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="plugin-identifier"><?= __( 'Identifier' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-identifier" id="plugin-identifier" class="regular-text" placeholder="<?= __( 'Enter identifier of your plugin' )?>">
							</p>
							<p class="description"><?= ( '<b>Identifier</b> could be derrived from plugin\'s name and can NOT contains spaces, tabs and other control or special characters.' )?></p>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="plugin-description"><?= __( 'Description' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<textarea name="plugin-description" id="plugin-description" class="long-text" placeholder="<?= __( 'Enter description of your plugin' )?>" cols="72" rows="5"></textarea>
							</p>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="plugin-version"><?= __( 'Version' )?></label>
					</th>
					<td>
						<fieldset>
							<p>
								<input type="text" name="plugin-version" id="plugin-version" placeholder="<?= __( 'Enter version of your plugin' )?>">
							</p>
							<p class="description"><?= ( 'For example: <b>1.0</b>, <b>0.1.0</b>, <b>1.2.1</b>.' )?></p>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="plugin-has_dependency"><?= __( 'Options' )?></label>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text"><?= __( 'Other plugin options' )?></legend>
							<p>
								<label for="plugin-has_dependency">
									<input type="checkbox" id="plugin-has_dependency" name="plugin-has_dependency">
									<span><?= __('Plugin has dependency to other plugin(s)')?></span>
								</label>
							</p>
							<p>
								<label for="plugin-has_administration">
									<input type="checkbox" id="plugin-has_administration" name="plugin-has_administration">
									<span><?= __('Plugin contains administration')?></span>
								</label>
							</p>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>