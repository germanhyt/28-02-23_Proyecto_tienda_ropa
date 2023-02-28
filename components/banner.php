<?php

function banner($title, $imageMobile = "", $imageDesktop = "", $altText = "")
{ ?>
  <div class="mb-16 md:mb-40 lg:mb-0 lg:container  pt-11 ">
    <div class=" relative flex items-center  lg:h-[450px]">
      <div class="w-full  bg-primary-100  lg:translate-x-[-80px]  top-44 md:top-52 h-[200px] md:h-[200px] left-0">
        <div class="flex lg:items-center pt-8 lg:pt-0 justify-center lg:justify-start  h-full pl-0 lg:pl-20 xl:pl-32 2xl:pl-56">
          <h1 class="text-center text-2xl lg:text-4xl  text-white"><?php echo $title; ?></h1>
          <picture class="absolute m-auto top-[50%] lg:top-[initial] left-0 right-0 lg:left-[initial] lg:right-[-84px]">
            <source class="max-w-[250px] md:max-w-[350px] m-auto lg:max-w-[450px] xl:max-w-[600px]" media="(min-width:1024px )" srcset="<?php echo $imageDesktop; ?>">
            <source class="max-w-[250px] md:max-w-[350px] m-auto lg:max-w-[450px] xl:max-w-[600px]" media=" (min-width:768px )" srcset="<?php echo $imageDesktop; ?>">
            <img class="max-w-[250px] md:max-w-[350px] m-auto lg:max-w-[450px] xl:max-w-[600px]" src="<?php echo $imageMobile; ?>" alt="<?php echo $altText; ?>">
          </picture>
        </div>
      </div>
    </div>
  </div>

<?php } ?>