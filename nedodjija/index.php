<?php get_header('blog');?>

<div class="header_blog">
<?php the_post_thumbnail(); ?>
</div>
<!-- novosti arhiva -->
<section class="novosti py">
    <article class="container ">

        <div class="row">
           <div class=" py-4 col-md-4 ">
                <h2><?php the_field('novosti_naslov'); ?></h2>
            </div>
        </div>
        <div class="blog_post_flex">

            <div class="card_flex">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card  p-0" style="width:400px">
                    <a href="<?php the_permalink();?>" class="featured_img">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>


                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink();?>" class="btn btn-primary"><?php _e('Procitaj vise')?></a>
                    </div>
                </div>
                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Nema blog postova' ); ?></p>
                <?php endif; ?>
            </div>
            <?php get_sidebar()?>
        </div>


       
        </div>
        </div>
    </article>
</section>
<?php get_footer();?>