<div id="articles">
    <div id="aboutWe">
        <p>
            <?php echo $arrNews[$_GET['news']]->get_full(); ?>
        </p>
    </div>
    <div id="columnR">
        <p>
            <?php foreach ($arrNews as $p) { ?>

            <div class="sideNews">
                <img src="img/img1.jpg" alt="" title="img1">
                <h2><?php echo $p->get_name()." - name"; ?></h2>
                <p><?php echo $p->get_mini()." - content"; ?></p>
                <a href="#" id="<?php echo $p->get_index(); ?>" onclick="onClickNews(this)">continue</a>
            </div>

            <?php } ?>
        </p>
    </div>
</div>