
// -------------------ADD Multiple Insert----------------------


let addMoreBtn = document.getElementById('oneMore');
let form = document.getElementById('form');

addMoreBtn.addEventListener('click', showForm);

function showForm(e) {
    // cancel the event of the button that send form information
    e.preventDefault();

    // create new element
    const newform = document.createElement('div');

    // insert into div that created this html
            newform.innerHTML = `
            <div class="font-bold mt-5">
            <hr class="bg-red-500">
            <p class="text-center mt-5">Add new Product</p>
            </div>
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
        </div>`;

    // insert the newForm before the lase element childe inside form
    form.insertBefore(newform,form.lastElementChild);
 
}