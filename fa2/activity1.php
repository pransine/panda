<?php
$cm_mm = 1 * 10;
$dm_cm = 1 * 10;
$m_cm = 1 * 100;
$km_m = 1 * 1000;

$ft_in = 1 * 12;
$yd_ft = 1 * 3;
$ch_yd = 1 * 22;
$fur_yd = 1 * 220;
$mi_yd = 1 * 1760;

$mm_in = 1 * 0.03937008;
$cm_in = 1 * 0.3937008;
$m_in = 1 * 39.37008;
$m_ft = 1 * 3.28084;
$m_yd = 1 * 1.09361;
$km_yd = 1 * 1093.6133;
$km_mi = 1 * 0.62137;

$in_cm = 1 * 2.54;
$ft_cm = 1 * 30.48;
$yd_cm = 1 * 91.44;
$yd_m = 1 * 0.9144;
$mi_m = 1 * 1609.344;
$mi_km = 1 * 1.609344;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion Chart</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #111827;
            display: flex;
            justify-content: center;
            padding: 24px;
        }
        .wrapper {
            width: min(1200px, 100%);
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        .page-header .title-group {
            display: flex;
            flex-direction: column;
        }
        .page-header .title-group .top-title {
            font-size: 1.85rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            margin: 0 0 6px;
        }
        .page-header .title-group h1 {
            margin: 0;
            font-size: 1.4rem;
            letter-spacing: 0.04em;
        }
        .logo {
            width: 250px;
            height: 250px;
        }
        .logo img {
         display: block;
          width: 100%;
         height: auto;
        }
        .section {
            background: #ffffff;
            border: 1px solid #000;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .section header {
            background: #ffec3b;
            color: #111827;
            padding: 12px 16px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.95rem;
            text-align: center;
            border-bottom: 1px solid #000;
        }
        .section table {
            width: 100%;
            border-collapse: collapse;
        }
        .section th,
        .section td {
            padding: 10px 12px;
            border: 1px solid #000;
            font-size: 0.95rem;
        }
        .section th {
            background: #f9fafb;
            font-weight: 700;
        }
        .section td {
            text-align: center;
        }
        .section .abbr {
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="page-header">
            <div class="title-group">
                <h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>
            </div>
            <div class="logo">
                <a href="menu.php" title="Back to Main Menu">
                    <img src="smartpanda.png" alt="Panda logo">
                </a>
            </div>
        </div>

        <div class="section">
            <header>Metric Conversions</header>
            <table>
                <tr>
                    <th>1 centimetre</th>
                    <th>=</th>
                    <th>10 millimetres</th>
                    <th class="abbr">1 cm</th>
                    <th>=</th>
                    <th>10 mm</th>
                </tr>
                <tr>
                    <td>1 decimetre</td>
                    <td>=</td>
                    <td>10 centimetres</td>
                    <td class="abbr">1 dm</td>
                    <td>=</td>
                    <td>10 cm</td>
                </tr>
                <tr>
                    <td>1 metre</td>
                    <td>=</td>
                    <td>100 centimetres</td>
                    <td class="abbr">1 m</td>
                    <td>=</td>
                    <td>100 cm</td>
                </tr>
                <tr>
                    <td>1 kilometre</td>
                    <td>=</td>
                    <td>1000 metres</td>
                    <td class="abbr">1 km</td>
                    <td>=</td>
                    <td>1000 m</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <header>Imperial Conversions</header>
            <table>
                <tr>
                    <th>1 foot</th>
                    <th>=</th>
                    <th>12 inches</th>
                    <th class="abbr">1 ft</th>
                    <th>=</th>
                    <th>12 in</th>
                </tr>
                <tr>
                    <td>1 yard</td>
                    <td>=</td>
                    <td>3 feet</td>
                    <td class="abbr">1 yd</td>
                    <td>=</td>
                    <td>3 ft</td>
                </tr>
                <tr>
                    <td>1 chain</td>
                    <td>=</td>
                    <td>22 yards</td>
                    <td class="abbr">1 ch</td>
                    <td>=</td>
                    <td>22 yd</td>
                </tr>
                <tr>
                    <td>1 furlong</td>
                    <td>=</td>
                    <td>220 yards</td>
                    <td class="abbr">1 fur</td>
                    <td>=</td>
                    <td>220 yd (or 10 ch)</td>
                </tr>
                <tr>
                    <td>1 mile</td>
                    <td>=</td>
                    <td>1760 yards</td>
                    <td class="abbr">1 mi</td>
                    <td>=</td>
                    <td>1760 yd (or 8 fur)</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <header>Metric → Imperial Conversions</header>
            <table>
                <tr>
                    <th>1 millimetre</th>
                    <th>=</th>
                    <th><?php echo number_format($mm_in, 5); ?> inches</th>
                    <th class="abbr">1 mm</th>
                    <th>=</th>
                    <th><?php echo number_format($mm_in, 5); ?> in</th>
                </tr>
                <tr>
                    <td>1 centimetre</td>
                    <td>=</td>
                    <td><?php echo number_format($cm_in, 5); ?> inches</td>
                    <td class="abbr">1 cm</td>
                    <td>=</td>
                    <td><?php echo number_format($cm_in, 5); ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td>
                    <td>=</td>
                    <td><?php echo number_format($m_in, 5); ?> inches</td>
                    <td class="abbr">1 m</td>
                    <td>=</td>
                    <td><?php echo number_format($m_in, 5); ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td>
                    <td>=</td>
                    <td><?php echo number_format($m_ft, 5); ?> feet</td>
                    <td class="abbr">1 m</td>
                    <td>=</td>
                    <td><?php echo number_format($m_ft, 5); ?> ft</td>
                </tr>
                <tr>
                    <td>1 metre</td>
                    <td>=</td>
                    <td><?php echo number_format($m_yd, 5); ?> yards</td>
                    <td class="abbr">1 m</td>
                    <td>=</td>
                    <td><?php echo number_format($m_yd, 5); ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td>
                    <td>=</td>
                    <td><?php echo number_format($km_yd, 4); ?> yards</td>
                    <td class="abbr">1 km</td>
                    <td>=</td>
                    <td><?php echo number_format($km_yd, 4); ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td>
                    <td>=</td>
                    <td><?php echo number_format($km_mi, 5); ?> miles</td>
                    <td class="abbr">1 km</td>
                    <td>=</td>
                    <td><?php echo number_format($km_mi, 5); ?> mi</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <header>Imperial → Metric Conversions</header>
            <table>
                <tr>
                    <th>1 inch</th>
                    <th>=</th>
                    <th><?php echo number_format($in_cm, 2); ?> centimetres</th>
                    <th class="abbr">1 in</th>
                    <th>=</th>
                    <th><?php echo number_format($in_cm, 2); ?> cm</th>
                </tr>
                <tr>
                    <td>1 foot</td>
                    <td>=</td>
                    <td><?php echo number_format($ft_cm, 2); ?> centimetres</td>
                    <td class="abbr">1 ft</td>
                    <td>=</td>
                    <td><?php echo number_format($ft_cm, 2); ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td>
                    <td>=</td>
                    <td><?php echo number_format($yd_cm, 2); ?> centimetres</td>
                    <td class="abbr">1 yd</td>
                    <td>=</td>
                    <td><?php echo number_format($yd_cm, 2); ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td>
                    <td>=</td>
                    <td><?php echo number_format($yd_m, 4); ?> metres</td>
                    <td class="abbr">1 yd</td>
                    <td>=</td>
                    <td><?php echo number_format($yd_m, 4); ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td>
                    <td>=</td>
                    <td><?php echo number_format($mi_m, 3); ?> metres</td>
                    <td class="abbr">1 mi</td>
                    <td>=</td>
                    <td><?php echo number_format($mi_m, 3); ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td>
                    <td>=</td>
                    <td><?php echo number_format($mi_km, 6); ?> kilometres</td>
                    <td class="abbr">1 mi</td>
                    <td>=</td>
                    <td><?php echo number_format($mi_km, 6); ?> km</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>