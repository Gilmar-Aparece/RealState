<?php
/* Template Name: Contact Page */
acf_form_head(); 
get_header(); ?>

<main class="contact-simple-wrap">
    <div class="container">
        <div class="contact-grid">
            
            <div class="contact-sidebar">
                <span class="label">Contact Us</span>
                <h2 class="contact-title">Get In Touch</h2>
                
                <div class="contact-info-list">
                    <div class="info-item">
                        <span class="icon">📞</span>
                        <div class="text">
                            <strong>Phone</strong>
                            <p>0946 347 8938</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="icon">✉️</span>
                        <div class="text">
                            <strong>Email</strong>
                            <p>aparecegilmar1@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-main">
                <div class="form-card">
                    <h3>Send us a message</h3>
                    <?php 
                    acf_form(array(
                        'post_id'       => 'new_post',
                        'new_post'      => array(
                            'post_type'     => 'contact',
                            'post_status'   => 'publish'
                        ),
                        'form' => true,
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ),
                        'submit_value'  => 'Send Message',
                        'fields'        => array('visitor_name', 'visitor_email', 'visitor_subject', 'visitor_message'),
                        'html_updated_message'  => '<div class="custom-success-pop">✨ Message sent successfully!</div>',
                    )); 
                    ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>