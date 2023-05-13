<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<?php
ob_start();
include('header.php');
?>
<?php
if (isset($_REQUEST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
	$altno = mysqli_real_escape_string($conn, $_REQUEST['altno']);
	$landmark = mysqli_real_escape_string($conn, $_REQUEST['landmark']);
	$instructions = mysqli_real_escape_string($conn, $_REQUEST['instructions']);
	$payment = mysqli_real_escape_string($conn, $_REQUEST['payment']);
	date_default_timezone_set('Asia/Karachi');
	$order_date = date("Y-m-d h:i:sa");
	$status = mysqli_real_escape_string($conn, "Ordered");


	if (isset($_COOKIE["shopping_cart"])) {
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach ($cart_data as $keys => $values) {
			$total = 0;
			$title = mysqli_real_escape_string($conn, $values["item_name"]);
			$price = mysqli_real_escape_string($conn, $values["item_price"]);
			$qty = mysqli_real_escape_string($conn, $values["item_quantity"]);
			$total = $price;
			$sql = "INSERT INTO food_order SET
					title = '$title',
					price = $price,
					qty = $qty,
					total = $total,
					order_date = '$order_date',
					status = '$status',
					customer_name = '$name',
					customer_contact = '$contact',
					customer_email = '$email',
					customer_address = '$address',
					instructions='$instructions',
					landmark='$landmark',
					altno='$altno',
					payment='$payment'
				";
			$res = mysqli_query($conn, $sql);
		}
		if ($res == true) {
			setcookie("shopping_cart", "", time() - 3600);
			$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			header("location:cart_core.php?action=order_success&url=$url");
		} else {
			$_SESSION['order'] = "<div class='error text-center'>Failed to ordered food.</div>";
		}
	} else {
		$_SESSION['order'] = "<div class='error text-center'>You didn't select any item.</div>";
	}
}
?>

<body>
	<!-- fOOD sEARCH Section Starts Here -->
	<section class="order" style="background:white;padding-bottom: 0;">
		<?php
		if (isset($_SESSION['order'])) {
			echo $_SESSION['order'];
			unset($_SESSION['order']);
		}
		if (isset($_SESSION['add_to_cart'])) {
			echo $_SESSION['add_to_cart'];
			unset($_SESSION['add_to_cart']);
		}

		?>
		<h4 style="position:relative; left:1600px;top:300px;">Your Cart</h4>
		<table class="cart-table"
			style="position:relative; background-color:#f2f2f2; height:500px; border:0;left:1600px; top:-1000px; width:500px">
			<?php

			if (isset($_COOKIE["shopping_cart"])) {
				$total = 0;
				$i = 1;
				$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach ($cart_data as $keys => $values) {
					?>
					<tr>

					<tr>

						<td>
							<img src="images/food/<?php echo $values["item_img"]; ?>" alt="" />
						</td>
						<td>
							<?php echo $values["item_name"]; ?>
						</td>
						<td>$
							<?php echo $values["item_price"]; ?>
						</td>
						<td>
							<?php echo $values["item_quantity"]; ?>
						</td>
						<td>$
							<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>
						</td>
						<td><a class="btn btn-danger"
								href="cart_core.php?action=delete&id=<?php echo $values["item_id"]; ?>&food=<?php echo $values["item_name"]; ?>&url=<?php echo $url; ?>">&times;</a>
						</td>

					</tr>
					<?php
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
				?>
				<tr>
					<th colspan="5">Total</th>
					<th>$
						<?php echo number_format($total, 2); ?>
					</th>
					<th></th>
				</tr>
				<?php
			} else {
				echo '
						<tr>
							<td colspan="7" align="center">No Item in Cart</td>
						</tr>
						';
			}
			?>
			
			<br>
			<form action="" method="POST"
				style="width:1200px;height:1050px;position:relative;background:#f7f7f7; left:100px">
				<div class="row" style="position:relative;left:100px">
					<div class="col-75" style="position:relative;left:100px">
						<div class="container2" style="width:1300px; position:relative; left:400px">
							<div class="row">
								<div class="col-50">
									<h3 style="color:black; margin-top:20px;position:relative; left:50px">This is a
										DELIVERY ORDER</h3>
									<h3 style="color:black; margin-top:20px;position:relative; left:50px">Just a last
										step, please enter your details:
									</h3>
									<label for="name"
										style="margin-top:20px;color:black;font-size:20px;position:relative; left:50px">Full
										Name</label>
									<input type="text" name="name" style="height:60px;position:relative; left:50px"
										placeholder="Enter your full name" class="input-responsive" required>
									<div class="row">
										<div class="col-50">
											<label for="contact"
												style="margin-top:20px;color:black; font-size:20px; position:relative; left:70px">Mobile
												Number</label>
											<input type="tel" style="position:relative; height:60px; left:70px"
												name="contact" placeholder="03-xx-xxx" class="input-responsive"
												required>
										</div>
										<div class="col-50">
											<label for="altno"
												style="margin-top:20px;color:black;font-size:20px; position:relative; left:80px">Alternate
												Number</label>
											<input type="tel" style="position:relative; height:60px; left:80px"
												name="altno" placeholder="03-xx-xxx" class="input-responsive" required>
										</div>
									</div>
									<label for="adress"
										style="margin-top:20px;color:black;font-size:20px; height:60px; position:relative; left:50px">Delivery
										Address</label>
									<input type="text" style="position:relative;top:-30px;height:60px;left:50px"
										name="address" placeholder="542 W. 15th Street" class="input-responsive"
										required>
									<label for="instructions"
										style="font-size:20px;top:-20px; color:black; position:relative; left:50px">Delivery
										Instructions</label>
									<input type="text" name="instructions"
										style="position:relative;top:-20px; height:60px; left:50px" placeholder=""
										class="input-responsive" required>

									<div class="row">
										<div class="col-50">
											<label for="landmark"
												style="margin-top:20px;font-size:20px; color:black; position:relative;top:-20px; left:70px">Nearest
												Landmark</label>
											<input type="text" name="landmark"
												style="position:relative; height:60px; left:70px; top:-20px;"
												placeholder="Any famous place nearby" class="input-responsive" required>
										</div>
										<div class="col-50">
											<label for="email"
												style="margin-top:20px;font-size:20px;color:black; position:relative; left:70px;top:-20px;">Email
												Address</label>
											<input type="text" name="email"
												style="position:relative; height:60px; left:70px; top:-20px"
												placeholder="Please enter your email" class="input-responsive" required>
										</div>
									</div>
									<label for="payment"
										style="margin-top:20px;color:black;font-size:20px;height:60px; position:relative; left:50px;">Payment
										Information</label>
									<br> <select name="payment"
										style="font-size:20px;position:relative; left:50px;top:-20px"> <br><br>
										<option style="font-size:20px;" value="option1">Cash</option>
										<option style="font-size:20px;" value="option2">Online Payment</option>
									</select>

								</div>
							</div>
							<br><br>

							<input type="submit" name="submit" value="Checkout" style="background-color:#fcc817"
								class="btn">
			</form>
			</div>
			</div>
			</div>
			
			
	</section>

	<!-- fOOD sEARCH Section Ends Here -->
	<br><br><br><br><br>
	<?php
	include('footer.php');
	ob_flush();
	?>
</body>

</html>