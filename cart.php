<!DOCTYPE html>
<html>
<head>
<title>2K19/CSE/25</title>
</head>
<body style="background-image: url('image/cover.jpeg'); background-repeat: no-repeat; background-size: cover;">
<div style=" background-color: skyblue; width: 50%; height: 300px; opacity: 90%; border: 1px solid red; padding: 20px;">
<h1 style="color: white; text-shadow: 2px 2px #ff0000;">Order Reciept</h1>
<h2><?php
    echo "<p>Order placed on ".date('H:i, jS F
        Y')."</p>";
        ?></h2>
        <?php
        // create short variable names
        $productname = $_POST['Products'];
        $quantity = $_POST['Quantity'];
        $brand=$_POST['Brand'];
        echo '<h3 style="color: red">Order Confirmation </h3>';
        
echo 'Products = '; echo htmlspecialchars($productname).'<br /> <br /> <br />';
echo 'Quantity = '; echo htmlspecialchars($quantity).'<br /> <br /> <br />';
echo 'Brand = '; echo htmlspecialchars($brand).' <br /> <br /> <br />';
?></div>
</body>
</html>