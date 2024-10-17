<?php get_header();



while(have_posts()){
    the_post();
    $obrazek = get_the_post_thumbnail();

    
    ?>
   
   <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="<?php echo esc_attr(get_the_title()) ?>">


<div class="user-section bg-neutral-900 shadow-inner-2xl">
 <h3 class="patchwork2 font-bannerFont py-10  text-white text-center text-5xl"><?php  the_title() ?></h3>
</div>

<div class="flex flex-row justify-center" >
<div class="post-container w-8/12 text-2xl	leading-relaxed max-sm:text-lg max-sm:w-10/12" ><?php the_content() ?></div>
</div>
    
<div class="comment-wrapper  flex flex-row justify-center" >
        <?php comments_template() ?>
    </div>
    
    <?php
        };
    ?>

   
  
<?php get_footer() ?>
