<div class="user-section bg-neutral-900 shadow-inner-2xl h-48 flex flex-col justify-center content-center">
   
 <h1 class="patchwork2 font-bannerFont py-5  text-white text-center ">WhereTO</h1>
 <div class="ikonki inline-flex justify-self-center self-center mb-5" >

   <div>
      <a href="https://www.facebook.com/" class="h-20"><i class="fa-brands fa-facebook text-4xl text-white"></i></a>
   </div>
   <div class="mx-5">
      <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram text-4xl text-white "></i></a>
   </div>
   <div>
      <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube text-4xl text-white"></i></a>
      </div>
      
 </div>
 
 
</div>
<?php
if (!isset($_COOKIE['cookie_accepted'])) {
    ?>
    <div class="cookie-info" id="cookie-info">
                  Ta strona wykorzystuje pliki cookie. Kliknij przycisk poniżej, aby zaakceptować pliki cookie.
                
    
                  <button id="accept-cookies">Akceptuj pliki cookie</button>
              </div>
        <?php
} 
?>
<?php 
   wp_footer()
   ?>
   </body>
</html>
   