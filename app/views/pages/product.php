<?php

require APPROOT . '/views/inc/header.php';

?>
    


    <div class="flex justify-center gap-6 mt-5">
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#"> 
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?= $data['num']?> Product(s)</div>

                                                    <div class="mt-1 text-base text-gray-600">In stock</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

<!-- Card Product -->
<div class="mt-10 xl:mb-32 xl:mx-20 ">


<div class="bg-white rounded-lg shadow-md p-6">
  <h2 class="text-lg font-medium mb-4">Product List</h2>
  <div class="my-4 flex justify-end">
    <button class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded-md"><a href="<?= URLROOT . '/Products/add'; ?>">Add Product</a></button>
  </div>
  <table class="w-full text-left table-collapse">
    <thead>
      <tr>
      <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Image</th>
        <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Name</th>
        <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">stock</th>
        <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Price</th>
        <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data['products'] as $product) : ?>
      <tr class="odd:bg-gray-100 result_search">
      <td class="p-2"><img class="h-16 w-22" src="<?php echo URLROOT . '/images/upload/' .$product->image; ?>"></td>
        <td class="p-2 productName"><?php echo $product->name; ?></td>
        <td class="p-2"><?php echo $product->stock; ?></td>
        <td class="p-2"><?php echo $product->price; ?></td>
        <td class="p-2">
          <button class="text-indigo-500 hover:text-indigo-600 mr-2"><a href="<?= URLROOT . '/Products/edit/' . $product->id ?>">Edit</a></button>
          <button class="text-red-500 hover:text-red-600"><a href="<?= URLROOT . '/Products/delete/' . $product->id ?>">Delete</a></button>
        </td>
      </tr>
      <?php  endforeach; ?>
    </tbody>
  </table>
  
</div>




</div>




</body>
<script src="<?php echo URLROOT . '/js/main.js'; ?>" type="text/javascript"></script>

</html>
