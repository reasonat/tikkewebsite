<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="bg-top"></div>
<div class="header-wrapper">
  <header class="header" id="header" role="banner">
<div class="header-menu">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>
              <div class="mobile-menu close">
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </div>
    </div>
    <div id="navigation">
    <script src="/sites/all/themes/tikke/js/snap.svg-min.js"></script>
    <script src="/sites/all/themes/tikke/js/modernizr.custom.js"></script>
    <div class="container">
      <div class="content">
        <header class="codrops-header">
          <div class="button-wrap"><button data-dialog="somedialog" class="trigger"><img src="/sites/all/themes/tikke/images/light86.png"></button></div>
        </header>
        <div id="somedialog" class="dialog">
          <div class="dialog__overlay"></div>
          <div class="dialog__content">
            <div class="morph-shape" data-morph-open="M199.5,100c0,54.955-44.768,99.5-100,99.5s-100-44.545-100-99.5c0-54.956,44.769-99.5,100-99.5
  S199.5,45.044,199.5,100z">
              <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet">
                <path d="M199.5,100c0,0.552-44.768,1-100,1s-100-0.448-100-1s44.769-1,100-1S199.5,99.448,199.5,100z"></path>
              </svg>
            </div>
            <div class="dialog-inner">
              <a href="/node/11">SEO</a></br>
              <a href="/node/12">חנויות מקוונות</a></br>
              <a href="/node/105">בניית אתר רספונסיבי</a></br>
              <a href="/node/107">עיצוב אתרים באינטנרט</a></br>
              <div><button class="action" data-dialog-close><img src="/sites/all/themes/tikke/images/close.png"></button></div>
            </div>
          </div>
        </div>
      </div><!-- /content -->
    </div><!-- /container -->
    <script src="/sites/all/themes/tikke/js/circle.js"></script>
    <script src="/sites/all/themes/tikke/js/dialogFx.js"></script>
    <script>
      (function() {

        var dlgtrigger = document.querySelector( '[data-dialog]' ),

          somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
          // svg..
          morphEl = somedialog.querySelector( '.morph-shape' ),
          s = Snap( morphEl.querySelector( 'svg' ) ),
          path = s.select( 'path' ),
          initialPath = path.attr('d'),
          steps = { 
            open : morphEl.getAttribute( 'data-morph-open' )
          },
          dlg = new DialogFx( somedialog, {
            onOpenDialog : function( instance ) {
              // reset path
              morphEl.querySelector( 'svg > path' ).setAttribute( 'd', initialPath );
              // animate path
              path.stop().animate( { 'path' : steps.open }, 300, mina.easein );
            }
          } );

        dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

      })();
    </script>

      <?php if ($main_menu): ?>

          <nav id="main-menu" class="hidde-mobile" role="navigation" tabindex="-1">

          <div class="menu-ul hidde-mobile">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
          </div>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>
  </header>
</div>

<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($page['help']); ?>
      <?php print render($title_prefix); ?>
            <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><div class="title"><?php print $title; ?></div></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <div class="wrapper-error">
            <?php print $messages; ?>
      </div>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print render($page['content_bottom']); ?>
      <?php print $feed_icons; ?>
    </div>



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>


</div>
<div class="wrapper-bottom">
    <?php print render($page['bottom']); ?>
</div>
<div class="wrapper-footer">
  <?php print render($page['footer']); ?>
</div>

<div id="fixed-block" class="hide-mobile close">
  <div id="wrapper-fixed-block">
    <div class="content">
      <?php  
        global $language; ?>
        <!-- <?php if($language->name == "English"): ?>
          <div class="link link1 hide"><a href="/en/node/78"><img src="/sites/all/themes/tikke/images/fix-commerce.png"><div class="text">Commerce</div></a></div>
          <div class="link link2 hide"><a href="/en/node/79"><img src="/sites/all/themes/tikke/images/fix-seo.png">SEO</a></div>
          <div class="link link3 hide"><a href="/en/node/80"><img src="/sites/all/themes/tikke/images/fix-ux.png">UX</a></div>
        <?php endif; ?> -->
        <?php if($language->name == "Hebrew"): ?>
          <div class="link link1 hide"><a href="/node/12"><img src="/sites/all/themes/tikke/images/fix-commerce.png"><div class="text">חנות</div></a></div>
          <div class="link link2 hide"><a href="/node/11"><img src="/sites/all/themes/tikke/images/fix-seo.png">SEO</a></div>
          <div class="link link3 hide"><a href="/node/105"><img src="/sites/all/themes/tikke/images/touchscreen4.png">רספונסיב</a></div>
          <div class="link link4 hide"><a href="/node/107"><img src="/sites/all/themes/tikke/images/website8.png">עיצוב</a></div>
          <!--<div class="link link3 hide"><a href="/node/45"><img src="/sites/all/themes/tikke/images/fix-ux.png">UX</a></div>-->
          <div class="main-button"><div class="text"><img src="/sites/all/themes/tikke/images/light86.png"></div></div>
        <?php endif; ?>
    </div>
  </div>
</div>
