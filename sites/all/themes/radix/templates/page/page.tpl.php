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
<header id="header" class="header" role="header">
  <div class="container">
     <div class="scrolling">
         <nav class="navbar navbar-default" role="navigation">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <?php if ($site_name || $logo): ?>
                     <a href="<?php print $front_page; ?>" class="navbar-brand" rel="home" title="<?php print t('Home'); ?>">
                         <?php if ($logo): ?>
                             <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
                         <?php endif; ?>
                         <?php if ($site_name): ?>
                             <span class="site-name"><?php print $site_name; ?></span>
                         <?php endif; ?>
                     </a>
                 <?php endif; ?>
             </div>
         </nav>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->

    </nav><!-- /.navbar -->

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


  </div> <!-- /.container -->
</header>

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
