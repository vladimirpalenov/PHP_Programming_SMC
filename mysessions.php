<html>
<head>
  <title>Count Your Visits</title>
</head>
<body>

<?php
session_start();
if (isset($_POST['Submit'])) {
    $_SESSION["Product1"] = $_POST["Product1"];
    $_SESSION["Product2"] = $_POST["Product2"];
    $_SESSION["Product3"] = $_POST["Product3"];
    $_SESSION["Product4"] = $_POST["Product4"];
    $_SESSION["Product5"] = $_POST["Product5"];
    $_SESSION["Product6"] = $_POST["Product6"];
    header('Location: checkout.php');
}
?>

<h2>Enter quantity for each product:</h2>
<form method="POST"  action="mysessions.php">
  <p>Product 1:
    <input type="text" type="number" name="Product1" value="0" /></p>
  <p>Product 2:
    <input type="text" type="number" name="Product2" value="0" /></p>
  <p>Product 3:
    <input type="text" type="number" name="Product3" value="0" /></p>
  <p>Product 4:
    <input type="text" type="number" name="Product4" value="0" /></p>
  <p>Product 5:
    <input type="text" type="number" name="Product5" value="0" /></p>
  <p>Product 6:
    <input type="text" type="number" name="Product6" value="0" /></p>
  <p><input type="submit" name="Submit" value="Add to cart" /></p>
</form>


</body>
</html>