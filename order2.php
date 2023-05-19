<?php
// Retrieve the product and user details from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] === "order-now") {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $totalPrice = $_POST["total"]; // Add this line to retrieve the total price
	$order_date = date("Y-m-d h:i:sa");
    // Retrieve and validate the user details from the form fields
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $contact = isset($_POST["contact"]) ? $_POST["contact"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $instructions = isset($_POST["instructions"]) ? $_POST["instructions"] : "";
    $landmark = isset($_POST["landmark"]) ? $_POST["landmark"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $altno = isset($_POST["altno"]) ? $_POST["altno"] : "";

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
    $stmt = $conn->prepare("INSERT INTO food_order (title, price, total, qty, customer_name, customer_contact, customer_email, customer_address, instructions, landmark, payment, altno) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("ssdsssssssss", $title, $price, $totalPrice, $quantity, $name, $contact, $email, $address, $instructions, $landmark, $payment, $altno); // Add $totalPrice to the bind_param function
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
