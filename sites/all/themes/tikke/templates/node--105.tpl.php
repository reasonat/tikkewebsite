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
    <div class="row row_right row1">
      <h2 title class="title">חשיבה רספונסיבית</h2>
      <div class="text">
        <h3 title class="title">הלוגיקה שמאחורי העיצוב</h3>
        <div class="content">כשאנחנו ניגשים לעיצוב רספונסיבי אנחנו חושבים קודם מובייל ומה חווה הגולש כשהוא נכנס לאתר דרך המובייל. זהו השלב המעניין והחשוב ביותר שאין לפסוח עליו!</div>
      </div>
      <div class="image"><img src="/sites/all/themes/tikke/images/responsive/thinkmobile.jpg"></div>
    </div>
    <div class="row row_right row2">
      <h2 title class="title">רספונסיב איכותי</h2>
      <div class="text">
        <h3 title class="title">עד הפיקסל האחרון</h3>
        <div class="content">אנחנו עושים הכל, עוברים עמוד עמוד, כותבים קוד עיצוב מאפס, הכל בכדי שהאתר יראה מושלם במובייל, לא פחות!</div>
      </div>
      <div class="image"><img src="/sites/all/themes/tikke/images/responsive/thinkmobile_2.jpg"></div>
    </div>
    <div class="row row_right row3">
      <h2 title class="title">ניווט</h2>
      <div class="text">
        <h3 title class="title">אם התפריט טוב, הגולש נשאר! </h3>
        <div class="content">מחקרים רבים מראים עד כמה חשוב תפריט ניווט במובייל - שיהיה ברור, לחיץ לאצבע, שיפתח באופן נעים ואטרקטיבי, שיהיה נוח לשימוש. </div>
      </div>
      <div class="image">
        <img src="/sites/all/themes/tikke/images/responsive/thinkmobile_3.jpg">
      </div>
    </div>
    <div class="tablet">
      <div class="image">
        <img src="/sites/all/themes/tikke/images/responsive/thinktablet.jpg">
      </div>
      <div class="text">
        <div class="content">"People interact with their phones very differently than they do with their PCs, and I think that when you design from the ground up with mobile in mind, you create a very different product than going the other way."</div>
        <h3>Kevin Systrom, Instagram</h3>
        <div class="button">לקבלת הצעה אטרקטיבית</div>
      </div>
    </div>
  </div>
</div>



