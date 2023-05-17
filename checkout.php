<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  <title>Document</title>
  <link rel="stylesheet" href="./main.css">
</head>

<body>
  <div class="v14_2">
    <div class="v14_3"></div>
    <div class="v14_4">
      <div class="v14_5" style="position:relative; left:220px">
        <div class="v14_6">
          <form action="order2.php" method="post">
            <div class="v14_7">
              <span class="v14_8">Title</span>
              <div class="v14_9">
                <div class="v14_10">
                  <div class="v14_11">
                    <div class="v14_12"></div>
                    <div class="v14_13">
                      <div class="v14_14">
                        <div class="v14_15"></div>
                      </div>
                    </div>
                  </div>
                  <div class="v14_16">
                    <div class="v14_17">
                      <span class="v14_18">
                        <input type="radio" name="title" value="Mr." checked> Mr.
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="v14_19">
              <span class="v14_20">Full Name</span>
              <div class="v14_21">
                <div class="v14_22">
                  <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
              </div>
            </div>
            <div class="v14_24">
              <span class="v14_25">Mobile Number</span>
              <div class="v14_26">
                <div class="v14_27">
                  <input type="tel" name="contact" pattern="[0-9]{4}-[0-9]{7}" placeholder="03xx-xxxxxxx" required>
                </div>
              </div>
            </div>
            <div class="v14_29">
              <span class="v14_30">Alternate Number</span>
              <div class="v14_31">
                <div class="v14_32">
                  <input type="tel" name="altno" pattern="[0-9]{4}-[0-9]{7}" placeholder="03xx-xxxxxxx">
                </div>
              </div>
            </div>
            <div class="v14_34">
              <span class="v14_35">Delivery Address</span>
              <div class="v14_36">
                <div class="v14_37">
                  <textarea name="address" placeholder="Enter your complete address" required></textarea>

                </div>
              </div>
            </div>
            <div class="v14_40">
              <span class="v14_41">Delivery Instructions</span>
              <div class="v14_42">
                <div class="v14_43">
                  <textarea name="instructions" placeholder="Enter any instructions or note to rider"></textarea>
                </div>
              </div>
            </div>
            <div class="v14_45">
              <span class="v14_46">Nearest Landmark</span>
              <div class="v14_47">
                <div class="v14_48">
                  <input type="text" name="landmark" placeholder="Any famous place nearby">
                </div>
              </div>
            </div>
            <div class="v14_50">
              <span class="v14_51">Email Address</span>
              <div class="v14_52">
                <span class="v14_54">Please enter your email</span>
                <input type="text" name="email" placeholder="pls enter email">
              </div>
            </div>
        </div>
      </div>
      <div class="v14_56" style="position:relative; left:1000px; top:-1000px;height:1000px;">
  <span class="v14_57" style="margin:20px; position:relative; left:-5px;top:350px">Your Order</span>
  <?php
    // Retrieve the cart data from the URL parameter
    $cartData = $_GET["cart"];

    // Check if the cart data is present and not null
    if (!empty($cartData)) {
      $decodedCartData = urldecode($cartData);
      // Convert the cart data from JSON string to an array
      $cart = json_decode($decodedCartData, true);

      // Check if the cart is an array before looping through it
      if (is_array($cart)) {
        // Loop through the cart array and display the products
        foreach ($cart as $product) {
          $title = $product["title"];
          $price = $product["price"];

          echo '
          <div class="cart-item" style="margin:20px; position:relative; top:350px">
            <div class="item-details">
              <div class="item-title">' . $title . '</div>
              <div class="item-price">' . $price . '</div>
            </div>
          </div>
          ';
        }
      } else {
        echo 'Invalid cart data';
      }
    } else {
      echo 'No cart data found';
    }
    ?>
  </div>
</div>
        <input type="hidden" name="title" value="<?php echo $title; ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        <input type="hidden" name="image" value="<?php echo $image; ?>">
        <div class="v14_65" style="position:relative; top:500px; left:1100px;">
          <button class="v14_66" style="position:relative; top:0px;" type="submit" name="submit" value="order-now">Order
            Now</button>
        </div>


      </div>
    </div>
    <span class="v14_66" style="position:relative;">Place Order</span>
    </form>
  </div>
  <span class="v14_66" style="position:relative;">Place Order</span>
  </div>
  <div class="v14_67">
  </div>
  </div>
  </div>
  <div class="v14_71">
    <div class="v14_72">
      <div class="v14_73">
        <div class="v14_74"></div>
      </div>
      <div class="v14_75">
        <div class="v14_76"></div>
      </div>
    </div>
    <div class="v14_77"></div>
    <div class="v14_78">
      <span class="v14_79">POWERED BY</span>
      <span class="v14_80">Indolj</span>
      <span class="v14_81"> | </span>
      <span class="v14_82">Privacy Policy | </span>
      <span class="v
    14_83">FAQS</span>
    </div>
  </div>
</body>

</html>