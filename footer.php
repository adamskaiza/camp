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

<footer id="colophon" class="footer">
    <section id="contacts" class="contacts">
        <h2 class="contacts__heading container h2">KONTAKT</h2>
        <?php $contacts = get_field('footer_contacts', 'options');?>
        <ol class="contacts__list container">
            <?php foreach($contacts as $contact) :?>
            <li>
                <h3><?php echo $contact['name'];?></h3>
                <?php echo $contact['content'];?>
                <?php echo wp_get_attachment_image($contact['avatar'], 'medium');?>
            </li>
            <?php endforeach;?>
        </ol>
    </section>
</footer><!-- #colophon -->
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