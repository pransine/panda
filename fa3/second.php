<?php
$numbers = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19);

$sum = 0;
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
    $product *= $numbers[$i];
    if ($i > 0) {
        $difference -= $numbers[$i];
        $quotient /= $numbers[$i];
    }
}

echo "<table style='margin: 40px auto; border-collapse: separate; border-spacing: 0; background-color: #fff8f5; border-radius: 18px; overflow: hidden; box-shadow: 0 10px 24px rgba(255, 192, 203, 0.18);'>";
echo "<tr><th colspan='2' style='padding: 18px 22px; background-color: #ffe7f0; color: #5f3244; font-size: 1.05em; font-weight: 600; text-align: left;'>Array list: " . implode(", ", $numbers) . "</th></tr>";
echo "<tr style='background-color: #fff7d9;'><td style='padding: 14px 18px; border-bottom: 1px solid #fde7c2;'>Addition</td><td style='padding: 14px 18px; border-bottom: 1px solid #fde7c2;'>$sum</td></tr>";
echo "<tr style='background-color: #fff1e9;'><td style='padding: 14px 18px; border-bottom: 1px solid #fcd9d4;'>Subtraction</td><td style='padding: 14px 18px; border-bottom: 1px solid #fcd9d4;'>$difference</td></tr>";
echo "<tr style='background-color: #fff7d9;'><td style='padding: 14px 18px; border-bottom: 1px solid #fde7c2;'>Multiplication</td><td style='padding: 14px 18px; border-bottom: 1px solid #fde7c2;'>$product</td></tr>";
echo "<tr style='background-color: #fff1e9;'><td style='padding: 14px 18px;'>Division</td><td style='padding: 14px 18px;'>$quotient</td></tr>";
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Computation</title>
</head>
</html>