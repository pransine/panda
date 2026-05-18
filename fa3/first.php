<?php
$people = [
    [
        "name" => "Finn",
        "image" => "http://localhost/panda/fa3/finn.png",
        "age" => 19,
        "birthday" => "March 14, 2011",
        "contact" => "09123456781"
    ],
    [
        "name" => "Jake",
        "image" => "http://localhost/panda/fa3/jake.png",
        "age" => 28,
        "birthday" => "April 14, 1999",
        "contact" => "09123456782"
    ],
    [
        "name" => "Princess Bubblegum",
        "image" => "http://localhost/panda/fa3/pb.png",
        "age" => 20,
        "birthday" => "October 16, 2010",
        "contact" => "09123456783"
    ],
    [
        "name" => "Flame Princess",
        "image" => "http://localhost/panda/fa3/flame.jpg",
        "age" => 18,
        "birthday" => "March 21, 2007",
        "contact" => "09123456784"
    ],
    [
        "name" => "Marceline",
        "image" => "http://localhost/panda/fa3/marcy.jpg",
        "age" => 1000,
        "birthday" => "June 27, 1784",
        "contact" => "09123456785"
    ],
    [
        "name" => "Ice King",
        "image" => "http://localhost/panda/fa3/Ice_King.png",
        "age" => 1043,
        "birthday" => "March 15, 1648",
        "contact" => "09123456786"
    ],
    [
        "name" => "BMO",
        "image" => "http://localhost/panda/fa3/bmo.jpg",
        "age" => 23,
        "birthday" => "April 05, 1993",
        "contact" => "09123456787"
    ],
    [
        "name" => "Lady Unicorn",
        "image" => "http://localhost/panda/fa3/lady.jpg",
        "age" => 20,
        "birthday" => "November 30, 2004",
        "contact" => "09123456788"
    ],
    [
        "name" => "Gunter",
        "image" => "http://localhost/panda/fa3/gunter.jpg",
        "age" => 18,
        "birthday" => "June 11, 2006",
        "contact" => "09123456789"
    ],
    [
        "name" => "Lich",
        "image" => "http://localhost/panda/fa3/litch.jpg",
        "age" => 21,
        "birthday" => "January 01, 1900",
        "contact" => "09123456790"
    ]

];

usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Time Data</title>
    <style>
        body{
            font-family: Times;
            background: linear-gradient(to right, #ffd6e8, #d6f0ff);
            margin: 0;
            padding: 30px;
        }
        h1{
            text-align: center;
            color: #ff69b4;
            margin-bottom: 20px;
        }
        .table-container{
            width: 95%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        table{
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }
        th{
            background-color: #ffb6c1;
            color: white;
            padding: 15px;
            font-size: 18px;
        }
        td{

            text-align: center;
            padding: 15px;
            background-color: #fff0f5;
            border-bottom: 2px solid #ffe4ec;
        }
        tr:hover td{
            background-color: #ffe4f2;
            transition: 0.3s;

        }
        img{

            width: 90px;
            height: 90px;
            border-radius: 25%;
            border: 2px solid #ffb6c1;
        }
        .cute-btn{
            background-color: #cdb4db;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 15px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }
        .cute-btn:hover{
            background-color: #b392d3;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <h1>🌸 Adventure Time Data 🌸</h1>
    <div class="table-container">
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Contact Number</th>
            </tr>
            <?php
            $count = 1;
            foreach($people as $person){
                echo "<tr>";
                echo "<td>".$count++."</td>";
                echo "<td>".$person['name']."</td>";
                echo "<td><img src='".$person['image']."' alt='Profile'></td>";
                echo "<td>".$person['age']."</td>";
                echo "<td>".$person['birthday']."</td>";
                echo "<td>".$person['contact']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>