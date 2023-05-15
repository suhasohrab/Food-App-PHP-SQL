<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

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

<div class="www-burgeroclock-com-pk-by-html-to-design-free-version-11-05-2023-20-28-33-gmt-5"
  style="height:4000px; width:2620px ; overflow-y: hidden; ">
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
      <div class="cart" style="position:relative; left:2300px; top:-20px">

        <svg class="vector" style="position:relative; left:1px; top:1px" width="23" height="20" viewBox="0 0 23 20"
          fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M3.705 0C4.14883 0 4.53091 0.316216 4.61581 0.753281L4.6737 1.23552H20.9101C21.6935 1.23552 22.3188 2.01737 22.0988 2.8054L20.0147 10.2201C19.8642 10.7529 19.3779 11.1197 18.826 11.1197H6.58795L6.94301 12.973H18.8337C19.347 12.973 19.76 13.3861 19.76 13.8996C19.76 14.4131 19.347 14.8262 18.8337 14.8262H6.14027C5.73117 14.8262 5.34909 14.5096 5.26419 14.0733L2.93853 1.85328H0.92625C0.414883 1.85328 0 1.43822 0 0.92664C0 0.415057 0.414883 0 0.92625 0H3.705ZM4.94 17.915C4.94 16.8919 5.76977 16.0618 6.7925 16.0618C7.81523 16.0618 8.645 16.8919 8.645 17.915C8.645 18.9382 7.81523 19.7683 6.7925 19.7683C5.76977 19.7683 4.94 18.9382 4.94 17.915ZM19.76 17.915C19.76 18.9382 18.9302 19.7683 17.9075 19.7683C16.8848 19.7683 16.055 18.9382 16.055 17.915C16.055 16.8919 16.8848 16.0618 17.9075 16.0618C18.9302 16.0618 19.76 16.8919 19.76 17.915Z"
            fill="#FFD400" />
        </svg>
        <div class="counter" style="color:white; position:relative; top:-25px; left:30px;"><span id="counter">0</span>
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

  <img class="visa-mastercard-b-95-b-27-a-0173-c-07427991-png"
    src="visa-mastercard-b-95-b-27-a-0173-c-07427991-png.png" />

  <div class="div-indolj-menu-list" style="position:relative; top: 100px;  background: #ffffff;
  height: 53.52px; width:2620px;
  position: relative;
 ">
    <div class="div-indolj-menu-wrapper" style="position:relative; top: 20px;
      background: rgba(255, 255, 255, 0.00);
  overflow: hidden;">
      <div class="ul-nav">
        <div class="share-the-goodness-upto-30-off2" style="color:black">
          Share The Goodness Upto 30% OFF
        </div>

        <div class="mighty-deals-upto-30-off2">Mighty Deals upto 30% off</div>

        <div class="kiddy-meals2" style="overflow-y:hidden">KIDDY</div>

        <div class="gourmet-fries2">Gourmet Fries</div>

        <div class="premium-burgers2">Premium Burgers</div>

        <div class="stack-burgers2">Stack Burgers</div>

        <div class="extreme-burgers2">Extreme Burgers</div>

        <div class="classic-burgers2">Classic Burgers</div>

        <div class="healthy-kick2">Healthy Kick</div>

        <div class="appetizers2">Appetizers</div>

        <div class="li-nav-item">
          <div class="a-nav-link">
            <div class="value-burgers2">Value Burgers</div>
          </div>
        </div>

        <div class="mocktails2">Mocktails</div>

        <div class="beverages2">Beverages</div>
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

