

    <div id="articles">

        <?php foreach ($arrNews as $p) { ?>

            <article >
                <img src="img/img1.jpg" alt="" title="img1">
                <h2><?php echo $p->get_name()." - name"; ?></h2>
                <p><?php echo $p->get_mini()." - content"; ?></p>
                <a href="#" id="<?php echo $p->get_index(); ?>" onclick="onClickNews(this)">continue</a>
            </article>

        <?php } ?>

    </div>
