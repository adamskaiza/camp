<?php
$feedback_slider_args = array(
  'post_type'   => 'opinie',
);

$feedback_slider = get_posts($feedback_slider_args);
?>
<section class="feedback">
    <section class="feedback__grid container">
        <article class="glide feedback-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php foreach ($feedback_slider as $post) : ?>
                    <?php setup_postdata($post); ?>

                    <li class="glide__slide">

                        <h3 class="h3"><?php the_title();?></h3>
                        <?php
                        the_excerpt();
                        the_content();
                        ?>
                    </li>

                    <?php wp_reset_postdata(); ?>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <?php $bullet = 0;?>
                <?php foreach ($feedback_slider as $post) : ?>
                <button class="glide__bullet" data-glide-dir="=<?php echo $bullet;?>"></button>
                <?php $bullet++ ;?>
                <?php endforeach;?>
            </div>
        </article>
        <img width="100%" height="auto" src="<?php echo get_stylesheet_directory_uri() . '/src/img/dziewcze.png';?>"
            alt="zdjęcie dziewczyny z laptopem z logiem Perspektywy Women In Tech">
    </section>
</section>