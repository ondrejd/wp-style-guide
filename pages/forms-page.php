<?php
if ( !function_exists( 'render_code_example_begin' ) ):
	/**
	 * Render begining of a block of source code example.
	 * @param string $id
	 * @return void
	 */
	function render_code_example_begin($id) {
		$display = ( ( bool ) WP_Style_Guide::get_option('display_source_code_examples') === true ) ? true : false;
		$style = ( $display === true ) ? '' : ' style="display: none;"';
?>
<div id="code_example-<?= $id ?>" class="code-example">
	<pre <?= $style ?>><code class="language-markup">
<?php
	}
endif;

if ( !function_exists( 'render_code_example_end' ) ):
	/**
	 * Render end of a block of source code example.
	 * @param string $id
	 * @return void
	 */
	function render_code_example_end( $id ) {
		$display = ( ( bool ) WP_Style_Guide::get_option('display_source_code_examples') === true ) ? true : false;
?>
	</code></pre>
	<ul class="subsubsub" style="float: none; margin: 0px;">
		<li>
			<?php if ( $display === true ):?>
			<a href="#tr-<?= $id ?>" class="code-example-link" data-example_id="code_example-<?= $id ?>" data-visibility="visible">
				<?php esc_html_e( 'Hide code example', WP_Style_Guide::PLUGIN_SLUG ); ?>
			</a>
			<?php else:?>
			<a href="#tr-<?= $id ?>" class="code-example-link" data-example_id="code_example-<?= $id ?>" data-visibility="collapsed">
				<?php esc_html_e( 'Show code example', WP_Style_Guide::PLUGIN_SLUG ); ?>
			</a>
			<?php endif; ?>
		</li>
	</ul>
</div>
<?php
	}
endif;


