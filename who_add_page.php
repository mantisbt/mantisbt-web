<? include( "top.php" ); ?>

<span class="page_title">Who</span>
<hr size=1 noshade width="100%">
<p>

<?php if ( !isset( $f_sent ) ) { ?>
<span class="section">Who uses Mantis?</span>
<p>
Do you use Mantis?  Let us know!  Please keep this to strictly comments (no questions!).
<p>
<table width="99%" cellspacing="0" cellpadding="20">
<tr valign="top">
	<td>

		<table width="100%" cellspacing="2">
		<tr>
			<td align="right">
				<form method="post" action="feedback_add.php">
				Name:
			</td>
			<td>
				<input type="text" name="f_from" size="32" />
			</td>
		</tr>
			<td align="right" nowrap>
				Email: (*)
			</td>
			<td>
				<input type="text" name="f_email" size="32" />
			</td>
		</tr>
		</tr>
			<td align="right" nowrap>
				Org: (**)
			</td>
			<td>
				<input type="text" name="f_organization" size="32" />
			</td>
		</tr>
		</tr>
			<td colspan="2">
				<textarea name="f_body" cols="40" rows="10"></textarea>
			</td>
		</tr>
		</tr>
			<td colspan="2">
				<input type="checkbox" name="f_allow_publishing" checked="checked" />Allow Public Viewing<br />
			</td>
		</tr>
		</tr>
			<td colspan="2">
				<input type="submit" value=" Send Feedback " />
				</form>
			</td>
		</tr>
		</tr>
			<td colspan="2">
				<small>* We will not publish your email address.  It is stored only so that we can contact you if there is an issue.</small><br /><br />
				<small>** If you'd rather not leave a name please consider leaving the field instead (Software Development, Financial, Non-Profit Organization, etc.).</small>
			</td>
		</tr>
		</table>

	</td>
	<td style="border-left: 1px solid black">
		<b>Example Message:</b><br />We at Bug Hunters Inc. have found Mantis to be an invaluable tool in helping to keep track of bug population centers.  It's nice colors help us to quickly identify bugs in the riper stages of development.  It is far better than what we used before: small papers taped to maps.
		<p>
		Steve<br/>
		Bug Hunters Inc.
	</td>
</tr>
</table>
<?php } else { ?>
<p>
Thank you for your submission!  It will be added shortly.
<?php } ?>

<? include("bot.php"); ?>