<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f5fb;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            text-align: center;
            background: #fff;
            border-radius: 76px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
            padding: 40px 32px;
            width: min(420px, 90%);
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 24px;
            letter-spacing: 1px;
        }
        .menu-link {
            display: inline-block;
            margin: 10px 0;
            padding: 14px 22px;
            width: 100%;
            max-width: 280px;
            text-decoration: none;
            color: #fff;
            background: #3b82f6;
            border-radius: 10px;
            transition: background 0.2s ease;
        }
        .menu-link:hover {
            background: #2563eb;
            transform: scale(110%);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>MAIN MENU</h1>
        <a class="menu-link" href="activity1.php">Measure Conversion Chart</a><br>
        <a class="menu-link" href="activity2.php">Grade Ranking Program</a><br>
        <a class="menu-link" href="activity3.php">Decimal Combinations</a>
    </div>
</body>
</html>