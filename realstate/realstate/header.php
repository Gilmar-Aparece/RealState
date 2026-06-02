<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php wp_head(); ?>
</head>
<style>
    /* Custom Responsive Styles for Real Estate Lawyer Theme */

@media only screen and (max-width: 1440px) {
    .container { max-width: 1140px; }
} /* close: 1440px */

@media only screen and (max-width: 1024px) {
    .container { max-width: 960px; }
    .hero h1 { font-size: 2.2rem; }
} /* close: 1024px */

@media only screen and (max-width: 991px) {
    /* Services section: Shrink gap */
    .services-grid { gap: 20px; }
    .hero { height: 400px; }
} /* close: 991px */

@media only screen and (max-width: 768px) {
    /* 1. Hide the checkbox */
    .menu-toggle-check {
        display: none;
    }

    /* 2. Style the Burger Icon */
    .burger-icon {
        display: flex;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        z-index: 1100;
        padding: 10px;
    }

    .burger-icon span {
        display: block;
        width: 25px;
        height: 3px;
        background: var(--navy);
        transition: 0.3s;
    }

    /* 3. Transform Navigation into a Mobile Sidebar */
    .navigation {
        position: fixed;
        top: 0;
        right: -100%; /* Start hidden off-screen */
        width: 280px;
        height: 100vh;
        background: #fff;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        transition: 0.4s ease-in-out;
        padding-top: 80px;
        z-index: 1050;
    }

    .nav-menu {
        display: flex; /* Show the menu inside the sidebar */
        flex-direction: column;
        gap: 0;
    }

    .nav-menu li {
        width: 100%;
        border-bottom: 1px solid #eee;
    }

    .nav-menu a {
        padding: 15px 25px;
        display: block;
        font-size: 16px;
    }

    /* 4. Handle Mobile Dropdowns */
    .sub-menu {
        position: static; /* Stack instead of float */
        display: none;
        width: 100%;
        box-shadow: none;
        background: #f9f9f9;
        padding-left: 20px;
    }

    .menu-item-has-children:hover .sub-menu {
        display: block;
    }

    /* 5. Toggling Logic (The Hack) */
    .menu-toggle-check:checked ~ .navigation {
        right: 0; /* Slide in */
    }

    /* Burger to 'X' animation */
    .menu-toggle-check:checked ~ .burger-icon span:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }
    .menu-toggle-check:checked ~ .burger-icon span:nth-child(2) {
        opacity: 0;
    }
    .menu-toggle-check:checked ~ .burger-icon span:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
}

@media only screen and (max-width: 600px) {
    .hero h1 { font-size: 1.5rem; padding: 0 10px; }
    
    /* Adjust Section B: Podcast/Newsletter */
    .subscribe-form input {
        width: 100%;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    .subscribe-form button {
        width: 100%;
        border-radius: 20px;
    }
} /* close: 600px */

@media only screen and (max-width: 480px) {
    .section-podcast h2 { font-size: 1.2rem; }
    .hero { height: 350px; }
    .service-icon { width: 80px; height: 80px; }
} /* close: 480px */

@media only screen and (max-width: 425px) {
    .footer-boxes span {
        padding: 10px 20px;
        width: 80%;
    }
} /* close: 425px */

@media only screen and (max-width: 375px) {
    .hero h1 { font-size: 1.3rem; }
    .read-more { width: 100%; }
} /* close: 375px */
</style>
<body <?php body_class(); ?>>

<header>
    <div class="container nav-wrapper">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Lawyer Logo">
            </a>
        </div>

        <input type="checkbox" id="menu-toggle" class="menu-toggle-check" style="opacity:0;">
        <label for="menu-toggle" class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="navigation">
            <ul class="nav-menu">
                <?php
                // Your existing PHP menu logic remains exactly the same
                $menu_location = 'primary';
                $locations = get_nav_menu_locations();
                if (isset($locations[$menu_location])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_location]);
                    if ($menu && !is_wp_error($menu)) {
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        if ($menu_items) {
                            $menu_list = array();
                            foreach ((array) $menu_items as $menu_item) {
                                if ($menu_item->menu_item_parent == 0) {
                                    $menu_list[$menu_item->ID] = $menu_item;
                                    $menu_list[$menu_item->ID]->children = array();
                                } else {
                                    if (isset($menu_list[$menu_item->menu_item_parent])) {
                                        $menu_list[$menu_item->menu_item_parent]->children[] = $menu_item;
                                    }
                                }
                            }
                            foreach ($menu_list as $item) {
                                $has_children = !empty($item->children);
                                $class = $has_children ? 'class="menu-item-has-children"' : '';
                                $current_url = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                $active = (untrailingslashit($current_url) === untrailingslashit($item->url)) ? ' active' : '';
                                echo '<li ' . $class . ' class="' . $active . '">';
                                echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                                if ($has_children) {
                                    echo '<ul class="sub-menu">';
                                    foreach ($item->children as $child) {
                                        echo '<li><a href="' . esc_url($child->url) . '" style="color:#333;">' . esc_html($child->title) . '</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';
                            }
                        }
                    }
                }
                ?>
            </ul>
        </nav>
    </div>
</header>