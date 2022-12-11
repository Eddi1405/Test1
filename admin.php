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
        echo "<form class = 'center' action='' method='post'>";
        echo "<table class = 'center'>";
        echo "<tr>";       
        echo "<th>Name</th>";    
        echo "<th>Anzahl</th>";  
        echo "<th>+</th>";       
        echo "</tr>";      
    
        while ($zeile = mysqli_fetch_array($AbfrageAllesOUT)) {
            $Name = $zeile[0];
            $Anz = $zeile[1];
            $Nr = $zeile[2];
        
            echo "<tr>";
            echo "<td>$Name</td>";
            echo "<td>$Anz</td>";
            echo "<td><input type='radio' name='Nr' value=$Nr></input></td>";  
            echo "</tr>";
        }
         
        echo "</table>";
        echo "<input type='submit' name='Reset' value=Reset></input>";
        echo "<input type='Text' name='Name' value=></input>";
        echo "<input type='submit' name='Add' value=Hinzufügen></input>";
        echo "<input type='submit' name='Del' value=Löschen></input>";
        echo "</form>";


        if (!empty($_POST["Reset"]) && !empty($_POST["Nr"])) {
            $nr1 = $_POST["Nr"];
            $UpdateReset = "UPDATE `Getränke` SET `Anzahl`= 0 WHERE `NR` LIKE $nr1";
            mysqli_query($verbindung,$UpdateReset);
            header("Refresh:0");
        }

        if (!empty($_POST["Add"]) && !empty($_POST["Name"])) {
            $Name1 = $_POST["Name"];
            echo $Name1;    
            $UpdateAdd = "INSERT INTO `Getränke` (`Name`, `Anzahl`, `NR`) VALUES ('$Name1', '0', NULL)";
            mysqli_query($verbindung,$UpdateAdd);
            header("Refresh:0");
        }

        if (!empty($_POST["Del"]) && !empty($_POST["Nr"])) {
            $nr1 = $_POST["Nr"];
            $UpdateDel = "DELETE FROM Getränke WHERE `Getränke`.`NR` = $nr1";
            mysqli_query($verbindung,$UpdateDel);
            header("Refresh:0");
        }
        

        ?>
    </body>
</html>