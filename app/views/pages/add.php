<!-- component -->
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="icon" type="image/png" href="/public/img/logo-1.png" />
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-gradient-to-r from-purple-100 via-pink-300 to-pink-600 font-[poppins] xl:mx-0 mx-2">

    <!-- container -->
    <section class="max-w-4xl p-6 mx-auto bg-pink-200 rounded-md shadow-md my-12">
        <h2 class="text-4xl font-bold capitalize text-center">Add Product</h2>

        <form action="<?php URLROOT . '/Products/add' ; ?>" method = "POST" id="form" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 xl:mx-28 ">
                <div>
                    <label for="name">Product Name</label>
                    <input id="name" name="name[]" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="stock">Stock</label>
                    <input id="stock" name="stock[]" type="number"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input id="price" name="price[]" type="number"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>
                <div>
                    <label  for="Description">Description</label>
                    <textarea id="Description" name="description[]" type="textarea"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring"></textarea>
                </div>
                <div>
                    <label class="block">
                        Product Image
                    </label>
                    
                    <input id="file-upload" name="image[]" type="file" class="">
                            
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <div>
                    <button>
                        <a href="<?= URLROOT . '/Products/product'?>" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-red-500 hover:bg-green-600 text-white transition ">
                            Cancel
                        </a>
                    </button>

                    <button
                        type="submit"
                        class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-green-500 hover:bg-green-600 text-white transition ">
                        Save
                    </button>
                  
                </div>

                <div>
                    <div
                    id="oneMore"
                        class="px-6 py-2  transform rounded-md focus:outline-none font-bold bg-indigo-500 hover:bg-indigo-600 text-white transition ">
                        Add Another Product
                    </div>
                </div>
            </div>
        </form>
    </section>



    <script src="<?php echo URLROOT . '/js/addMore.js'; ?>"></script>

</body>

</html>