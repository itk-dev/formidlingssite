<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <?php print render($title_suffix); ?>
  <?php print $content ?>
</<?php print $tag; ?>>
