<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>

<div class="load-overlay"></div>
<div class="contact-modal-section contact-modal-section-fixed">
    <div class="contact-modal contact-modal-fixed load-fade move-down">
        <i class="material-icons close-contact-modal">close</i>
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
</div>
<header>
    <div class="max-width header load-fade">
        <div class="header-logo">
            <img src="<?php the_field('logo', 'options') ; ?>">
        </div>
<!--        <div class="header-right">-->
<!--            <a class="open-contact-modal" href="#">Förtidsregistrera Dig Nu</a>-->
<!--        </div>-->
    </div>
</header>
<section class="mobile-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
</section>
<div class="page-wrapper">


