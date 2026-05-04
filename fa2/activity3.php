<?php
$combinations = array();

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $combinations[] = str_pad($i, 1, '0', STR_PAD_LEFT) . str_pad($j, 1, '0', STR_PAD_LEFT);
    }
}

$output = implode(', ', $combinations) . ',';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal Combinations</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fce7f3 0%, #e9d5ff 50%, #dbeafe 100%);
            color: #6b5b95;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px;
        }
        .wrapper {
            width: min(900px, 100%);
        }
        .card {
            background: linear-gradient(135deg, #fef3f8 0%, #faf5ff 100%);
            border: 2px solid #f5d0f0;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(219, 112, 147, 0.15);
        }
        .card h1 {
            margin: 0 0 24px 0;
            text-align: center;
            font-size: 2.5rem;
            color: #c084fc;
            letter-spacing: 1px;
        }
        .description {
            background: linear-gradient(135deg, #fef3c7 0%, #fce7f3 100%);
            border-left: 5px solid #f59e0b;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 24px;
            font-size: 0.95rem;
            color: #92400e;
            line-height: 1.6;
        }
        .output-section {
            margin-top: 24px;
        }
        .output-label {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 12px;
            color: #a855f7;
        }
        .output-box {
            background: linear-gradient(135deg, #f3e8ff 0%, #fce7f3 100%);
            border: 2px solid #e9d5ff;
            border-radius: 16px;
            padding: 16px;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            color: #7c3aed;
            line-height: 1.6;
            word-wrap: break-word;
            white-space: pre-wrap;
            max-height: 300px;
            overflow-y: auto;
        }
        .output-box::-webkit-scrollbar {
            width: 8px;
        }
        .output-box::-webkit-scrollbar-track {
            background: #f3e8ff;
            border-radius: 10px;
        }
        .output-box::-webkit-scrollbar-thumb {
            background: #d8b4fe;
            border-radius: 10px;
        }
        .output-box::-webkit-scrollbar-thumb:hover {
            background: #c084fc;
        }
        .stats {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #f97316 100%);
            border: none;
            border-radius: 20px;
            padding: 24px;
            margin-top: 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
        }
        .stat-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 16px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .stat-label {
            font-size: 0.85rem;
            color: #d97706;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: #f59e0b;
        }
        .back-button {
            margin-top: 32px;
            text-align: center;
        }
        .btn-back {
            background: linear-gradient(135deg, #a78bfa 0%, #c084fc 100%);
            color: #fff;
            text-decoration: none;
            display: inline-block;
            padding: 14px 32px;
            border-radius: 16px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(168, 85, 247, 0.3);
            letter-spacing: 0.5px;
        }
        .btn-back:hover {
            background: linear-gradient(135deg, #c084fc 0%, #e879f9 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(168, 85, 247, 0.4);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <h1>Decimal Combinations</h1>
            
            <div class="description">
                This program generates all potential combinations of two-digit decimal numbers (00-99) using nested looping statements and displays them in a comma-delimited format.s and displays them in a comma-delimited format.
            </div>

            <div class="output-section">
                <div class="output-label">All Two-Digit Decimal Combinations:</div>
                <div class="output-box"><?php echo htmlspecialchars($output); ?></div>
            </div>

            <div class="stats">
                <div class="stat-item">
                    <div class="stat-label">Total Combinations</div>
                    <div class="stat-value"><?php echo count($combinations); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Range</div>
                    <div class="stat-value">00-99</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Format</div>
                    <div class="stat-value">Delimited</div>
                </div>
            </div>

            <div class="back-button">
                <a href="menu.php" class="btn-back">Back to Menu</a>
            </div>
        </div>
    </div>
</body>
</html>