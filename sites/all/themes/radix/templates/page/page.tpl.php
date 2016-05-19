<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div class="container">
  <header id="header" class="header" role="header">
    <div class="logo-wrap-1">
      <div class="logo-wrap-2">
        <img src="/sites/all/themes/radix/assets/images/WHLogo.jpg">



      </div>
    </div>
    <div class="logo-message-4">
      <div class="logo-message-5">
          The podcast where we only watch the pilot and series finale!
      </div>
    </div>
  </header>
  <div class="nav-wrap">

 <!-- Collect the nav links, forms, and other content for toggling -->

  <div class="collapse navbar-collapse" id="navbar-collapse">
   <?php if ($main_menu): ?>
     <ul id="main-menu" class="menu nav navbar-nav">
       <?php print render($main_menu); ?>
     </ul>
   <?php endif; ?>
   <?php if ($search_form): ?>
     <?php print $search_form; ?>
   <?php endif; ?>
  </div><!-- /.navbar-collapse -->
  </div>
</div>

<div id="main-wrapper" class="">
  <div id="main" class="main">
    <div class="container">

      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>
    <div id="content">
      <div class="row">

          <div id="sidebar_left" class="col-xs-3">
              <?php print render($page['sidebar_left']); ?>
          </div>

          <div class="col-xs-9">
              <?php print render($page['content']); ?>
          </div>
      </div>
    </div>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>
