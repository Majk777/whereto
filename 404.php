<?php get_header();

?>
<div class="h-3/4 flex flex-row justify-center content-center flex-wrap bg-red-500">

<h1 class="font-bannerFont px-10 max-sm:text-3xl text-center" >ERROR 404: PAGE NOT FOUND!!!!!!!!</h1>

<?php
if (isset($_COOKIE['cookie_accepted'])) {
   
    echo 'cookie is set';
    echo $_COOKIE['cookie_accepted'];
} else {
    
    echo 'cookie not set';
    ?>
<div class="cookie-info" id="cookie-info">
              Ta strona wykorzystuje pliki cookie. Kliknij przycisk poniżej, aby zaakceptować pliki cookie.
             

              <button id="accept-cookies">Akceptuj pliki cookie</button>
          </div>
    <?php
}
?>
<?php 
$protipQ = new WP_Query( array(
    'post_type' => 'protips','posts_per_page' => 3));

    while($protipQ->have_posts()){
        $protipQ->the_post(); ?>
<p><?php the_title() ?></p>
<p><?php echo wp_trim_words(get_the_content(),5) ?></p>
<h3 class="patchwork2 w-5/6 mb-4 text-white my-10 border-l-4 border-b-4 border-gold-600 pl-2 pb-2 max-sm:text-2xl"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
        <?php
    };
?>
</div>
<?php 

?>
<?php get_footer() ?>

