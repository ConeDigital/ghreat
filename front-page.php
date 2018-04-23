<?php get_header() ; ?>

    <div class="hero background-img">
        <!--        <div class="background-overlay"></div>-->
        <div class="max-width hero-content home-hero-content move-down load-fade">
            <div class="hero-text">
                <h6>Förtidsregistrera dig till:</h6>
                <h2><?php the_title() ; ?></h2>
                <p><?php the_content() ; ?></p>
            </div>
            <div class="contact-modal">
                <div class="contact-modal-header">
                    <div class="contact-modal-step active-step contact-step-1">
                        <div class="contact-modal-step-number">1</div>
                        <span>Referens</span>
                    </div>
                    <div class="contact-modal-step contact-step-2">
                        <div class="contact-modal-step-number">2</div>
                        <span>Företagsuppgifter</span>
                    </div>
                    <div class="contact-modal-step contact-step-3">
                        <div class="contact-modal-step-number">3</div>
                        <span>Registrera</span>
                    </div>
                </div>
                <div class="contact-modal-headline">
                    <h5 class="contact-modal-you">Förtidsregistrera ditt företag för endast <del>500</del><span> 350 kr/månad</span></h5>
                    <h5 class="contact-modal-business">Förtidsregistrera ditt företag för endast <del>500</del><span> 350 kr/månad</span></h5>
                </div>
                <?php echo do_shortcode(get_field('contact-form', 'options')) ; ?>
            </div>
<!--            <a class="round-link open-contact-modal" href="#">Förtidsregistrera dig nu</a>-->
        </div>
        <img class="wave-image" src="<?php echo esc_url(home_url( '/wp-content/themes/ghreat/assets/images/blue-wave.png' ) ); ?>">
    </div>
<?php if(get_field('home-first-content')) : ?>
    <section class="home-top-section">
        <div class="max-width medium-width section-content home-top-content">
            <div class="home-top-text slide-effect">
                <?php the_field('home-first-content') ; ?>
                <div class="cd-more-text">
                    <p>Ett av företagen som var det största lyckades ranka högt på sökmotorer och fick mycket
                        leads, kontakter och affärer via sin hemsida medan de två mindre fanns långt ner på
                        listan. Det som Marko blev upprörd över var att de två mindre företagen var bättre. De
                        hade bättre service, kundvård, priser och var mer flexibla i sina lösningar än deras
                        större konkurrent. Det här blev bara ett tydligt exempel på ett fall som han tyckte
                        speglade hela B2B branschen.
                    </p>
                    <p>
                        Samtidigt var företaget som Marko jobbade på med i flera affärsnätverk. Han insåg
                        snabbt styrkan av ett nätverk och hur mycket enklare det var att hitta de produkter och
                        tjänster som man behöver när man har en plats att vända sig till. Det ledde till att alla
                        inom nätverket gjorde affärer till ett värde av flera miljoner kronor per år.
                        Idén till Ghreat föddes och började sakta men säkert ta form. Marko ville nu använda
                        styrkan av ett nätverk och sätta ihop det med ett ärligt system där samma villkor gäller
                        för alla företag. Tjänsten som började ta form i Markos tankar ska ge inköpare en god
                        blick över marknaden på ett transparent sätt. Han ville samtidigt att Ghreat ska lösa
                        flera problem inom affärsvärlden så som enkel sökning med relevant sökresultat, enkelt
                        kunna hitta referenser, förenklad kommunikation och mycket mer.
                    </p>
                </div>
                <a href="#" class="cd-open-more-text">Läs historien om Ghreat</a>
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
    <section class="half-section home-section">
        <div class="half-left max-width blue-background slide-effect">
            <div class="half-left-content">
                <?php the_field('real-fifth-content') ; ?>
            </div>
        </div>
        <div class="half-right background-img" style="background-image: url('<?php the_field('real-fifth-img') ; ?>')"></div>
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
        <div class="max-width">
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
    <section class="background-section background-img">
        <div class="max-width medium-width slide-effect">
            <?php the_field('home-background-content') ; ?>
        </div>
    </section>
<?php endif ; ?>


<?php get_footer() ; ?>