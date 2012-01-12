<?php $user_menu = menu_navigation_links('user-menu'); ?>

<?php if ($user_menu): ?>
  <?php print theme('links', array('links' => $user_menu, 'attributes' => array('id' => 'user-menu', 'class' => array('menu', 'user-menu', 'pills', 'medium-h-spacing')), 'heading' => array('text' => t('User menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
<?php endif; ?>

<?php print $content; ?>
