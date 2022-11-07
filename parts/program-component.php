<?php $component_content = $args['component_content'];?>
<article class="program__component program-component">
    <div class="program-component__what">
        <p class="program-component__timing"><?php echo $args['timing'];?></p>
        <div class="program-component__title"><?php echo $args['title'];?></div>
    </div>
    <div class="program-component__desc">
        <?php if($component_content) : ?>
        <?php foreach($component_content as $content) :?>
        <?php if( $content['acf_fc_layout'] == 'simple_section' ): ?>
        <?php echo $content['simple_section_content'];?>
        <?php elseif($content['acf_fc_layout'] == 'acc' ) :?>
        <?php get_template_part('parts/program-acc-cart', null, [
        'acc_cart' => $content['acc_cart'],
        'acc_id' => strip_tags($args['title']),
       ])
       ?>
        <?php endif;?>
        <?php endforeach;?>

        <?php endif;?>
    </div>
</article>