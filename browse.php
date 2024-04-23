<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>House of Justice | Books</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet"> 


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Custom CSS for modal */
        #cart-modal .modal-dialog {
            width: 100%;
            max-width: 100%;
        }

        #cart-modal .modal-content {
            width: 100%;
        }

        #cart-modal .modal-body {
            max-height: calc(100vh - 200px); /* Adjust height as needed */
            overflow-y: auto;
        }

        </style>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include('nav.php') ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">HOJ Books</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Store</a></li>
                    <li class="breadcrumb-item active text-primary">Books</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0"> Books</h4>
            </div>
            <h1 class="display-3 mb-4"></h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded position-relative" data-id="1" data-name="Book 1" data-price="1000" data-description="Description of Book 1">
                    <div class="team-img rounded-top h-100 position-relative">
                        <img src="img/law.webp" class="img-fluid rounded-top w-100" style="height: 350px" alt="">
                        <div class="team-icon d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle-x">
                            <a style="padding: 30px 30px; font-size: 25px; " class="btn btn-square btn-primary text-white rounded-circle mx-1 btn-lg" onclick="addToCart(this)"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4 position-relative">
                        <h5>Book 1</h5>
                        <p class="mb-2">Lorem Ipsum</p>
                        <strong>NGN 1000</strong>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded position-relative" data-id="2" data-name="Book 2" data-price="2000" data-description="Description of Book 2">
                    <div class="team-img rounded-top h-100 position-relative">
                        <img src="img/law.webp" class="img-fluid rounded-top w-100" style="height: 350px" alt="">
                        <div class="team-icon d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle-x">
                            <a style="padding: 30px 30px; font-size: 25px; " class="btn btn-square btn-primary text-white rounded-circle mx-1 btn-lg" onclick="addToCart(this)"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4 position-relative">
                        <h5>Book 2</h5>
                        <p class="mb-2">Lorem Ipsum</p>
                        <strong>NGN 2000</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded position-relative" data-id="3" data-name="Book 3" data-price="3000" data-description="Description of Book 3">
                    <div class="team-img rounded-top h-100 position-relative">
                        <img src="img/law.webp" class="img-fluid rounded-top w-100" style="height: 350px" alt="">
                        <div class="team-icon d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle-x">
                            <a style="padding: 30px 30px; font-size: 25px; " class="btn btn-square btn-primary text-white rounded-circle mx-1 btn-lg" onclick="addToCart(this)"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4 position-relative">
                        <h5>Book 3</h5>
                        <p class="mb-2">Lorem Ipsum</p>
                        <strong>NGN 3000</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded position-relative" data-id="4" data-name="Book 4" data-price="4000" data-description="Description of Book 4">
                    <div class="team-img rounded-top h-100 position-relative">
                        <img src="img/law.webp" class="img-fluid rounded-top w-100" style="height: 350px" alt="">
                        <div class="team-icon d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle-x">
                            <a style="padding: 30px 30px; font-size: 25px; " class="btn btn-square btn-primary text-white rounded-circle mx-1 btn-lg" onclick="addToCart(this)"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4 position-relative">
                        <h5>Book 4</h5>
                        <p class="mb-2">Lorem Ipsum</p>
                        <strong>NGN 4000</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button id="cart-toggle" class="btn btn-primary btn-lg rounded-circle position-fixed bottom-0 end-0 m-4">
    <i class="fas fa-shopping-cart"></i>
    <span id="cart-notification" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
</button>

<div id="cart-modal" class="modal fade" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row g4">
            <div class="col-md-8 col-lg-8 col-xl-8">
            <div id="cart-items" class="modal-body">
                <!-- Your existing code for the shopping cart display -->
            </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4" id="payment">
                
            </div>
            
            </div>
            <div class="form-submit">
                    <button class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1" type="submit" onclick="payWithPaystack()"> Pay </button>
            </div>

<script src="https://js.paystack.co/v1/inline.js"></script>
    <div>
    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Checkout</button>
            </div>
        </div>
    </div>
</div>


<?php include("footer.html") ?>

