function incrementQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
}

function decrementQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}

// function addToCart() {
//     var selectedSize = document.getElementById('size').value;
//     var selectedQuantity = document.getElementById('quantity').value;

//     // Add your logic here to handle adding to the cart
//     console.log("Size: " + selectedSize + ", Quantity: " + selectedQuantity + " added to cart.");
// }
