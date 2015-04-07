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
<div id="share">
  <div class="share-title">אהבת? נשמח אם תשתף/י פוסט זה</div>
  <div class="facebook link">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http://newtikke.tikkewebsites.com/node/<?php print $node->nid ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="/sites/all/themes/tikke/images/facebook-share.jpg" alt="Share on Facebook"/></a>
  </div>
  <div class="google link">
  <a href="https://plus.google.com/share?url=http://newtikke.tikkewebsites.com/node/<?php print $node->nid ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="/sites/all/themes/tikke/images/google-share.jpg" alt="Share on Google+"/></a>
  </div>
  <div class="twitter link">
      <a href="https://twitter.com/home?status=http://newtikke.tikkewebsites.com/node/<?php print $node->nid ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="/sites/all/themes/tikke/images/twitter-share.jpg" alt="Share on Twitter"/></a>
</div>
</div>  

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>



</article>

