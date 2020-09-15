<?php 

    $args =[
        'post_type' => 'cars',
    ];

    $query = new WP_Query($args);

?>

<?php if( $query->have_posts() ): ?>

    <?php while( $query->have_posts() ) : $query->the_post();?>

        <div class="card mb-3">

            <div class="card-body">
                <a href="<?php the_post_thumbnail_url('blog-large');?>">
                    <img src="<?php the_post_thumbnail_url('blog-small');?>" <?php the_title();?> class="img-fluid img-thumbnail">
                </a> 

                <h3><?php the_title();?></h3>
                <?php the_field('color');?>


            </div>

        </div>
        
    <?php endwhile?>
<?php endif?>