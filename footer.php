<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

        <footer>
            <div class="max-width footer">
                <div class="cd-footer-item">
                    <img src="<?php the_field('logo', 'options') ; ?>">
                </div>
                <div class="cd-footer-item">
                    <h5>Företag</h5>
                    <p>Ghreat Sweden AB</p>
                    <p>Org. Nr: 559155-9603</p>
                </div>
                <div class="cd-footer-item">
                    <h5>Kontakt</h5>
                    <p>0709-300 556</p>
                    <a href="mailto:info@ghreat.se">info@ghreat.se</a>
                </div>
                <div class="cd-footer-item">
                    <h5>Följ oss</h5>
                    <div class="cd-footer-social">
                        <?php if(get_field('facebook', 'option')) : ?>
                        <a href="<?php the_field('facebook', 'option') ; ?>" target="_blank" style="background-color: #3D589B">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <?php endif ; ?>
                        <?php if(get_field('instagram', 'option')) : ?>
                            <a href="<?php the_field('instagram', 'option') ; ?>" target="_blank" style="background-color: #da3174">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        <?php endif ; ?>
                        <?php if(get_field('linkedin', 'option')) : ?>
                            <a href="<?php the_field('linkedin', 'option') ; ?>" target="_blank" style="background-color: #0e77b5">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        <?php endif ; ?>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
    <script src="https://use.typekit.net/fyd1aus.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </body>
</html>