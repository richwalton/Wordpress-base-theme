

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <?php echo get_the_date('n/d/Y');?>

    <?php the_content();?>
    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>

    <p>Author:  <?php echo $fname; ?> <?php echo $lname; ?></p>

    <span>Tags: 
    <?php 
    $tags = get_the_tags();
    if($tags):
    foreach($tags as $tag):?>

      <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
            <?php echo $tag->name;?>
      </a>

    <?php endforeach; endif;?>
    </span></br>


    <span>Categories:
    <?php 
    $categories = get_the_category();
    foreach($categories as $cat):?>
        <a href="<?php echo get_category_link($cat->term_id);?>" class="badge badge-primary">
            <?php echo $cat->name;?>
        </a>
    <?php endforeach;?>
    </span>
        <!-- Blog comments -disabled -->
    <?php //comments_template();?>
;
<?php endwhile; else: endif;?>