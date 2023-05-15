<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <title>Document</title>

</head>

<?php
// Retrieve the product details from the URL parameters or form submission
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $title = $_GET["title"];
    $price = $_GET["price"];
    $image = $_GET["image"];
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $image = $_POST["image"];
}

?>

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
       
                        <div class="v14_56"><span class="v14_57">Your Order</span>
                            <div class="v14_59">
                                <div class="v14_60">
                                    <div class="v14_61">

                                        <input type="hidden" name="title" value="<?php echo $title; ?>">
                                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                                        <input type="hidden" name="image" value="<?php echo $image; ?>">

                                        <button type="submit" name="submit" style="background:Yellow;" value="order-now">Order Now</button>
                    </form>
                    <span class="v14_62">Enter Voucher/promo code</span>
                </div>
            </div></div>
            <div class="v14_63"><span class="v14_64">Apply</span></div>
        </div>
        <div class="v14_65"><span class="v14_66" style="position:relative; ">Place Order</span></div>
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
        <div class="v14_78"><span class="v14_79">POWERED BY</span><span class="v14_80">Indolj</span><span
                class="v14_81"> | </span><span class="v14_82">Privacy Policy | </span><span class="v14_83">FAQS</span>
        </div>
    </div>
    </div>
</body>

</html>