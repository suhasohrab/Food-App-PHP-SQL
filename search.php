<?php include('config.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <link rel="stylesheet" href="./style.css">

</head>
<style>
    * {
        margin: 0 0;
        padding: 0 0;
        font-family: Poppins, sans-serif !important;
        overflow-x: hidden;
    }
    .div59 {
      top: -40px;
      left: 2100px;
      height: 5000px
    }

    input {
        outline: 0
    }

    input[type='submit'] {
        border: 0;
        cursor: pointer !important;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 1%;
    }

    .img-responsive {
        width: 100%;
    }
    .div-m-0 {
      top: 1250px;
      height: 100px;


    }
    .checkout-button {
      width: 400px;
      background-color: #FCC817;
      border: none;
      position: relative;
      left: 5px;
      padding: 20px;
      margin: 20px;
      color: white;
      border-radius: 10px;
      font-weight: 500;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .clear-cart-button {
      width: 400px;
      background-color: red;
      border: none;
      position: relative;
      left: 5px;
      top: 150px;
      padding: 20px;
      margin: 20px;
      color: white;
      border-radius: 10px;
      font-weight: 500;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .cart-image {
      width: 100px;
      margin-top: 100px
    }

    .total {
      position: relative;
      left: 300px;
      top: -10px;
      font-weight: 500;
      color: #000;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .item-title {
      font-weight: 500;
      color: #000;
      font-size: 1rem;
      position:relative;
      left:300px;
      font-family: Poppins, sans-serif !important;
    }

    .item-price {
      font-weight: 500;
      color: #000;
      position:relative;
      left:300px;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .img-curve {
        border-radius: 15px;
    }

    .text-right {
        text-align: right;
        color: white;
    }

    .text-center {
        text-align: center !important;
    }

    .clearfix {
        float: none;
        clear: both;
    }

    .text-left {
        text-align: left;
    }

    .text-white {
        color: white;
    }

    .bold {
        font-weight: bold;
    }

    .clearfix {
        clear: both;
        float: none;
    }

    a {
        color: white;
        text-decoration: none;
        transition: .5s;
    }

    a:hover {
        text-decoration: underline;
        color: black;
    }

    .btn {
        padding: 1%;
        border: none;
        font-size: 1rem;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #44bd32;
        color: white;
        cursor: pointer;
    }

    .btn-primary:hover {
        color: white;
        background-color: #6c5ce7;
    }

    h2 {
        color: #2f3542;
        font-size: 2rem;
        margin-bottom: 2%;
    }

    h3 {
        font-size: 1.5rem;
    }

    .categories h3 {
        background: #2f3542;
    }

    .heading-border {
        height: 3px;
        width: 75px;
        background: #44bd32;
        margin: auto;
        margin-top: -10px;
        margin-bottom: 15px;
    }

    .float-container {
        position: relative;
    }

    .float-text {
        position: absolute;
        bottom: 50px;
        left: 40%;
    }

    fieldset {
        border: 1px solid white;
        margin: 5%;
        padding: 3%;
        border-radius: 5px;
        background: #ffffff73;
    }


    /* CSSS for navbar section */
    .navbar {
        margin-top: 80px;
    }

    .navbar-menu {
        padding: 10px 0;
        background: #fff;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .site-top-nav {
        background: #fff;
        padding: 0;
        box-shadow: 2px -4px 13px 0px #000;
    }

    .navbar-fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030;
        top: 0;
        box-shadow: 2px -7px 13px 0px #000;
    }

    .navbar-fixed-top .container {
        padding: 0;
    }

    .logo {
        width: 10%;
        float: left;
        padding: 5px 5px;
    }

    .menu {
        line-height: 60px;
        position: relative;
    }

    .menu ul {
        list-style-type: none;
        width: 80%;
        float: right;
    }

    .menu ul li {
        display: inline;
        padding: 1%;
        font-weight: bold;
        color: white;
    }

    .menu ul li:last-of-type {
        text-align: center;
    }

    .hvr-underline-from-center:before {
        background: #6c5ce7;
        height: 2px;
        bottom: 10px;
    }

    .shopping-cart {
        color: #6c5ce7;
        cursor: pointer;
        font-size: 18px;
    }

    .cart-content {
        background: #ffffff;
        width: 440px;
        position: absolute;
        right: 0;
        top: 62px;
        box-shadow: 0px 4px 10px 0px #bfbfbf;
        padding: 10px 10px;
        display: none;
    }

    .cart-table {
        width: 100%;
        border-collapse: collapse;
    }

    .cart-table td,
    .cart-table th {
        border-bottom: 1px solid #dddddd;
        padding: 0px 5px;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
    }

    .cart-table th {
        font-weight: bold;
        border-top: 1px solid #dddddd;
    }

    .cart-table img {
        width: 50px;
        height: 50px;
        vertical-align: middle;
        border-radius: 100%;
    }

    .cart-table .btn-danger {
        display: initial;
    }

    /*CAROUSEL */
    html,
    body {
        margin: 0px;
        padding: 0px;
        background: url("http://digital.bnint.com/filelib/s9/photos/white_wood_4500x3000_lo_res.jpg");
    }

    .carousel {
        position: relative;
        box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
        margin-top: 26px;
    }

    .carousel-inner {
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .carousel-open:checked+.carousel-item {
        position: static;
        opacity: 100;
    }

    .carousel-item {
        position: absolute;
        opacity: 0;
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    .carousel-item img {
        display: block;
        height: auto;
        max-width: 100%;
    }

    .carousel-control {
        background: rgba(0, 0, 0, 0.28);
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 40px;
        height: 40px;
        line-height: 35px;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(0, -50%);
        cursor: pointer;
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        text-align: center;
        width: 40px;
        z-index: 10;
    }

    .carousel-control.prev {
        left: 2%;
    }

    .carousel-control.next {
        right: 2%;
    }

    .carousel-control:hover {
        background: rgba(0, 0, 0, 0.8);
        color: #aaaaaa;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    .carousel-indicators li {
        display: inline-block;
        margin: 0 5px;
    }

    .carousel-bullet {
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 35px;
    }

    .carousel-bullet:hover {
        color: #aaaaaa;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #428bca;
    }

    #title {
        width: 100%;
        position: absolute;
        padding: 0px;
        margin: 0px auto;
        text-align: center;
        font-size: 27px;
        color: rgba(255, 255, 255, 1);
        font-family: 'Open Sans', sans-serif;
        z-index: 9999;
        text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
    }

    /* CSS for Food SEarch Section */
    .order {
        padding: 20px 0;
    }

    .order-form {
        box-shadow: 0 0 20px 2px #1a171780;
        padding: 7px 0;
        border-radius: 3px;
    }

    .container2 {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    .order fieldset {
        border: 1px solid #bfbbbb;
    }

    .order input,
    .order textarea {
        width: 98%;
        padding: 1%;
        font-size: 16px;
        border: 1px solid #bfbbbb;
        border-radius: 5px 0px 0px 5px;
    }

    .order input[type="submit"] {
        width: 30%;
        border-radius: 5px;
    }

    .order .tbl-full {
        border-collapse: collapse;
        margin-bottom: 50px;
    }

    .order .tbl-full img {
        width: 35px;
        height: 35px;
        vertical-align: middle;
        border-radius: 100%;
    }

    .order .tbl-full tr {
        border-left: 1px solid #bfbbbb;
        border-right: 1px solid #bfbbbb;
    }

    .order .tbl-full tr th,
    .order .tbl-full tr td {
        border-bottom: 1px solid #bfbbbb;
        padding: 8px 8px;
        text-align: center;
    }

    .order .tbl-full th {
        border-top: 1px solid #bfbbbb;
    }

    .food-search input[type="search"] {
        width: 50%;
        height: 100px;
        padding: 1%;
        background-color: rgb(230, 225, 225);
        font-size: 1rem;
        border: none;
        border-radius: 10px 10px 10px 5px;
        margin-right: -4px;
    }

    .food-search input[placeholder="Search for Food.."] {
        position: relative;
        top: 20px
    }

    .search-btn {
        border-radius: 0px 5px 5px 0px;
        position: relative;
        top: 20px
    }

    .box-3 {
        width: 28%;
        float: left;
        margin: 2%;
    }

    .categories h3 {
        background: #2f3542;
    }

    .categories .box-3 {
        overflow: hidden;
        border-radius: 15px;
    }

    .categories .box-3 img {
        transition: .5s;
    }

    .categories .box-3:hover img {
        transform: scale(1.2);
    }


    /* CSS for Food Menu */
    .food-menu {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 4% 0;
        background-attachment: fixed;
        width: 2620px;
        position: relative;
        top: -100px;

    }

    .food-menu-box {
        width: 600px;
        position: relative;
        height: 150px;
        left: 200px;
        margin: 1%;
        padding: 2%;
        float: left;
        background-color: white;
        border-radius: 15px;
    }

    .food-menu-img {
        width: 20%;
        float: left;
    }

    .food-menu-desc {
        width: 70%;
        float: left;
        margin-left: 8%;
    }

    .food-price {
        font-size: 1.2rem;
        margin: 2% 0;
        background-color: black;
    }

    .food-detail {
        font-size: 1rem;
        color: #747d8c;
    }

    /*Footer*/
    .footer {
        overflow: hidden;
        background: rgba(8, 8, 8, 0.85);
        color: #fff;
    }

    .site-links a {
        display: block;
        margin: 10px 0px;
    }

    .copyright {
        overflow: hidden;
        background: #000;
        color: #fff;
    }

    /* CSS for Social */
    .social ul {
        list-style-type: none;
    }

    .social ul li {
        display: inline;
        padding: 1%;
    }

    /* for Order Section */
    .order-form {
        width: 70%;
        margin: 0 auto;
    }

    .input-responsive {
        width: 96%;
        padding: 10px 10px;
        margin-bottom: 3%;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        outline: 0;
    }

    .input-responsive:focus {
        outline: 1px solid #44bd32;
    }

    .contact-form {
        width: 70%;
        margin: 0 auto;
    }

    .contact {
        padding: 5% 0;
    }

    .contact .input-responsive {
        border: 1px solid #817f7f;
        padding: 10px 10px;
    }

    .contact fieldset {
        box-shadow: 0 0 20px 2px #1a171780;
    }

    fieldset legend {
        font-size: 23px;
        color: #2f3542;
    }

    .contact-form input[type="submit"] {
        width: 30%;
        border-radius: 5px;
    }

    .order-label {
        margin-bottom: 1%;
        font-weight: bold;
    }

    .contact-label {
        margin-bottom: 1%;
        font-weight: bold;
    }

    #gmap_canvas {
        width: 100%;
        height: 400px;
    }

    /* Login */
    .login {
        padding: 5% 0;
    }


    /* Admin Css */
    .admin-container {
        width: 98%;
        margin: 0 auto;
        padding: 1%;
    }

    .col-4 {
        width: 19%;
        margin: 1%;
        padding: 4% 2%;
        float: left;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px 2px #1a171780;
    }

    .admin-tbl-full {
        width: 100%;
    }

    .admin-table {
        font-family: Poppins, sans-serif !important;
        border-collapse: collapse;
        width: 100%;
    }

    .admin-table th {
        text-align: center;
    }

    .admin-table td,
    .admin-table th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 13px 5px;
        font-size: 15px;
    }

    .admin-table tr:nth-child(even) {
        background-color: #ebe8e8;
    }

    .admin-table img {
        border-radius: 100%;
        width: 50px;
        height: 50px;
    }

    .admin-table .active-user {
        border-radius: 100%;
        width: 20px;
        height: 20px;
        vertical-align: middle;
    }

    .admin-table tr:hover {
        background-color: #dddddd;
    }




    .tbl-full {
        width: 100%;
    }

    .tbl-50 {
        width: 50%;
        margin: 0 auto;
        padding: 30px 40px;
        box-shadow: 0 0 10px 1px #1a171780;
        border-radius: 5px;
        margin-top: 30px;
    }

    .tbl-50 tr td input,
    .tbl-50 tr td select {
        padding: 10px 10px;
        border: 1px solid #bfbbbb;
        width: 200px;
    }

    .tbl-50 tr td input[type="radio"] {
        width: 35px;
    }

    .tbl-50 tr td select {
        width: 220px;
        outline: 0;
    }

    .tbl-30 {
        width: 30%;
    }

    .tbl-50 tr td {
        width: 30%;
        margin: 10px 0;
        display: inline-block;
    }

    .tbl-30 tr td {
        width: 30%;
        border-bottom: none;
        margin: 10px 0;
        display: inline-block;
    }

    .tbl-30 tr td input {
        padding: 5px 10px;
    }

    .login-form {
        width: 37%;
        margin: 0 auto;
        padding: 100px 35px;
        box-shadow: 0 0 20px 2px #1a171780;
        border-radius: 5px;
    }

    .login-form tr {
        margin-bottom: 10px;
        display: block;
    }

    .login input.btn-secondary {
        border: none;
        padding: 10px 15px;
        border-radius: 3px;
    }

    .btn-primary {
        background: #44bd32;
        transition: .5s;
        padding: 1%;
        color: #fff;
        text-decoration: none
    }

    .btn-primary:hover {
        background: #6c5ce7;
    }

    .btn-secondary {
        background: green;
        transition: .5s;
        display: inline-block;
        padding: 3px 5px;
        color: #fff;
        text-decoration: none;
    }

    .admin-btn-center {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 100px;
    }

    .btn-secondary:hover {
        background: #6c5ce7;
        color: #fff;
    }

    .btn-warning {
        background: #f39c12;
        transition: .5s;
        padding: 3px 5px;
        color: #fff;
        text-decoration: none;
        opacity: .8;
        display: inline-block;
        border-radius: 4px;
    }

    .btn-warning:hover {
        color: #fff;
        opacity: 1;
    }

    .btn-success {
        background: green;
        transition: .5s;
        padding: 3px 5px;
        color: #fff;
        text-decoration: none;
        opacity: .8;
        display: inline-block;
        border-radius: 4px;
    }

    .btn-success:hover {
        color: #fff;
        opacity: 1;
    }

    .btn-danger {
        background: #ff0000;
        transition: .5s;
        padding: 3px 5px;
        color: #fff;
        text-decoration: none;
        opacity: .8;
        display: inline-block;
        border-radius: 4px;
    }

    .btn-danger:hover {
        opacity: 1;
        color: #fff;
    }

    .success {
        color: #008000;
        background-color: #d4edda;
        border-color: #008000;
        padding: 15px 15px;
        width: 50%;
        margin: 10px auto;
        border-left: 3px solid #008000;
        border-radius: 5px;
    }

    .error {
        color: #ff0000;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 15px 15px;
        width: 50%;
        margin: 10px auto;
        border-left: 3px solid #ff0000;
        border-radius: 5px;
    }

    .notify {
        color: white;
        background: red;
        font-size: 12px;
        padding: 2px 3px;
        border-radius: 3px;
    }

    /* CSS for Mobile Size or Smaller Screen */

    @import url('https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');

    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    li,
    ol,
    ul,
    pre {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        min-height: 100%;
    }

    body {
        background-color: white;
        background: white;
        color: white;
        font-family: Poppins, sans-serif !important;
        font-size: 62.5%;
        padding: 0 20px;
        box-sizing: border-box;
    }

    code {
        background: #fff1;
        font-family: 'Inconsolata', monospace;
        padding: .2em .4em;
    }

    .content {
        background-color: #fff;
        border-radius: 8px;
        box-sizing: border-box;
        color: #666;
        font-size: 1.6em;
        line-height: 1.4em;
        margin: 20px auto;
        margin-top: 80px;
        padding: 20px;
        width: 100%;
        max-width: 800px;
    }

    .content ul {
        margin: .5em 2em;
        padding: 0;
    }

    #footer {
        background-color: #246c;
        background-image: linear-gradient(to bottom, transparent, #0009);
        border-top: 1px solid #fff3;
        box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
        overflow: hidden;
        padding: 8px;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9001;
    }

    #footer a {
        color: #85c6f6;
        padding: 1em 0;
        text-decoration: none;
    }

    #footer ul {
        display: flex;
        list-style: none;
        justify-content: center;
        font-size: 2em;
        font-weight: 300;
    }

    #footer ul li {
        padding: 0 .5em;
    }