?><div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Forms', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>

	<h3 class="screen-reader-text"><?php esc_html_e( 'List of Contents', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>
	<ul class="subsubsub">
		<li><b><?php esc_html_e( 'Contents:', WP_Style_Guide::PLUGIN_SLUG ); ?></b> </li>
		<li><a href="#tr-helper_functions"><?php esc_html_e( 'Helper functions', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-text_input"><?php esc_html_e( 'Text input', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-select"><?php esc_html_e( 'Select element', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-multi_select"><?php esc_html_e( 'Multiple Select', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-radio_buttons"><?php esc_html_e( 'Radio Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-checkbox"><?php esc_html_e( 'Checkbox', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-checkbox_array"><?php esc_html_e( 'Checkbox Array', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-html5"><?php esc_html_e( 'Fieldset and HTML5 Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-datetime"><?php esc_html_e( 'Date Time Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-others"><?php esc_html_e( 'Other Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-buttons"><?php esc_html_e( 'Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></a> | </li>
		<li><a href="#tr-form_table"><?php esc_html_e( 'Form table', WP_Style_Guide::PLUGIN_SLUG ); ?></a></li>
	</ul>

	<form id="form" style="clear: both; padding-top: 20px;">
		<table class="form-table">
			<tbody>
				<tr id="tr-helper_functions">
					<th>
						<label for="input-text"><?php esc_html_e( 'Helper functions', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<p><?php _e( '<b>WordPress</b> contains three helper functions for rendering <code>disabled</code>, <code>checked</code> or <code>selected</code> attributes: '); ?></p>
						<pre><code class="language-php">checked( $checked, $current = TRUE, $echo = TRUE );
 selected( $selected, $current = TRUE, $echo = TRUE );
 disabled( $disabled, $current = TRUE, $echo = TRUE );</code></pre>
						<p><?php _e( ' So instead of writing something like this:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<pre><code class="language-php">&lt;input type="checkbox" &lt;?php echo ( /* condition */ ) ? ' checked="checked"' : ''; ?&gt;&gt;</code></pre>
						<p><?php _e( ' You can do just this:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<pre><code class="language-php">&lt;input type="checkbox" &lt;?php checked( /* condition */ ); ?&gt;&gt;</code></pre>
					</td>
				</tr>
				<tr id="tr-text_input"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-text"><?php esc_html_e( 'Text input', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<input type="text" name="input-text" placeholder="<?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?>" />
						<?php render_code_example_begin( 'text_input' ); ?>
						
&lt;input type="text" name="input-text" placeholder="<?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?>" />
						</code></pre>
						<?php render_code_example_end( 'text_input' ); ?>
					</td>
				</tr>
				<tr id="tr-select"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-text"><?php esc_html_e( 'Select element', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<select name="select">
							<option><?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
						</select>
						<?php render_code_example_begin( 'select' ); ?>
						<pre><code class="language-markup">
&lt;select name="select">
  &lt;option><?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
&lt;/select>
						</code></pre>
						<?php render_code_example_end( 'select' ); ?>
					</td>
				</tr>
				<tr id="tr-multi_select"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="multi-select"><?php esc_html_e( 'Multiple Select', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<select name="multi-select" multiple="multiple">
							<option><?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 4', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 5', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
							<option><?php esc_html_e( 'Option 6', WP_Style_Guide::PLUGIN_SLUG ); ?></option>
						</select>
						<?php render_code_example_begin( 'multi_select' ); ?>
						<pre><code class="language-markup">
&lt;select name="multi-select" multiple="multiple">
  &lt;option><?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 4', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 5', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
  &lt;option><?php esc_html_e( 'Option 6', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/option>
&lt;/select>
						</code></pre>
						<?php render_code_example_end( 'multi_select' ); ?>
					</td>
				</tr>
				<tr id="tr-radio_buttons"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="radio-buttons"><?php esc_html_e( 'Radio Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<input type="radio" name="radio-buttons" value="option-1"/> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?> <br />
						<input type="radio" name="radio-buttons" value="option-2"/> <?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?> <br />
						<input type="radio" name="radio-buttons" value="option-3"/> <?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?> <br />
						<input type="radio" name="radio-buttons" value="option-4"/> <?php esc_html_e( 'Option 4', WP_Style_Guide::PLUGIN_SLUG ); ?>
						<?php render_code_example_begin( 'radio_buttons' ); ?>
						<pre><code class="language-markup">
&lt;input type="radio" name="radio-buttons" value="option-1" /> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;input type="radio" name="radio-buttons" value="option-2" /> <?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;input type="radio" name="radio-buttons" value="option-3" /> <?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;input type="radio" name="radio-buttons" value="option-4" /> <?php esc_html_e( 'Option 4', WP_Style_Guide::PLUGIN_SLUG ); ?> 
						</code></pre>
						<?php render_code_example_end( 'radio_buttons' ); ?>
					</td>
				</tr>
				<tr id="tr-checkbox"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-checkbox"><?php esc_html_e( 'Checkbox', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<input type="checkbox" name="input-checkbox" /> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?>
						<?php render_code_example_begin( 'checkbox' ); ?>
						<pre><code class="language-markup">
&lt;input type="checkbox" name="input-checkbox"/> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?> 
						</code></pre>
						<?php render_code_example_end( 'checkbox' ); ?>
					</td>
				</tr>
				<tr id="tr-checkbox_array"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="checkbox-array"><?php esc_html_e( 'Checkbox Array', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<input type='checkbox' name='checkbox-array[]' value='option-1'> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
						<input type='checkbox' name='checkbox-array[]' value='option-2'> <?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
						<input type='checkbox' name='checkbox-array[]' value='option-3'> <?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?>
						<?php render_code_example_begin( 'checkbox_array' ); ?>
						<pre><code class="language-markup">
&lt;input type='checkbox' name='checkbox-array[]' value='option-1'> <?php esc_html_e( 'Option 1', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;input type='checkbox' name='checkbox-array[]' value='option-2'> <?php esc_html_e( 'Option 2', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;input type='checkbox' name='checkbox-array[]' value='option-3'> <?php esc_html_e( 'Option 3', WP_Style_Guide::PLUGIN_SLUG ); ?> 
						</code></pre>
						<?php render_code_example_end( 'checkbox_array' ); ?>
					</td>
				</tr>
				<tr id="tr-html5"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-fieldset"><?php _e( 'Fieldset and <br />HTML5 Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<fieldset>
							<legend><?php esc_html_e( 'Legend', WP_Style_Guide::PLUGIN_SLUG ); ?></legend>
							<input type="email" placeholder="<?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="search" placeholder="<?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="tel" placeholder="<?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="text" placeholder="<?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="url" placeholder="<?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
						</fieldset>
						<?php render_code_example_begin( 'html5' ); ?>
						<pre><code class="language-markup">
&lt;fieldset>
  &lt;legend>Legend&lt;/legend>
  &lt;input type="email" placeholder="<?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?> 
  &lt;input type="search" placeholder="<?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?> 
  &lt;input type="tel" placeholder="<?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?> 
  &lt;input type="text" placeholder="<?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?> 
  &lt;input type="url" placeholder="<?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?> 
&lt;/fieldset>
						</code></pre>
						<?php render_code_example_end( 'html5' ); ?>
					</td>
				</tr>
				<tr id="tr-datetime"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Date Time Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<p><?= sprintf( __( 'If you creating date time inputs for form for editing <em>custom-</em>post type you can use <b>WordPress</b> function <a href="touch_time" target="blank"><code></code></a> (<b>Warning:</b> This function can be used only on <code>post.php</code> or <code>post-new.php</code> pages!):', WP_Style_Guide::PLUGIN_SLUG ), 'https://developer.wordpress.org/reference/functions/touch_time/' )?></p>
						<pre><code class="language-php">&lt;?php @touch_time(false, false, false, true);?&gt;</code></pre>
						<?php 
						@touch_time(false, false, false, true);
						?>
						<p><?php esc_html_e( 'This will create output like this:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<?php render_code_example_begin( 'datetime2' ); ?>
						<pre><code class="language-markup">
&lt;div class="timestamp-wrap"&gt;
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Date&lt;/span&gt;
		&lt;input name="jj" value="27" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;.
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Month&lt;/span&gt;
		&lt;select name="mm"&gt;
			&lt;option value="01" data-text="Jan"&gt;01 - Jan&lt;/option&gt;
			&lt;option value="02" data-text="Feb" selected="selected"&gt;02 - Feb&lt;/option&gt;
			&lt;option value="03" data-text="Mar"&gt;03 - Mar&lt;/option&gt;
			&lt;option value="04" data-text="Apr"&gt;04 - Apr&lt;/option&gt;
			&lt;option value="05" data-text="May"&gt;05 - May&lt;/option&gt;
			&lt;option value="06" data-text="Jun"&gt;06 - Jun&lt;/option&gt;
			&lt;option value="07" data-text="Jul"&gt;07 - Jul&lt;/option&gt;
			&lt;option value="08" data-text="Aug"&gt;08 - Aug&lt;/option&gt;
			&lt;option value="09" data-text="Sep"&gt;09 - Sep&lt;/option&gt;
			&lt;option value="10" data-text="Oct"&gt;10 - Oct&lt;/option&gt;
			&lt;option value="11" data-text="Nov"&gt;11 - Nov&lt;/option&gt;
			&lt;option value="12" data-text="Dec"&gt;12 - Dec&lt;/option&gt;
		&lt;/select&gt;
	&lt;/label&gt; 
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Year&lt;/span&gt;
		&lt;input name="aa" value="2016" size="4" maxlength="4" autocomplete="off" type="text"&gt;
	&lt;/label&gt; @ 
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Hours&lt;/span&gt;
		&lt;input name="hh" value="15" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;:
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Mins&lt;/span&gt;
		&lt;input name="mn" value="23" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;
&lt;/div&gt;
						</code></pre>
						<?php render_code_example_end( 'datetime2' ); ?>
						<p><?php esc_html_e( 'Otherwise there are simple date time inputs available:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<?php esc_html_e( 'Date:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-date" type="date" /><br />
						<?php esc_html_e( 'Month:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-month" type="month" /> <br />
						<?php esc_html_e( 'Week:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-week" type="week" /><br />
						<?php esc_html_e( 'Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-time" type="time" /><br />
						<?php esc_html_e( 'Local Date and Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-datetime-local" type="datetime-local" />
						<?php render_code_example_begin( 'datetime3' ); ?>
						<pre><code class="language-markup">
<?php esc_html_e( 'Date:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-date" name="input-date" type="date" />
<?php esc_html_e( 'Month:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-month" name="input-month" type="month" />
<?php esc_html_e( 'Week:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-week" name="input-week" type="week" />
<?php esc_html_e( 'Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-time" name="input-time" type="time" />
<?php esc_html_e( 'Local Date and Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-datetime-local" type="datetime-local" />
						</code></pre>
						<?php render_code_example_end( 'datetime3' ); ?>
					</td>
				</tr>
				<tr id="tr-others"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Other Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<?php esc_html_e( 'Number:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-number" type="number" min="0" max="20" /><br />
						<?php esc_html_e( 'Range:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-range" type="range" /><br />
						<?php esc_html_e( 'Color:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-color" type="color" />
						<?php render_code_example_begin( 'others' ); ?>
						<pre><code class="language-markup">
<?php esc_html_e( 'Number:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-number" type="number" min="0" max="20" />
<?php esc_html_e( 'Range:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-range" type="range" />
<?php esc_html_e( 'Color:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-color" type="color" />
						</code></pre>
						<?php render_code_example_end( 'others' ); ?>
					</td>
				</tr>
				<tr id="tr-buttons"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<?php /* TODO Find URL to WordPress function reference */?>
						<p><?php _e( '<b>WordPress</b> contains helper function for rendering submit buttons <code><a href="#" target="blank">submit_button</a>( $text = null, $type = \'primary\', $name = \'submit\', $wrap = true, $other_attributes = null )</code>:'); ?></p>
						<pre><code class="language-php">submit_button( '<?php esc_html_e( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG );?>', 'primary', 'my-submit' );</code></pre>
						<?php submit_button( esc_html( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG ), 'primary', 'my-submit' );?>
						<p><?php _e( 'But you can also use plain HTML:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<pre><code class="language-markup">
&lt;input type="submit" value="<?php esc_html_e( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button" />
&lt;input type="button" value="<?php esc_html_e( 'Secondary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-secondary" />
&lt;input type="button" value="<?php esc_html_e( 'Primary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-primary" />
						</code></pre>
						<input type="submit" value="<?php esc_html_e( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button" /><br /><br />
						<input type="button" value="<?php esc_html_e( 'Secondary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-secondary" /><br /><br />
						<input type="button" value="<?php esc_html_e( 'Primary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-primary" />
					</td>
				</tr>
				<tr id="tr-form_table"><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
				<tr>
					<th>
						<label><?php esc_html_e( 'Form table', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td class="wp-pattern-example">
						<p><?php _e( 'Here is minor excerpt with the form table as is used in <b>WordPress</b> options pages.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<!-- Example: Form table -->
						<table class="form-table">
							<tbody>
								<tr>
									<th scope="row">
										<label for="input-test-name"><?php esc_html_e( 'Shop name', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
									</th>
									<td>
										<fieldset>
											<legend class="screen-reader-text">
												<span><?php esc_html_e( 'Name of one-page shop', WP_Style_Guide::PLUGIN_SLUG ); ?></span>
											</legend>
											<p>
												<label title="<?php esc_html_e( 'Same as whole WordPress site', WP_Style_Guide::PLUGIN_SLUG ); ?>" data-value="inherited">
													<input type="radio" name="input-test-name" value="inherited" checked="checked">
													<?php esc_html_e( 'Same as whole WordPress site', WP_Style_Guide::PLUGIN_SLUG ); ?>
													<span class="description"><?php esc_html_e( ' (Same as is inserted <a href="#">here</a>&hellip;)', WP_Style_Guide::PLUGIN_SLUG ); ?></span>
												</label>
											</p>
											<p>
												<label title="<?php esc_html_e( 'Custom: ', WP_Style_Guide::PLUGIN_SLUG ); ?>" data-value="custom">
													<input type="radio" name="input-test-name" value="custom">
													<?php esc_html_e( 'Custom: ', WP_Style_Guide::PLUGIN_SLUG ); ?>
													<span class="screen-reader-text"><?php esc_html_e( 'insert name of shop', WP_Style_Guide::PLUGIN_SLUG ); ?></span>
													<label class="screen-reader-text" for="input-test-name_custom"><?php esc_html_e( 'Name of one-page shop', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
													<input type="text" name="input-test-name_custom" id="input-test-name_custom" value="" class="regular-text" placeholder="<?php esc_html_e( 'Enter name for your new one-page shop&hellip;', WP_Style_Guide::PLUGIN_SLUG ); ?>" disabled="disabled">
												</label>
											</p>
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="test-input-02"><?php esc_html_e( 'Description', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
									</th>
									<td>
										<fieldset>
											<p>
												<label for="test-input-02"><?php esc_html_e( 'Shop\'s description should be simple and easily to remember.', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
												<input type="text" name="test-input-02" id="test-input-02" class="regular-text">
											</p>
											<p class="description"><?php esc_html_e( 'Enter text with at the most 255 characters.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
										</fieldset>
									</td>
								</tr>
							</tbody>
						</table>
    					<script type="text/javascript">
jQuery(document).on("ready", function () {
	jQuery("input[name='input-test-name']").parent().on(
		"click", 
		function() {
			if (jQuery(this).data('value') == "custom") {
				jQuery("#input-test-name_custom")
					.prop("disabled", false)
					.removeProp("disabled").focus();
			} else {
				jQuery("#input-test-name_custom")
					.prop("disabled", true);
			}
		}
	);
});
						</script>
						<!-- // Example: Form table -->
						<?php render_code_example_begin( 'form_table' ); ?>
						<pre><code class="language-markup">
&lt;table class="form-table"&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="input-test-name"&gt;<?php esc_html_e( 'Shop name', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;legend class="screen-reader-text"&gt;
						&lt;span&gt;<?php esc_html_e( 'Name of one-page shop', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/span&gt;
					&lt;/legend&gt;
					&lt;p&gt;
						&lt;label title="<?php esc_html_e( 'Same as whole WordPress site', WP_Style_Guide::PLUGIN_SLUG ); ?>" data-value="inherited"&gt;
							&lt;input type="radio" name="input-test-name" value="inherited" checked="checked"&gt;
							<?php esc_html_e( 'Same as whole WordPress site', WP_Style_Guide::PLUGIN_SLUG ); ?> 
							&lt;span class="description"&gt;
								<?php esc_html_e( ' (Same as is inserted <a href="#">here</a>&hellip;)', WP_Style_Guide::PLUGIN_SLUG ); ?> 
							&lt;/span&gt;
						&lt;/label&gt;
					&lt;/p&gt;
					&lt;p&gt;
						&lt;label title="Custom: " data-value="custom"&gt;
							&lt;input type="radio" name="input-test-name" value="custom"&gt;
							<?php esc_html_e( 'Custom: ', WP_Style_Guide::PLUGIN_SLUG ); ?> 
							&lt;span class="screen-reader-text"&gt;
								<?php esc_html_e( 'insert name of shop', WP_Style_Guide::PLUGIN_SLUG ); ?> 
							&lt;/span&gt;
							&lt;label class="screen-reader-text" for="input-test-name_custom"&gt;
								<?php esc_html_e( 'Name of one-page shop', WP_Style_Guide::PLUGIN_SLUG ); ?> 
							&lt;/label&gt;
							&lt;input type="text" name="input-test-name_custom" id="input-test-name_custom" 
							          value="" class="regular-text" disabled="disabled" 
							          placeholder="<?php esc_html_e( 'Enter name for your new one-page shop&hellip;', WP_Style_Guide::PLUGIN_SLUG ); ?>"&gt;
						&lt;/label&gt;
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="test-input-02"&gt;<?php esc_html_e( 'Description', WP_Style_Guide::PLUGIN_SLUG ); ?>&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;p&gt;
						&lt;label for="test-input-02"&gt;
							<?php esc_html_e( 'Shop\'s description should be simple and easily to remember.', WP_Style_Guide::PLUGIN_SLUG ); ?> 
						&lt;/label&gt;
						&lt;input type="text" name="test-input-02" id="test-input-02" class="regular-text"&gt;
					&lt;/p&gt;
					&lt;p class="description"&gt;
						<?php esc_html_e( 'Enter text with at the most 255 characters.', WP_Style_Guide::PLUGIN_SLUG ); ?> 
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;script type="text/javascript"&gt;
jQuery(document).on('ready', function () {
	jQuery('input[name="input-test-name"]').parent().on(
		'click', 
		function() {
			if (jQuery(this).data('value') == 'custom') {
				jQuery('#input-test-name_custom').prop('disabled', false).removeProp('disabled').focus();
			} else {
				jQuery('#input-test-name_custom').prop('disabled", true);
			}
		}
	);
});
&lt;/script&gt;
						</code></pre>
						<?php render_code_example_end( 'form_table' ); ?>
					</td>
				</tr>
				<tr><td colspan="2"><p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p></td></tr>
			</tbody>
		</table>
	</form>

</div><!-- .wrap -->