<?php get_header() ; ?>

    <div class="hero background-img">
        <!--        <div class="background-overlay"></div>-->
        <div class="max-width hero-content home-hero-content move-down load-fade">
            <h6>Förtidsregistrera dig till:</h6>
            <h2><?php the_title() ; ?></h2>
            <p><?php the_content() ; ?></p>
            <a class="round-link open-contact-modal" href="#">Förtidsregistrera dig nu</a>
        </div>
        <img class="wave-image" src="<?php echo esc_url(home_url( '/wp-content/themes/ghreat/assets/images/blue-wave.png' ) ); ?>">
    </div>
<?php if(get_field('home-first-content')) : ?>
    <section class="home-top-section">
        <div class="max-width medium-width section-content home-top-content">
            <div class="home-top-text slide-effect">
                <?php the_field('home-first-content') ; ?>
            </div>
            <div class="funk-section">
                <div class="funk-grid slide-effect">
                    <?php if( have_rows('explain') ): ?>
                        <?php while( have_rows('explain') ) : the_row();?>
                            <div class="funk-content ">
                                <img src="<?php the_sub_field('explain-img') ; ?>">
                                <p><?php the_sub_field('explain-text') ; ?></p>
                                <img class="funk-line first-line" src="<?php echo esc_url(home_url( '/wp-content/themes/ghreat/assets/images/Line@2x.png' ) ); ?>">
                                <img class="funk-line second-line" src="<?php echo esc_url(home_url( '/wp-content/themes/ghreat/assets/images/line-copy@2x.png' ) ); ?>">
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ; ?>
<?php if(get_field('home-second-content')) : ?>
    <section class="halfs-section grey-section absolute-section home-section">
        <img class="slide-effect" src="<?php the_field('home-second-img') ; ?>">
        <div class="max-width section-content ">
            <div class="left-content right-content slide-effect">
                <?php the_field('home-second-content') ; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
<?php if(get_field('third-section-content')) : ?>
    <section class="half-section home-section">
        <div class="half-left slide-effect max-width">
            <div class="half-left-content">
                <?php the_field('third-section-content') ; ?>
            </div>
        </div>
        <div class="half-right background-img" style="background-image: url('<?php the_field('third-section-img') ; ?>')"></div>
    </section>
<?php endif ; ?>

<?php if(get_field('fourth-section-content')) : ?>
    <section class="halfs-section grey-section absolute-section home-section">
        <img class="slide-effect" src="<?php the_field('fourth-section-img') ; ?>">
        <div class="max-width section-content ">
            <div class="left-content right-content slide-effect">
                <?php the_field('fourth-section-content') ; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
    <section class="half-section half-reverse home-section">
        <div class="half-left max-width blue-background slide-effect">
            <div class="half-left-content">
                <?php the_field('third-section-content') ; ?>
            </div>
        </div>
        <div class="half-right background-img" style="background-image: url('<?php the_field('third-section-img') ; ?>')"></div>
    </section>
    <section class="explain-section home-section">
        <div class="explain-grid max-width slide-effect">
            <?php if( have_rows('fifth-section-content') ): ?>
                <?php while( have_rows('fifth-section-content') ) : the_row();?>
                    <div class="explain-card">
                        <div class="explain-icon">
                            <i class="material-icons"><?php the_sub_field('fifth-section-icon') ; ?></i>
                        </div>
                        <p><?php the_sub_field('fifth-section-text') ; ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="#" class="open-contact-modal">Registrera dig</a>
    </section>
    <section class="channels-section faq-section">
        <div class="max-width small-width">
            <h3><strong>FAQ</strong></h3>
            <div class="faq-grid">
                <?php if( have_rows('faq') ): ?>
                    <?php while( have_rows('faq') ) : the_row();?>
                        <div class="faq-content slide-effect">
                            <h4><?php the_sub_field('question') ; ?></h4>
                            <p><?php the_sub_field('answer') ; ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php if(get_field('home-background-content')) : ?>
    <section class="background-section background-img" style="background-image: url('<?php the_field('home-background-img') ; ?>')">
        <div class="max-width medium-width slide-effect">
            <?php the_field('home-background-content') ; ?>
        </div>
    </section>
<?php endif ; ?>


<?php get_footer() ; ?>