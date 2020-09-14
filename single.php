<?php get_header( ) ;?>

<section class="page-wrap">
<div class="container">

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" <?php the_title();?> class="img-fluid img-thumbnail"> 
    <?php endif;?>

    <h1><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'blog-content');?>
    <!-- Breaking up a single post into seperate pages -->
    <?php wp_link_pages();?>
    
</div>
</section>


<?php get_footer( ) ;?>