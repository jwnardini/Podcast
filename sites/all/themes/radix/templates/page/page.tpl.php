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
    <div class="logo-wrap-1 col-sm-6">
      <div class="logo-wrap-2">
        <img src="/sites/all/themes/radix/assets/images/what-happending-logo-png2.png">



      </div>
    </div>
    <div class="message-wrap-1 col-sm-6">
      <div class="message-wrap-2">
        <!-- <div class="message-text"><div><span style="color:#ff0000;">W</span><span style="color:#ff1900;">e</span><span style="color:#ff3300;"> </span><span style="color:#ff4c00;">a</span><span style="color:#ff6600;">r</span><span style="color:#ff7f00;">e</span><span style="color:#ff9900;"> </span><span style="color:#ffb200;">t</span><span style="color:#ffcc00;">h</span><span style="color:#ffe500;">e</span><span style="color:#ffff00;"> </span><span style="color:#ccff00;">y</span><span style="color:#99ff00;">o</span><span style="color:#66ff00;">u</span><span style="color:#33ff00;">t</span><span style="color:#00ff00;">h</span><span style="color:#00ff33;"> </span><span style="color:#00ff66;">o</span><span style="color:#00ff99;">f</span><span style="color:#00ffcc;"> </span><span style="color:#00ffff;">t</span><span style="color:#00ccff;">h</span><span style="color:#0099ff;">e</span><span style="color:#0066ff;"> </span><span style="color:#0033ff;">n</span><span style="color:#0000ff;">a</span><span style="color:#1c00ff;">t</span><span style="color:#3800ff;">i</span><span style="color:#5300ff;">o</span><span style="color:#6f00ff;">n</span><span style="color:#8b00ff;">.</span></div></div> -->
      </div>
    </div>
  </header>
  <div class="nav-wrap">

 <!-- Collect the nav links, forms, and other content for toggling -->

  <div class="" id="">
   <?php if ($main_menu): ?>
     <ul id="main-menu" class="menu nav navbar-nav">
       <?php print render($main_menu); ?>
       <?php if ($search_form): ?>
         <?php print $search_form; ?>
       <?php endif; ?>
     </ul>
   <?php endif; ?>

  </div><!-- /.navbar-collapse -->
  </div>
</div>

<div id="main-wrapper" class="">
  <div class="container">
  <div id="main" class="main">

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
          <div id="sidebar_left" class="col-xs-3">
              <?php print render($page['sidebar_left']); ?>
          </div>

          <div class="content-column">
            <?php print render($page['content']); ?>
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
