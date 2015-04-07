<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div class="wrapper-block-webform">
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div id="commerce_contact_main">
  	<div class="commerce_text">
  		<p>נעצב לך את האתר באופן ייחודי רק שנוסיף לו תפקוד וחוויית משתמש איכותיים</p>
  		<div class="commerce_details">
  			<ul>
  				<li>עיצוב ובניית לוגו</li>
  				<li>מיתוג וקונספט</li>
  				<li>אפיון וסקיצות</li>
  				<li>עיצוב חוויית משתמש</li>
  				<li>עמוד GUI</li>
  				<li>עיצוב רספונסיבי</li>
  				<li>עיצוב חנות וירטואלית</li>
          <li>עיצוב תבנית דוא״ל</li>
          <li>עיצוב עמודי ניהול</li>
  			</ul>
  		</div>
  		<p class="footer"></p>
  	</div>
  	<div class="commerce_form">
  		<?php print $content; ?>
  	</div>
  </div>

</div>
</div>
