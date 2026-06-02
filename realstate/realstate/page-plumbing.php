<?php
/* Template Name: Plumbing Page */
acf_form_head(); 
get_header(); ?>

<main class="plumbing-wrap">
    <div class="container">
        <div class="plumbing-grid">
            
            <div class="plumbing-list">
                <span class="sub-header">Professional Care</span>
                <h2 class="main-title">Our Plumbing Expertise</h2>
                <p class="intro">From emergency repairs to full industrial installations, we handle it all.</p>
                
                <?php
                $args = array('post_type' => 'plumbing', 'posts_per_page' => -1);
                $plumb_query = new WP_Query($args);

                if ($plumb_query->have_posts()) : 
                    while ($plumb_query->have_posts()) : $plumb_query->the_post(); 
                        $icon = get_field('plumb_icon');
                        $summary = get_field('plumb_summary');
                        $desc = get_field('plumb_desc');
                        $image = get_field('plumb_image');
                    ?>
                        <div class="plumbing-card">
                            <?php if($image): ?>
                                <div class="plumb-img-box">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="plumb-body">
                                <div class="plumb-meta">
                                    <span class="plumb-badge"><?php echo esc_html($icon); ?></span>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <p class="summary"><strong><?php echo esc_html($summary); ?></strong></p>
                                <div class="full-desc"><?php echo wp_kses_post($desc); ?></div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="plumbing-sidebar">
                <div class="inquiry-card">
                    <h3>Request a Service</h3>
                    <p>Tell us about your plumbing needs and we will get back to you shortly.</p>
                    <?php 
                    acf_form(array(
                        'post_id'       => 'new_post',
                        'new_post'      => array(
                            'post_type'     => 'contact', // Stores data in your Contacts CPT
                            'post_status'   => 'publish'
                        ),
                        'submit_value'  => 'Send Request',
                        'fields'        => array('visitor_name', 'visitor_email', 'visitor_subject', 'visitor_message'),
                    )); 
                    ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>