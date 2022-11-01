<?php $component_content = $args['component_content'];?>
<article class="program__component program-component">
    <div class="program-component__what">
        <p class="program-component__timing"><?php echo $args['timing'];?></p>
        <h4 class="program-component__title"><?php echo $args['title'];?></h4>
    </div>

    <?php foreach($component_content as $content) :?>
    <?php if( $content['acf_fc_layout'] == 'simple_section' ): ?>
    <?php echo $content['simple_section_content'];?>
    <?php elseif($content['acf_fc_layout'] == 'acc' ) :?>
    <?php get_template_part('parts/program-acc-cart', null, [
    'acc_cart' => $content['acc_cart'],
   ])
   ?>
    <?php endif;?>
    <?php endforeach;?>


</article>