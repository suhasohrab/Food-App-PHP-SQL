<?php
// Retrieve the product and user details from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] === "order-now") {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $image = $_POST["image"];
	$order_date = date("Y-m-d h:i:sa");
	$status = mysqli_real_escape_string($conn, "Ordered");
    // Retrieve and validate the user details from the form fields
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $contact = isset($_POST["mobile_number"]) ? $_POST["mobile_number"] : "";
    $address = isset($_POST["delivery_address"]) ? $_POST["delivery_address"] : "";
    $instructions = isset($_POST["delivery_instructions"]) ? $_POST["delivery_instructions"] : "";
    $landmark = isset($_POST["nearest_landmark"]) ? $_POST["nearest_landmark"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $altno = isset($_POST["alternate_number"]) ? $_POST["alternate_number"] : "";

    // Store the order details in the orders database
    // Perform your database operations here to store the order details

    // Example code to insert the order details into the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "food";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO food_order (title, price, qty, customer_contact, customer_address, instructions, landmark, payment, altno) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    $stmt->bind_param("ssissssss", $title, $price, $quantity, $contact, $address, $instructions, $landmark, $payment, $altno);
    
    // Execute the statement
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect the user to a success page or display a success message
    header("Location: success.php");
    exit;
}
?>
