<label class="header"><i class="fas fa-heartbeat"></i>Winddown</label>
<table>
	<tr>
		<td>Enabled</td>
		<td>
			<toggle>
				<input id="window_enabled_true" data-setting="winddown.enabled" value="true" name="winddown.enabled" type="radio" checked />
				<label for="window_enabled_true"><?php echo i18n("enabled") ?></label>
				<input id="window_enabled_false" data-setting="winddown.enabled" value="false" name="winddown.enabled" type="radio" />
				<label for="window_enabled_false"><?php echo i18n("disabled"); ?></label>
			</toggle>
		</td>
	</tr>
	<tr>
		<td>Rest Interval:</td>
		<td>
			<select class="setting" data-setting="winddown.restTime">
				<option value="15"><?php echo i18n("time_minute_plural", 15) ?></option>
				<option value="30" selected><?php echo i18n("time_minute_plural", 30) ?></option>
				<option value="45"><?php echo i18n("time_minute_plural", 45) ?></option>
				<option value="60"><?php echo i18n("time_minute_plural", 60) ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Fade Period:</td>
		<td>
			<select class="setting" data-setting="winddown.fadeTime">
				<option value="1"><?php echo i18n("time_minute_single", 1) ?></option>
				<option value="3"><?php echo i18n("time_minute_plural", 3) ?></option>
				<option value="5" selected><?php echo i18n("time_minute_plural", 5) ?></option>
				<option value="10"><?php echo i18n("time_minute_plural", 10) ?></option>
			</select>
		</td>

	</tr>
</table>