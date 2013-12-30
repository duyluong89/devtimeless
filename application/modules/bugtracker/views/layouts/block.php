<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/29/13
 * Time: 2:40 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="block <?php echo get_available($block_class)?>">
    <div class="block-title">
        <strong><span><?php echo get_available($block_title); ?></span></strong>
    </div>
    <div class="block-content">
        <?php echo get_available($block_content); ?>
    </div>
</div>