<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>QR 30x30</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: #fafafa;
    text-align: center;
    margin: 40px 0;
  }
  h1 {
    margin-bottom: 20px;
    font-weight: normal;
    color: #333;
  }
  table {
    border-collapse: collapse;
    margin: 0 auto;
    box-shadow: 0 0 8px black;
  }
  td {
    width: 15px;
    height: 15px;
    padding: 0;
    border: 1px solid #eee;
  }
</style>
</head>
<body>

<h1>LOSOWY QR CODE</h1>

<table>
<?php
for ($i=0; $i<30; $i++) {
    echo "<tr>";
    for ($j=0; $j<30; $j++) {
        $color = rand(0,1) ? 'black' : 'white';
        echo "<td style='background-color:$color'></td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