</style>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        <?php
        if (isset($_REQUEST['search'])) {
            $search = mysqli_real_escape_string($conn, $_REQUEST['search']);
        }
        ?>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<?php
if (isset($_SESSION['add_to_cart'])) {
    echo $_SESSION['add_to_cart'];
    unset($_SESSION['add_to_cart']);
}
?>

<body>

    <div class="div59" id="cart-section">
        <h2 style="font-family: Poppins,sans-serif!important;    margin-top: 0;
    margin-top:1em; margin-left:1em; position:relative; left:2000px;
    font-weight: 500;
    line-height: 1.2;">Your Cart </h2>
        <div class="div-empty-cart-wrapper">
            <!-- Cart items will be dynamically added here -->
        </div>
    </div>
    <script>
        function incrementCounter() {
            counter++; // Increment the counter
            // Update the counter display
            var counterElement = document.getElementById('counter');
            if (counterElement) {
                counterElement.textContent = counter;
            }
        }

        // Array to store cart items
        var cart = [];
        function clearCart() {
            cart = [];
            updateCart();
        }

        // Function to add a product to the cart
        function addToCart(title, price, image) {
            // Create a product object
            var product = {
                title: title,
                price: price,
                image: image,
                quantity: 1
            };

            // Add the product to the cart array
            cart.push(product);
            // Update the cart section HTML
            updateCart();
        }
        // Function to update the cart section HTML
        function updateCart() {
            var cartSection = document.getElementById("cart-section");
            cartSection.innerHTML = "";

            var totalPrice = 0; // Initialize the total price variable

            for (var i = 0; i < cart.length; i++) {
                var item = cart[i];
                var itemHTML = `
      <img src="${item.image}" class="cart-image" alt="${item.title}">
      <div class="item-details">
        <div class="item-title" style="color:black">${item.title}</div>
        <div class="item-price"  style="color:black">${item.price}</div>
        <div class="item-quantity">
          <button class="minus-button" onclick="decreaseQuantity(${i})">-</button>
          <span>${item.quantity}</span>
          <button class="plus-button" onclick="increaseQuantity(${i})">+</button>
        </div>
      </div>
    `;
                cartSection.innerHTML += itemHTML;

                // Calculate the price for the current item based on quantity
                var itemPrice = item.price * item.quantity;
                totalPrice += itemPrice; // Add the item price to the total price
            }

            if (cart.length === 0) {
                var emptyCartHTML = '<div class="empty-cart-message">Your cart is empty.</div>';
                cartSection.innerHTML += emptyCartHTML;
                cartSection.querySelector(".clear-cart-button").style.display = "none";
                cartSection.querySelector(".checkout-button").style.display = "none";
            } else {
                var totalHTML = `<div class="total">Total:${totalPrice}</div>`; // Display the total price
                cartSection.innerHTML += totalHTML;

                var buttonsHTML = `
      <button class="clear-cart-button" onclick="clearCart()">Clear Cart</button>
      <button class="checkout-button" onclick="goToCheckout()">Checkout</button>
    `;
                cartSection.innerHTML += buttonsHTML;
                cartSection.querySelector(".clear-cart-button").style.display = "block";
                cartSection.querySelector(".checkout-button").style.display = "block";
            }
        }
        // Function to pass the cart data to the checkout page
        function goToCheckout() {
            // Convert the cart array to a JSON string
            var cartData = JSON.stringify(cart);

            // Set the cart data as a URL parameter
            window.location.href = 'checkout.php?cart=' + encodeURIComponent(cartData);
        }
    </script>
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center" style="position:relative; left:-200px">Search Results</h2>

            <?php
            if (isset($_REQUEST['search'])) {
                $sql = "SELECT * FROM food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
            } else {
                $sql = "SELECT * FROM food  ORDER BY id DESC LIMIT 10";
            }
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $title = $rows['title'];
                        $price = $rows['price'];
                        $image = $rows['image'];
                        $description = $rows['description'];
                        ?>
                        <div class="food-menu-box" style="overflow-y:hidden">
                            <div class="food-menu-img">
                                <?php
                                if ($image != "") {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image; ?>" alt=""
                                        class="img-responsive img-curve" />
                                    <?php
                                } else {
                                    echo "<div class='error'>Image not avilable.</div>";
                                }
                                ?>

                            </div>

                            <div class="food-menu-desc">
                                <h4 style="position:relative; top:10px; color:black">
                                    <?php echo $title; ?>
                                </h4>
                                <p class="food-price"
                                    style="background-color: black;color:white; width:80px; position:relative; top:5px">$<?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>
                                <br />
                                <br />
                                <input type="hidden" name="hidden_id" value="<?php echo $id; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $title; ?>" />
                                <input type="hidden" name="hidden_img" value="<?php echo $image; ?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $price; ?>" />
                                <input type="hidden" name="url"
                                    value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
                                <!--<a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>-->
                                <input type="submit" onclick="addToCart('<?php echo $title; ?>', '<?php echo $price; ?>', '<?php echo $image; ?>');" name="add_to_cart" class="btn btn-primary" value="Add to Cart" />
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='error'>Food not avilable.</div>";
                }
            }
            ?>

            <div class="clearfix"></div>
        </div>

    </section>
</body>
