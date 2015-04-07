

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
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

<div class="wrapper">
<div class="on"></div>
    <div class="mapaItem">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6724.456367347781!2d34.952239684500896!3d32.573438106159855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d097f9c203465%3A0x4183ee23b8a43d54!2z15TXnteZ15nXodeT15nXnSwg15bXm9eo15XXnyDXmdei16fXkQ!5e0!3m2!1siw!2sil!4v1419493585265"  width="100%" height="600" frameborder="0" style="border:0"></iframe>

    </div>
</div>

    <script src="/sites/all/themes/tikke/js/svgcheckbx.js"></script>
