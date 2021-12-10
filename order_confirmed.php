<html>
<head>
    <title>Checkout</title>
</head>
<body>
<h3>Your order was successfully placed!</h3>

<?php
session_start();
session_destroy();
?>

<form action="mysessions.php">
    <input type="submit" value="Back" />
</form>
</body>
</html>
