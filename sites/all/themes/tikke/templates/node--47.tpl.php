

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
  <?php print render($content['field_second_title']); ?>
  <div class="arrow-bottom"><img src="/sites/all/themes/tikke/images/arrow-site.png"></div>


<!-- <div id="we-do">
<div class="line"></div>
<div class="main-title">ככה אנחנו עושים את זה</div>

<div class="row1 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/about-row-1.png"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/about-row-1.png"></div>
  <div class="text">
    <div class="title">למידה.</div>
    <div class="second-title">לומדים את הלקוח, מכירים את העסק, יוצרים בסיס מוצלח</div>
    <div class="content">שלב ההיכרות והמחקר, השלב הראשון בו ניצור מצע ראשוני לעבודה משותפת להשגת פרויקט הכי טוב שיש</div>
  </div>
</div>
<div class="row2 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/about-row-2.png"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/about-row-2-mobile.png"></div>
  <div class="text">
    <div class="title">תכנון.</div>
    <div class="second-title">לא רק להיראות טוב ברשת, אלא גם להיראות נכון</div>
    <div class="content">החל מאפיון ותכנון המבנה הראשוני של האתר, דרך תכנון חוויית המשתמש ועד לעיצוב הפרויקט. אנחנו יוצרים נוכחות יפה</div>
  </div>
</div>
<div class="row3 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/about-row-3.png"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/about-row-3-mobile.png"></div>
  <div class="text">
    <div class="title">פיתוח.</div>
    <div class="second-title">ניהול נוח ואינטואיטיבי לצד ביצועים מעולים ואבטחה גבוהה</div>
    <div class="content">דרופל, מערכת ניהול התוכן הטובה בעולם, לצד תכנות ברמה הגבוהה ביותר ושימוש בכלים האיכותיים ביותר. קוד פתוח לעתיד טוב יותר</div>
  </div>
</div>
<div class="row4 row hidden">
  <div class="image"><img src="/sites/all/themes/tikke/images/about-row-4.png"></div>
  <div class="image-mobile"><img src="/sites/all/themes/tikke/images/about-row-4-mobile.png"></div>
  <div class="text">
    <div class="title">תחזוקה.</div>
    <div class="second-title">מימוש הפרויקט הוא רק השלב הראשון במערכת יחסים בריאה</div>
    <div class="content">עדכון וניהול תכנים, גיבוי ועדכונים של המערכת הם חלק משמעותי באורח החיים הבריא של אתר אינטרנט</div>
  </div>
</div>
</div>
-->

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

  <?php print render($content['body']); ?>

</article>



<div id="wrapper-slide">
  <div id="container">
    <div class="line"></div>
    <div class="main-title">The values which guide us</div>
      <div class="main-sliders">
      <?php
          $my_block = module_invoke('views', 'block_view', 'slide_about_page-block');
          print render($my_block['content']); 
        ?>
      </div>
  </div>
</div>


<div class="wrapper-number">
<div class="wrapper-title">
  <div class="line"></div>
<div class="main-title">Few <span class="through">important</span> datails about us</div>
</div>
  <div id="numbers">
      <div class="box1 box">
      <div class="pic"></div>
        <span class="num num1">35,000</span>
        <div class="title">Clinets products </br>sells per year</div>
      </div>
      <div class="box2 box">
        <div class="title_sub">More then</div>
        <span class="num num4">15,000</span>
        <div class="title">Modules & Plug-ins</div>
      </div>
      <div class="box3 box">
        <span class="num num2">2,000</span>
        <div class="title">Line of code </br> each day</div>
        <div class="pic"></div>
      </div>
      <div class="box4 box">
        <span class="num num6">183</span>
        <div class="pic"></div>
        <div class="title">Emails every day</div>
      </div>
      <div class="box5 box">
        <span class="num num5">40</span><div class="num">+</div>
        <div class="pic"></div>
        <div class="title">Great websites</div>
      </div>
      <div class="box6 box">
        <span class="num num3">12</span>
        <div class="title">Coffee a day</div>
        <div class="pic"></div>
      </div>
      <div class="box7 box">
        <span class="num num7">3</span>
        <div class="title">Drupal Events organization</div>
      </div>
      <div class="box8 box">
        <div class="pic"></div>
        <span class="num num8">1</span>
        <div class="title">Drupal we love</div>
      </div>
      <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="/sites/all/themes/tikke/Counter/jquery.counterup.min.js"></script>
  </div>
</div>