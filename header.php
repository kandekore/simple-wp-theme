<?php

<header>
    <div class="container">
        <div class="logo">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            } ?>
        </div>
        <nav class="menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'menu-list'
            ));
            ?>
        </nav>
    </div>
</header>
