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
        <div class="content">אחד המאפיינים החשובים ביותר כאשר ניגשים לפיתוח חנות מקוונת הוא היכולת להרחיב את 
        הפונקציונליות של המערכת. כך למשל, פיתוח חנות מקוונת פשוטה שרוצה לגדול עם הזמן וליצור מערך של מועדון לקוחות מתקדם, 
        או שינוי עמוד המוצר בצורה כזו שיתאים לליין חדש וייחודי עם מאפיינים שונים לגמרי מהקיים.</div>
        <strong>Drupal Commerce היא בדיוק המערכת הזו! </strong></br>
        החנות המקוונת של דרופל משלבת מחד את החופש המוחלט בפיתוח בדרופל, לצד הגמישות הרחבה של ממשק החנות עצמה, 
        מה שמאפשר לנו להתאים את החנות בדיוק לצרכים של העסק ולמאפיינים הייחודיים שלו, של המוצרים עצמם ושל קהל היעד. </br>
        בנוסף, המערכת נתמכת על ידי קהילת מפתחים גדולה ומגוונת מה שמבטיח עתיד בטוח ועשיר באפשרויות. 
      </div>
    </div>
    <div class="row row2">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce2.jpg"></div>
      <div class="text">
        <div class="title">ניהול נוח ואינטואיטיבי</div>
        <div class="content">לצד ניהול התוכן באתר, חנות מקוונת דורשת ניהול שוטף. למעשה, זהו ניהול חנות אמיתי הכולל ניהול הכנסות 
        וצאות, מלאי, תצוגת המוצרים, תהליך הרכישה ועוד. לכל אחד מאלו ולכולם יחד, המערכת כוללת ממשקי ניהול נוחים וקלים מאד ללמידה 
        ולתפעול המאפשרים גישה רחבת היקף לתהליכים השונים.</br>
        כך למשל המערכת מאפשרת ניהול רכישות אבל לא רק לאחר שלב הרכישה אלא מבט מעמיק על כל השלבים וסטאטוס הרכישה. כמו כן, 
        היא מאפשרת ניהול רכישה במידה וקיימת בעיה, טיפול וניהול החזרים ועוד. </br>
        את מערכת הניהול אנו משנים ומתאימים לצרכים ולאפיון החנות כך שהניהול יהיה אפילו יעיל יותר. 
        </div>
      </div>
    </div>
    <div class="row row3">
      <div class="image"><img src="/sites/all/themes/tikke/images/commerce3.jpg"></div>
      <div class="text">
        <div class="title">חנות רספונסיבית</div>
        <div class="content">אחוזי הגלישה באתרי אינטרנט מהסלולר הולך ועולה עם השנים ועומד כעת בישראל על כ-40% כאשר אחוזי הרכישה 
        הולכים ועולים גם כן. אם עד כה רכישות סלולריות היו קיימות בעיקר באפליקציות, כעת בעידן הרספונסיביות הן יכולות להתקיים באתרי האינטרנט 
        לולר ללא כל בעיה. </br>
        האיכות והמומחיות שלנו בהטמעת עיצוב רספונסיבי באה לידי ביטוי גם בהפיכת החנות כולה, גם עמודי המוצרים, עמוד המוצר, תהליך הסליקה ועוד, 
        לעמודים רספונסיביים קלים ונוחים לשימוש על ידי הגולשים. </br>
        אתר חנות רספונסיבי יכול להקפיץ את העסק בכמה רמות בעיקר כיוון שמרבית העבודה השיווקית נעשית דרך כלים הנצפים בסלולר [פייסבוק, ניוזלטר וכדומה]
        וכך למעשה מעלה את הסיכוי לרכישה בסלולר. 
        </div>
      </div>
    </div>
  </div>
</div>

<div id="commerce-wrapper-slide">
  <div id="container">
    <div class="line"></div>
    <div class="main-title">מגוון רחב של יישומים מתקדמים לחנות</div>
      <div class="main-sliders">
      <?php
          $my_block = module_invoke('views', 'block_view', 'commerce_content_gallery-block');
          print render($my_block['content']); 
        ?>
      </div>
  </div>
</div>


