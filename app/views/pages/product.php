<?php

require APPROOT . '/views/inc/header.php'

?>
    




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
      <tr class="odd:bg-gray-100">
      <td class="p-2"><img class="h-16 w-22" src="<?php echo URLROOT . '/images/upload/' .$product->image; ?>"></td>
        <td class="p-2"><?php echo $product->name; ?></td>
        <td class="p-2"><?php echo $product->stock; ?></td>
        <td class="p-2"><?php echo $product->price; ?></td>
        <td class="p-2">
          <button class="text-indigo-500 hover:text-indigo-600 mr-2"><a href="<?= URLROOT . '/Products/edit'?>">Edit</a></button>
          <button class="text-red-500 hover:text-red-600">Delete</button>
        </td>
      </tr>
      <?php  endforeach; ?>
    </tbody>
  </table>
  
</div>




</div>

</body>

</html>
