<?php
include('config.php');

//get the q parameter from URL
$keywords = mysqli_real_escape_string($db, $_GET["q"] );

$query = mysqli_query($db, "SELECT * FROM customers WHERE sname LIKE '%". $keywords ."%'");

while( $row = mysqli_fetch_array ( $query ) )
{

        if ($arr == "") {
          $arr = "<a href=\"customer.php?sname={$row['sname']}\">{$row['sname']}</a>";
        } else {
          $arr = $arr . "<br /><a href=\"customer.php?sname={$row['sname']}\">{$row['sname']}</a>";
        }

}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($arr == "") {
  $response = "No customers found";
} else {
  $response = $arr;
}

//output the response
echo $response;
?>