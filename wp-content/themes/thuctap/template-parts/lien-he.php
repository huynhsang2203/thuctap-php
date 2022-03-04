<?php 
/*
Template Name: Liên hệ
 */
?>
<?php
get_template_part( 'background' );
?>


<?php get_header(); ?>

<?php
    if( have_posts() ) : while( have_posts() ) : the_post();
            /*
             * Nội dung hiển thị bài viết
             */
            the_content( );


        endwhile; endif;
?>

<?php get_footer(); ?>


