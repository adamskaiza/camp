<?php $program = $args['custom_field'];?>
<section class="tabs program-tabs">
    <header class="program-tabs__header container">
        <h1 class="h2">PROGRAM</h1>
        <ul class="program-tabs__nav tabs-nav">
            <?php $link_counter = 1;?>
            <?php foreach ($program as $item) : ?>
            <li class="program-tabs__item">
                <button value="<?php echo $item['heading'];?>"
                    class="program-tabs__link tabs-link <?php echo $link_counter === 1 ? 'tabs-link--active' : '';?>"><?php echo $item['heading'];?></button>
            </li>
            <?php $link_counter++ ;?>
            <?php endforeach;?>
        </ul>
    </header>



    <div class="program-tabs__panel tabs-panel">
        <?php $tab_content_counter = 1;?>
        <?php foreach ($program as $item) : ?>
        <article data-display="<?php echo $item['heading'];?>"
            class="program-tabs__content  tabs-content <?php echo $tab_content_counter === 1 ? 'tabs-content--visible' : '';?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/dzien' . $tab_content_counter . '.jpg';?>"
                alt="Baner tabu">
            <article class="program-tabs__line"
                style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/src/img/hex_dzien_' . $tab_content_counter . '.png';?>)">
                <div class="program-tabs__line-wrapper container">
                    <?php echo $item['title'];?>

                </div>

            </article>
        </article>
        <?php $tab_content_counter++;?>

        <?php endforeach;?>


    </div>
</section>