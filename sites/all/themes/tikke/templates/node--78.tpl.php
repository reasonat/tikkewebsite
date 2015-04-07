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

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

  <?php print render($content['field_second_title']); ?>

<div class="main-area">
  <div class="wrapper">
    <div class="row row1">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce1.jpg"></div>
      <div class="text">
        <div class="title">מודולריות וגמישות של המערכת</div>
        <div class="content">ממשק החנות המקוונת Commerce מאפשר חופש בלתי נגמר מה שמאפשר פיתוח חנות איכותית ומגוונת. חנות אינה רק מכירה של מוצרים אלא בניית קטלוג בצורה נכונה, שימוש מתקדם במסננים, פרסום פנימי תלוי תוכן, מערכת קופונים משוכללת, מלאי דינמי, תנאי משלוח משתנים, מועדון חברים, חיבור לכלים חיצוניים ועוד אפשרויות רבות</div>
      </div>
    </div>
    <div class="row row2">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce2.jpg"></div>
      <div class="text">
        <div class="title">ניהול נוח ואינטואיטיבי</div>
        <div class="content">כמו כל המערכת, גם ממשק הניהול ניתן להגדרה בהתאם לאפיון ומבנה החנות. כלים ניהולים אינטואיטיביים מאפשרים חווית ניהול נוחה ונעימה המאפשרת בקלות להוסיף ולעדכן מוצרים, לקבל מידע מכירות מפורט דרך דוחות מקיפים, להוסיף קטגוריות מוצר ברמות השונות ועוד אפשרויות רבות</div>
      </div>
    </div>
    <div class="row row3">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce3.jpg"></div>
      <div class="text">
        <div class="title">חנות רספונסיבית</div>
        <div class="content">כמו שאר האתר, גם החנות עצמה, לרבות המוצרים, סל הקניות, מערכת הסליקה ועוד, יתאפשרו דרך מכשירי הסלולר השונים והטאבלטים, הכל באמצעות מימוש עיצוב רספונסיבי. מעל 40% יכנסו לאתר שלך ויהנו מחווית רכישה פשוטה ובטוחה גם במובייל</div>
      </div>
    </div>
    <div class="row row4">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce4.jpg"></div>
      <div class="text">
        <div class="title">כלים מתקדמים</div>
        <div class="content">
          <strong>מערכת קופונים משוכללת</strong> - מאפשרת בנוחות לייצר קופונים מסוגים שונים ובעלי מאפיינים תלויי מקרה כמו קופונים למוצרים מסוימים, לקטגוריה מסוימת, לפרקי זמן מסוימים, תלויי סכום רכישה ועוד אפשרויות רבות</br>
          </br><strong>מועדון חברים</strong> - כלים המאפשרים יצירת כרטיסי מועדון לקוחות, דמי מנוי, הנחות לחברים וכדומה. כלים מתקדמים אלו יכולים ליצור תנועה חוזרת של לקוחות לאתר ולעלות משמעותית את כמות המכירות של העסק
          מודל B2B יכול להיות ממומש במקביל למערכת המכירה הישירה B2C או כממשק בפני עצמו המאפשר מכירה קבועה לאנשי הקשר העסקיים</br>
          מלאי    </br>
          משלוח</br> 
          ממשק סינון מוצרים</br>
          חיבור לגוגל אנליטיקס
        </div>
      </div>
    </div>
  </div>
</div>
