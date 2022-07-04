<!-- footer -->
<footer class="py text-white text-center">
        <article class="container">
            <div class="row">

            <?php if(is_active_sidebar('footer-1')) :?>
    <?php dynamic_sidebar('footer-1');?>
    <?php endif;?>

    <?php if(is_active_sidebar('footer-2')) :?>
    <?php dynamic_sidebar('footer-2');?>
    <?php endif;?>

    <?php if(is_active_sidebar('footer-3')) :?>
    <?php dynamic_sidebar('footer-3');?>
    <?php endif;?>


            
            </div>
        </article>
    </footer>
    
    <!-- bottom bar -->
    <?php if(is_active_sidebar('bottom-bar')) :?>
    <?php dynamic_sidebar('bottom-bar');?>
    <?php endif;?>

    <?php wp_footer();?>
  </body>
</html>