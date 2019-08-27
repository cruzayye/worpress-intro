<?php get_header(); ?>
<?php 
//Customized Query
$args = array(
  'post-type' => 'project'
);
$blogPosts = new WP_Query($args);
//have_posts and the_posts are wp hooks 
  while($blogPosts->have_posts()) {
    $blogPosts->the_post();
?>
  <a href="<?php the_permalink(); ?>">
  <h3><?php the_title();?></h3>
  </a>
  <?php
  
  }
?>
<?php get_footer(); ?>

