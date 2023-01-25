

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css"  rel="stylesheet" />
    <link href="http://localhost/GlowGuru/assets/css/style.css" >
    <script src="https://cdn.tailwindcss.com"></script>

    <title>GlowGuru</title>
    <link rel="icon" href="http://localhost/glowguru/public/images//logo.png">
</head>
<body class="bg-gray-200 font-[poppins]">
    
<!-- !----- start Header section ------- -->
   
        <nav class="bg-white sm:px-4 py-2.5 dark:bg-gray-900 relative w-full top-0 left-0 shadow-lg dark:border-gray-600 rounded-bl-lg rounded-tr-lg">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="<?= URLROOT . '/pages/index'?>" class="flex items-center md:order-1">
                    <img src="http://localhost/glowguru/public/images//logo.png" class="w-36" alt="Site Logo">
                    
                </a>

                <div class="flex gap-10 md:order-1 font-bold">
                <!-- <a href="<?= URLROOT . '/pages/product'?>">GESTION</a></button> -->
                    
                <?php if(isset($_SESSION['user_id'])) : ?>

                    <a href="<?= URLROOT . '/Products/product'?>">GESTION</a></button>


                    <?php endif; ?>

                </div>

                <div class="flex md:order-2">
                    
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            </svg>
                        </div>
                        <input id="search" class="form-input py-2 pl-10 pr-4 block w-full leading-5 rounded-md transition duration-150 ease-in-out bg-white border border-gray-300 placeholder-gray-500 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" placeholder="Search...">
                    </div>
                    
                    <div class="flex flex-row">
                    
                    <?php if(isset($_SESSION['user_id'])) : ?>

                        <button  type="button" class=" flex flex-row justify-center items-center text-black ml-5  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600  font-bold"  ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg><span class="text-blue-700 ml-2"></span><a href="<?= URLROOT . '/Users/logout'?>">LOGOUT</a></button>

                        <?php else : ?>
                        <button  type="button" class=" flex flex-row justify-center items-center text-black ml-5  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600  font-bold"  ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg><span class="text-blue-700 ml-2"></span><a href="<?= URLROOT . '/Users/login'?>">LOGIN</a></button>

                        <?php endif; ?>
                    </div>
                        

                </div>
                   
                
            </div>
        </nav>
        

<!-- !-----End Header section ------- -->
