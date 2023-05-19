<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  <title>Checkout</title>
  <link rel="stylesheet" href="./main.css">
  <link rel="stylesheet" href="./style.css">

</head>

<style>
  @media only screen and (min-width: 924px) {
    .v14_5 {
      position: relative;
      left: 120px;
    }
    .div-footer-container{
      position:relative;
      top:20px;
      width:2620px;
    }
    .faqs {
      position: relative;
      left: 290px;
      top: -13px;
    }

    .privacy-policy-span {
      position: relative;
      left: 320px;
    }
    .total-price {
      position: relative;
      top: 400px;
    }

    .v14_4 {
      position: relative;
      left: 460px;
      height: 2500px;
    }

    .v14_71 {
      position: relative;
      top: -30px;
    }

    .v14_57 {
      margin: 20px;
      position: relative;
      left: -5px;
      top: 350px
    }

    .cart-item {
      margin: 20px;
      position: relative;
      top: 350px
    }

    .v14_56 {
      position: relative;
      left: 900px;
      top: -1000px;
      height: 1000px;
    }

    .v14_65 {
      position: relative;
      top: -2000px;
      left: 1400px;
    }
  }

  @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-device-pixel-ratio: 2) {
    .v14_5 {
      width: 100%;
    }

    .cart-item {
      margin: 20px;
      position: relative;
      top: 50px
    }

    .v14_65 {
      position: relative;
      top: -1300px;
      left: 100px;
    }

    .v14_56 {
      position: relative;
      left: 120px;
      top: 20px;
      height: 700px;
    }

    .v14_4 {
      position: relative;
      left: -60px;
      height: 2500px;
    }

    .v14_57 {
      margin: 20px;
      position: relative;
      left: -5px;
      top: 30px;
    }

    .v14_2 {
      height: 1400px;
    }

    .v14_71 {
      position: relative;
      top: 920px;
    }
  }
</style>

