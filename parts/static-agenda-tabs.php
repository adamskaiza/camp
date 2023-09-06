<?php $agenda = $args['custom_field'];?>
<pre>
    <?php //var_dump($agenda);?>
</pre>

<section class="tabs program-tabs">
    <header class="program-tabs__header container">
        <h1 class="h2">PROGRAM</h1>
        <nav class="program-tabs__nav tabs-nav">
            <ul>
                <li class="program-tabs__item">
                    <button value="<?php echo $agenda['program_one']['heading'];?>"
                        class="program-tabs__link tabs-link tabs-link--active"><?php echo $agenda['program_one']['heading'];?></button>
                </li>
                <li class="program-tabs__item">
                    <button value="<?php echo $agenda['program_two']['heading'];?>"
                        class="program-tabs__link tabs-link tabs-link--active"><?php echo $agenda['program_two']['heading'];?></button>
                </li>
                <li class="program-tabs__item">
                    <button value="<?php echo $agenda['program_three']['heading'];?>"
                        class="program-tabs__link tabs-link tabs-link--active"><?php echo $agenda['program_three']['heading'];?></button>
                </li>
                <li class="program-tabs__item">
                    <button value="<?php echo $agenda['program_four']['heading'];?>"
                        class="program-tabs__link tabs-link tabs-link--active"><?php echo $agenda['program_four']['heading'];?></button>
                </li>
            </ul>
        </nav>
    </header>

    <div class="program-tabs__panel tabs-panel">

        <article data-display="<?php echo $agenda['program_one']['heading'];?>"
            class="program-tabs__content program-tabs__content--1 tabs-content tabs-content--visible">
            <article class="program-tabs__banner">
                <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/dzien1.jpg';?>" alt="Baner tabu">
                <h1 class="program-tabs__title container">
                    <?php echo $agenda['program_one']['title'];?>
                </h1>
                <h2 class="container">Dzień 1.</h2>
            </article>
            <article class="program-tabs__line"
                style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/src/img/hex_dzien_1.png';?>)">
                <div class="program-tabs__line-wrapper container">
                    <section class="program__program program">
                        <?php if($agenda['program_one']['components']): ?>
                        <?php foreach ($agenda['program_one']['components'] as $program_component): ?>
                        <?php $counter = 1;?>
                        <?php get_template_part('parts/program-component', null, [
                            'timing' =>  $program_component['timing'],
                            'title' =>  $program_component['component_title'],
                            'component_content' => $program_component['component_content'],
                            'counter' => $counter,
                            ]);?>
                        <?php $counter++;?>
                        <?php endforeach;?>
                        <?php endif;?>
                    </section>
                </div>
            </article>
        </article>

        <article data-display="<?php echo $agenda['program_two']['heading'];?>"
            class="program-tabs__content program-tabs__content--2 tabs-content">
            <article class="program-tabs__banner">
                <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/dzien2.jpg';?>" alt="Baner tabu">
                <h1 class="program-tabs__title container">
                    <?php echo $agenda['program_two']['title'];?>
                </h1>
                <h2 class="container">Dzień 2.</h2>
            </article>
            <article class="program-tabs__line"
                style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/src/img/hex_dzien_2.png';?>)">
                <div class="program-tabs__line-wrapper container">
                    <section class="program__program program">
                        <?php if($agenda['program_two']['components']): ?>
                        <?php foreach ($agenda['program_two']['components'] as $program_component): ?>
                        <?php $counter = 1;?>
                        <?php get_template_part('parts/program-component', null, [
                            'timing' =>  $program_component['timing'],
                            'title' =>  $program_component['component_title'],
                            'component_content' => $program_component['component_content'],
                            'counter' => $counter,
                            ]);?>
                        <?php $counter++;?>
                        <?php endforeach;?>
                        <?php endif;?>
                    </section>
                </div>
            </article>
        </article>

        <article data-display="<?php echo $agenda['program_three']['heading'];?>"
            class="program-tabs__content program-tabs__content--3 tabs-content">
            <article class="program-tabs__banner">
                <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/dzien3.jpg';?>" alt="Baner tabu">
                <h1 class="program-tabs__title container">
                    <?php echo $agenda['program_three']['title'];?>
                </h1>
                <h2 class="container">Dzień 3.</h2>
            </article>
            <article class="program-tabs__line"
                style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/src/img/hex_dzien_3.png';?>)">
                <div class="program-tabs__line-wrapper container">
                    <section class="program__program program">
                        <?php if($agenda['program_one']['components']): ?>
                        <?php foreach ($agenda['program_three']['components'] as $program_component): ?>
                        <?php $counter = 1;?>
                        <?php get_template_part('parts/program-component', null, [
                            'timing' =>  $program_component['timing'],
                            'title' =>  $program_component['component_title'],
                            'component_content' => $program_component['component_content'],
                            'counter' => $counter,
                            ]);?>
                        <?php $counter++;?>
                        <?php endforeach;?>
                        <?php endif;?>
                    </section>
                </div>
            </article>
        </article>

        <article data-display="<?php echo $agenda['program_four']['heading'];?>"
            class="program-tabs__content program-tabs__content--4 tabs-content">
            <article class="program-tabs__banner">
                <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/dzien4.jpg';?>" alt="Baner tabu">
                <h1 class="program-tabs__title container">
                    <?php echo $agenda['program_four']['title'];?>
                </h1>
                <h2 class="container">Dzień 4.</h2>
            </article>
            <article class="program-tabs__line"
                style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/src/img/hex_dzien_4.png';?>)">
                <div class="program-tabs__line-wrapper container">
                    <section class="program__program program">
                        <?php if($agenda['program_four']['components']): ?>
                        <?php foreach ($agenda['program_four']['components'] as $program_component): ?>
                        <?php $counter = 1;?>
                        <?php get_template_part('parts/program-component', null, [
                            'timing' =>  $program_component['timing'],
                            'title' =>  $program_component['component_title'],
                            'component_content' => $program_component['component_content'],
                            'counter' => $counter,
                            ]);?>
                        <?php $counter++;?>
                        <?php endforeach;?>
                        <?php endif;?>
                    </section>
                </div>
            </article>
        </article>
    </div>
</section>