<?php
$total_dana = 0;
$total_harus = 50000000;
$query = "SELECT nominal FROM db_donatur";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
  $total_dana += $row['nominal'];
}

$format_harus = number_format($total_harus, 0, ',', '.');
$format_nominal = number_format($total_dana, 0, ',', '.');

$bar = round(($total_dana / $total_harus) * 100);
