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