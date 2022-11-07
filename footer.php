<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camp
 */

?>

<footer class="footer-bottom">
    <section class="footer-bottom__site-info container">
        <article>
            &copy;
            <?php bloginfo('name'); ?>
            <?php echo date("Y") ?>
        </article>
        <a href="https://perspektywy.org/fundacja/polityka-prywatnosci" class="footer-bottom__logo" target="_blank">
            Polityka prywatności
        </a>

    </section><!-- .site-info -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>