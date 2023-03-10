console.log(12);
// get input field
let searchInput = document.getElementById("search");
var items = document.querySelectorAll(".result_search");

console.log(items);

// add event click on input field
searchInput.addEventListener('input', listerItems);


function listerItems() {
    // get input value and make it lower case
    let filterdInput = searchInput.value.toLowerCase();
    // get all items

    // loop in items and show the element that we want
    items.forEach((ele) => {
        // get product name from items
        let textEle = Object.values(ele.getElementsByClassName('productName'))[0].textContent;
        // compare the items name with the input value
        if (textEle.toLowerCase().includes(filterdInput)) {
            ele.style.display = '';
        } else {
            ele.style.display = "none";
        }
    })
}

