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

<div id="icons">
  <div class="icon-wrapper">
    <div class="icon icon1">
        <div class="container">
          <div id="main" class="main">
          <figure>
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/delek-icon-1.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac" width="117pt" height="114pt" viewBox="0 0 117 107" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path fill="#2c3e50" d=" M 19.33 0.00 L 20.83 0.00 C 24.83 3.60 28.44 7.61 32.36 11.30 C 31.59 12.31 30.85 13.34 30.16 14.40 C 27.29 11.98 24.65 9.30 22.02 6.62 C 21.97 33.42 22.04 60.23 21.98 87.04 C 22.06 88.65 21.85 90.62 23.26 91.76 C 25.01 93.58 27.69 93.26 29.98 93.29 C 56.45 92.94 82.93 93.02 109.40 92.94 C 106.79 90.34 104.18 87.73 101.74 84.96 C 102.44 84.19 103.18 83.47 103.97 82.80 C 105.87 83.46 107.10 85.21 108.55 86.52 C 110.94 89.09 113.73 91.29 115.89 94.06 C 115.87 94.46 115.82 95.25 115.80 95.64 C 112.42 99.74 108.28 103.14 104.64 107.00 L 103.38 107.00 C 103.00 106.47 102.25 105.42 101.88 104.89 C 103.79 101.86 106.55 99.55 109.06 97.06 C 84.05 96.93 59.03 97.03 34.01 97.01 C 30.71 96.97 27.38 97.25 24.10 96.76 C 20.61 96.06 17.81 92.68 17.98 89.07 C 17.91 61.65 18.06 34.22 17.93 6.79 C 15.26 9.33 12.66 11.94 9.89 14.37 C 9.33 13.33 7.38 12.00 8.61 10.75 C 11.99 6.98 15.66 3.48 19.33 0.00 Z" />
              <path fill="#3c95d0" d=" M 104.10 15.10 C 105.18 15.50 106.27 15.90 107.36 16.29 C 104.78 23.84 102.35 31.43 99.29 38.81 C 95.32 36.77 91.35 34.75 87.29 32.91 C 80.05 44.88 72.79 56.84 65.49 68.78 C 61.37 65.31 57.30 61.78 53.19 58.30 C 47.17 65.12 41.20 71.97 35.19 78.78 C 32.44 76.46 29.74 74.08 27.02 71.72 C 27.02 69.99 27.00 68.25 27.00 66.52 C 29.61 68.73 32.19 70.97 34.79 73.19 C 40.68 66.38 46.86 59.82 52.59 52.88 C 56.90 55.76 60.44 59.60 64.66 62.59 C 71.50 50.82 78.70 39.26 85.72 27.60 C 89.53 29.48 93.36 31.31 97.15 33.24 C 99.50 27.21 101.78 21.15 104.10 15.10 Z" />
              <path fill="#2c3e50" d=" M 32.89 48.49 C 40.40 43.87 47.95 39.30 55.53 34.79 C 59.82 39.07 64.18 43.28 68.52 47.52 C 69.33 48.48 71.38 50.00 69.16 51.06 C 64.43 46.42 59.77 41.70 55.00 37.10 C 47.66 41.59 40.41 46.22 33.05 50.67 C 30.91 49.48 26.48 50.00 26.83 46.58 C 28.86 47.19 30.88 47.84 32.89 48.49 Z" />
              <path fill="#2c3e50" d=" M 80.79 59.58 C 83.87 55.90 86.92 52.20 90.00 48.51 C 95.64 54.67 101.44 60.70 106.94 66.98 C 106.68 67.40 106.15 68.23 105.89 68.65 C 100.53 63.00 95.44 57.09 90.00 51.52 C 86.97 55.18 84.05 58.93 80.92 62.51 C 79.04 60.61 76.98 58.88 75.27 56.82 C 75.44 56.37 75.78 55.46 75.95 55.00 C 77.58 56.51 79.19 58.05 80.79 59.58 Z" />
              </svg>
              </div>
              </figure>
          </div>
        </div><!-- /container -->
        <div class="text">
          <div class="title">תעבורה גדולה</div>
          <div class="content">אתר דלק ישראל החדש עתיד להתמודד עם תנועה גבוהה של גולשים ולשם כך נערכנו בכמה רמות</div>
        </div>
    </div>
    <div class="icon icon2">
        <div class="container">
          <div id="main" class="main">
          <figure>
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/delek-icon-2.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac" width="127pt" height="127pt" viewBox="0 0 127 127" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path fill="#333333" d=" M 19.42 19.03 C 18.85 12.57 25.66 6.91 31.92 8.60 C 38.35 9.81 41.59 17.38 39.15 23.20 C 43.38 26.35 47.58 29.55 51.87 32.63 C 50.95 33.71 50.08 34.83 49.18 35.92 C 45.12 32.74 40.85 29.84 36.85 26.59 C 34.40 27.90 31.78 29.28 28.90 28.89 C 23.75 28.79 19.44 24.11 19.42 19.03 Z" />
                <path fill="#333333" d=" M 94.45 26.11 C 93.15 20.91 95.82 14.91 101.07 13.19 C 107.09 10.82 114.40 15.51 114.76 21.97 C 115.57 27.97 110.04 33.74 104.03 33.26 C 101.21 33.24 98.78 31.67 96.72 29.89 C 92.34 31.99 88.49 35.01 84.12 37.12 C 82.66 36.79 82.51 34.96 81.67 33.96 C 85.81 31.15 90.24 28.81 94.45 26.11 Z" />
                <path fill="#01a0ef" d=" M 60.31 31.46 C 68.56 27.89 79.04 33.08 81.19 41.81 C 83.82 50.28 77.65 59.98 68.95 61.41 C 61.51 62.92 53.52 58.19 51.24 50.96 C 48.47 43.39 52.79 34.27 60.31 31.46 Z" />
                <path fill="#333333" d=" M 0.85 59.87 C -0.31 53.32 6.67 47.61 12.91 49.19 C 16.17 49.77 18.65 52.18 20.31 54.91 C 29.03 52.78 37.76 50.69 46.43 48.35 C 46.82 49.73 47.24 51.10 47.69 52.46 C 38.87 54.53 30.11 56.87 21.31 59.06 C 21.03 63.12 18.85 67.20 14.93 68.79 C 8.91 71.67 0.29 66.90 0.85 59.87 Z" />
                <path fill="#333333" d=" M 81.54 58.11 C 82.31 56.99 83.07 55.86 83.93 54.81 C 91.85 60.01 99.71 65.34 107.85 70.19 C 111.82 66.84 118.10 66.39 122.02 70.06 C 126.91 74.12 126.48 82.59 121.22 86.14 C 116.49 89.81 108.89 88.05 106.13 82.78 C 104.45 80.09 104.84 76.81 105.38 73.84 C 97.55 68.43 89.26 63.68 81.54 58.11 Z" />
                <path fill="#333333" d=" M 56.94 63.62 C 58.21 64.06 59.49 64.45 60.79 64.78 C 56.80 76.16 52.11 87.30 48.04 98.65 C 54.10 102.71 53.96 112.91 47.30 116.29 C 40.78 120.47 31.17 114.66 32.01 106.94 C 31.88 100.64 38.19 96.20 44.13 96.82 C 48.41 85.75 52.60 74.65 56.94 63.62 Z" />
                </svg>
              </div>
              </figure>
          </div>
        </div><!-- /container -->
        <div class="text">
          <div class="title">שיפור ביצועים</div>
          <div class="content">הרמה הראשונה הייתה שיפור ביצועים ברמת האתר עם כלים בסיסיים כמו כיווצי קבצי css, js, ושמירת Cache בעמודים רבים, כמובן עבור גולשים אנונימיים</div>
        </div>
    </div>
    <div class="icon icon3">
        <div class="container">
          <div id="main" class="main">
          <figure>
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/delek-icon-3.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac" width="97pt" height="97pt" viewBox="0 0 97 97" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path fill="#00a1f1" d=" M 8.88 2.97 C 16.33 -1.17 27.26 0.90 30.98 9.06 C 33.32 12.73 31.37 17.00 31.78 20.94 C 45.26 35.60 59.97 49.10 74.88 62.29 C 78.14 61.51 81.71 60.60 84.91 62.17 C 91.10 64.86 94.63 71.73 94.14 78.34 C 90.57 76.75 87.59 74.10 83.99 72.61 C 79.04 71.80 75.39 77.70 75.76 82.09 C 77.15 86.78 82.90 87.65 85.94 91.00 C 81.41 93.31 75.82 93.99 71.08 91.92 C 66.27 89.59 61.83 84.79 62.58 79.07 C 62.46 76.72 63.95 73.87 62.05 71.94 C 48.66 57.94 34.63 44.52 19.96 31.88 C 16.50 32.21 12.73 33.58 9.52 31.53 C 3.36 28.99 0.10 22.13 0.82 15.68 C 4.34 17.42 7.40 20.01 11.05 21.46 C 16.45 21.79 20.62 14.54 18.13 9.87 C 15.44 7.10 11.69 5.64 8.88 2.97 Z" />
                <path fill="#333333" d=" M 39.17 9.03 C 39.71 6.44 38.04 1.73 41.86 1.19 C 46.21 1.09 50.70 0.48 54.98 1.39 C 58.88 2.97 55.89 8.17 57.89 10.82 C 61.22 12.07 64.43 13.68 67.83 14.74 C 70.97 14.28 72.28 9.32 75.83 9.96 C 80.49 12.19 84.27 16.29 86.42 20.95 C 85.98 23.99 82.78 25.46 81.31 27.96 C 82.58 31.51 83.92 35.05 85.51 38.47 C 88.24 40.46 93.14 37.57 94.90 41.14 C 96.18 45.30 95.93 49.86 95.19 54.11 C 94.01 59.17 87.18 54.85 84.65 58.74 C 81.62 58.60 78.57 58.63 75.63 59.49 C 74.39 58.37 73.16 57.25 71.94 56.11 C 75.01 46.72 72.11 35.72 64.54 29.31 C 57.72 23.02 47.49 21.71 38.90 24.70 C 37.36 23.15 35.82 21.59 34.51 19.84 C 34.40 17.34 34.61 14.76 35.26 12.34 C 36.52 11.26 39.24 11.10 39.17 9.03 Z" />
                <path fill="#333333" d=" M 12.22 35.38 C 14.57 35.35 16.91 35.09 19.21 34.58 C 21.09 36.18 22.90 37.87 24.61 39.66 C 21.90 47.15 22.95 55.97 27.64 62.45 C 31.77 68.37 38.52 72.32 45.71 73.04 C 49.89 73.75 53.94 72.29 57.98 71.46 C 58.84 72.38 59.73 73.34 60.29 74.49 C 60.12 77.76 59.38 81.05 60.36 84.27 C 55.69 85.12 57.10 90.24 56.53 93.63 C 54.86 96.00 51.54 95.47 49.02 95.76 C 45.99 95.60 42.42 96.08 39.94 93.98 C 38.33 91.50 40.14 88.00 38.49 85.59 C 35.06 83.94 31.49 82.54 27.88 81.32 C 25.77 82.79 24.27 85.07 21.94 86.22 C 20.51 86.89 19.22 85.54 18.02 84.95 C 14.94 82.77 12.25 79.96 10.37 76.68 C 8.49 73.22 13.23 71.22 14.71 68.62 C 14.70 65.88 12.80 63.61 12.06 61.05 C 11.33 59.60 11.25 56.98 9.05 57.14 C 6.59 56.76 3.18 58.10 1.59 55.50 C 0.12 52.56 1.16 49.19 0.98 46.05 C 1.19 43.86 0.43 40.46 3.04 39.47 C 5.34 39.16 7.69 39.41 9.99 39.05 C 11.17 38.15 11.50 36.62 12.22 35.38 Z" />
                </svg>
              </div>
              </figure>
          </div>
        </div><!-- /container -->
        <div class="text">
          <div class="title">תחזוקה</div>
          <div class="content">בנוסף, ברמת השרת נעשו פעולות נוספות ושימוש בכלים מתקדמים כמו Varnish וכדומה בכדי לשפר ביצועים.</div>
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

<script src="/sites/all/themes/tikke/js/classie.js"></script>
<script src="/sites/all/themes/tikke/js/svganimations.js"></script>