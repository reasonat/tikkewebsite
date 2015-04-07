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
  		<p>אתר רספונסיבי ראוי הוא כזה שיש להקדיש תשומת לב לכל הפרטים, הקטנים והגדולים, החל משלב האפיון ועד הבדיקות - את זה אנחנו עושים טוב!  </p>
  		<div class="commerce_details">
  			<ul>
  				<li>עיצוב ייחודי בחשיבת מובייל</li>
  				<li>התאמה רספונסיבית מלאה</li>
  				<li>מגוון תפריטים לבחירה</li>
  				<li>גלריות רספונסיביות איכותיות</li>
  				<li>מותאם גם לחנות וירטואלית</li>
  				<li>וידאו ורצועות שמע</li>
  				<li>טפסים ומסנני ספאם</li>
          <li>כלי שיתוף ברשתות החברתיות</li>
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
