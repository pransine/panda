<?php
function computeOperations($param1, $param2, $param3)
{
    $sum = $param1 + $param2 + $param3;
    $difference = $param1 - $param2 - $param3;
    $product = $param1 * $param2 * $param3;
    $quotient = ($param2 === 0 || $param3 === 0) ? 'undefined' : $param1 / $param2 / $param3;

    return [
        'sum' => $sum,
        'difference' => $difference,
        'product' => $product,
        'quotient' => $quotient,
    ];
}

$values = [54, 64, 74];
$result = computeOperations($values[0], $values[1], $values[2]);

echo "<div style='display:flex; justify-content:center; padding:30px 0; background: linear-gradient(180deg, #fff5f8 0%, #fffbea 100%);'>";
echo "<table style='width:360px; border-collapse: separate; border-spacing: 0; background:#fffaf2; border-radius: 20px; box-shadow: 0 16px 40px rgba(255, 179, 191, 0.18); overflow:hidden;'>";
echo "<thead><tr><th colspan='2' style='padding: 18px 20px; font-size:1.05rem; color:#7c3a50; background:#ffe6ed; text-align:left;'>My Parameter values: " . implode(', ', $values) . "</th></tr></thead>";
echo "<tbody>";
echo "<tr style='background:#fff6c8;'><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12);'>Addition</td><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12); text-align:right;'>" . $result['sum'] . "</td></tr>";
echo "<tr style='background:#ffeae6;'><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12);'>Subtraction</td><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12); text-align:right;'>" . $result['difference'] . "</td></tr>";
echo "<tr style='background:#fff6c8;'><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12);'>Multiplication</td><td style='padding:14px 18px; color:#6a3b3f; border-bottom:1px solid rgba(120, 80, 80, 0.12); text-align:right;'>" . $result['product'] . "</td></tr>";
echo "<tr style='background:#ffeae6;'><td style='padding:14px 18px; color:#6a3b3f;'>Division</td><td style='padding:14px 18px; color:#6a3b3f; text-align:right;'>" . $result['quotient'] . "</td></tr>";
echo "</tbody></table></div>";