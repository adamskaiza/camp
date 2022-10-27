<?php $program = $args['custom_field'];?>
<section class="tabs program-tabs">
    <section class="program-tabs__intro container">
        <h2 class="h2">PROGRAM CAMPU</h2>
    </section>

    <ul class="program-tabs__nav tabs-nav">
        <?php $link_counter = 0;?>
        <?php foreach ($program as $item) : ?>
        <li class="program-tabs__item">
            <button value="<?php echo $item['heading'];?>"
                class="program-tabs__link tabs-link <?php echo $link_counter === 0 ? 'tabs-link--active' : '';?>"><?php echo $item['heading'];?></button>
        </li>
        <?php $link_counter++ ;?>
        <?php endforeach;?>
    </ul>

    <div class="program-tabs__panel tabs-panel">
        <?php $tab_content_counter = 0;?>
        <?php foreach ($program as $item) : ?>
        <article data-display="<?php echo $item['heading'];?>"
            class="program-tabs__content  tabs-content <?php echo $tab_content_counter === 0 ? 'tabs-content--visible' : '';?>">
            <?php echo $item['title'];?>
        </article>
        <?php $tab_content_counter++;?>

        <?php endforeach;?>


    </div>
</section>