<?php get_header();?>

<!-- slider -->
<div id="carouselExampleCaptions " class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php the_field('slider_slika_1'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p class="animate__animated animate__slideInLeft"><?php the_field('slider_text_1'); ?></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php the_field('slider_slika_2'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p class="animate__animated animate__slideInRight"><?php the_field('slider_text_2'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</button>

</div>

<!-- mobile header -->
<div class="mobileHeader">
    <img src="<?php echo get_template_directory_uri(); ?>/slike/slider1.jpg" alt="">
</div>
<!-- uvod -->
<section class="uvod py2">
    <article class="container">

        <div class="row">
            <div class="col-md-4">
                <h2><?php the_field('o_nama_naslov'); ?></h2>
            </div>
            <div class="col-md-8 mt-3 ">
                <p><?php the_field('paragraf_o_nama'); ?>
            </div>

        </div>

    </article>
</section>

<!-- video -->
<section class="video py2  ">
    <article class="container ">
        <h2><?php the_field('video_naslov'); ?></h2>
        <div class="video-container data-mdb-delay ">
            <?php the_field('video'); ?>
        </div>
    </article>
</section>

<!-- novosti -->
<section class="novosti py2">
    <article class="container">

        <div class="row">
            <div class=" py-4 col-md-4 ">
                <h2><?php the_field('novosti_naslov'); ?></h2>
            </div>
        </div>

        <div class="d-flex flex-row flex-wrap justify-content-start">

            <?php $query = new WP_Query(array('post_type' => 'post'));
            if($query -> have_posts()) : ?>

            <?php while($query->have_posts()) : $query->the_post();?>

            <div class="card  p-0" style="width:400px">
                <a href="<?php the_permalink();?>" class="featured_img">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink();?>" class="btn btn-primary">
                    <?php _e('Procitaj vise')?>
                  </a>
                </div>
            </div>
          
       
            <?php endwhile; wp_reset_postdata();?>
            <?php else: ?>
              <?php _e('Nema postova');?>
            <?php endif; ?>


        </div>

    </article>
</section>
<!-- rezervacija -->
<section class="rezervacija">


    <?php if(is_active_sidebar('rezervacija')) :?>
    <?php dynamic_sidebar('rezervacija');?>
    <?php endif;?>




</section>

<!-- mapa -->
<?php if(is_active_sidebar('mapa')) :?>
<?php dynamic_sidebar('mapa');?>
<?php endif;?>
<!-- <section class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55000.80241316653!2d18.963446430288208!3d45.668306480503546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cc75a09b82ced%3A0x51f4457574a761b9!2sSeosko%20doma%C4%87instvo%20Nedodjija!5e0!3m2!1sbs!2srs!4v1649785399606!5m2!1sbs!2srs" width="100%" height="450" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="myframe" ></iframe>
    </section> -->

<?php get_footer();?>