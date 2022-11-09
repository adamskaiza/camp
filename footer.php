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

<footer class="footer">
    <section class="footer__content container">
        <img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() . '/src/img/logo-CAMP.png';?>" alt="">
        <section class="footer__contacts">
            <article class="footer__contact footer__contact--location">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <div>
                    <h4>Fundacja Edykacyjna Perspektywy</h4>
                    <p>ul.Nowogrodzka 31</p>
                    <p>00-511 Warszawa</p>
                </div>
            </article>
            <article class="footer__contact footer__contact--mail">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:womenintech@perspektywy.pl">womenintech@perspektywy.pl</a>
            </article>
            <!-- <article class="footer__contact footer__contact--phone">
                <i class="fa-solid fa-phone-flip"></i>
                <a href="tel:+48226285862">+48 22 628 58 62</a>
            </article> -->
        </section>
        <section class="footer__socials">
            <a href=" https://www.facebook.com/perspektywy.wit/">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/perspektywy_women_in_tech/">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/perspektywy-summit/mycompany/">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://www.facebook.com/perspektywy.wit/">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </section>
    </section>
</footer>

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