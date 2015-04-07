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

<div id="second-title">
  <?php print render($content['field_second_title']); ?>
  <div class="arrow-bottom"><img src="/sites/all/themes/tikke/images/arrow-site.png"></div>
</div>

</article>

<div class="parallax"></div>


<div class="wrapper">
  <?php print render($content['body']); ?>
</div>

<div class="text-wrapper text2">
  <div class="wrapper">
    <div class="title"><?php print render($content['field_title_2']); ?></div>
    <div class="content"><?php print render($content['field_text_2']); ?></div>
  </div>
  <div class="image"><?php print render($content['field_img_2']); ?></div>
</div>

<div id="special">
  <div class="special-wrapper wrapper">
    <div class="special special1">
        <div class="text">
          <div class="number">1</div>
          <div class="title">מועדון לקוחות</div>
          <div class="content">מערכת משתמשים רשומים באתר המקבלים מבצעים, הנחות וכדומה, באזור אישי באתר ולמייל בהתאם. </div>
        </div>
    </div>
    <div class="special special2">
        <div class="text">
          <div class="number">2</div>
          <div class="title">קופונים</div>
          <div class="content">ממשק ניהול נוח ליצירת קופונים בודדים, מרובים, תלויי משתנים כמו תאריך, מוצר, משתמשים וכדומה.</div>
        </div>
    </div>
    <div class="special special3">
        <div class="text">
          <div class="number">3</div>
          <div class="title">מבצעים</div>
          <div class="content">אפשרות ליצור מחירי מבצע קבועים או תלויי תאריך, שעה, קטגוריית מוצרים וכדומה, עבור כל מוצר.</div>
        </div>
      </div>
    <div class="special special4">
        <div class="text">
          <div class="number">4</div>
          <div class="title">מוצר משולב</div>
          <div class="content">כלי המאפשר חיבור בין שני מוצרים ויותר לכדי יצירת חבילת מבצע במחירים שונים ואטרקטיביים.</div>
        </div>
      </div>
    <div class="special special5">
        <div class="text">
          <div class="number">5</div>
          <div class="title">קמפיינים</div>
          <div class="content">הצגת מוצרים רלוונטיים באופן ידני או אוטומטי באזורי התוכן השונים באתר וגם במעמדי הסליקה הרבים.</div>
        </div>
      </div>
    </div>
</div>

<div class="text-wrapper text3">
  <div class="wrapper">
    <div class="title"><?php print render($content['field_title_3']); ?></div>
    <div class="content"><?php print render($content['field_text_3']); ?></div>
  </div>
    <div class="image"><?php print render($content['field_img_3']); ?></div>
</div>

<?php if (render($content['field_title_4'])) { ?>
<div class="text-wrapper text4">
  <div class="wrapper">
    <div class="title"><?php print render($content['field_title_4']); ?></div>
    <div class="content"><?php print render($content['field_text_4']); ?></div>
  </div>
    <div class="image"><?php print render($content['field_img_4']); ?></div>
</div>
<?php } ?>

<?php if (render($content['field_gallery'])) { ?>
<div class="gallery">
  <div class="wrapper">
  <?php print render($content['field_gallery']); ?>
</div>
</div>
<?php } ?>

<?php $field = field_get_items('node', $node, 'field_site_link'); ?>
<div id="site-url">
  <a href="<?php print render($field[0]['url']); ?>" target="_blank"><?php print t('Visit '); print $node->title; print t(' Website'); ?></a> 
</div>

<?php if (render($content['field_customer'])) { ?>
<div id="customer">
  <div class="wrapper">
    <div class="big">
      <?php print render($content['field_customer']); ?>
    </div>
    <div class="small">
      <?php print render($content['field_customer_name']); ?>
    </div>
  </div>
</div>
<?php } ?>

<div id="top-site">
  <div class="wrapper">
    <div class="links">
    <?php  
      global $language;
      if($language->name == "English"): ?>
      <?php $field = field_get_items('node', $node, 'field_prev'); ?>
      <div class="link prev"><a href="/en/<?php print render($field[0]['url']); ?>"><div class="site-name site-name-prev"><?php print render($field[0]['title']); ?></div><img src="/sites/all/themes/tikke/images/site-left.png" alt="previous"></a></div>
      <div class="link all"><a href="/works"><img src="/sites/all/themes/tikke/images/site-all.png" alt="all"></a></div>      
      <?php $field = field_get_items('node', $node, 'field_next'); ?>
      <div class="link next"><a href="/en/<?php print render($field[0]['url']); ?>"><div class="site-name site-name-next"><?php print render($field[0]['title']); ?></div><img src="/sites/all/themes/tikke/images/site-right.png" alt="next"></a></div>      
    <?php endif; if($language->name == "Hebrew"):?>
    <?php $field = field_get_items('node', $node, 'field_prev'); ?>
      <div class="link prev"><a href="/<?php print render($field[0]['url']); ?>"><div class="site-name site-name-prev"><?php print render($field[0]['title']); ?></div><img src="/sites/all/themes/tikke/images/site-right.png" alt="previous"></a></div>
      <div class="link all"><a href="/works"><img src="/sites/all/themes/tikke/images/site-all.png" alt="all"></a></div>
      <?php $field = field_get_items('node', $node, 'field_next'); ?>
      <div class="link next"><a href="/<?php print render($field[0]['url']); ?>"><div class="site-name site-name-next"><?php print render($field[0]['title']); ?></div><img src="/sites/all/themes/tikke/images/site-left.png" alt="next"></a></div>
    <?php endif; ?>
    </div>
  </div>
</div>