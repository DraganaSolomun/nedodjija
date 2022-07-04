<?php get_header('blog'); ?>

    <section class="header_blog">
    <?php the_post_thumbnail(); ?>
    </section>

    <!-- single post -->
 <main class="blog_post_flex container py-5">
     
    <section class="sigle_post ">
        <h2><?php the_title(); ?></h2>
        <p class="admin"><?php the_author_meta('display_name', 1); ?>
 | <?php echo get_the_date(); ?></p>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <div class="post singlePost">
                            <div class="card-body">
                          
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <?php _e('Nema postova'); ?>
                    <?php endif; ?>

                </div>
              
    </section>
   
  <aside>
  <?php get_sidebar(); ?>
  </aside>
 </main>
 
 <?php get_footer();?>