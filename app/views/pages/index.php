<?php

require APPROOT . '/views/inc/header.php'

?>


<!-- !Start Section  -->

<div class="grid lg:grid-cols-2 items-center justify-items-center gap-5 bg-gradient-to-r from-purple-100 via-pink-300 to-pink-600 py-10 rounded-br-3xl  rounded-tl-3xl shadow-xl my-5 mx-2 xl:my-10 xl:mx-20">
  <div class="flex flex-col justify-center items-center">
      <span class="w-full text-center font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl ">
          GlowGuru 
      </span>
      <br><br>
      <span class="text-pink-700 w-full text-center font-bold text-1xl md:text-2xl lg:text-3xl xl:text-4xl">
          COSMETICS, BEAUTY PRODUCTS, FRAGRANCE AND TOOLS
      </span>
      <div class="pt-10 pb-10 w-3/4 text-center">
          <span class="text-gray-500 text-sm text-center md:text-md lg:text-lg xl:text-xl">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat, ipsam culpa inventore velit sequi eveniet numquam tempora labore ullam animi quia natus unde! Quae maiores possimus repellendus eius officia.
          </span>
      </div>
      
  </div>


  <div class="w-5/6  ">

      <img class="w-full rounded-br-3xl  rounded-tl-3xl" src="http://localhost/glowguru/public/images/home-image.jpg" alt="imge prd1">
  </div>
  
</div>

<!-- section Shop Skin Care  -->


<div class="mt-20 xl:mx-20">

    <div class=" flex flex-row justify-center items-center">
        
        
        <h2 class="ml-10 xl:ml-20 text-1xl md:text-2xl lg:text-3xl xl:text-4xl font-bold underline">Nos Produits </h2>
        
    </div>
</div>
    
<!-- Card Product -->
<div class="mt-10 mb-32 mx-40 ">
    <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-32 pt-6 ">
        <?php foreach($data['products'] as $product) : ?>
        <div class="flex flex-col items-center justify-center shadow-lg bg-neutral-100 rounded-br-3xl rounded-tl-3xl w-65 h-65" >
            <a href="#" >
                <img class="w-64 h-64 rounded-tl-lg rounded-tr-lg" src="http://localhost/glowguru/public/images/skinecare/1.webp" alt="imge prd1">
            </a>

            <!-- description section -->

           
            <div class="p-5 ml-4 flex flex-col items-center ">
                <div class="flex flex-col justify-center items-center text-center gap-2">
                     
                    <h2><a href="#" class="font-bold text-xl "><?php echo $product->name; ?></a></h2>
                    <h5 class="text-sm"><?php echo $product->description; ?></h5>
                   
                    <div class="flex flex-col items-center gap-4 mt-2 ">
                      <p class="productPrice"><span class="font-bold text-md">$ </span><?php echo $product->price; ?></p>
                      <div class="flex flex-row gap-5">

                       
                          <span class="bg-green-400 px-2 py-1 rounded-md text-sm">
                            Save 20%
                          </span>
                          
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
        
        
        
        
        
        
        <?php  endforeach; ?>
    </div>

</div>

<!-- End card product  -->


<?php


require APPROOT . '/views/inc/footer.php'

?>