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
  		<p>אנחנו מפתחים חנויות וירטואליות ברמה הגבוהה ביותר ועם מערכת הניהול והפיתוח הגמישה ביותר.</br>
  		אצלנו תקבלו חנות בעיצוב ייחודי, רספונסיבית ועם מגוון רחב במיוחד של אפשרויות! </p>
  		<div class="commerce_details">
  			<ul>
  				<li>ניהול מוצרים</li>
  				<li>ניהול מכירות</li>
  				<li>ניהול קטגוריות</li>
  				<li>ניהול מסננים</li>
  				<li>ניהול רוכשים</li>
  				<li>מידע סטטיסטי</li>
  				<li>קופונים ומבצעים</li>
  				<li>מערכת באנרים</li>
          <li>כלים רבים נוספים</li>
  			</ul>
  		</div>
  		<p class="footer">והכל ברמת עיצוב גבוהה ושילוב אלמנטים עיצוביים מתקדמים ביותר</p>
  	</div>
  	<div class="commerce_form">
  		<?php print $content; ?>
  	</div>
  </div>

</div>
</div>
