<?php get_header();

?>
 <div class="banner-bg--posts relative flex flex-row justify-center items-center text-red-100 h-5/6 font-light">
   <div class=" banner-overlay" ></div>
  
     <h1 class="patchwork2 mb-4 font-bannerFont max-sm:text-3xl text-center px-6">Przygoda czeka tuż za rogiem!</h1>
   
     </div>
   </div>
   <div class="user-section bg-neutral-900 shadow-inner-2xl">
 <h3 class="patchwork2 font-bannerFont py-10 px-6  text-white text-center max-sm:text-3xl">Zanurz się w świat przygód razem z nami!</h3>
</div>
<?php
  while(have_posts()){
    the_post(); 
    $trimmedEcerpt = get_the_excerpt();
    ?>
     
  <section class="user-posts relative flex flex-row justify-center border-gold-600 border-b-2 overflow-hidden" >
      <div class="section-overlay bg-cover bg-center absolute z-[-1]" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()) ?>)" ></div>
      <div class="user-post  w-3/4 h-[83vh] py-10 flex flex-row max-lg:justify-center max-sm:w-11/12" >
   <div class=" content z-10 rounded w-1/2 ml-10 p-4 overflow-hidden max-lg:w-96 max-sm:w-full max-sm:ml-0">
     <h3 class="patchwork2 w-5/6 mb-4 text-white my-10 border-l-4 border-b-4 border-gold-600 pl-2 pb-2 max-sm:text-2xl"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
     <div class="max-xl:max-h-64 overflow-hidden max-sm:max-h-72">
       <p class="text-xl mr-8 mt-8 text-white font-extralight pl-4 max-sm:text-base"><?php echo $trimmedEcerpt; ?></p>
     </div>
   </div>
 </div>
  </section>
    <?php
  }
?>
<div class="flex flex-row justify-center font-bannerFont text-3xl py-5" >
  <?php the_posts_pagination() ?>
</div>

<?php get_footer() ?>
