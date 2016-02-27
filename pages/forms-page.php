<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Forms' ); ?></h2>

	<form>
		<table class="form-table">
			<tbody>
				<tr>
					<th>
						<label for="input-text">Text input</label>
					</th>
					<td>
						<input type="text" name="input-text" placeholder="Text" /><br />
						<pre>
&lt;input type="text" name="input-text" placeholder="Text" />
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-text">Select</label>
					</th>
					<td>
						<select name="select">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
						<pre>
&lt;select name="select">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
&lt;/select>
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="multi-select">Multiple Select</label>
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
						<pre>
&lt;select name="multi-select" multiple="multiple">
  &lt;option>Option 1&lt;/option>
  &lt;option>Option 2&lt;/option>
  &lt;option>Option 3&lt;/option>
  &lt;option>Option 4&lt;/option>
  &lt;option>Option 5&lt;/option>
  &lt;option>Option 6&lt;/option>
&lt;/select>
				</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="radio-buttons">Radio Buttons</label>
					</th>
					<td>
						<input type="radio" name="radio-buttons" value="option-1"/> Option 1 <br />
						<input type="radio" name="radio-buttons" value="option-2"/> Option 2 <br />
						<input type="radio" name="radio-buttons" value="option-3"/> Option 3 <br />
						<input type="radio" name="radio-buttons" value="option-4"/> Option 4 <br />
						<pre>
&lt;input type="radio" name="radio-buttons" value="option-1" /> Option 1
&lt;input type="radio" name="radio-buttons" value="option-2" /> Option 2
&lt;input type="radio" name="radio-buttons" value="option-3" /> Option 3
&lt;input type="radio" name="radio-buttons" value="option-4" /> Option 4
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-checkbox">Checkbox</label>
					</th>
					<td>
						<input type="checkbox" name="input-checkbox" /> Option 1<br />
						<pre>
&lt;input type="checkbox" name="input-checkbox"/> Option 1
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="checkbox-array">Checkbox Array</label>
					</th>
					<td>
						<input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1<br />
						<input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2<br />
						<input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3<br />
						<pre>
&lt;input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1
&lt;input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2
&lt;input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-fieldset">Fieldset and <br />HTML5 Elements</label>
					</th>
					<td>
						<fieldset>
							<legend>Legend</legend>
							<input type="email" placeholder="Email" /> Email<br />
							<input type="search" placeholder="Search" /> Search<br />
							<input type="tel" placeholder="Telephone" /> Telephone<br />
							<input type="text" placeholder="Text" /> Text<br />
							<input type="url" placeholder="URL" /> URL<br />
						</fieldset>
						<pre>
&lt;fieldset>
  &lt;legend>Legend&lt;/legend>
  &lt;input type="email" placeholder="Email" /> Email
  &lt;input type="search" placeholder="Search" /> Search
  &lt;input type="tel" placeholder="Telephone" /> Telephone
  &lt;input type="text" placeholder="text" /> Text
  &lt;input type="url" placeholder="URL" /> URL
&lt;/fieldset>
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-time">Date Time Elements</label>
					</th>
					<td>
						<p>If you creating date time inputs for form for editing <em>custom-</em>post type you can use <strong>WordPress</strong> function <a href="https://developer.wordpress.org/reference/functions/touch_time/" target="blank"><code>touch_time</code></a> (<strong>Warning:</strong> This function can be used only on <code>post.php</code> or <code>post-new.php</code> pages!):</p>
						<pre>&lt;?php @touch_time(false, false, false, true);?&gt;</pre>
						<?php 
						@touch_time(false, false, false, true);
						?>
						<p>This will create output like this:</p>
						<pre>
&lt;div class="timestamp-wrap"&gt;
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Den&lt;/span&gt;
		&lt;input name="jj" value="27" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;.
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Měsíc&lt;/span&gt;
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
		&lt;span class="screen-reader-text"&gt;Rok&lt;/span&gt;
		&lt;input name="aa" value="2016" size="4" maxlength="4" autocomplete="off" type="text"&gt;
	&lt;/label&gt; @ 
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Hodiny&lt;/span&gt;
		&lt;input name="hh" value="15" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;:
	&lt;label&gt;
		&lt;span class="screen-reader-text"&gt;Minuty&lt;/span&gt;
		&lt;input name="mn" value="23" size="2" maxlength="2" autocomplete="off" type="text"&gt;
	&lt;/label&gt;
&lt;/div&gt;
						</pre>
						<p>Otherwise there are simple date time inputs available:</p>
						Date: <input name="input-date" type="date" /><br />
						Month: <input name="input-month" type="month" /> <br />
						Week: <input name="input-week" type="week" /><br />
						Time: <input name="input-time" type="time" /><br />
						Local Date and Time: <input name="input-datetime-local" type="datetime-local" />
						<pre>
Date: &lt;input name="input-date" type="date" />
Month: &lt;input name="input-month" type="month" />
Week: &lt;input name="input-week" type="week" />
Time: &lt;input name="input-time" type="time" />
Local Date and Time: &lt;input name="input-datetime-local" type="datetime-local" />
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-time">Other Elements</label>
					</th>
					<td>
						Number: <input name="input-number" type="number" min="0" max="20" /><br />
						Range: <input name="input-range" type="range" /><br />
						Color: <input name="input-color" type="color" /><br />
						<pre>
Number: &lt;input name="input-number" type="number" min="0" max="20" />
Range: &lt;input name="input-range" type="range" />
Color: &lt;input name="input-color" type="color" />
						</pre>
					</td>
				</tr>
				<tr>
					<th>
						<label for="input-time">Buttons</label>
					</th>
					<td>
						<input type="submit" value="Submit Input" class="button" /><br /><br />
						<input type="button" value="Secondary Button" class="button-secondary" /><br /><br />
						<input type="button" value="Primary Button" class="button-primary" />
						<pre>
&lt;input type="submit" value="Submit Input" class="button" />
&lt;input type="button" value="Secondary Button" class="button-secondary" />
&lt;input type="button" value="Primary Button" class="button-primary" />
						</pre>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</div><!-- .wrap -->