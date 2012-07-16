<?php
// default? need to delete if use default template
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php if($page):?>
<div class="VoteHead">
<div class="PostHeadVote">
<?php print render($content['logo'])?>
</div> 
<div class="PostHeadTitle <?php print('node-'.$node->type);?>"> 
	<?php print render($title_prefix); ?>
    <h2 class="title"<?php print $title_attributes; ?>>
    <?php if(isset($news_prefix)){ print '<span class="prefix">'.$news_prefix.'</span>: ';} print $title;?></h2>
  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php if(!isset($paper_authors)) print ('<p>'.$submitted.'</p>'); ?>
      <?php if(isset($download))print('<p>'.$download.'</p>'); ?>
    </div>
  <?php endif; ?>
    <?php print render($title_suffix); ?>
  
</div>
   </div>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
     if(isset($content['plus1_widget'])) hide($content['plus1_widget']);
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php print render($content['comments']); ?>
</div>
<?php else:?>
     <h2 <?php print $title_attributes; ?>>
     <?php if(isset($news_prefix)) print '<span class="prefix">'.$news_prefix.'</span>: ';?>
     <a href="<?php print $node_url; ?>"><?php print $title; ?></a>

     </h2>
  <?php endif?>