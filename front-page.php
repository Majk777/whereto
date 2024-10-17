<?php get_header();

?>
 <div class="banner-bg bg-cover bg-center relative flex flex-row justify-center items-end text-red-100 h-5/6 font-light">
 
   <div class=" banner-overlay" ></div>

     <div class="flex  m-12 w-3/4 h-1/2 box-border relative">
       <div class="border-wrapper w-1/2 absolute h-full"></div>
       <div class=" m-12 h-3/4 w-3/4 overflow-hidden max-sm:m-8" >
         <h1 class="patchwork2 mb-4 font-bannerFont max-sm:text-3xl">Przygoda czeka tuż za rogiem!</h1>
         <h3 class="patchwork2 mb-1 max-xl:text-2xl max-sm:text-xl ">Odkrywajmy świat wspólnie ze swoimi czworononami  i dzielmy się  doświadczeniami</h3>
       </div>
     </div>
   </div>

   <?php 
$queryArgs = array(
  'posts_per_page' => 3,'post_type' => 'post'
);
$blogQuery = new WP_Query($queryArgs);

?>

<!-- OTWARCIE SLAJDERA -->
<section class="slider-container h-3/4 relative max-lg:hidden"> 

  <!-- KLIP EFEKT ZAMYKAJĄCY -->
  <div class="clip-up bg-neutral-900 absolute w-full z-20"></div> 
  <div class="clip-down bg-neutral-900 absolute w-full bottom-0 z-20"></div>
  <!-- KLIP EFEKT ZAMYKAJĄCY -->

  <!-- GUZIKI DO PRZEWIJANIA SLAJDERA -->
 <span class="bg-gold-600 p-3 left-0 top-2/4 -translate-y-1/2  hover:bg-gold-200 cursor-pointer material-symbols-outlined absolute z-30" id="backButton">arrow_back_ios_new</span>
 <span class="bg-gold-600 p-3 right-0 top-2/4 -translate-y-1/2 hover:bg-gold-200 cursor-pointer material-symbols-outlined absolute z-30" id="forwardButton">arrow_forward_ios</span>
  <!-- GUZIKI DO PRZEWIJANIA SLAJDERA -->
 
  <!-- SLAJDER WRAPPER -->
 <div class="bg-neutral-900  slider-wrapper overflow-hidden flex flex-row justify-center h-full"> 
  

    <!-- WRAPPER DLA POSTÓW :::: NAKŁADKA NA PRAWDZIWY SLAJDER UKRYWAJĄCO GO -->
   <div class="post-wrapper w-3/4 h-5/6 place-self-center overflow-hidden">

    <!-- GŁÓWNY SLAJDER -->
    <div class=" slider flex flex-row slider1 h-full" id="slider"> 
   

<?php
  while($blogQuery->have_posts()){
    $blogQuery->the_post(); 
    $content = get_the_content();
    $trimmed_content = wp_trim_words($content, 55, '...');
    $bgImage = esc_url(get_the_post_thumbnail_url());
    ?>
    

      <article class=" post basis-full shrink-0 flex flex-row justify-between  ">
      <div class="image-cropp h-full w-5/12 ml-2">
        <img src="<?php echo $bgImage; ?>" alt="<?php echo esc_attr(get_the_title()) ?>" class="h-full object-cover">
      </div>
      <div class="post-content w-1/2  relative">
        <div class="border-wrapper-post w-3/4 absolute h-full z-0 "></div>
        <h3 class="patchwork2 mb-4 text-white my-10 relative z-10 pr-6 max-lg:text-2xl max-xl:mt-5 "><?php the_title() ?></h3>
        <p class="text-xl mr-8 mt-8 text-white font-extralight relative z-10 max-xl:mt-4"><?php echo $trimmed_content; ?></p>
        <a href="<?php echo get_permalink() ?>" class="text-white absolute z-10 hover:text-gold-600 my-5 right-20 bottom-0 max-xl:mb-1" ><h5 class="inline-block my-5">Czytaj dalej...</h5></a>
      </div>
     </article> 
   
    <?php
  }
?>
     
    </div> 
    <!-- GŁÓWNY SLAJDER -->
  </div>
  <!-- WRAPPER DLA POSTÓW -->
 
 </div> 
<!-- !-- SLAJDER WRAPPER --> 
</section>
<!-- ZAMKNIĘCIE SLAJDERA -->


<?php
 while($blogQuery->have_posts()){
  $blogQuery->the_post(); 
  $trimmedEcerpt = get_the_excerpt();
  ?>


  <section class="user-posts relative flex flex-row justify-center border-gold-600 border-b-2 overflow-hidden lg:hidden" >
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

<div class="fancy-fixed h-5/6 bg-cover bg-fixed bg-center text-center flex flex-col justify-center text-white" style="background-image: url(/wp-content/themes/whereTo3/assets/images/mountain-banner-light.jpg)">

<h1 class="registration-banner-h1 font-bannerFont"> <a href="<?php echo site_url('/kontakt') ?>" class="registration-banner" id="style-2" data-replace="Napisz do nas"><span >Podziel się z nami swoją historią!</span></a></h1>
</div>




<?php get_footer() ?>
