<?php
/* Template Name: Commercial Page */
acf_form_head(); 
get_header(); ?>

<main class="commercial-wrap">
    <div class="container">
        <div class="commercial-layout">
            
            <div class="commercial-list">
                <span class="sub-label">Our Expertise</span>
                <h2 class="section-title">Commercial Real Estate Services</h2>
                
                <?php
                $args = array('post_type' => 'commercial', 'posts_per_page' => -1);
                $comm_query = new WP_Query($args);

                if ($comm_query->have_posts()) : 
                    while ($comm_query->have_posts()) : $comm_query->the_post(); 
                        // Fetch the EXACT field names from your ACF group
                        $icon = get_field('comm_icon'); 
                        $desc = get_field('comm_desc');
                        $image = get_field('comm_image');
                    ?>
                        <div class="commercial-service-card">
                            <div class="card-image-box">
                                <?php if($image): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>">
                                <?php else: ?>
                                    <div class="placeholder-img"></div>
                                <?php endif; ?>
                            </div>

                            <div class="card-content">
                                <div class="card-header-flex">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if($icon): ?>
                                        <div class="service-badge"><?php echo esc_html($icon); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="card-description">
                                    <?php echo wp_kses_post($desc); ?>
                                </div>
                                
                                <?php if(get_the_content()): ?>
                                    <div class="wp-content-text">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="commercial-sidebar">
                <div class="form-card">
                    <h3>Get a Commercial Quote</h3>
                    <?php 
                    acf_form(array(
                        'post_id'       => 'new_post',
                        'new_post'      => array(
                            'post_type'     => 'contact',
                            'post_status'   => 'publish'
                        ),
                        'submit_value'  => 'Send Inquiry',
                        'fields'        => array('visitor_name', 'visitor_email', 'visitor_subject', 'visitor_message'),
                    )); 
                    ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>