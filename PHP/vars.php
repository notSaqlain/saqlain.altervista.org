<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('./img/image.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        h1 {
            color: #ffffff;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 8px;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.3);
        }
        th, td {
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 8px;
            text-align: left;
            color: #f0f0f0;
        }
        th {
            background-color: rgba(0, 0, 139, 0.8);
            color: white;
        }
        tr:hover {
            background-color: rgba(75, 0, 130, 0.2);
        }
    </style>
</head>
<body>
    <h1>Server Variables</h1>
    <table>
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
<?php
	foreach ( $_SERVER as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
?>
        </tbody>
    </table>
</body>
</html>
