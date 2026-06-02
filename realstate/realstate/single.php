<?php get_header(); ?>
    <!-- Content start here -->
    <section class="main-section">
        <h1><?php the_title(); ?></h1>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
        
    </section>

<?php get_footer(); ?>