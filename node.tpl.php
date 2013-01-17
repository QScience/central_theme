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
    <?php print $title;?></h2>
  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php  print ('<p>'.$submitted.'</p>'); ?>
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
<?php else:?>
<div class="table-list"><ul>
<li class="list_title">
     <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
</li>
<li class="list_uploadby">
     <?php print $name; ?>
</li>
<li class="list_downno">
     <?php print '0'; ?>
</li>
<li class="list_date">
    <?php print date("m.d.y",$created); ?>
</li>
<li class="list_operations">
     <a href="<?php print $node_url; ?>">download</a>
</li></ul>
</div>
  <?php endif?>
</div>