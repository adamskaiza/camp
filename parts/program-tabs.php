<?php $program = $args['custom_field'];?>
<section class="tabs program-tabs">
    <header class="program-tabs__header container">
        <h1 class="h2">PROGRAM</h1>
        <nav class="program-tabs__nav tabs-nav">
            <ul>
                <?php $link_counter = 1;?>
                <?php foreach ($program as $item) : ?>
                <li class="program-tabs__item">
                    <button value="<?php echo $item['heading'];?>"
                        class="program-tabs__link tabs-link <?php echo $link_counter === 1 ? 'tabs-link--active' : '';?>"><?php echo $item['heading'];?></button>
                </li>
                <?php $link_counter++ ;?>
                <?php endforeach;?>
            </ul>
        </nav>
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
                    <p>Dzień <?php echo $tab_content_counter;?></p>
                    <section class="program__program program">
                        <?php foreach ($item['components'] as $program_component): ?>

                        <?php get_template_part('parts/program-component', null, [
                            'timing' =>  $program_component['timing'],
                            'title' =>  $program_component['component_title'],
                            'component_content' => $program_component['component_content'],
                            ]);?>
                        <?php endforeach;?>
                    </section>
                </div>

            </article>
        </article>
        <?php $tab_content_counter++;?>

        <?php endforeach;?>


    </div>
</section>