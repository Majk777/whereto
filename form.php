<?php /* Template Name: contact Template */ ?>
<?php get_header();  ?>
<div class="banner-bg--about bg-cover bg-center relative flex flex-row justify-center items-center text-red-100 h-5/6 font-light">
   <div class=" banner-overlay" ></div>
 
     </div>
   </div>
   <div class="user-section bg-neutral-900 shadow-inner-2xl">
 <h3 class=" font-bannerFont py-10  text-white text-center px-3 max-sm:text-3xl">Zanurz się w świat przygód razem z nami!</h3>
</div>
<section class="m-12 h-2/3  flex flex-row justify-center ">
  
  <?php echo get_the_content()?> 

  <div class="flex flex-row justify-center ">
  <form class=" m-6 p-6">
   
      
      <h3 class="mb-4 font-bannerFont pl-2" >Skontaktuj się z nami</h3>
         
            <div class="flex flex-row max-sm:flex-col" >
            <input type="text" 
           class="border-b-2  px-4 py-2 focus:outline-none focus:ring-0 focus:border-b-2 focus:border-black mr-4"
           placeholder="Imię" required />
        <input type="email" placeholder="email" required class="border-b-2  px-4 py-2 focus:outline-none focus:ring-0 focus:border-b-2 focus:border-black">
            </div>
     <div>
      <textarea required
      class="border-b-2  px-4 py-2 focus:outline-none focus:ring-0 focus:border-b-2 focus:border-black resize-none w-full mt-4 h-52"
      placeholder="Treść wiadomości"></textarea>
     </div>
    
      <button class="patchwork1  bg-black text-white w-40 h-14" >Wyślij</button>
           
   
  </div>
</form>

</section>
<?php get_footer() ?>