<div id="container">

<div id="header">
    <div id="logo"><?php if ($logo) : ?>
        <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
      <?php endif; ?>
     </div>

    <?php if ($main_menu): ?>
<div id="navigation"><div class="section">
<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
</div></div> <!-- /.section, /#navigation -->
<?php endif; ?> 
    
</div>

<div class="Container">

<div class="SL">
 	<?php if ($page['sidebar_first']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>
</div><!--SL-->

<div class="SCi">
 	<div id="main">
 	<?php print $messages; ?>
 	
 		<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
 		
 		<?php if (!isset($node)):?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php endif?>
        
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>

    </div><!-- main -->
</div><!--SCi-->

</div>
<div class="ExtraBG">
<?php if ($page['footer']): ?>
 <div class="bottomMenu">
 <?php print render($page['footer']); ?>
</div>
<?php endif; ?>
</div>

</div><!--container-->

