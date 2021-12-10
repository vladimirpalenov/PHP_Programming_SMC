<html>
<head>
    <title>Checkout</title>
</head>
<body>
<h2>Order confirmation:</h2>
<?php
    session_start();
?>
    <p>Product 1: <?php echo $_SESSION["Product1"]?></p>
    <p>Product 2: <?php echo $_SESSION["Product2"]?></p>
    <p>Product 3: <?php echo $_SESSION["Product3"]?></p>
    <p>Product 4: <?php echo $_SESSION["Product4"]?></p>
    <p>Product 5: <?php echo $_SESSION["Product5"]?></p>
    <p>Product 6: <?php echo $_SESSION["Product6"]?></p>
    <form action="order_confirmed.php">
        <input type="submit" value="Checkout" />
    </form>

<form action="mysessions.php">
    <input type="submit" value="Back" />
</form>
</body>
</html>
