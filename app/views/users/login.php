<?php

require APPROOT . '/views/inc/header.php'

?>
    


<section class="bg-gray-200 min-h-screen flex items-center justify-center">

    <!-- login container -->

  <div class="w-5/6 bg-pink-200 flex justify-center items-center rounded-2xl shadow-lg max-3xl p-3 xl:w2/4">

    <!-- form -->

    <div class="grid grid-cols-2 p-6">
      <div class="w-full">

        <h2 class="font-bold text-6xl">Login</h2>
        <div>
          <p class="text-xl mt-5"> WELCOME BACK ADMIN !</p>
        </div>
  
        <form action="<?= URLROOT . '/Users/login'?>" method="POST" class="flex flex-col justify-center  gap-4 xl:w-2/3">
          <div class="flex flex-col">
            <input class="p-2 mt-8 rounded-xl border " type="email" name="email" placeholder="Email">
            <span class="w-fit text-red-700"> <?php echo $data["email_err"]; ?></span>
          </div>
            <div class="relative">
              <input class="p-2 rounded-xl border w-full " type="password" name="password" placeholder="Password">
              <span class="w-fit text-red-700"> <?php echo $data["password_err"]; ?></span>
              
            </div>
            <button class="bg-blue-300 rounded-xl border py-2 w-1/2 hover:scale-110"><a href="<?= URLROOT . '/Products/product'?>">LOGIN</a></button>
  
  
  
  
        </form>
      </div>
      <div class="sm:block hidden w-full">
          <img class="rounded-2xl " src="http://localhost/glowguru/public/images//bg-prd (1).png" alt = "login Image">
    </div>

    </div>

    <!-- image -->

    
    
  </div>
  </section>



  </body>
</html>