<div class="div-m-0" style="top:1250px;height:100px;">
  <div class="div59" id="cart-section" style="top: -40px; left: 2100px; height:5000px;">
    <h2 style="font-family: Poppins,sans-serif!important;    margin-top: 0;
    margin-top:1em; margin-left:1em;
    font-weight: 500;
    line-height: 1.2;">Your Cart </h2>
    <div class="div-empty-cart-wrapper">


      <!-- Cart items will be dynamically added here -->
    </div>
  </div>

  <div class="div-item-section" style="height:100px;width:2100px;">
    <div class="div-items-section-wrapper" style="height:100px;width:2100px;">
      <section class="food-search text-center" style="overflow-y:hidden; overflow-x:hidden;">
        <div class="container" style="position:relative;top:-40px;left:450px;overflow-y:hidden; overflow-x:hidden;">
          <form style="overflow-y:hidden" action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Food.." required>

          </form>
        </div>
      </section>
      <div class="div-406856" style="position:relative; left:450px; top:-30px;">
        <div class="summer-feast">Summer Feast</div>

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

  // Add a checkout button to the cart section
  var checkoutButton = document.createElement("button");
  checkoutButton.innerText = "Checkout";
  checkoutButton.addEventListener("click", function () {
    // Redirect to the checkout page with the product details
    window.location.href = "checkout.php?title=" + encodeURIComponent(title) + "&price=" + encodeURIComponent(price) + "&image=" + encodeURIComponent(image);
  });

  // Append the checkout button to the cart section
  document.getElementById("cart-section").appendChild(checkoutButton);
}</script>

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title1; ?>', '<?php echo $price1; ?>', '<?php echo $image1; ?>');incrementCounter();">
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
           
              <button class="button-btn-xs" onclick="addToCart('<?php echo $title2; ?>', '<?php echo $price2; ?>', '<?php echo $image2; ?>');incrementCounter();">

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
              <script>
                function incrementCounter() {
                  counter++; // Increment the counter

                  // Update the counter display
                  var counterElement = document.getElementById('counter');
                  if (counterElement) {
                    counterElement.textContent = counter;
                  }
                }

                function addToCart3() {
                  // Retrieve the product details from PHP variables
                  var title = "<?php echo $title3; ?>";
                  var price = "<?php echo $price3; ?>";
                  var image = "<?php echo $image3; ?>";

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

                  // Add a checkout button to the cart section
                  var checkoutButton = document.createElement("button");
                  checkoutButton.innerText = "Checkout";
                  checkoutButton.addEventListener("click", function () {
                    // Redirect to the checkout page with the product details
                    window.location.href = "checkout.php?title=" + encodeURIComponent(title) + "&price=" + encodeURIComponent(price) + "&image=" + encodeURIComponent(image);
                  });

                  // Append the checkout button to the cart section
                  document.getElementById("cart-section").appendChild(checkoutButton);
                }

                // Array to store cart items
                var cart = [];

                // Function to update the cart section HTML
                function updateCart() {
                  var cartSection = document.getElementById("cart-section");
                  cartSection.innerHTML = "";

                  // Loop through the cart array and create HTML for each item
                  for (var i = 0; i < cart.length; i++) {
                    var item = cart[i];
                    var itemHTML = `
        
          <img src="${item.image}" alt="${item.title}" style="width:200px;margin-top:60px;">
          <div class="item-details">
            <div class="item-title">${item.title}</div>
            <div class="item-price">${item.price}</div>
            <div class="item-quantity">
              <button class="minus-button" onclick="decreaseQuantity(${i})">-</button>
              <span>${item.quantity}</span>
              <button class="plus-button" onclick="increaseQuantity(${i})">+</button>
            </div>
          </div>
        </div>
      `;
                    cartSection.innerHTML += itemHTML;
                  }

                  // Add checkout and clear cart buttons
                  var buttonsHTML = `
      <button class="clear-cart-button" onclick="clearCart()">Clear Cart</button>
    `;
                  cartSection.innerHTML += buttonsHTML;


                }</script>
              <button class="button-btn-xs" onclick="addToCart('<?php echo $title3; ?>', '<?php echo $price3; ?>', '<?php echo $image3; ?>');incrementCounter();">
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

      <div class="div-406857" style="position:relative; left:450px; top:-30px;">
        <div class="wrap-tastic-offer">Wrap Tastic Offer</div>

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

            <button class="button-btn-xs"onclick="addToCart('<?php echo $title4; ?>', '<?php echo $price4; ?>', '<?php echo $image4; ?>');incrementCounter();">
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

      <div class="div-405577" style="position:relative; left:450px; top:-30px;">
        <div class="grab-the-wraps">Grab The Wraps</div>

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


              <button class="button-btn-xs" onclick="addToCart('<?php echo $title5; ?>', '<?php echo $price5; ?>', '<?php echo $image5; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title6; ?>', '<?php echo $price6; ?>', '<?php echo $image6; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title7; ?>', '<?php echo $price7; ?>', '<?php echo $image7; ?>');incrementCounter();">
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



      <div class="div-401293" style="position:relative; left:450px; top:-30px;">
        <div class="share-the-goodness-upto-30-off">
          Share The Goodness Upto 30% OFF
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


              <button class="button-btn-xs" onclick="addToCart('<?php echo $title8; ?>', '<?php echo $price8; ?>', '<?php echo $image8; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title13; ?>', '<?php echo $price13; ?>', '<?php echo $image13; ?>');incrementCounter();">
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

      <div class="div-1573" style="position:relative; left:450px; top:-30px;">
        <div class="mighty-deals-upto-30-off">Mighty Deals upto 30% off</div>

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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title15; ?>', '<?php echo $price15; ?>', '<?php echo $image15; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title16; ?>', '<?php echo $price16; ?>', '<?php echo $image16; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904654-1632163242-mighty-deals-02-min-jpg"
              src="_1637904654-1632163242-mighty-deals-02-min-jpg.png" />
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title16; ?>', '<?php echo $price16; ?>', '<?php echo $image16; ?>');incrementCounter();">
                <svg class="frame4" width="13" height="16" viewBox="0 0 13 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.3104 7.8649C12.3104 8.36232 11.9077 8.76497 11.4111 8.76497H7.3643V12.814C7.3643 13.3115 6.96159 13.7136 6.46502 13.7136C5.96844 13.7136 5.56573 13.3115 5.56573 12.814V8.76497H1.51895C1.02237 8.76497 0.619659 8.36232 0.619659 7.8649C0.619659 7.36748 1.02237 6.96539 1.51895 6.96539H5.56573V2.91631C5.56573 2.41889 5.96844 2.01624 6.46502 2.01624C6.96159 2.01624 7.3643 2.41889 7.3643 2.91631V6.96539H11.4111C11.9085 6.9651 12.3104 7.3672 12.3104 7.8649Z"
                    fill="#FDFDFD" />
                </svg>
            </div>
            </button>

            <img class="_1637904662-1632163270-mighty-deals-03-min-jpg"
              src="_1637904662-1632163270-mighty-deals-03-min-jpg.png" />
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title17; ?>', '<?php echo $price17; ?>', '<?php echo $image17; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title18; ?>', '<?php echo $price18; ?>', '<?php echo $image18; ?>');incrementCounter();">
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


              <button class="button-btn-xs" onclick="addToCart('<?php echo $title19; ?>', '<?php echo $price19; ?>', '<?php echo $image19; ?>');incrementCounter();">
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

      <div class="div-402539" style="position:relative; left:450px; top:-30px;">
        <div class="kiddy-meals">KIDDY MEALS</div>

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
              <button class="button-btn-xs" onclick="addToCart('<?php echo $title20; ?>', '<?php echo $price20; ?>', '<?php echo $image20; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title21; ?>', '<?php echo $price21; ?>', '<?php echo $image21; ?>');incrementCounter();">
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
              <button class="button-btn-xs"onclick="addToCart('<?php echo $title22; ?>', '<?php echo $price22; ?>', '<?php echo $image22; ?>');incrementCounter();">
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

      <div class="div-1405" style="position:relative; left:450px; top:-30px;">
        <div class="gourmet-fries">Gourmet Fries</div>

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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title23; ?>', '<?php echo $price23; ?>', '<?php echo $image23; ?>');incrementCounter();">
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
              <button class="button-btn-xs" onclick="addToCart('<?php echo $title24; ?>', '<?php echo $price24; ?>', '<?php echo $image24; ?>');incrementCounter();">
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

              <button class="button-btn-xs" onclick="addToCart('<?php echo $title25; ?>', '<?php echo $price25; ?>', '<?php echo $image25; ?>');incrementCounter();">
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



      <div class="div-about-content" style="position:relative; left:450px; top:-180px;">
        <div class="contact-us">Contact Us:</div>

        <div class="_021-111-432-532">(021) 111 432 532</div>

        <div class="our-locations">Our Locations</div>

        <div
          class="dha-branch-plot-no-10-c-at-intersection-of-khayaban-e-nishat-and-khayaban-e-ghazi-dha-phase-6-opposite-to-bonsai-restaurant">
          * DHA Branch- Plot no. 10-C, at intersection of Khayaban-e-Nishat and
          Khayaban-e-Ghazi, Dha phase 6. Opposite to BONSAI<br />Restaurant.
        </div>

        <div
          class="smchs-branch-plot-104-a-ground-floor-s-m-c-h-s-capt-fareed-bukhari-shaheed-road-karachi-sindhi-muslim-cooperative-housing-society-karachi">
          * SMCHS Branch- Plot # 104-A, Ground floor, S.M.C.H.S, capt Fareed
          Bukhari Shaheed Road Karachi, Sindhi Muslim Cooperative<br />Housing
          Society, Karachi
        </div>

        <div
          class="gulshan-branch-shop-no-2-3-shazco-centre-plot-sb-3-gulshan-e-iqbal-block-4-near-disco-bakery-opposite-to-kfc-karachi">
          * Gulshan Branch- Shop no. 2 &amp; 3, Shazco Centre, Plot SB-3,
          Gulshan-e-Iqbal Block 4, near Disco Bakery, opposite to KFC Karachi
        </div>

        <div class="nazimabad-branch-shop-no-3-saima-paari-corner-block-l-near-5-star-chowrangi-karachi">
          * Nazimabad Branch- Shop no. 3, SAIMA PAARI CORNER, Block L, Near 5
          star Chowrangi, Karachi
        </div>

        <div class="fc-01-food-court-dolmen-mall-clifton-karachi">
          * FC-01, Food Court Dolmen Mall Clifton, Karachi
        </div>

        <div class="k-011-food-court-dolmen-mall-tariq-road-karachi">
          * K-011 Food Court Dolmen Mall Tariq Road, Karachi
        </div>

        <div class="shop-2-ground-floor-uni-tower-main-i-i-chundrigar-road-karachi">
          * Shop # 2, Ground Floor Uni Tower Main I.I Chundrigar Road, Karachi
        </div>

        <div class="fc-15-food-court-lucky-one-mall-karachi">
          * FC-15, Food Court Lucky One Mall, Karachi.
        </div>

        <div class="plot-20-midway-commercial-b-phase-1-bahria-town-karachi">
          * Plot-20, Midway Commercial-B Phase 1, Bahria Town, Karachi
        </div>

        <div class="isra-residency-sb-16-scheme-36-block-3-a-gulistan-e-johar-karachi">
          * ISRA Residency SB-16 Scheme -36, Block 3-A Gulistan-e-Johar Karachi.
        </div>

        <div class="about-us">About Us</div>

        <div
          class="welcome-to-the-home-of-delicious-gourmet-burgers-burger-o-clock-is-a-modern-restaurant-that-exists-to-delight-passionate-burger-lovers-walk-in-and-place-your-order-and-sit-back-and-relax-and-soak-in-our-attractive-ambiance-as-you-wait-for-your-order-to-be-prepared-all-burgers-are-cooked-to-order-and-we-pride-ourselves-on-serving-fresh-delicious-and-hygienic-burgers-that-tantalize-the-taste-buds-and-excite-your-senses-we-have-perfected-the-optimized-packaging-to-enhance-your-burger-experience-our-packaging-is-designed-to-be-easy-to-hold-and-carry-as-well-as-ensure-that-your-burgers-maintain-their-flavour-and-shape-for-those-who-do-not-prefer-a-dine-in-or-takeaway-experience-we-offer-our-patrons-the-option-to-have-their-order-delivered-at-their-home-or-office">
          Welcome to the home of delicious gourmet burgers. Burger O’Clock is a
          modern restaurant that exists to delight passionate burger<br />lovers.
          Walk in and place your order and sit back and relax and soak in our
          attractive ambiance as you wait for your order to be<br />prepared.
          All burgers are cooked to order and we pride ourselves on serving
          fresh, delicious and hygienic burgers that tantalize the<br />taste
          buds and excite your senses. We have perfected the optimized packaging
          to enhance your burger experience. Our packaging<br />is designed to
          be easy to hold and carry as well as ensure that your burgers maintain
          their flavour and shape. For those who do not<br />prefer a dine in or
          takeaway experience, we offer our patrons the option to have their
          order delivered at their home or office.
        </div>

        <div
          class="what-makes-us-o-so-special-we-only-use-premium-meat-that-is-guaranteed-for-its-freshness-what-s-more-our-sauces-are-hand-crafted-with-secret-spices-and-herbs-that-leaves-you-drooling-for-more-if-its-your-first-trip-you-would-love-our-gourmet-burgers-crunchos-with-fried-mozzarella-cheese-patty-and-crisp-nachos-or-messy-meat-with-crispy-onion-rings-and-saucy-chili-for-the-sides-we-are-loved-for-our-gourmet-fries-potatoes-topped-with-a-variety-of-sauces-nacho-cheese-jalape-os-pepperoni-and-so-much-more">
          What makes us O-So-Special? We only use premium meat that is
          guaranteed for its freshness. What&#039;s more, our sauces are
          hand-<br />crafted with secret spices and herbs that leaves you
          drooling for more. If its your first trip you would love our gourmet
          burgers<br />Crunchos with fried mozzarella cheese patty and crisp
          nachos or Messy meat with crispy onion rings and saucy chili. For the
          sides,<br />we are loved for our Gourmet fries - potatoes topped with
          a variety of, sauces, nacho cheese, jalapeños, pepperoni and so
          much<br />more!
        </div>
      </div>
    </div>
  </div>
</div>
</div>