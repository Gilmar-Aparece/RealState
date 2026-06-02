<?php get_header(); ?>

<section class="hero">
    <div class="container hero-content">
        <h1>YOUR PREFERRED REAL ESTATE LAWYER <br> IN NORTH CAROLINA</h1>
        <a href="#" class="read-more">View Services</a>
    </div>

    <div class="hero-blur-bar"></div>
</section>

<section class="container services-grid">
    <div class="service-card">
        <div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/one.png"></div>
        <h3>REAL ESTATE LAW</h3>
        <p>Expert legal support for all your real estate transactions and litigation needs.</p>
        <a href="#" class="read-more">Read More</a>
    </div>
    <div class="service-card">
        <div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/two.png"></div>
        <h3>RESIDENTIAL REAL ESTATE</h3>
        <p>Dedicated assistance for buying or selling your home in Lake Norman.</p>
        <a href="#" class="read-more">Read More</a>
    </div>
    <div class="service-card">
        <div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/three.png"></div>
        <h3>LAWYER</h3>
        <p>Providing professional closing services to ensure your transaction is smooth.</p>
        <a href="#" class="read-more">Read More</a>
    </div>
</section>

<section class="section-podcast">
    <div class="container podcast-inner">
        <h2>FOR A SMOOTH TRANSACTION, MAKE US YOUR <br> PREFERRED LAWYER</h2>
        <p class="sub-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ipsum possimus sapiente nisi debitis soluta, expedita, obcaecati explicabo unde voluptatum illum vitae amet odio dolores veritatis, cupiditate molestias iste accusantium.</p>
        
        <img src="<?php echo get_template_directory_uri(); ?>/img/talk.png" class="podcast-logo" alt="Podcast Logo">
        <h3>Subscribe to Today's Real Talk Podcast</h3>

        <form class="subscribe-form">
            <input type="email" placeholder="Your Email Address" required>
            <button type="submit">SUBSCRIBE</button>
        </form>
    </div>
    
    <div class="city-silhouette"></div>
</section>

<?php get_footer(); ?>