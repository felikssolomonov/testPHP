<div id="panel">
    <div id="vertical-orientation">Menu</div>
    <br>
    <div id="hidden_panel">

        <?php foreach ($arrSidebar as $key=>$value) { ?>
            <button class="but" id="<?php echo $key; ?>" onclick="onClick(this)">
                <?php $q = "but_ok"; ?>
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $key; ?>.ico" alt="">
<!--                <img class="img" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/but_vk.ico" alt="">-->
                <span class="butText"><?php echo $value; ?></span>
            </button><br>
        <?php } ?>
    </div>
</div>
