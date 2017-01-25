<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
            $id = htmlspecialchars($_GET["id"]);
            $pname = htmlspecialchars($_GET["pname"]);
            $lehrer = htmlspecialchars($_GET["lehrer"]);
            $tmax = htmlspecialchars($_GET["tmax"]);
        
            if($id>0 && strlen($pname)>2) 
            {
                $sql = "UPDATE projects SET pname='$pname' WHERE id='$id';";
                $update = mysqli_query($db_link, $sql);
                echo "<p>Projektnamen aktualisiert</p>";
            }
            else
            {
                echo "<p>Projektnamen beibehalten</p>";
            }
        
            if($id>0 && strlen($lehrer)>2) 
            {
                $sql = "UPDATE projects SET lehrer='$lehrer' WHERE id='$id';";
                $update = mysqli_query($db_link, $sql);
                echo "<p>Lehrer aktualisiert</p>";
            }
            else
            {
                echo "<p>Lehrer beibehalten</p>";
            }
        
            if($id>0 & $tmax>0) 
            {
                $sql = "UPDATE projects SET tmax='$tmax' WHERE id='$id';";
                $update = mysqli_query($db_link, $sql);
                echo "<p>Maximale Teilnehmerzahl aktualisiert";
            }
            else
            {
                echo "<p>Maximale Teilnehmerzahl beibehalten</p>";
            }
        
            echo '<p> <a href="dbedit.php">Zurück</a> </p>';
        ?>
    </body>
</html>

<!-- pitcodec -->