<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

        <footer>
            <div class="max-width footer">
                <img src="<?php the_field('logo', 'options') ; ?>">
                <p><?php the_field('footer-text', 'options') ; ?></p>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
    <script src="https://use.typekit.net/fyd1aus.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </body>
</html>