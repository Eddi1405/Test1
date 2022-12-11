<html>
    <head>
        <link rel="stylesheet" href="test.css">
    </head>
    <body>
        <?php
    $verbindung=mysqli_connect("127.0.0.1","root","","test1");

        $AbfrageAlles = "SELECT * FROM `Getränke` ORDER BY `Nr` ASC;";

        $AbfrageAllesOUT = mysqli_query($verbindung,$AbfrageAlles);

        echo mysqli_error($verbindung);

        $Name = array();
        $Anz = array();
        $button = 0;

        $i = 0;
        echo "<form action='' method='post'>";
        echo "<table class='center'>";
        echo "<tr>";       
        echo "<th>Name</th>";    
        echo "<th>Anzahl</th>";  
        echo "<th>+</th>";       
        echo "</tr>";      
    
        while ($zeile = mysqli_fetch_array($AbfrageAllesOUT)) {
            $Name = $zeile[0];
            $Anz = $zeile[1];
            $i++;
            echo "<tr>";
            echo "<td>$Name</td>";
            echo "<td>$Anz</td>";
            echo "<td><input type='radio' name='Test' value=$i></input></td>";  
            echo "</tr>";
        }

        echo"</table>";
        echo "</form>";
        $new = $_POST["Test"]; 
        if(!empty($new)){
            $UpdateADD = "UPDATE `Getränke` SET `Anzahl`= Anzahl+1 WHERE `NR` LIKE $new;";
            mysqli_query($verbindung,$UpdateADD);
            $new = nulL;
            header("Refresh:0");
        }



        
        ?>
    </body>
</html>