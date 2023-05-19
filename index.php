<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">

  <title>Burger</title>

  <script>
    // Function to increase the quantity of a product in the cart
    function increaseQuantity(index) {
      cart[index].quantity++;
      updateCart();
    }
    function decreaseQuantity(index) {
      cart[index].quantity--;
      updateCart();
    }
  </script>
</head>
<style>
  @media only screen and (min-width: 924px) {
    .www-burgeroclock-com-pk-by-html-to-design-free-version-11-05-2023-20-28-33-gmt-5 {
      height: 4000px;
      width: 2620px;
      overflow-y: hidden;
    }
    .remove-icon{
      color:red
    }
    .about-us{
      top:120px;
    }
    .what-makes-us-o-so-special-we-only-use-premium-meat-that-is-guaranteed-for-its-freshness-what-s-more-our-sauces-are-hand-crafted-with-secret-spices-and-herbs-that-leaves-you-drooling-for-more-if-its-your-first-trip-you-would-love-our-gourmet-burgers-crunchos-with-fried-mozzarella-cheese-patty-and-crisp-nachos-or-messy-meat-with-crispy-onion-rings-and-saucy-chili-for-the-sides-we-are-loved-for-our-gourmet-fries-potatoes-topped-with-a-variety-of-sauces-nacho-cheese-jalape-os-pepperoni-and-so-much-more{
      
    }
    .welcome-to-the-home-of-delicious-gourmet-burgers-burger-o-clock-is-a-modern-restaurant-that-exists-to-delight-passionate-burger-lovers-walk-in-and-place-your-order-and-sit-back-and-relax-and-soak-in-our-attractive-ambiance-as-you-wait-for-your-order-to-be-prepared-all-burgers-are-cooked-to-order-and-we-pride-ourselves-on-serving-fresh-delicious-and-hygienic-burgers-that-tantalize-the-taste-buds-and-excite-your-senses-we-have-perfected-the-optimized-packaging-to-enhance-your-burger-experience-our-packaging-is-designed-to-be-easy-to-hold-and-carry-as-well-as-ensure-that-your-burgers-maintain-their-flavour-and-shape-for-those-who-do-not-prefer-a-dine-in-or-takeaway-experience-we-offer-our-patrons-the-option-to-have-their-order-delivered-at-their-home-or-office{
      top:500px;

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
      font-weight: 800;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .clear-cart-button {
      width: 400px;
      background-color: red;
      border: none;
      position: relative;
      left: 5px;
      top: 155px;
      padding: 20px;
      margin: 20px;
      color: white;
      border-radius: 10px;
      font-weight: 800;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .cart-image {
      width: 100px;
      margin-top: 60px
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
      position: relative;
      left: 110px;
      top: -50px;
      font-weight: 500;
      color: #000;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .item-price {
      position: relative;
      left: 340px;
      top: -70px;
      font-weight: 500;
      color: #000;
      font-size: 1rem;
      font-family: Poppins, sans-serif !important;
    }

    .item-quantity {
      position: relative;
      left: 330px;
      top: -50px
    }


    .modal {
      display: none
    }

    .div-406857 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .faqs {
      position: relative;
      left: 290px;
      top: -20px;
    }

    .privacy-policy-span {
      position: relative;
      left: 320px;
    }

    .div-footer-container {
      position: relative;
      top: 2050px;
      left: -10px;
      width: 2600px
    }

    .div-405577 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .div-401293 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .div-1573 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .div-402539 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .div-1405 {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .div-about-content {
      position: relative;
      left: 450px;
      top: -30px;
    }

    .vector {
      position: relative;
      left: 1px;
      top: 1px
    }

    .cart {
      position: relative;
      left: 2300px;
      top: -20px
    }

    .counter {
      color: white;
      position: relative;
      top: -25px;
      left: 30px;
    }

    .div-m-0 {
      top: 1250px;
      height: 100px;


    }

    .div59 {
      top: -40px;
      left: 2100px;
      height: 5000px
    }

  }

  @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-device-pixel-ratio: 2) {
    .carousel {
      width: 1500px;
      height: auto;
    }

    .cart-image {
      width: 200px;
    }

    .div-category-item-wrapper {
      position: relative;
      left: -300px;
      top: -350px;
    }

    .faqs {
      position: relative;
      top: -15px;
      left: -100px;
    }

    .privacy-policy-span {
      position: relative;
      left: -250px;
    }

    .cart {
      position: relative;
      left: 1300px;
      top: -20px
    }

    .www-burgeroclock-com-pk-by-html-to-design-free-version-11-05-2023-20-28-33-gmt-5 {
      height: 2000px;
      width: 2620px;
      overflow-y: hidden;
    }

    .div-footer-container {
      position: relative;
      top: 2850px;
      width: 1900px
    }

    .div-social-wrapper {
      position: relative;
      left: 800px;
    }

    .www-burgeroclock-com-pk-by-html-to-design-free-version-11-05-2023-20-28-33-gmt-5 {
      height: 3000px;
    }

    .visa-mastercard-b-95-b-27-a-0173-c-07427991-png2 {
      position: relative;
      left: 780px;
      top: 40px;
    }

    .div-406857 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .div-1573 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .div-about-content {
      position: relative;
      left: 220px;
      top: -450px;
    }

    .div-402539 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .div-1405 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .div-405577 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .div-401293 {
      position: relative;
      left: 200px;
      top: -350px;
    }

    .summer-feast {
      position: relative;
      left: 200px;
      top: -400px;
    }

    .ul-nav {
      position: relative;
      left: -300px;
      overflow-y: hidden;
    }

    .div-py-2 {
      width: 700px;
    }

    .div-m-0 {
      top: 1250px;
      height: 100px;
    }

    .div-empty-cart-wrapper {
      padding: 2em;
    }

    .vector {
      position: relative;
      left: 40px;
      top: 1px
    }

    .hide-cart {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    .show-cart {
      opacity: 1;
      pointer-events: auto;
    }

    .counter {
      color: white;
      position: relative;
      top: -25px;
      left: 30px;
    }

    .food-search {
      font-size: 12px;
      position: relative;
      left: -300px;
      top: -500px;
    }

  }
</style>
<div class="www-burgeroclock-com-pk-by-html-to-design-free-version-11-05-2023-20-28-33-gmt-5">
  <div class="div-topbar-wrapper" style="width:2620px; overflow-y:hidden;">
    <div class="div-alert-msg" style=" overflow-y:hidden;">
      <div class="free-delivery-above-2000-order" style="overflow-y:hidden; text-align:center;">
        Free delivery above 2000 order.
      </div>
    </div>

    <div class="div-py-2" style="z-index:0; position:relative; left:-10px; width:2620px; overflow-y:hidden">
      <div class="a-btn" style="overflow-y:hidden;position:relative; left:200px;  ">
        <svg class="frame" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M13.5094 10.5997L12.9114 13.1925C12.8273 13.5591 12.5052 13.8155 12.1278 13.8155C5.63827 13.815 0.359985 8.53671 0.359985 2.04689C0.359985 1.66979 0.616414 1.34723 0.982988 1.26363L3.57583 0.665581C3.95344 0.578073 4.33928 0.774079 4.49619 1.13168L5.69281 3.92258C5.83269 4.25132 5.73834 4.63433 5.46182 4.86017L4.07691 5.97217C4.95097 7.75269 6.39864 9.20036 8.17967 10.0749L9.31353 8.69105C9.53701 8.41376 9.9229 8.31781 10.2516 8.46019L13.0425 9.65655C13.3782 9.83314 13.5969 10.2241 13.5094 10.5997Z"
            fill="#FDFDFD" />
        </svg>

        <div class="_021111432532">021111432532</div>
      </div>
      <div class="cart">

        <svg class="vector" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M3.705 0C4.14883 0 4.53091 0.316216 4.61581 0.753281L4.6737 1.23552H20.9101C21.6935 1.23552 22.3188 2.01737 22.0988 2.8054L20.0147 10.2201C19.8642 10.7529 19.3779 11.1197 18.826 11.1197H6.58795L6.94301 12.973H18.8337C19.347 12.973 19.76 13.3861 19.76 13.8996C19.76 14.4131 19.347 14.8262 18.8337 14.8262H6.14027C5.73117 14.8262 5.34909 14.5096 5.26419 14.0733L2.93853 1.85328H0.92625C0.414883 1.85328 0 1.43822 0 0.92664C0 0.415057 0.414883 0 0.92625 0H3.705ZM4.94 17.915C4.94 16.8919 5.76977 16.0618 6.7925 16.0618C7.81523 16.0618 8.645 16.8919 8.645 17.915C8.645 18.9382 7.81523 19.7683 6.7925 19.7683C5.76977 19.7683 4.94 18.9382 4.94 17.915ZM19.76 17.915C19.76 18.9382 18.9302 19.7683 17.9075 19.7683C16.8848 19.7683 16.055 18.9382 16.055 17.915C16.055 16.8919 16.8848 16.0618 17.9075 16.0618C18.9302 16.0618 19.76 16.8919 19.76 17.915Z"
            fill="#FFD400" />
        </svg>
        <div class="counter"><span id="counter">0</span>
        </div>
      </div>
    </div>


    <div class="div-m-02" style=" overflow-y:hidden;">
      <div class="div-logo-container" style="position:relative; z-index:2; left:1200px; top:70px;">
        <img class="_1666705959-logo-min-webp" src="_1666705959-logo-min-webp.png"
          style="position:relative; left:0.2px" />
      </div>
    </div>
  </div>

  <div class="carousel" style="z-index:0, position:relative;left:-10px; top:100px;">
    <div class="carousel-inner">
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
        checked="checked">
      <div class="carousel-item">
        <img src="./_1683555218-wrap-tastic-jpg.png" style="width:2520px;">
      </div>
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item">
        <img src="./cover.jpg" style="width:2520px;">
      </div>
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item">
        <img src="./cover2.jpeg" style="width:2520px;">
      </div>
      <label for="carousel-3" class="carousel-control prev control-1">‹</label>
      <label for="carousel-2" class="carousel-control next control-1">›</label>
      <label for="carousel-1" class="carousel-control prev control-2">‹</label>
      <label for="carousel-3" class="carousel-control next control-2">›</label>
      <label for="carousel-2" class="carousel-control prev control-3">‹</label>
      <label for="carousel-1" class="carousel-control next control-3">›</label>
      <ol class="carousel-indicators" style="position:relative; top:-120px">
        <li>
          <label for="carousel-1" class="carousel-bullet">•</label>
        </li>
        <li>
          <label for="carousel-2" class="carousel-bullet">•</label>
        </li>
        <li>
          <label for="carousel-3" class="carousel-bullet">•</label>
        </li>
      </ol>
    </div>
  </div>


  <div class="div-indolj-menu-list" style="position:relative; top: 100px;  background: #ffffff;
  height: 53.52px; width:2620px;
  position: relative;
 ">
    <div class="div-indolj-menu-wrapper" style="position:relative; left:70px;top: 20px;
      background: rgba(255, 255, 255, 0.00);
  overflow: hidden;">
      <div class="ul-nav">
        <div class="mighty-deals-upto-30-off2" style="position: relative;
  left: 400.47px;overflow-y:hidden">
          <a href="#mighty-deals">Mighty Deals upto 30% off</a>
        </div>

        <div class="gourmet-fries2" style="overflow-y:hidden">
          <a href="#gourmet-fries">Value Burgers</a>
        </div>

        <div class="premium-burgers2" style="overflow-y:hidden">
          <a href="#premium-burgers">Premium Burgers</a>
        </div>

        <div class="stack-burgers2">
          <a href="#stack-burgers">Stack Burgers</a>
        </div>

        <div class="extreme-burgers2">
          <a href="#extreme-burgers">Extreme Burgers</a>
        </div>

        <div class="classic-burgers2">
          <a href="#classic-burgers">Classic Burgers</a>
        </div>




      </div>
    </div>
  </div>
  <?php
  if (isset($_SESSION['add_to_cart'])) {
    echo $_SESSION['add_to_cart'];
    unset($_SESSION['add_to_cart']);
  } ?>
  <script>
    var counter = 0; // Initialize the counter variable
  </script>

</div>

<div class="div-m-0">
  <div class="div59" id="cart-section">
    <h2 style="font-family: Poppins,sans-serif!important;    margin-top: 0;
    margin-top:1em; margin-left:1em;
    font-weight: 500;
    line-height: 1.2;">Your Cart </h2>
    <div class="div-empty-cart-wrapper">
      <!-- Cart items will be dynamically added here -->
    </div>
  </div>




  <div class="div-item-section" style="height:100px;width:2100px;">
    <div class="div-items-section-wrapper" style="height:100px;width:2000px;">
     
      <div class="div-406856" style="position:relative; left:450px; top:-30px;">
        <div class="summer-feast" id="mighty-deals">Mighty Deals</div>

        <div class="div-category-item-wrapper">
          <div class="div-item">
            <div class="div-p-0">
              <div class="div-wrap-info">
                <div class="div">
                  <div class="h-2">
                    <?php
                    $sql1 = "SELECT * FROM food WHERE category='Share The Goodness Upto 30% OFF' AND category_id=1 LIMIT 1";
                    $res1 = mysqli_query($conn, $sql1);
                    if ($res1 && mysqli_num_rows($res1) > 0) {
                      $row1 = mysqli_fetch_assoc($res1);
                      $title1 = $row1['title'];
                      $price1 = $row1['price'];
                      $image1 = $row1['image'];
                      $description1 = $row1['description'];
                    }
                    ?>

                    <div class="feast-1" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title1; ?>
                    </div>
                  </div>
                  <div class="p">
                    <div class="any-1-fire-bird-burger-with-1-soft-drink">
                      Any 1 Fire bird burger with 1 soft drink
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper">
                  <div class="rs-599">
                    <?php echo $price1; ?>
                  </div>
                  <div class="rs-798">Rs. 798</div>
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
                function removeItem(index) {
                  cart.splice(index, 1); // Remove the item from the cart array
                  updateCart(); // Update the cart section HTML
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
        <div class="item-title">${item.title}</div>
        <div class="item-price">${item.price}</div>
        <div class="item-quantity">
          <button class="minus-button" onclick="decreaseQuantity(${i})">-</button>
          <span>${item.quantity}</span>
          <button class="plus-button" onclick="increaseQuantity(${i})">+</button>
          <button class="remove-button" onclick="removeItem(${i})"><i class="fa fa-trash remove-icon" aria-hidden="true"></i>
</button>

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
                    var formattedTotalPrice = totalPrice.toFixed(2); // Limit total price to two decimal places
    var totalHTML = `<div class="total">Total: ${formattedTotalPrice}</div>`; // Display the total price
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

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title1; ?>', '<?php echo $price1; ?>', '<?php echo $image1; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1683556647-summer-20-deal-1-jpg" src="<?php echo $image1 ?>" />
          </div>

          <div class="div-item2">
            <div class="div-p-02">
              <div class="div-wrap-info2">
                <div class="div2">
                  <div class="h-22">
                    <?php
                    $sql2 = "SELECT * FROM food WHERE category='Share The Goodness Upto 30% OFF' AND category_id=2 LIMIT 1";
                    $res2 = mysqli_query($conn, $sql2);
                    if ($res2 && mysqli_num_rows($res2) > 0) {
                      $row2 = mysqli_fetch_assoc($res2);
                      $title2 = $row2['title'];
                      $price2 = $row2['price'];
                      $image2 = $row2['image'];
                      $description2 = $row2['description'];
                    }
                    ?>

                    ?>
                    <div class="feast-2" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title2 ?>
                    </div>
                  </div>

                  <div class="p2">
                    <div class="any-1-premium-burger-with-1-soft-drink">
                      Any 1 Premium Burger with 1 soft drink
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper2">
                  <div class="rs-859">
                    <?php echo $price2 ?>
                  </div>

                  <div class="rs-959">Rs. 959</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title2; ?>', '<?php echo $price2; ?>', '<?php echo $image2; ?>');incrementCounter();">

                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1683556702-deal-2-jpg" src="<?php echo $image2 ?>" />
          </div>

          <div class="div-item3">
            <div class="div-p-03">
              <div class="div-wrap-info3">
                <div class="div3">
                  <div class="h-23">
                    <?php
                    $sql3 = "SELECT * FROM food WHERE category='Share The Goodness Upto 30% OFF' AND category_id=3 LIMIT 1";
                    $res3 = mysqli_query($conn, $sql3);
                    if ($res3 && mysqli_num_rows($res3) > 0) {
                      $row3 = mysqli_fetch_assoc($res3);
                      $title3 = $row3['title'];
                      $price3 = $row3['price'];
                      $image3 = $row3['image'];
                      $description3 = $row3['description'];
                    }
                    ?>
                    <div class="feast-3" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title3 ?>
                    </div>
                  </div>

                  <div class="p3">
                    <div class="any-1-gigantic-burger-with-1-soft-drink">
                      <?php echo $description3 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper3">
                  <div class="rs-899">
                    <?php echo $price3 ?>
                  </div>

                  <div class="rs-998">Rs. 998</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title3; ?>', '<?php echo $price3; ?>', '<?php echo $image3; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1683556495-deal-3-jpg" src="<?php echo $image3 ?>" />
          </div>
        </div>
      </div>

      <div class="div-406857">
        <div class="wrap-tastic-offer">Value Burgers</div>

        <div class="div-item4">
          <div class="div-p-04">
            <div class="div-wrap-info4">
              <div class="div4">
                <div class="h-24">
                  <?php
                  $sql4 = "SELECT * FROM food WHERE category='Mighty Deals upto 30% off' AND category_id=1 LIMIT 1";
                  $res4 = mysqli_query($conn, $sql4);
                  if ($res4 && mysqli_num_rows($res4) > 0) {
                    $row4 = mysqli_fetch_assoc($res4);
                    $title4 = $row4['title'];
                    $price4 = $row4['price'];
                    $image4 = $row4['image'];
                    $description4 = $row4['description'];
                  }
                  ?>
                  <div class="wrap-deal" style="height:40px; width:150px; top:-10px;">
                    <?php echo $title4 ?>
                  </div>
                </div>

                <div class="p4">
                  <div class="any-2-wraps-with-2-softdrinks">
                    Any 2 Wraps with 2 softdrinks
                  </div>
                </div>
              </div>

              <div class="div-price-wrapper4">
                <div class="rs-1199">
                  <?php echo $price4 ?>
                </div>

                <div class="rs-1596">Rs. 1596</div>
              </div>
            </div>

            <button class="button-btn-xs"
              onclick="addToCart('<?php echo $title4; ?>', '<?php echo $price4; ?>', '<?php echo $image4; ?>');incrementCounter();">
              <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                  fill="#FDFDFD" />
              </svg>
          </div>
          </button>

          <img class="_1683556268-wrap-20-deal-20-image-jpg" src="<?php echo $image4 ?>" />
        </div>
      </div>

      <div class="div-405577">
        <div class="grab-the-wraps" id="premium-burgers">Premium Burgers</div>

        <div class="div-category-item-wrapper2">
          <div class="div-item5">
            <div class="div-p-05">
              <div class="div-wrap-info5">
                <div class="div5">
                  <div class="h-25">
                    <?php
                    $sql5 = "SELECT * FROM food WHERE category='Mighty Deals upto 30% off' AND category_id=2 LIMIT 1";
                    $res5 = mysqli_query($conn, $sql5);
                    if ($res5 && mysqli_num_rows($res5) > 0) {
                      $row5 = mysqli_fetch_assoc($res5);
                      $title5 = $row5['title'];
                      $price5 = $row5['price'];
                      $image5 = $row5['image'];
                      $description5 = $row5['description'];
                    }
                    ?>
                    <div class="creamy-wrap" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title5 ?>
                    </div>
                  </div>

                  <div class="p5">
                    <div
                      class="indulge-in-the-irresistible-flavors-of-our-creamy-wrap-crafted-with-only-the-freshest-ingredients-sink-your-teeth-into-succulent-crispy-chicken-chunks-perfectly-seasoned-and-cooked-to-perfection-wrapped-in-a">
                      Indulge in the irresistible flavors of our creamy
                      wrap,<br />crafted with only the freshest ingredients.
                      Sink your<br />teeth into succulent crispy chicken
                      chunks, perfectly<br />seasoned and cooked to
                      perfection. Wrapped in a
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper5">
                  <div class="rs-549">
                    <?php echo $price5 ?>
                  </div>

                  <div class="rs-699">Rs. 699</div>
                </div>
              </div>


              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title5; ?>', '<?php echo $price5; ?>', '<?php echo $image5; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1678304741-creamy-20-wrap-jpg" src="<?php echo $image5 ?>" />
          </div>

          <div class="div-item6">
            <div class="div-p-06">
              <div class="div-wrap-info6">
                <div class="div6">
                  <div class="h-26">
                    <?php
                    $sql6 = "SELECT * FROM food WHERE category='Mighty Deals upto 30% off' AND category_id=3 LIMIT 1";
                    $res6 = mysqli_query($conn, $sql6);
                    if ($res6 && mysqli_num_rows($res6) > 0) {
                      $row6 = mysqli_fetch_assoc($res1);
                      $title6 = $row5['title'];
                      $price6 = $row5['price'];
                      $image6 = $row5['image'];
                      $description6 = $row6['description'];
                    }
                    ?>
                    <div class="fiery-wrap" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title6 ?>
                    </div>
                  </div>

                  <div class="p6">
                    <div
                      class="want-to-add-a-delicious-kick-of-heat-and-flavor-to-the-dish-our-fiery-wrap-is-a-deliciously-spicy-and-satisfying-option-that-features-crispy-chicken-chunks-jalapenos-and-a-blend-of-zesty-sauce">
                      Want to add a delicious kick of heat and flavor to
                      the<br />dish? Our Fiery Wrap is a deliciously spicy
                      and<br />satisfying option that features crispy chicken
                      chunks,<br />jalapenos, and a blend of zesty sauce.
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper6">
                  <div class="rs-5492">
                    <?php echo $price6 ?>
                  </div>

                  <div class="rs-6992">Rs. 699</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title6; ?>', '<?php echo $price6; ?>', '<?php echo $image6; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1678304763-spicy-20-wrap-jpg" src="<?php echo $image6 ?>" />
          </div>

          <div class="div-item7">
            <div class="div-p-07">
              <div class="div-wrap-info7">
                <div class="div7">
                  <div class="h-27">
                    <?php
                    $sql7 = "SELECT * FROM food WHERE category='Gourmet fries' AND category_id=1 LIMIT 1";
                    $res7 = mysqli_query($conn, $sql7);
                    if ($res7 && mysqli_num_rows($res7) > 0) {
                      $row7 = mysqli_fetch_assoc($res7);
                      $title7 = $row7['title'];
                      $price7 = $row7['price'];
                      $image7 = $row7['image'];
                      $description7 = $row7['description'];
                    }
                    ?>
                    <div class="smoky-wrap" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title7 ?>
                    </div>
                  </div>

                  <div class="p7">
                    <div
                      class="get-ready-to-take-your-taste-buds-on-an-exciting-journey-with-our-delicious-smoky-wrap-made-with-only-the-finest-ingredients-features-tender-chicken-chunks-saut-ed-onions-and-chicken-pepperoni-that-have">
                      Get ready to take your taste buds on an exciting<br />journey
                      with our delicious smoky wrap! Made with only<br />the
                      finest ingredients, features tender chicken chunks<br />sautéed
                      onions and chicken pepperoni that have
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper7">
                  <div class="rs-5493">
                    <?php echo $price7 ?>
                  </div>

                  <div class="rs-6993">Rs. 699</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title7; ?>', '<?php echo $price7; ?>', '<?php echo $image7; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1678304773-smoky-20-wrap-jpg" src="<?php echo $image7 ?>" />
          </div>
        </div>
      </div>

      <div class="div-401293">
        <div class="share-the-goodness-upto-30-off" id="stack-burgers">
          Stack Burgers
        </div>

        <div class="div-category-item-wrapper4">
          <div class="div-item12">
            <div class="div-p-012">
              <div class="div-wrap-info12">
                <div class="div12">
                  <div class="h-212">
                    <?php
                    $sql12 = "SELECT * FROM food WHERE category='Gourmet fries' AND category_id=3 LIMIT 1";
                    $res12 = mysqli_query($conn, $sql12);
                    if ($res12 && mysqli_num_rows($res12) > 0) {
                      $row12 = mysqli_fetch_assoc($res12);
                      $title12 = $row12['title'];
                      $price12 = $row12['price'];
                      $image12 = $row12['image'];
                      $description12 = $row12['description'];
                    }
                    ?>
                    <div class="share-the-goodness-1">
                      <?php echo $title12 ?>
                    </div>
                  </div>

                  <div class="p12">
                    <div
                      class="any-2-burgers-from-chick-n-crisp-or-fire-bird-with-1-appetizer-1-gourmet-fries-and-2-softdrinks">
                      <?php echo $description12 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper12">
                  <div class="rs-1899">
                    <?php echo $price12 ?>
                  </div>

                  <div class="rs-2694">Rs. 2694</div>
                </div>
              </div>


              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title8; ?>', '<?php echo $price8; ?>', '<?php echo $image8; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1659816344-share-20-box-20600-20-x-20600-px-01-jpg" src="<?php echo $image12 ?>" />
          </div>

          <div class="div-item13">
            <div class="div-p-013">
              <div class="div-wrap-info13">
                <div class="div13">
                  <div class="h-213">
                    <?php
                    $sql13 = "SELECT * FROM food WHERE  category='Gourmet fries' AND category_id=4 LIMIT 1";
                    $res13 = mysqli_query($conn, $sql13);
                    if ($res13 && mysqli_num_rows($res13) > 0) {
                      $row13 = mysqli_fetch_assoc($res13);
                      $title13 = $row13['title'];
                      $price13 = $row13['price'];
                      $image13 = $row13['image'];
                      $description13 = $row13['description'];
                    }
                    ?>
                    <div class="share-the-goodness-2">
                      <?php echo $title13 ?>
                    </div>
                  </div>

                  <div class="p13">
                    <div class="any-2-premium-burgers-with-1-appetizer-1-gourmet-fries-and-2-soft-drinks">
                      <?php echo $description13 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper13">
                  <div class="rs-2299">
                    <?php echo $price13 ?>
                  </div>

                  <div class="rs-3024">Rs. 3024</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title13; ?>', '<?php echo $price13; ?>', '<?php echo $image13; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1659816361-share-20-box-20600-20-x-20600-px-02-jpg" src="<?php echo $image13 ?>" />
          </div>
        </div>
      </div>

      <div class="div-1573">
        <div class="mighty-deals-upto-30-off" id="extreme-burgers">Extreme Burgers</div>

        <div class="div-category-item-wrapper5">
          <div class="div-item14">
            <div class="div-p-014">
              <div class="div-wrap-info14">
                <div class="div14">
                  <div class="h-214">
                    <?php
                    $sql15 = "SELECT * FROM food WHERE  category='Gourmet fries' AND category_id=5 LIMIT 1";
                    $res15 = mysqli_query($conn, $sql15);
                    if ($res15 && mysqli_num_rows($res15) > 0) {
                      $row15 = mysqli_fetch_assoc($res15);
                      $title15 = $row15['title'];
                      $price15 = $row15['price'];
                      $image15 = $row15['image'];
                      $description15 = $row15['description'];
                    }
                    ?>
                    <div class="deal-01" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title15 ?>
                    </div>
                  </div>

                  <div class="p14">
                    <div class="any-1-classic-burger-with-1-soft-drink">
                      <?php echo $description15 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper14">
                  <div class="rs-5992">
                    <?php echo $price15 ?>
                  </div>

                  <div class="rs-698">Rs. 698</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title15; ?>', '<?php echo $price15; ?>', '<?php echo $image15; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904640-1632163210-mighty-deals-01-min-jpg" src="<?php echo $image15 ?>" />
          </div>

          <div class="div-item15">
            <div class="div-p-015">
              <div class="div-wrap-info15">
                <div class="div15">
                  <div class="h-215">
                    <?php
                    $sql14 = "SELECT * FROM food WHERE  category='Gourmet fries' AND category_id=6 LIMIT 1";
                    $res14 = mysqli_query($conn, $sql14);
                    if ($res14 && mysqli_num_rows($res14) > 0) {
                      $row14 = mysqli_fetch_assoc($res14);
                      $title14 = $row14['title'];
                      $price14 = $row14['price'];
                      $image14 = $row15['image'];
                      $description14 = $row14['description'];
                    }
                    ?>
                    <div class="deal-02" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title14 ?>
                    </div>
                  </div>

                  <div class="p15">
                    <div class="any-1-extreme-burger-with-plain-fries-and-1-soft-drink">
                      <?php echo $description14 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper15">
                  <div class="rs-6994">
                    <?php echo $price14 ?>
                  </div>

                  <div class="rs-997">Rs. 997</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title16; ?>', '<?php echo $price16; ?>', '<?php echo $image16; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904654-1632163242-mighty-deals-02-min-jpg" src="<?php echo $image14 ?>" />
          </div>

          <div class="div-item16">
            <div class="div-p-016">
              <div class="div-wrap-info16">
                <div class="div16">
                  <div class="h-216">
                    <?php
                    $sql16 = "SELECT * FROM food WHERE  category='Premium burgers' AND category_id=1 LIMIT 1";
                    $res16 = mysqli_query($conn, $sql16);
                    if ($res16 && mysqli_num_rows($res16) > 0) {
                      $row16 = mysqli_fetch_assoc($res16);
                      $title16 = $row16['title'];
                      $price16 = $row16['price'];
                      $image16 = $row16['image'];
                      $description16 = $row16['description'];
                    }
                    ?>
                    <div class="deal-03" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title16 ?>
                    </div>
                  </div>

                  <div class="p16">
                    <div class="any-1-classic-burger-any-1-extreme-burger-any-1-gourmet-fries-and-2-soft-drinks">
                      <?php echo $description16 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper16">
                  <div class="rs-14993">
                    <?php echo $price16 ?>
                  </div>

                  <div class="rs-1855">Rs. 1855</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title16; ?>', '<?php echo $price16; ?>', '<?php echo $image16; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904662-1632163270-mighty-deals-03-min-jpg" src="premium-messy.jpg" />
          </div>

          <div class="div-item17">
            <div class="div-p-017">
              <div class="div-wrap-info17">
                <div class="div17">
                  <div class="h-217">
                    <?php
                    $sql17 = "SELECT * FROM food WHERE category='Premium burgers' AND category_id=2 LIMIT 1";
                    $res17 = mysqli_query($conn, $sql17);
                    if ($res17 && mysqli_num_rows($res17) > 0) {
                      $row17 = mysqli_fetch_assoc($res17);
                      $title17 = $row17['title'];
                      $price17 = $row17['price'];
                      $image17 = $row17['image'];
                      $description17 = $row17['description'];
                    }
                    ?>
                    <div class="deal-04" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title17 ?>
                    </div>
                  </div>

                  <div class="p17">
                    <div class="any-1-premium-burger-1-gourmet-fries-with-1-soft-drink">
                      <?php echo $description17 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper17">
                  <div class="rs-999">
                    <?php echo $price17 ?>
                  </div>

                  <div class="rs-1297">Rs. 1297</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title17; ?>', '<?php echo $price17; ?>', '<?php echo $image17; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904670-1632163327-mighty-deals-04-min-jpg" src="<?php echo $image17 ?>" />
          </div>

          <div class="div-item18">
            <div class="div-p-018">
              <div class="div-wrap-info18">
                <div class="div18">
                  <div class="h-218">
                    <?php
                    $sql18 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=1 LIMIT 1";
                    $res18 = mysqli_query($conn, $sql18);
                    if ($res18 && mysqli_num_rows($res18) > 0) {
                      $row18 = mysqli_fetch_assoc($res18);
                      $title18 = $row18['title'];
                      $price18 = $row18['price'];
                      $image18 = $row18['image'];
                      $description18 = $row18['description'];
                    }
                    ?>
                    <div class="deal-05" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title18 ?>
                    </div>
                  </div>

                  <div class="p18">
                    <div class="any-2-premium-burgers-any-1-gourmet-fries-with-2-soft-drinks">
                      <?php echo $description18 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper18">
                  <div class="rs-18992">
                    <?php echo $price18 ?>
                  </div>

                  <div class="rs-2275">Rs. 2275</div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title18; ?>', '<?php echo $price18; ?>', '<?php echo $image18; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904680-1632163372-mighty-deals-05-min-jpg" src="<?php echo $image18 ?>" />
          </div>

          <div class="div-item19">
            <div class="div-p-019">
              <div class="div-wrap-info19">
                <div class="div19">
                  <div class="h-219">
                    <?php
                    $sql19 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=2 LIMIT 1";
                    $res19 = mysqli_query($conn, $sql19);
                    if ($res19 && mysqli_num_rows($res19) > 0) {
                      $row19 = mysqli_fetch_assoc($res19);
                      $title19 = $row19['title'];
                      $price19 = $row19['price'];
                      $image19 = $row19['image'];
                      $description19 = $row19['description'];
                    }
                    ?>
                    <div class="deal-06" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title19 ?>
                    </div>
                  </div>

                  <div class="p19">
                    <div
                      class="any-2-burgers-from-chick-n-crisp-or-fire-bird-any-2-burgers-from-beef-smoky-tang-or-grilled-chicken-smoky-tang-burgers-2-gourmet-fries-from-mayo-garli-or-wild-fries-and-4-soft-drinks">
                      <?php echo $description19 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper19">
                  <div class="rs-2999">
                    <?php echo $price19 ?>
                  </div>

                  <div class="rs-3890">Rs. 3890</div>
                </div>
              </div>


              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title19; ?>', '<?php echo $price19; ?>', '<?php echo $image19; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1666039101-deal-206-jpg" src="<?php echo $image19 ?>" />
          </div>
        </div>
      </div>

      <div class="div-402539">
        <div class="kiddy-meals" id="classic-burgers">Classic Burgers</div>

        <div class="div-category-item-wrapper6">
          <div class="div-item20">
            <div class="div-p-020">
              <div class="div-wrap-info20">
                <div class="div20">
                  <div class="h-220">
                    <?php
                    $sql20 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=3 LIMIT 1";
                    $res20 = mysqli_query($conn, $sql20);
                    if ($res20 && mysqli_num_rows($res20) > 0) {
                      $row20 = mysqli_fetch_assoc($res20);
                      $title20 = $row20['title'];
                      $price20 = $row20['price'];
                      $image20 = $row20['image'];
                      $description20 = $row20['description'];
                    }
                    ?>

                    <div class="burger-meal" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title20 ?>
                    </div>
                  </div>

                  <div class="p20">
                    <div class="chicken-burger-fries-juice-and-1-surprise-pop-it">
                      <?php echo $description20 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper20">
                  <div class="rs-5993">
                    <?php echo $price20 ?>
                  </div>
                </div>
              </div>
              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title20; ?>', '<?php echo $price20; ?>', '<?php echo $image20; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <div class="div-p-021">
              <img class="_1662162665-images-20-for-20-web-02-jpg" src="<?php echo $image20 ?>" />


            </div>
          </div>

          <div class="div-item21">
            <div class="div-p-022">
              <div class="div-wrap-info21">
                <div class="div21">
                  <div class="h-221">
                    <?php
                    $sql21 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=3 LIMIT 1";
                    $res21 = mysqli_query($conn, $sql17);
                    if ($res21 && mysqli_num_rows($res21) > 0) {
                      $row21 = mysqli_fetch_assoc($res21);
                      $title21 = $row21['title'];
                      $price21 = $row21['price'];
                      $image21 = $row21['image'];
                      $description21 = $row21['description'];
                    }
                    ?>

                    <div class="chicky-meal" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title21 ?>
                    </div>
                  </div>

                  <div class="p21">
                    <div class="chicken-strips-4-pcs-fries-juice-and-1-surprise-pop-it">
                      <?php echo $description21 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper21">
                  <div class="rs-5994">
                    <?php echo $price21 ?>
                  </div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title21; ?>', '<?php echo $price21; ?>', '<?php echo $image21; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <div class="div-p-023">
              <img class="_1662162722-images-20-for-20-web-01-jpg" src="<?php echo $image21 ?>" />


            </div>
          </div>

          <div class="div-item22">
            <div class="div-p-024">
              <div class="div-wrap-info22">
                <div class="div22">
                  <div class="h-222">
                    <?php
                    $sql22 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=4 LIMIT 1";
                    $res22 = mysqli_query($conn, $sql22);
                    if ($res22 && mysqli_num_rows($res22) > 0) {
                      $row22 = mysqli_fetch_assoc($res22);
                      $title22 = $row22['title'];
                      $price22 = $row22['price'];
                      $image22 = $row22['image'];
                      $description22 = $row22['description'];
                    }
                    ?>

                    <div class="nuggets-meal" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title22 ?>
                    </div>
                  </div>

                  <div class="p22">
                    <div class="nuggets-6-pcs-fries-juice-and-1-surprise-pop-it">
                      <?php echo $description22 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper22">
                  <div class="rs-5995">
                    <?php echo $price22 ?>
                  </div>
                </div>
              </div>
              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title22; ?>', '<?php echo $price22; ?>', '<?php echo $image22; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <div class="div-p-025">
              <img class="_1662162774-images-20-for-20-web-03-jpg" src="<?php echo $image22 ?>" />


            </div>
          </div>
        </div>
      </div>

      <div class="div-1405">
        <div class="gourmet-fries" id="share">Share the Goodness</div>

        <div class="div-category-item-wrapper7">
          <div class="div-item23">
            <div class="div-p-026">
              <div class="div-wrap-info23">
                <div class="h-223">
                  <?php
                  $sql23 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=5 LIMIT 1";
                  $res23 = mysqli_query($conn, $sql23);
                  if ($res23 && mysqli_num_rows($res23) > 0) {
                    $row23 = mysqli_fetch_assoc($res23);
                    $title23 = $row23['title'];
                    $price23 = $row23['price'];
                    $image23 = $row23['image'];
                    $description23 = $row23['description'];
                  }
                  ?>
                  <div class="sriracha-loaded-fries" style="height:40px; width:150px; top:-10px;">
                    <?php echo $title23 ?>
                  </div>
                </div>

                <div class="div-price-wrapper23">
                  <div class="rs-559">
                    <?php echo $price23 ?>
                  </div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title23; ?>', '<?php echo $price23; ?>', '<?php echo $image23; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1668368577-web-20-images-01-jpg" src="<?php echo $image23 ?>" />
          </div>

          <div class="div-item24">
            <div class="div-p-027">
              <div class="div-wrap-info24">
                <div class="h-224">
                  <?php
                  $sql24 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=6 LIMIT 1";
                  $res24 = mysqli_query($conn, $sql24);
                  if ($res24 && mysqli_num_rows($res24) > 0) {
                    $row24 = mysqli_fetch_assoc($res24);
                    $title24 = $row24['title'];
                    $price24 = $row24['price'];
                    $image24 = $row24['image'];
                    $description24 = $row24['description'];
                  }
                  ?>

                  <div class="cheese-burger-fries" style="height:40px; width:150px; top:-10px;">
                    <?php echo $title24 ?>
                  </div>
                </div>

                <div class="div-price-wrapper24">
                  <div class="rs-5592">
                    <?php echo $price24 ?>
                  </div>
                </div>
              </div>
              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title24; ?>', '<?php echo $price24; ?>', '<?php echo $image24; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>


            <img class="_1668368862-web-20-images-02-jpg" src="<?php echo $image24 ?>" />
          </div>

          <div class="div-item25">
            <div class="div-p-028">
              <div class="div-wrap-info25">
                <div class="div23">
                  <div class="h-225">
                    <?php
                    $sql25 = "SELECT * FROM food WHERE category='Extreme Burgers' AND category_id=7 LIMIT 1";
                    $res25 = mysqli_query($conn, $sql25);
                    if ($res25 && mysqli_num_rows($res25) > 0) {
                      $row25 = mysqli_fetch_assoc($res25);
                      $title25 = $row25['title'];
                      $price25 = $row25['price'];
                      $image25 = $row25['image'];
                      $description25 = $row25['description'];
                    }
                    ?>

                    <div class="wild-fries" style="height:40px; width:150px; top:-10px;">
                      <?php echo $title25 ?>
                    </div>
                  </div>

                  <div class="p23">
                    <div
                      class="spicy-chipotle-sauce-chipotle-powder-and-fresh-jalapenos-these-fries-will-give-you-a-kick-from-the-wild-west">
                      <?php echo $description25 ?>
                    </div>
                  </div>
                </div>

                <div class="div-price-wrapper25">
                  <div class="rs-359">
                    <?php echo $price25 ?>
                  </div>
                </div>
              </div>

              <button class="button-btn-xs"
                onclick="addToCart('<?php echo $title25; ?>', '<?php echo $price25; ?>', '<?php echo $image25; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <div class="div-p-029">
              <img class="_1637903923-1632062736-gourmet-wild-fries-min-png" src="<?php echo $image25 ?>" />

            </div>
          </div>

        </div>
      </div>



      <div class="div-about-content">
        <div class="contact-us">Contact Us:</div>

        <div class="_021-111-432-532">(021) 111 432 532</div>



        <div class="about-us">About Us</div>

        <div
          class="welcome-to-the-home-of-delicious-gourmet-burgers-burger-o-clock-is-a-modern-restaurant-that-exists-to-delight-passionate-burger-lovers-walk-in-and-place-your-order-and-sit-back-and-relax-and-soak-in-our-attractive-ambiance-as-you-wait-for-your-order-to-be-prepared-all-burgers-are-cooked-to-order-and-we-pride-ourselves-on-serving-fresh-delicious-and-hygienic-burgers-that-tantalize-the-taste-buds-and-excite-your-senses-we-have-perfected-the-optimized-packaging-to-enhance-your-burger-experience-our-packaging-is-designed-to-be-easy-to-hold-and-carry-as-well-as-ensure-that-your-burgers-maintain-their-flavour-and-shape-for-those-who-do-not-prefer-a-dine-in-or-takeaway-experience-we-offer-our-patrons-the-option-to-have-their-order-delivered-at-their-home-or-office">
          WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum. WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </div>

        <div
          class="what-makes-us-o-so-special-we-only-use-premium-meat-that-is-guaranteed-for-its-freshness-what-s-more-our-sauces-are-hand-crafted-with-secret-spices-and-herbs-that-leaves-you-drooling-for-more-if-its-your-first-trip-you-would-love-our-gourmet-burgers-crunchos-with-fried-mozzarella-cheese-patty-and-crisp-nachos-or-messy-meat-with-crispy-onion-rings-and-saucy-chili-for-the-sides-we-are-loved-for-our-gourmet-fries-potatoes-topped-with-a-variety-of-sauces-nacho-cheese-jalape-os-pepperoni-and-so-much-more">
          WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.<br />WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore
          magna aliqua.<br />WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore
          magna aliqua.<br />WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore
          magna aliqua.<br />more!
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="div-footer-container">
  <div class="div-social-wrapper">
    <svg class="frame69" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M31.849 15.7611C31.849 7.35375 25.0373 0.541992 16.63 0.541992C8.22268 0.541992 1.41092 7.35375 1.41092 15.7611C1.41092 23.3571 6.97631 29.6534 14.252 30.796V20.1605H10.3859V15.7611H14.252V12.408C14.252 8.59398 16.5226 6.48725 20.0003 6.48725C21.6658 6.48725 23.4074 6.78426 23.4074 6.78426V10.5277H21.4878C19.5977 10.5277 19.008 11.701 19.008 12.9044V15.7611H23.2288L22.5538 20.1605H19.008V30.796C26.2837 29.6534 31.849 23.3571 31.849 15.7611Z"
        fill="white" />
    </svg>
    &nbsp;
    <svg class="frame70" width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M14.7114 8.70702C10.6328 8.70702 7.34292 11.8535 7.34292 15.7544C7.34292 19.6554 10.6328 22.8018 14.7114 22.8018C18.79 22.8018 22.0799 19.6554 22.0799 15.7544C22.0799 11.8535 18.79 8.70702 14.7114 8.70702ZM14.7114 20.3362C12.0757 20.3362 9.92092 18.2814 9.92092 15.7544C9.92092 13.2274 12.0693 11.1727 14.7114 11.1727C17.3535 11.1727 19.5019 13.2274 19.5019 15.7544C19.5019 18.2814 17.3471 20.3362 14.7114 20.3362ZM24.1 8.41874C24.1 9.33263 23.3304 10.0625 22.3813 10.0625C21.4258 10.0625 20.6626 9.3265 20.6626 8.41874C20.6626 7.51098 21.4322 6.77496 22.3813 6.77496C23.3304 6.77496 24.1 7.51098 24.1 8.41874ZM28.9802 10.0871C28.8712 7.88512 28.3453 5.93466 26.6587 4.32768C24.9785 2.7207 22.9392 2.21775 20.637 2.10735C18.2642 1.97854 11.1522 1.97854 8.77942 2.10735C6.48359 2.21162 4.44427 2.71456 2.75766 4.32155C1.07106 5.92853 0.55161 7.87899 0.436177 10.0809C0.301505 12.3503 0.301505 19.1524 0.436177 21.4218C0.545197 23.6237 1.07106 25.5742 2.75766 27.1812C4.44427 28.7882 6.47717 29.2911 8.77942 29.4015C11.1522 29.5303 18.2642 29.5303 20.637 29.4015C22.9392 29.2973 24.9785 28.7943 26.6587 27.1812C28.3389 25.5742 28.8648 23.6237 28.9802 21.4218C29.1149 19.1524 29.1149 12.3565 28.9802 10.0871ZM25.9148 23.8568C25.4146 25.059 24.4463 25.9851 23.1829 26.4697C21.2911 27.1873 16.802 27.0217 14.7114 27.0217C12.6208 27.0217 8.1253 27.1812 6.23989 26.4697C4.98296 25.9913 4.0146 25.0651 3.50798 23.8568C2.75766 22.0474 2.93081 17.754 2.93081 15.7544C2.93081 13.7549 2.76408 9.45531 3.50798 7.65205C4.00819 6.44988 4.97654 5.52372 6.23989 5.03917C8.13171 4.32155 12.6208 4.48715 14.7114 4.48715C16.802 4.48715 21.2975 4.32768 23.1829 5.03917C24.4398 5.51758 25.4082 6.44375 25.9148 7.65205C26.6651 9.46144 26.492 13.7549 26.492 15.7544C26.492 17.754 26.6651 22.0536 25.9148 23.8568Z"
        fill="white" />
    </svg>
  </div>

  <img class="visa-mastercard-b-95-b-27-a-0173-c-07427991-png2" src="visa.webp" />
  <div class="p-mb-0">
    <div class="">|</div>

  </div>
</div>