<body>
  <div class="v14_2">
    <div class="v14_3"></div>
    <div class="v14_4">
      <div class="v14_5">
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
                        <input style="border:none" type="radio" name="title" value="Mr." checked> Mr.
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
                  <input type="text" style="border:none" name="name" placeholder="Enter your full name" required>
                </div>
              </div>
            </div>
            <div class="v14_24">
              <span class="v14_25">Mobile Number</span>
              <div class="v14_26">
                <div class="v14_27">
                  <input type="tel" style="border:none" name="contact" pattern="[0-9]{4}-[0-9]{7}"
                    placeholder="03xx-xxxxxxx" required>
                </div>
              </div>
            </div>
            <div class="v14_29">
              <span class="v14_30">Alternate Number</span>
              <div class="v14_31">
                <div class="v14_32">
                  <input type="tel" style="border:none" name="altno" pattern="[0-9]{4}-[0-9]{7}"
                    placeholder="03xx-xxxxxxx">
                </div>
              </div>
            </div>
            <div class="v14_34">
              <span class="v14_35">Delivery Address</span>
              <div class="v14_36">
                <div class="v14_37">
                  <textarea name="address" style="border:none" placeholder="Enter your complete address"
                    required></textarea>

                </div>
              </div>
            </div>
            <div class="v14_40">
              <span class="v14_41">Delivery Instructions</span>
              <div class="v14_42">
                <div class="v14_43">
                  <textarea name="instructions" style="border:none"
                    placeholder="Enter any instructions or note to rider"></textarea>
                </div>
              </div>
            </div>
            <div class="v14_45">
              <span class="v14_46">Nearest Landmark</span>
              <div class="v14_47">
                <div class="v14_48">
                  <input type="text" name="landmark" style="border:none" placeholder="Any famous place nearby">
                </div>
              </div>
            </div>
            <div class="v14_50">
              <span class="v14_51">Email Address</span>
              <div class="v14_52">
                <span class="v14_54">Please enter your email</span>
                <input type="text" style="border:none" name="email">
              </div>
            </div>
        </div>
      </div>
      <div class="v14_56">
        <span class="v14_57">Your Order</span>
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
            $totalPrice = 0; // Initialize the total price variable
        
            // Loop through the cart array and display the products
            foreach ($cart as $product) {
              $title = $product["title"];
              $price = $product["price"];
              $quantity = $product["quantity"]; // Retrieve the quantity of the product
              $itemPrice = $price * $quantity; // Calculate the price for the current item
              $totalPrice += $itemPrice; // Add the item price to the total price
        
              echo '
          <div class="cart-item">
            <div class="item-details">
              <div class="item-title" style="   font-size: 1rem;
              font-family: Poppins, sans-serif !important;">' . $title . '</div>
              <div class="item-price">' . $price . '</div>
              <div class="item-quantity">' . $quantity . '</div>
            </div>
          </div>
        ';
            }

            // Display the total price
            echo '<div class="total-price" style="   font-size: 1rem;
            font-family: Poppins, sans-serif !important; margin-left:10px" >Total: $' . $totalPrice . '</div>';
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
    <input type="hidden" name="total" value="<?php echo $totalPrice; ?>">
    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">

    <div class="v14_65">
      <button class="v14_66" style="position:relative; top:0px;background-color:#FCC817; border:none;" type="submit"
        name="submit" value="order-now">Order Now</button>
    </div>
  </div>
  </div>
  </div>
  </form>
  </div>

  <div class="v14_67">
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

    <svg class="frame70" width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M14.7114 8.70702C10.6328 8.70702 7.34292 11.8535 7.34292 15.7544C7.34292 19.6554 10.6328 22.8018 14.7114 22.8018C18.79 22.8018 22.0799 19.6554 22.0799 15.7544C22.0799 11.8535 18.79 8.70702 14.7114 8.70702ZM14.7114 20.3362C12.0757 20.3362 9.92092 18.2814 9.92092 15.7544C9.92092 13.2274 12.0693 11.1727 14.7114 11.1727C17.3535 11.1727 19.5019 13.2274 19.5019 15.7544C19.5019 18.2814 17.3471 20.3362 14.7114 20.3362ZM24.1 8.41874C24.1 9.33263 23.3304 10.0625 22.3813 10.0625C21.4258 10.0625 20.6626 9.3265 20.6626 8.41874C20.6626 7.51098 21.4322 6.77496 22.3813 6.77496C23.3304 6.77496 24.1 7.51098 24.1 8.41874ZM28.9802 10.0871C28.8712 7.88512 28.3453 5.93466 26.6587 4.32768C24.9785 2.7207 22.9392 2.21775 20.637 2.10735C18.2642 1.97854 11.1522 1.97854 8.77942 2.10735C6.48359 2.21162 4.44427 2.71456 2.75766 4.32155C1.07106 5.92853 0.55161 7.87899 0.436177 10.0809C0.301505 12.3503 0.301505 19.1524 0.436177 21.4218C0.545197 23.6237 1.07106 25.5742 2.75766 27.1812C4.44427 28.7882 6.47717 29.2911 8.77942 29.4015C11.1522 29.5303 18.2642 29.5303 20.637 29.4015C22.9392 29.2973 24.9785 28.7943 26.6587 27.1812C28.3389 25.5742 28.8648 23.6237 28.9802 21.4218C29.1149 19.1524 29.1149 12.3565 28.9802 10.0871ZM25.9148 23.8568C25.4146 25.059 24.4463 25.9851 23.1829 26.4697C21.2911 27.1873 16.802 27.0217 14.7114 27.0217C12.6208 27.0217 8.1253 27.1812 6.23989 26.4697C4.98296 25.9913 4.0146 25.0651 3.50798 23.8568C2.75766 22.0474 2.93081 17.754 2.93081 15.7544C2.93081 13.7549 2.76408 9.45531 3.50798 7.65205C4.00819 6.44988 4.97654 5.52372 6.23989 5.03917C8.13171 4.32155 12.6208 4.48715 14.7114 4.48715C16.802 4.48715 21.2975 4.32768 23.1829 5.03917C24.4398 5.51758 25.4082 6.44375 25.9148 7.65205C26.6651 9.46144 26.492 13.7549 26.492 15.7544C26.492 17.754 26.6651 22.0536 25.9148 23.8568Z"
        fill="white" />
    </svg>
  </div>

  <img class="visa-mastercard-b-95-b-27-a-0173-c-07427991-png2"
    src="visa.webp" />
  <div class="p-mb-0">
    <div class="">|</div>
    <div class="privacy-policy">
      <span><span class="privacy-policy-span">Privacy Policy</span>
    </div>
    <div class="faqs">FAQS</div>
  </div>
</div>
</body>
</html>