<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/whereTo3/assets/images/dog-paw.svg">
    <title>WhereTo</title>
    
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="h-screen">

<header id="main-header" class="text-white flex flex-row justify-center items-center h-24 absolute w-full border-b overflow-hidden bg-black bg-opacity-10 z-50  max-sm:items-start max-sm:fixed max-sm:bg-neutral-900">
      <div class="wrapper flex flex-row w-3/4 justify-between">

        <h1 class=" text-3xl p-3 m-2 " > <a href="<?php echo site_url('/') ?>"><strong>Where</strong>To</a></h1>
        <nav class="main-navigation uppercase flex flex-row items-center max-sm:flex-col max-sm:text-wrap">
          <i class="fa-solid fa-bars p-3 m-2 sm:invisible text-4xl leading-8 cursor-pointer " id="active-burger"></i>
         
          <ul class="flex flex-row  whitespace-nowrap max-sm:flex-col ">
            <li class=" p-3 m-2 font-light max-sm:text-center"><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
            <li class=" p-3 m-2 font-light max-sm:text-center"><a href="<?php echo site_url('/about') ?>">O nas</a></li>
           
            <li class=" p-3 m-2 font-light max-sm:text-center"><a href="<?php echo get_post_type_archive_link('protips') ?>">Porady</a></li>
          </ul>
          <a href="<?php echo site_url('/kontakt') ?>" class= p-3 m-2 max-h-16 basis-1/4"><div class="font-light">Kontakt</div></a>
        </nav>
        
      </div>
    </header>
