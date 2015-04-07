

    <?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>


<div class="line"></div>
<div class="main-title">והתהליך הוא פשוט</div>

<div class="row1 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/design/bear_03.jpg"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/design/bear_03.jpg"></div>
  <div class="text">
    <h2 class="title">מיתוג</h2>
    <p class="content">בשלב זה נלמד על העסק שלך, נבצע מחקר וביחד נמצא את הקונספט והמיתוג הנכונים שיעזור לנו לפתח לוגו ועיצוב בהמשך.</p>
  </div>
</div>
<div class="row2 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/design/coffee_03.jpg"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/design/coffee_03.jpg"></div>
  <div class="text">
    <h2 class="title">אפיון</h2>
    <p class="content">ננתח את הצרכים, קהלי היעד, מתחרים ונבנה מפת אתר. לאחר מכן נגדיר התנהגות גלישה, תהליכים, תפקידים, סוגי תוכן ועוד, עד לרמת הסקיצות המפורטות.</p>
  </div>
</div>
<div class="row3 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/design/tea_03.jpg"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/design/tea_03.jpg"></div>
  <div class="text">
    <h2 class="title">עיצוב</h2>
    <p class="content">נכין עמוד GUI, סקיצות עיצוב ועיצובים גמורים, עיצוב רספונסיבי בחשיבת מובייל ראשית ונגמור עם עיצובים נוספים רלוונטיים לכלל העמודים והצרכים. </p>
  </div>
</div>
<div class="row4 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/design/wine_03.jpg"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/design/wine_03.jpg"></div>
  <div class="text">
    <h2 class="title">הטמעת עיצוב</h2>
    <p class="content">אנחנו מטמיעים עיצוב מאפס, בלי תבנית, כותבים את הקוד בעצמנו תוך שימוש בטכניקות קוד מתקדמות ותשומת לב מרבית לכל פיקסל.</p>
  </div>
</div>
<div id="design_qoute">
  <p>"Design is not just what it looks like and feels like. Design is how it works."</p>
  <p class="name">Steve Jobs</p>
  <div class="button">לקבלת הצעה אטרקטיבית</div>
</div>
</div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

  <?php print render($content['body']); ?>


 
</article>



