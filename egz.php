<?php
    $conn = new mysqli("localhost","root","","base");
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dane o zwierzętach</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <header>
            <h1>ATLAS ZWIERZĄT</h1>
        </header>

        <main>
            <h2>Gromady</h2>
            <ol>
                <li>Ryby</li>
                <li>Płazy</li>
                <li>Gady</li>
                <li>Ptaki</li>
                <li>Ssaki</li>
            </ol>
            <form action="egz.php" method="post">
                <label for="gromada">Wybierz gromadę: </label> 
                <input type="number" name="gromada" id="gromada"> 
                <button type="submit" id="wyswietl" id="wyswietl">Wyświetl</button>
            </form>
        </main>

        <div id="lewy">
            <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
        </div>

        <div id="srodek">
        <?php
            if(isset($_POST["gromada"])) {
	                    $gomada = $_POST["gromada"];

	                    if($gomada == 1) {
	                        echo "<h2>RYBY</h2>";
	                    }
	                    else if ($gomada == 2) {
	                        echo "<h2>PŁAZY</h2>";
	                    }
	                    else if ($gomada == 3) {
	                        echo "<h2>GADY</h2>";
	                    }
	                    else if ($gomada == 4) {
	                        echo "<h2>PTAKI</h2>";
	                    }
	                    else if ($gomada == 5) {
	                        echo "<h2>SSAKI</h2>";
                        }	                    
	                    $sql = "SELECT gatunek, wystepowanie FROM zwierzeta, gromady WHERE zwierzeta.Gromady_id = gromady.id AND gromady.id = $gomada;";
	                    $result = $conn->query(query: $sql);
	    
	                    while($row = $result -> fetch_array()) {
	                        echo $row["gatunek"].", ".$row["wystepowanie"]."<br>";
	                    }
                    }
        ?> 
        </div>

        <div id="prawy">
            <h2>Wszystkie zwierzęta w bazie</h2>
           <?php
	                $sql = "SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta, gromady WHERE zwierzeta.Gromady_id = gromady.id;";
	                $result = $conn->query(query: $sql);
	
	                while($row = $result -> fetch_array()) {
	                    echo $row[0].". ".$row[1]." ".$row[2]."<br>";
                }
	            ?>
        </div>

    </body>
</html>

<?php
    $conn -> close();
?>