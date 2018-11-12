
        <header>
            <a href="#" title="head" class="logo" id="mainPage" onclick="onClick(this)">Header</a>
            <span id="contact">
                    <a href="#" id="aboutUs" title="info" onclick="onClick(this)">Abaut me</a>
                </span>
            <input type="text" class="field" placeholder="search">
            <span class="right">
                    <span class="contact">
                        <a href="#" id="registration" title="reg" onclick="onClick(this)">Registration</a>
                    </span>
                    <span class="contact">
                        <a href="#" id="login" title="auth" onclick="onClick(this)">Authentification</a>
                    </span>
                </span>
        </header>
        <!---->

        <div class="clear"><br></div>
        <nav id="menuHrefs">
            <div id="menu">Меню<hr></div>
            <div id="menuWW" >
                <?php foreach ($arrMenu as $p) { ?>
                    <div class="menuWWW"><a href="#" id="<?php echo $p->get_index(); ?>" onclick="onClick(this)" ><?php echo $p->get_name(); ?></a></div>
                <?php } ?>
            </div>
            <div id="menu"><hr></div>
        </nav>
