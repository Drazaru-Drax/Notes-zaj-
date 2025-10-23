<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    
</body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kadra";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Stanowisko ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Pensja</th>
            <th>Staż</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["stanowiska_id"] . "</td>";
        echo "<td>" . $row["imie"] . "</td>";
        echo "<td>" . $row["nazwisko"] . "</td>";
        echo "<td>" . $row["pensja"] . "</td>";
        echo "<td>" . $row["staz"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Brak danych w tabeli.";
}

mysqli_close($conn);
?>
</html>
