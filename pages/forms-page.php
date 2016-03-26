<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Forms', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>

	<h3 class="screen-reader-text"><?php esc_html_e( 'List of Contents', WP_Style_Guide::PLUGIN_SLUG ); ?></h3>
	<ul class="subsubsub">
		<li><b><?php esc_html_e( 'Contents:', WP_Style_Guide::PLUGIN_SLUG ); ?></b> </li>
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
		<li><a href="#form"><?php esc_html_e( 'Form table', WP_Style_Guide::PLUGIN_SLUG ); ?></a></li>
	</ul>

	<form id="form">
		<table class="form-table">
			<tbody>
				<tr id="tr-text_input">
					<th>
						<label for="input-text"><?php esc_html_e( 'Text input', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<input type="text" name="input-text" placeholder="Text" /><br />
						<pre><code class="language-markup">
&lt;input type="text" name="input-text" placeholder="Text" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-select"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-text"><?php esc_html_e( 'Select element', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<select name="select">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
						<pre><code class="language-markup">
&lt;select name="select">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
&lt;/select>
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-multi_select"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="multi-select"><?php esc_html_e( 'Multiple Select', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<select name="multi-select" multiple="multiple">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
							<option>Option 6</option>
						</select>
						<pre><code class="language-markup">
&lt;select name="multi-select" multiple="multiple">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
  &lt;option>Option 4&lt;/option>
  &lt;option>Option 5&lt;/option>
  &lt;option>Option 6&lt;/option>
&lt;/select>
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-radio_buttons"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="radio-buttons"><?php esc_html_e( 'Radio Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<input type="radio" name="radio-buttons" value="option-1"/> Option 1 <br />
						<input type="radio" name="radio-buttons" value="option-2"/> Option 2 <br />
						<input type="radio" name="radio-buttons" value="option-3"/> Option 3 <br />
						<input type="radio" name="radio-buttons" value="option-4"/> Option 4 <br />
						<pre><code class="language-markup">
&lt;input type="radio" name="radio-buttons" value="option-1" /> Option 1
&lt;input type="radio" name="radio-buttons" value="option-2" /> Option 2
&lt;input type="radio" name="radio-buttons" value="option-3" /> Option 3
&lt;input type="radio" name="radio-buttons" value="option-4" /> Option 4
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-checkbox"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-checkbox"><?php esc_html_e( 'Checkbox', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<input type="checkbox" name="input-checkbox" /> Option 1<br />
						<pre><code class="language-markup">
&lt;input type="checkbox" name="input-checkbox"/> Option 1
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-checkbox_array"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="checkbox-array"><?php esc_html_e( 'Checkbox Array', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1<br />
						<input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2<br />
						<input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3<br />
						<pre><code class="language-markup">
&lt;input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1
&lt;input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2
&lt;input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-html5"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-fieldset"><?php _e( 'Fieldset and <br />HTML5 Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<fieldset>
							<legend><?php esc_html_e( 'Legend', WP_Style_Guide::PLUGIN_SLUG ); ?></legend>
							<input type="email" placeholder="<?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Email', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="search" placeholder="<?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Search', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="tel" placeholder="<?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Telephone', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="text" placeholder="<?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'Text', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
							<input type="url" placeholder="<?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?>" /> <?php esc_html_e( 'URL', WP_Style_Guide::PLUGIN_SLUG ); ?><br />
						</fieldset>
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
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-datetime"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Date Time Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<p><?= sprintf( __( 'If you creating date time inputs for form for editing <em>custom-</em>post type you can use <b>WordPress</b> function <a href="touch_time" target="blank"><code></code></a> (<b>Warning:</b> This function can be used only on <code>post.php</code> or <code>post-new.php</code> pages!):', WP_Style_Guide::PLUGIN_SLUG ), 'https://developer.wordpress.org/reference/functions/touch_time/' )?></p>
						<pre><code class="language-php">&lt;?php @touch_time(false, false, false, true);?&gt;</code></pre>
						<?php 
						@touch_time(false, false, false, true);
						?>
						<p><?php esc_html_e( 'This will create output like this:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
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
						<p><?php esc_html_e( 'Otherwise there are simple date time inputs available:', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<?php esc_html_e( 'Date:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-date" type="date" /><br />
						<?php esc_html_e( 'Month:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-month" type="month" /> <br />
						<?php esc_html_e( 'Week:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-week" type="week" /><br />
						<?php esc_html_e( 'Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-time" type="time" /><br />
						<?php esc_html_e( 'Local Date and Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-datetime-local" type="datetime-local" />
						<pre><code class="language-markup">
<?php esc_html_e( 'Date:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-date" name="input-date" type="date" />
<?php esc_html_e( 'Month:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-month" name="input-month" type="month" />
<?php esc_html_e( 'Week:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-week" name="input-week" type="week" />
<?php esc_html_e( 'Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input id="input-time" name="input-time" type="time" />
<?php esc_html_e( 'Local Date and Time:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-datetime-local" type="datetime-local" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-others"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Other Elements', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<?php esc_html_e( 'Number:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-number" type="number" min="0" max="20" /><br />
						<?php esc_html_e( 'Range:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-range" type="range" /><br />
						<?php esc_html_e( 'Color:', WP_Style_Guide::PLUGIN_SLUG ); ?> <input name="input-color" type="color" /><br />
						<pre><code class="language-markup">
<?php esc_html_e( 'Number:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-number" type="number" min="0" max="20" />
<?php esc_html_e( 'Range:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-range" type="range" />
<?php esc_html_e( 'Color:', WP_Style_Guide::PLUGIN_SLUG ); ?> &lt;input name="input-color" type="color" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-buttons"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label for="input-time"><?php esc_html_e( 'Buttons', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<input type="submit" value="<?php esc_html_e( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button" /><br /><br />
						<input type="button" value="<?php esc_html_e( 'Secondary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-secondary" /><br /><br />
						<input type="button" value="<?php esc_html_e( 'Primary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-primary" />
						<pre><code class="language-markup">
&lt;input type="submit" value="<?php esc_html_e( 'Submit Input', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button" />
&lt;input type="button" value="<?php esc_html_e( 'Secondary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-secondary" />
&lt;input type="button" value="<?php esc_html_e( 'Primary Button', WP_Style_Guide::PLUGIN_SLUG ); ?>" class="button-primary" />
						</code></pre>
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
				<tr id="tr-form_table"><td colspan="2"><br></td></tr>
				<tr>
					<th>
						<label><?php esc_html_e( 'Form table', WP_Style_Guide::PLUGIN_SLUG ); ?></label>
					</th>
					<td>
						<p><?php _e( 'Here is minor excerpt with the form table as is used in <b>WordPress</b> options pages.', WP_Style_Guide::PLUGIN_SLUG ); ?></p>
						<!-- Example: Form table -->
						<table class="form-table">
							<tbody>
								<tr>
									<th scope="row">
										<label for="test-input-02">Test</label>
									</th>
									<td>
										<fieldset>
											<p>
												<label for="test-input-02">Some large and important description for the first input.</label>
												<input type="text" name="test-input-02" id="test-input-02" class="regular-text">
											</p>
											<p class="description">Minor or less important description for the first input.</p>
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for="input-test-name">Shop name</label>
									</th>
									<td>
										<fieldset>
											<legend class="screen-reader-text">
												<span>Name of one-page shop</span>
											</legend>
											<p>
												<label title="Same as whole WordPress site" data-value="inherited">
													<input type="radio" name="input-test-name" value="inherited" checked="checked">
													Same as whole WordPress site
													<span class="description"> (Same as is inserted <a href="#">here</a>&hellip;)</span>
												</label>
											</p>
											<p>
												<label title="<?php esc_html_e( 'Custom: ', WP_Style_Guide::PLUGIN_SLUG ); ?>" data-value="custom">
													<input type="radio" name="input-test-name" value="custom">
													Custom: 
													<span class="screen-reader-text">insert name of shop</span>
													<label class="screen-reader-text" for="input-test-name_custom">Name of one-page shop</label>
													<input type="text" name="input-test-name_custom" id="input-test-name_custom" value="" class="regular-text" placeholder="Enter name for your new one-page shop&hellip;" disabled="disabled">
												</label>
											</p>
										</fieldset>
									</td>
								</tr>
								<!-- ... -->
							</tbody>
						</table>
						<!-- // Example: Form table -->
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
						<pre><code class="language-markup">
&lt;table class="form-table"&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="test-input-02"&gt;Test&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;p&gt;
						&lt;label for="test-input-02"&gt;
							Some large and important description for the first input.
						&lt;/label&gt;
						&lt;input type="text" name="test-input-02" id="test-input-02" class="regular-text"&gt;
					&lt;/p&gt;
					&lt;p class="description"&gt;
						Minor or less important description for the first input.
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th scope="row"&gt;
				&lt;label for="input-test-name"&gt;Shop name&lt;/label&gt;
			&lt;/th&gt;
			&lt;td&gt;
				&lt;fieldset&gt;
					&lt;legend class="screen-reader-text"&gt;
						&lt;span&gt;Name of one-page shop&lt;/span&gt;
					&lt;/legend&gt;
					&lt;p&gt;
						&lt;label title="Same as whole WordPress site')?&gt;" data-value="inherited"&gt;
							&lt;input type="radio" name="input-test-name" value="inherited" checked="checked"&gt;
							Same as whole WordPress site
							&lt;span class="description"&gt;
								Same as is inserted &lt;a href="#"&gt;here&lt;/a&gt;&hellip;)
							&lt;/span&gt;
						&lt;/label&gt;
					&lt;/p&gt;
					&lt;p&gt;
						&lt;label title="Custom: " data-value="custom"&gt;
							&lt;input type="radio" name="input-test-name" value="custom"&gt;
							Custom: 
							&lt;span class="screen-reader-text"&gt;
								insert name of shop
							&lt;/span&gt;
							&lt;label class="screen-reader-text" for="input-test-name_custom"&gt;
								Name of one-page shop
							&lt;/label&gt;
							&lt;input type="text" name="input-test-name_custom" id="input-test-name_custom" 
							          value="" class="regular-text" disabled="disabled" 
							          placeholder="Enter name&hellip;"&gt;
						&lt;/label&gt;
					&lt;/p&gt;
				&lt;/fieldset&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;!-- ... --&gt;
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
						<p class="description"><a href="#wpbody" class="alignright"><?php esc_html_e( 'Back to top', WP_Style_Guide::PLUGIN_SLUG ); ?></a></p>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</div><!-- .wrap -->