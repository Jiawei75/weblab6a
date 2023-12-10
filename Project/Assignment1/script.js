// Function to update book details
function updateDetails(proTitle, imageSrc, productPrice) {
  document.getElementById('pro-title').textContent = proTitle;
  document.getElementById('image').src = imageSrc;
  document.getElementById('price').textContent = `RM${productPrice.toFixed(2)}`;
}

function addToCartAlert() {
  // Get the item details you want to add to the cart
  const proTitle = document.getElementById('pro-title').textContent;
  const imageSrc = document.getElementById('image').src;
  const productPrice = parseFloat(document.getElementById('price').textContent.replace("RM", ""));

  // Create an object to store the item details
  const newItem = {
      title: proTitle,
      image: imageSrc,
      price: productPrice,
      quantity: 1,
  };

  // Retrieve the existing cart items from localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Check if the item already exists in the cart
  const existingItemIndex = cart.findIndex(item => item.title === newItem.title);

  if (existingItemIndex !== -1) {
      // If the item exists, update the quantity
      cart[existingItemIndex].quantity += 1;
  } else {
      // If the item is not in the cart, add it with quantity 1
      cart.push(newItem);
  }

  // Update the cart in localStorage
  localStorage.setItem("cart", JSON.stringify(cart));

  // Display an alert message
  alert("Added To The Cart Successfully !");

  // Update the cart display on the cart page
  displayCart();
}

function alertBuy() {
  alert("Processing ... Please Wait.");
}

function alertDone(){
  alert("Payment Successfull !")
}




