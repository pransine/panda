<?php
$fname = "";
$mi = "";
$lname = "";
$grade = "";
$rank = "-";
$emoji = "🙂";

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fname'] ?? "");
    $mi = trim($_POST['mi'] ?? "");
    $lname = trim($_POST['lname'] ?? "");
    $grade = $_POST['grade'] ?? "";

    if ($grade >= 93 && $grade <= 100) {
        $rank = "A";
        $emoji = "🤩";
    } elseif ($grade >= 90) {
        $rank = "A-";
        $emoji = "😊";
    } elseif ($grade >= 87) {
        $rank = "B+";
        $emoji = "🙂";
    } elseif ($grade >= 83) {
        $rank = "B";
        $emoji = "🙂";
    } elseif ($grade >= 80) {
        $rank = "B-";
        $emoji = "😐";
    } elseif ($grade >= 77) {
        $rank = "C+";
        $emoji = "😐";
    } elseif ($grade >= 73) {
        $rank = "C";
        $emoji = "😕";
    } elseif ($grade >= 70) {
        $rank = "C-";
        $emoji = "😕";
    } elseif ($grade >= 67) {
        $rank = "D+";
        $emoji = "☹️";
    } elseif ($grade >= 63) {
        $rank = "D";
        $emoji = "☹️";
    } elseif ($grade >= 60) {
        $rank = "D-";
        $emoji = "😢";
    } else {
        $rank = "F";
        $emoji = "🤡";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking Program</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at top left, #fff0f6, #f5f3ff 30%, #dbeafe 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            color: #4a3f72;
        }

        .main-box {
            width: min(760px, 100%);
            background: linear-gradient(180deg, rgba(255,255,255,0.95), rgba(249, 250, 255, 0.95));
            border: 1px solid rgba(167, 139, 250, 0.45);
            border-radius: 32px;
            box-shadow: 0 24px 60px rgba(167, 139, 250, 0.18);
            padding: 32px;
            position: relative;
            overflow: hidden;
        }

        .main-box::before {
            content: "";
            position: absolute;
            inset: 16px;
            border-radius: 32px;
            background: radial-gradient(circle at top right, rgba(251, 207, 232, 0.35), transparent 25%),
                        radial-gradient(circle at bottom left, rgba(191, 219, 254, 0.35), transparent 20%);
            z-index: -1;
        }

        .name-box {
            border-radius: 24px;
            background: rgba(248, 226, 255, 0.9);
            border: 2px solid rgba(167, 139, 250, 0.5);
            padding: 22px 24px;
            text-align: center;
            font-size: 1.1rem;
            color: #5b3b8a;
            margin-bottom: 28px;
        }

        .name-box strong {
            display: block;
            margin-top: 8px;
            font-size: 1.6rem;
            letter-spacing: 0.02em;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .box, .picture-box {
            border-radius: 24px;
            border: 2px solid rgba(203, 213, 225, 0.8);
            background: rgba(255,255,255,0.9);
            box-shadow: 0 14px 28px rgba(167, 139, 250, 0.1);
        }

        .box {
            flex: 1 1 140px;
            min-width: 150px;
            min-height: 140px;
            padding: 22px 14px;
            text-align: center;
            color: #4a3f72;
        }

        .box strong {
            display: block;
            margin-top: 12px;
            font-size: 2rem;
            color: #8b5cf6;
        }

        .picture-box {
            width: 200px;
            min-height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            background: linear-gradient(180deg, #f7f3ff 0%, #fff5fb 100%);
            color: #7c3aed;
        }

        .form {
            text-align: center;
        }

        .form form {
            display: grid;
            grid-template-columns: repeat(3, minmax(160px, 1fr));
            gap: 14px;
            justify-items: center;
        }

        .form input[type="text"],
        .form input[type="number"] {
            width: 100%;
            max-width: 220px;
            padding: 14px 16px;
            border: 2px solid rgba(203, 213, 225, 0.9);
            border-radius: 18px;
            background: #faf5ff;
            color: #4a3f72;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .form input[type="text"]:focus,
        .form input[type="number"]:focus {
            border-color: #c084fc;
            transform: translateY(-1px);
        }

        .form button {
            width: 100%;
            max-width: 220px;
            padding: 14px 18px;
            font-size: 1rem;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, #c084fc 0%, #f472b6 100%);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 0 14px 26px rgba(192, 132, 252, 0.24);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 30px rgba(192, 132, 252, 0.28);
        }

        .form input::placeholder {
            color: #a78bfa;
        }

        @media (max-width: 760px) {
            .main-box {
                padding: 26px;
            }
            .content {
                justify-content: center;
            }
            .box, .picture-box {
                width: calc(50% - 12px);
            }
            .picture-box {
                width: 100%;
            }
            .form form {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 520px) {
            .name-box {
                font-size: 1rem;
            }
            .name-box strong {
                font-size: 1.35rem;
            }
            .box, .picture-box {
                width: 100%;
            }
            .picture-box {
                min-height: 140px;
            }
        }
    </style>
</head>
<body>
    <div class="main-box">

        <div class="name-box">
            Name:
            <strong><?php echo htmlspecialchars(trim("$fname $mi. $lname")); ?></strong>
        </div>

        <div class="content">
            <div class="box">
                Rank:
                <strong><?php echo htmlspecialchars($rank); ?></strong>
            </div>

            <div class="box">
                Grade:
                <strong><?php echo htmlspecialchars($grade); ?></strong>
            </div>

            <div class="picture-box">
                <?php echo $emoji; ?>
            </div>
        </div>

        <div class="form">
            <form method="post">
                <input type="text" name="fname" placeholder="First Name" value="<?php echo htmlspecialchars($fname); ?>" required>
                <input type="text" name="mi" placeholder="MI" maxlength="1" value="<?php echo htmlspecialchars($mi); ?>" required>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo htmlspecialchars($lname); ?>" required>
                <input type="number" name="grade" placeholder="Enter Grade" min="0" max="100" value="<?php echo htmlspecialchars($grade); ?>" required>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>