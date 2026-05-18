<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table - Chessboard Style</title>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 24px;
            color: #ffffff;
            font-family: Times;
        }
        body {
            font-family: Times;
            background-color: #4b0000;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 100%;
            overflow-x: auto;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #c09c9c;
            min-width: 60px;
        }
        .red {
            background-color: #800000;
            color: white;
        }
        .black {
            background-color: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Multiplication Table</h1>
        <table>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    $product = $i * $j;
                    $class = ($i + $j) % 2 == 0 ? 'red' : 'black';
                    echo "<td class='$class'>$product</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>