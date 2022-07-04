<?php get_header('blog');?>

<div class="header_blog">
<?php the_post_thumbnail(); ?>
</div>
    <!-- single post -->
 <main class=" container py-5">
     
    <section class="sigle_post gallery ">
    <h2><?php the_title(); ?></h2>
    <?php the_content();?>
</section>
</main>

<?php get_footer();?>