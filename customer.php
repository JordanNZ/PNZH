<?php
include('config.php');

$sname = mysqli_real_escape_string($db, $_GET["sname"] );
$query = mysqli_query($db, "SELECT * FROM customers WHERE sname = '{$sname}'");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PNZH &mdash; <?php echo $fname; ?> </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container" style="margin-top: 50px;">
<img src="pnzh.png" style="margin-bottom: 20px;" />
<div class="panel panel-primary">

<?php
while( $row = mysqli_fetch_array ( $query ) ) {
echo "<img src=\"uploads/" .$row['image']. "\"width=\"350px\" height=\"350px\" style=\"float: right; margin-top: 40px;\"/>";
echo "<div class=\"panel-heading\">" .$row['fname']. " - Product Specs</div>";
echo "<div class=\"panel-body\">";
echo "<b>Short Name:</b> " .$row['sname']. "<br />";
echo "<b>Product Code:</b> " .$row['procode']. "<br />";
echo "<b>Product Description:</b> " .$row['prodesc']. "<br />";
echo "<b>Barcode:</b> " .$row['code']. "<br />";
echo "<b>Carton Type:</b> " .$row['description']. "<br />";
echo "<b>Carton Print:</b> " .$row['cprinting']. "<br />";
echo "<b>Batch:</b> " .$row['batch']. "<br />";
echo "<b>Best Before:</b> " .$row['bb']. "<br />";
echo "<b>Best Before Time:</b> " .$row['bbtime']. "<br />";
}
?>
</div>
</div>

</body>
</html>
