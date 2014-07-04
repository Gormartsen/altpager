<?php

/**
 * @file
 * Default theme implementation to present pager item.
 *
 * Available variables:
 *   - $total: Count all items.
 *   - $items: Items for output.
 *
 * @see altpager.tpl.php
 *   Block with pager.
 * @see template_preprocess_altpager()
 *
 * @ingroup themeable
 */
?>
<div class="altpager">
  <ul>
    <li class="prefix"><?php print t('Show'); ?></li>
    <?php print $items; ?>
    <li class="sufix"><?php print t('of !total records', array('!total' => $total)); ?></li>
  </ul>
</div>
