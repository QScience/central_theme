<?php
/*
 * implements main_menu with hoot_preprocess_comment()
 */
function central_theme_preprocess_comment(&$variables) {
  $variables['submitted'] = t('!username said on !datetime: ', array('!username' => $variables['author'], '!datetime' => $variables['created']));
}

