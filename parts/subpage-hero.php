<section class="subpage-hero">

    <section class="subpage-hero__grid">
        <section class="subpage-hero__col subpage-hero__col--left">
            <section class="subpage-hero-intro">
                <?php get_template_part( 'parts/breadcrumbs');?>
                <article>
                    <header class="subpage-hero-intro__header">
                        <?php if(get_post_type() !== 'page') :?>
                        <?php
                        switch (get_post_type()) {
                            case 'realizacje':
                                get_template_part('svg/realizacje');
                                break;
                            case 'praca':
                                get_template_part('svg/praca');
                                break;
                            case 'referencje':
                                get_template_part('svg/referencja');
                                break;
                            case 'post':
                                get_template_part('svg/post');
                                break;

                                default: get_template_part('svg/budownictwo-przemyslowe');
                        } else : ?>
                        <?php switch (get_the_ID()) {
                            case '30':
                                get_template_part('svg/budownictwo-przemyslowe');
                                break;
                            case '34':
                                get_template_part('svg/kontakt');
                                break;
                            case '9':
                                get_template_part('svg/budownictwo-mieszkaniowe');
                                break;
                            case '12':
                                get_template_part('svg/budownictwo-przemyslowe');
                                break;
                            case '14':
                                get_template_part('svg/modernizacje');
                                break;

                                default: get_template_part('svg/budownictwo-przemyslowe');
                        }
                    endif;?>
                        <h1><?php the_title();?></h1>
                    </header>
                    <p><?php the_excerpt();?></p>
                </article>
            </section>
        </section>
        <section class="subpage-hero__col subpage-hero__img">
            <?php echo get_the_post_thumbnail();?>
            <div class="page-down">
                <a href="#startread">
                    <?php get_template_part('svg/arrow');?>
                </a>
            </div>
        </section>
    </section>
</section>