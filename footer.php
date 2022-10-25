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
    <section class="contacts">
        <h2 class="contacts__heading container">KONTAKT</h2>
        <?php $contacts = get_field('footer_contacts', 'options');?>
        <ol class="contacts__list container">
            <?php foreach($contacts as $contact) :?>
            <li>
                <h3><?php echo $contact['name'];?></h3>
                <?php echo $contact['content'];?>
                <?php echo wp_get_attachment_image($contact['avatar'], 'thumbnail');?>
            </li>
            <?php endforeach;?>
        </ol>
    </section>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>