<script>
    // Array to store cart items
    let cartItems = [];

    // Function to add item to cart
    function addToCart(button) {
        let item = button.closest('.team-item');
        let id = item.getAttribute('data-id');
        let name = item.getAttribute('data-name');
        let price = parseFloat(item.getAttribute('data-price'));
        let description = item.getAttribute('data-description');
        let quantity = 1; // Default quantity to 1

        // Check if item already exists in cart
        let existingItemIndex = cartItems.findIndex(item => item.id === id);
        if (existingItemIndex !== -1) {
            cartItems[existingItemIndex].quantity += quantity;
        } else {
            cartItems.push({
                id: id,
                name: name,
                price: price,
                description: description,
                quantity: quantity
            });
        }

        // Update the notification badge with the total quantity of unique items in the cart
        let notificationBadge = document.getElementById('cart-notification');
        notificationBadge.textContent = calculateTotalQuantity();

        // Update the cart display
        updateCart();
    }

    // Function to remove item from cart
    function removeFromCart(itemId) {
        cartItems = cartItems.filter(item => item.id !== itemId);

        // Update the notification badge with the total quantity of unique items in the cart
        let notificationBadge = document.getElementById('cart-notification');
        notificationBadge.textContent = calculateTotalQuantity();

        // Update the cart display
        updateCart();

        let totalCost = calculateTotalPrice();

// Use a callback function to ensure addAdditionalContent is executed after the content is added
        setTimeout(() => {
            addAdditionalContent(totalCost);
        }, 0);
    }

    // Function to calculate the total quantity of unique items in the cart
    function calculateTotalQuantity() {
        let totalQuantity = 0;
        let uniqueItems = new Set(cartItems.map(item => item.id));
        uniqueItems.forEach(itemId => {
            let itemQuantity = cartItems.find(item => item.id === itemId).quantity;
            totalQuantity += itemQuantity;
        });
        return totalQuantity;
    }

    function calculateTotalPrice() {
    let totalPrice = 0;
    cartItems.forEach(item => {
        totalPrice += item.price * item.quantity;
    });
    return totalPrice.toFixed(2); // Return total price rounded to 2 decimal places
}

function addAdditionalContent(totalCost) {
    let paymentElement = document.getElementById('payment');
    paymentElement.innerHTML = ''; // Clear the payment element

    if (!document.getElementById('paymentForm')) {
        let additionalContent = `
            <div class="col-md-12">
                <h5>Additional Information</h5>
                <div class="col-md-4 col-lg-4 col-xl-4" id="paymentForm">
                <form id="paymentForm">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email-address" required />
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="tel" id="amount" value=${totalCost} required />
                </div>
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" />
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" />
                </div>
                
            </form>
                    
                </div>
            </div>
        `;
        paymentElement.insertAdjacentHTML('beforeend', additionalContent);
    }
}


    // Function to update cart display
    function updateCart() {
        let cartElement = document.getElementById('cart-items');
        cartElement.innerHTML = '';

        let totalCost = 0;
        cartItems.forEach(item => {
            let itemCost = item.price * item.quantity;
            totalCost += itemCost;
            cartElement.innerHTML += `
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="lead fw-normal mb-0">Prod: ${item.name}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="lead fw-normal mb-0">Desc: ${item.description}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p id="${item.id}" class="lead fw-normal mb-0">Qty: ${item.quantity}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="lead fw-normal mb-0">Price: ${item.price}</p>
                                </div>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger" onclick="removeFromCart('${item.id}')">
                                    <i class="fas fa-trash fa-lg"></i>
                                </a>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="lead fw-normal mb-0">Total: ${itemCost.toFixed(2)}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="lead fw-normal mb-0">Total: ${totalCost.toFixed(2)}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

        });

        // Update the total cost attribute

        let proceedButton = document.getElementById('proceed-button');
        if (proceedButton) {
            proceedButton.setAttribute('data-cart-total', totalCost.toFixed(2));

            let totalAmountElement = document.getElementById('total-amount');
            totalAmountElement.textContent = totalCost.toFixed(2); // Update total amount display

        }
        console.log("Total cost:", totalCost.toFixed(2));
    }

    // Function to toggle the visibility of the shopping cart modal
    document.getElementById('cart-toggle').addEventListener('click', function () {
        var modal = new bootstrap.Modal(document.getElementById('cart-modal'));
        modal.show();

        // Calculate total cost
    let totalCost = calculateTotalPrice();

// Use a callback function to ensure addAdditionalContent is executed after the content is added
setTimeout(() => {
    addAdditionalContent(totalCost);
    redirectToPHP(calculateTotalPrice());
}, 0);

    });

</script>



  <script>
    var paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', payWithPaystack, false);
    function payWithPaystack() {
    var handler = PaystackPop.setup({
        key: 'pk_test_ab3d605a280a2c2d3ac937901fa839110e2b66b7', // Replace with your public key
        email: document.getElementById('email-address').value,
        amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
        currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
        ref: transactionReference, // Replace with a reference you generated
        callback: function(response) {
        //this happens after the payment is completed successfully
        var reference = response.reference;
        alert('Payment complete! Reference: ' + reference);
        // Make an AJAX call to your server with the reference to verify the transaction
        },
        onClose: function() {
        alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
    }
    </script>

   <script>
        function generateTransactionReference() {
    // Get the current timestamp
    let timestamp = Date.now();

    // Generate a random number between 1000 and 9999
    let randomNumber = Math.floor(Math.random() * 9000) + 1000;

    // Concatenate the timestamp and random number to create the reference
    let reference = timestamp.toString() + randomNumber.toString();

    return reference;
}

let transactionReference = generateTransactionReference();
  </script> 




    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
